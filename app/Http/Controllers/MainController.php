<?php

namespace App\Http\Controllers;

use App\Age_info;
use App\Blog;
use App\City;
use App\Country;
use App\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return\Illuminate\Http\Response
     */
    public function index()
    {
        $FACILITIES = Facility::all();
        $positions = [];
        for ($i = 0; $i < count($FACILITIES); $i++) {
            $positions[] = ['positions' => $FACILITIES[$i]['gps_location'], 'name' => $FACILITIES[$i]['name'], 'id' => $FACILITIES[$i]['id']];
        }
        return view('pages/index', ['positions' => json_encode($positions)]);
    }

    public function pools()
    {
        return view('pages/facilities_list', ['facilities' => Facility::with('pool.feature', 'pool.diving', 'change_room', 'waterslide', 'city')->get()]);
    }

    public function blog_more($id)
    {

        return view('pages/blog_more', ['blog' => Blog::find($id)]);

    }

    public function search(Request $request)
    {
        $FACILITIES = Facility::all();
        $positions = [];
        for ($i = 0; $i < count($FACILITIES); $i++) {
            $positions[] = ['positions' => $FACILITIES[$i]['gps_location'], 'name' => $FACILITIES[$i]['name'], 'id' => $FACILITIES[$i]['id']];
        }

        $sort = $request->input('sort');
        $hotel = $request->input('hotel');
        if (!isset($hotel)) {
            $hotel = [1, 2];
        }
        $searchValue = $request->input('searchValue');
        if (isset($sort)) {
            $result = Facility::join('cities', 'cities.id', '=', 'facilities.city_id')
                ->join('age_infos', 'facilities.age_info_id', '=', 'age_infos.id')
                ->select('facilities.*', 'cities.name as cityName', DB::raw('SUM(adult_price + youth_price + child_price + infant_price + senior_price) as sum_of_price'))->groupBy('id')
                ->where(function ($query) use ($hotel, $searchValue) {
                    $query->where('facilities.name', 'LIKE', '%' . $searchValue . '%')
                        ->whereIn('facilities.hotel', $hotel);
                })
                ->orWhere(function ($query) use ($hotel, $searchValue) {
                    $query->where('cities.name', 'LIKE', '%' . $searchValue . '%')
                        ->whereIn('facilities.hotel', $hotel);
                })
                ->with('change_room', 'waterslide', 'city')
                ->orderByDesc($sort)->get();
        } else {
            $result = Facility::join('cities', 'cities.id', '=', 'facilities.city_id')
                ->select('facilities.*', 'cities.name as cityName')
                ->where(function ($query) use ($hotel, $searchValue) {
                    $query->where('facilities.name', 'LIKE', '%' . $searchValue . '%')
                        ->whereIn('facilities.hotel', $hotel);
                })
                ->orWhere(function ($query) use ($hotel, $searchValue) {
                    $query->where('cities.name', 'LIKE', '%' . $searchValue . '%')
                        ->whereIn('facilities.hotel', $hotel);
                })
                ->with('pool.feature', 'pool.diving', 'change_room', 'waterslide', 'city')
                ->get();
        }


        return view('pages/facilities_list', ['facilities' => $result, 'searchValue' => $searchValue, 'hotel' => $hotel, 'positions' => json_encode($positions)]);

    }

    public
    function search_nearby(Request $request)
    {
        $req = json_decode($request->input('positions'));
        $lat = $req->lat;
        $lng = $req->lng;

        $result = DB::select('SELECT facilities.id, SQRT(
        POW(69.1 * (json_extract(gps_location,"$.lat") -(' . $lat . ')), 2) +
        POW(69.1 * ((' . $lng . ') - json_extract(gps_location,"$.lng")) * COS(json_extract(gps_location,"$.lat") / 57.3), 2)) AS distance
FROM facilities HAVING distance < 25 ORDER BY distance');

        $idsOfFacilities = array_column($result, 'id');
        $hotel = [1, 2];
        $finalResult = Facility::join('cities', 'cities.id', '=', 'facilities.city_id')
            ->select('facilities.*', 'cities.name as cityName')
            ->whereIn('facilities.id', $idsOfFacilities)
            ->with('pool.feature', 'pool.diving', 'change_room', 'waterslide', 'city')
            ->with(['pool' => function ($query) use ($hotel) {
                $query->whereIn('hotel', $hotel);
            }])
            ->get();

        return view('pages/facilities_list', ['facilities' => $finalResult, 'searchValue' => '', 'hotel' => $hotel]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return\Illuminate\Http\Response
     */
    public
    function create()
    {
        return view('Facility/create', ['countries' => Country::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'operator' => 'string|max:255',
            'address' => 'string|max:255',
            'phone_number' => 'string|max:255',
        ]);
        $facility = new Facility;
        $facility->name = $request->input('name');
        $facility->operator = $request->input('operator');
        $facility->address = $request->input('address');
        $facility->phone_number = $request->input('phone_number');
        $facility->gps_location = $request->input('gps_location');
        $facility->website = $request->input('website');
        $facility->other_comments = $request->input('other_comments');
//checkBox
        $facility->day_available = $request->input('day_available') ? 1 : 0;
        $facility->fitness_area = $request->input('fitness_area') ? 1 : 0;
        $facility->other_multi_recreation = $request->input('other_multi_recreation') ? 1 : 0;
        $facility->babysitting = $request->input('babysitting') ? 1 : 0;
        $facility->swim_diapers = $request->input('swim_diapers') ? 1 : 0;
        $facility->swim_program = $request->input('swim_program') ? 1 : 0;
        $facility->viewing_area = $request->input('viewing_area') ? 1 : 0;
//select
        $facility->city_id = $request->input('city_id');

        $age_info = new Age_info;
        $age_info->adult_price = $request->input('adult_price');
        $age_info->adult_age_qualifier = $request->input('adult_age_qualifier');
        $age_info->youth_price = $request->input('youth_price');
        $age_info->youth_age_qualifier = $request->input('youth_age_qualifier');
        $age_info->child_price = $request->input('child_price');
        $age_info->child_age_qualifier = $request->input('child_age_qualifier');
        $age_info->infant_price = $request->input('infant_price');
        $age_info->infant_age_qualifier = $request->input('infant_age_qualifier');
        $age_info->senior_price = $request->input('senior_price');
        $age_info->senior_age_qualifier = $request->input('senior_age_qualifier');
        $age_info->family_price = $request->input('family_price');
        $age_info->max_in_family = $request->input('max_in_family');
        $age_info->pricing_notes = $request->input('pricing_notes');
        $age_info->save();

        $facility->age_info()->associate($age_info);
        $facility->save();
        $facility->change_room()->attach($request->input('change_room'));
        $facility->food()->attach($request->input('food'));

        return redirect('/')->with('info', 'Facility saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return\Illuminate\Http\Response
     */
    public
    function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
    {
        $facility = Facility::with('age_info', 'change_room', 'food')->with('city.state')->find($id);
        return view('Facility/update', ['facility' => $facility, 'countries' => Country::all(), 'selectedCountry' => $facility->city->state->country_id, 'state' => $facility->city->state->id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param\Illuminate\Http\Request $request
     * @paramint $id
     * @return\Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'operator' => 'string|max:255',
            'address' => 'string|max:255',
            'phone_number' => 'string|max:255',
        ]);

        $facility = Facility::with('age_info')->find($id);
        $facilityData = array(
            'name' => $request->input('name'),
            'operator' => $request->input('operator'),
            'address' => $request->input('address'),
            'phone_number' => $request->input('phone_number'),
            'gps_location' => $request->input('gps_location'),
            'website' => $request->input('website'),
            'other_comments' => $request->input('other_comments'),
            'day_available' => $request->input('day_available') == 'on' ? 1 : 0,
            'fitness_area' => $request->input('fitness_area') == 'on' ? 1 : 0,
            'other_multi_recreation' => $request->input('other_multi_recreation') == 'on' ? 1 : 0,
            'babysitting' => $request->input('babysitting') == 'on' ? 1 : 0,
            'swim_diapers' => $request->input('swim_diapers') == 'on' ? 1 : 0,
            'swim_program' => $request->input('swim_program') == 'on' ? 1 : 0,
            'viewing_area' => $request->input('viewing_area') == 'on' ? 1 : 0,
            'city_id' => $request->input('city_id'),
        );
        $facility->update($facilityData);

        $ageInfoData = array(
            'adult_price' => $request->input('adult_price'),
            'adult_age_qualifier' => $request->input('adult_age_qualifier'),
            'youth_price' => $request->input('youth_price'),
            'youth_age_qualifier' => $request->input('youth_age_qualifier'),
            'child_price' => $request->input('child_price'),
            'child_age_qualifier' => $request->input('child_age_qualifier'),
            'infant_price' => $request->input('infant_price'),
            'infant_age_qualifier' => $request->input('infant_age_qualifier'),
            'senior_price' => $request->input('senior_price'),
            'senior_age_qualifier' => $request->input('senior_age_qualifier'),
            'family_price' => $request->input('family_price'),
            'max_in_family' => $request->input('max_in_family'),
            'pricing_notes' => $request->input('pricing_notes'),
        );
        $facility->age_info()->update($ageInfoData);
        $facility->change_room()->detach();
        $facility->change_room()->attach($request->input('change_room'));
        $facility->food()->detach();
        $facility->food()->attach($request->input('food'));

        return redirect('/')->with('info', 'Facility saved successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function delete($id)
    {
        $facility = Facility::find($id);
        $facility->change_room()->detach();
        $facility->food()->detach();
        $facility->delete();
        return redirect('/')->with('info', 'Facility deleted!');
    }
}
