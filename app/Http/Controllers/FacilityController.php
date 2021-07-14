<?php

namespace App\Http\Controllers;

use App\Age_info;
use App\Country;
use App\Facility;
use App\Facility_photo;
use App\Pool;
use App\Waterslide;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;


class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return\Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = Facility::all();
        return view('Facility/list', ['facilities' => $facilities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return\Illuminate\Http\Response
     */
    public function create()
    {
        return view('Facility/create', ['countries' => Country::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'operator' => 'string|max:255',
            'address' => 'string|max:255',
            'phone_number' => 'string|max:255',
        ]);
        $count = 0;
        $imageName1 = '';
        if ($request->file('many_photos')) {
            $count = count($request->file('many_photos'));
        }
        $json = [];
        if ($request->file('main_photo')) {
            $imageName1 = time() . '.' . $request->file('main_photo')->getClientOriginalExtension();
            $request->file('main_photo')->move(public_path('img'), $imageName1);
        }
        $facility = new Facility;
        $facility->name = $request->input('name');
        $facility->main_photo = $imageName1 ? $imageName1 : '';
        $facility->many_photos = json_encode($json);
        $facility->operator = $request->input('operator');
        $facility->address = $request->input('address');
        $facility->phone_number = $request->input('phone_number');
        $facility->gps_location = $request->input('gps_location');
        $facility->website = $request->input('website');
        $facility->other_comments = $request->input('other_comments');
        $facility->family_friendly = $request->input('family_friendly');
        $facility->party_atmosphere = $request->input('party_atmosphere');
        $facility->relaxation = $request->input('relaxation');
        $facility->accessibility = $request->input('accessibility');
        $facility->hotel = $request->input('hotel');

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
        $age_info->adult_age_min = $request->input('adult_age_min');
        $age_info->adult_age_max = $request->input('adult_age_max');
        $age_info->youth_price = $request->input('youth_price');
        $age_info->youth_age_min = $request->input('youth_age_min');
        $age_info->youth_age_max = $request->input('youth_age_max');
        $age_info->child_price = $request->input('child_price');
        $age_info->child_age_min = $request->input('child_age_min');
        $age_info->child_age_max = $request->input('child_age_max');
        $age_info->infant_price = $request->input('infant_price');
        $age_info->infant_age_min = $request->input('infant_age_min');
        $age_info->infant_age_max = $request->input('infant_age_max');
        $age_info->senior_price = $request->input('senior_price');
        $age_info->senior_age_min = $request->input('senior_age_min');
        $age_info->senior_age_max = $request->input('senior_age_max');
        $age_info->family_price = $request->input('family_price');
        $age_info->max_in_family = $request->input('max_in_family');
        $age_info->pricing_notes = $request->input('pricing_notes');
        $age_info->save();
        $facility->age_info()->associate($age_info);
        $facility->save();

        for ($x = 0; $x < $count; $x++) {
            $photo = ($request->file('many_photos')[$x]);
            $imageName = $x . STR::random(10) . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('img'), $imageName);
            $Facility_photo = new Facility_photo();
            $Facility_photo->url = $imageName;
            $facility->facility_photo()->save($Facility_photo);
        };

        $facility->change_room()->attach($request->input('change_room'));
        $facility->food()->attach($request->input('food'));

        return redirect('/admin/')->with('info', 'Facility saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return\Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'operator' => 'string|max:255',
            'address' => 'string|max:255',
            'phone_number' => 'string|max:255',
        ]);

        $facility = Facility::with('age_info')->find($id);
        $path = 'img/' . $facility->main_photo;

        $facilityData = array(
            'name' => $request->input('name'),
            'hotel' => $request->input('hotel'),
            'operator' => $request->input('operator'),
            'address' => $request->input('address'),
            'phone_number' => $request->input('phone_number'),
            'gps_location' => $request->input('gps_location'),
            'website' => $request->input('website'),
            'other_comments' => $request->input('other_comments'),
            'family_friendly' => $request->input('family_friendly'),
            'party_atmosphere' => $request->input('party_atmosphere'),
            'relaxation' => $request->input('relaxation'),
            'accessibility' => $request->input('accessibility'),
            'day_available' => $request->input('day_available') == 'on' ? 1 : 0,
            'fitness_area' => $request->input('fitness_area') == 'on' ? 1 : 0,
            'other_multi_recreation' => $request->input('other_multi_recreation') == 'on' ? 1 : 0,
            'babysitting' => $request->input('babysitting') == 'on' ? 1 : 0,
            'swim_diapers' => $request->input('swim_diapers') == 'on' ? 1 : 0,
            'swim_program' => $request->input('swim_program') == 'on' ? 1 : 0,
            'viewing_area' => $request->input('viewing_area') == 'on' ? 1 : 0,
            'city_id' => $request->input('city_id'),
        );

        if ($request->file('main_photo')) {
            $oldImage = public_path($path);
            File::delete($oldImage);
            $imageName = time() . '.' . $request->file('main_photo')->getClientOriginalExtension();
            $request->file('main_photo')->move(public_path('img'), $imageName);
            $facilityData['main_photo'] = $imageName;
        }
        $count = 0;
        if ($request->file('many_photos')) {
            $count = count($request->file('many_photos'));
        }
        for ($x = 0; $x < $count; $x++) {
            $photo = ($request->file('many_photos')[$x]);
            $imageName = $x . STR::random(10) . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('img'), $imageName);
            $Facility_photo = new Facility_photo();
            $Facility_photo->url = $imageName;
            $facility->facility_photo()->save($Facility_photo);
        };

        $facility->update($facilityData);

        $ageInfoData = array(
            'adult_price' => $request->input('adult_price'),
            'adult_age_min' => $request->input('adult_age_min'),
            'adult_age_max' => $request->input('adult_age_max'),
            'youth_price' => $request->input('youth_price'),
            'youth_age_min' => $request->input('youth_age_min'),
            'youth_age_max' => $request->input('youth_age_max'),
            'child_price' => $request->input('child_price'),
            'child_age_min' => $request->input('child_age_min'),
            'child_age_max' => $request->input('child_age_max'),
            'infant_price' => $request->input('infant_price'),
            'infant_age_min' => $request->input('infant_age_min'),
            'infant_age_max' => $request->input('infant_age_max'),
            'senior_price' => $request->input('senior_price'),
            'senior_age_min' => $request->input('senior_age_min'),
            'senior_age_max' => $request->input('senior_age_max'),
            'family_price' => $request->input('family_price'),
            'max_in_family' => $request->input('max_in_family'),
            'pricing_notes' => $request->input('pricing_notes'),
        );
        $facility->age_info()->update($ageInfoData);
        $facility->change_room()->detach();
        $facility->change_room()->attach($request->input('change_room'));
        $facility->food()->detach();
        $facility->food()->attach($request->input('food'));

        return redirect('/admin/')->with('info', 'Facility saved successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $facility = Facility::find($id);
        $facility->change_room()->detach();
        $facility->food()->detach();
        $pool = Facility_photo::where('facility_id', $id)->delete();
        $pool = Pool::where('facility_id', $id)->delete();
        $waterslide = Waterslide::where('facility_id', $id)->delete();
        $facility->delete();
        return redirect('/admin/')->with('info', 'Facility deleted!');
    }

    public function deletePhoto($id)
    {
        $photo = Facility_photo::find($id);

        $path = '/img/' . $photo->url;
        $oldImage = public_path($path);
        File::delete($oldImage);
        $photo->delete();
        return 'true';
    }

    public function showDetails($id)
    {
        return view('pages/facility_single', ['facility' => Facility::with('pool.feature', 'waterslide')->find($id)]);
    }


}
