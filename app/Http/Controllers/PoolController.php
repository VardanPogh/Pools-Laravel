<?php

namespace App\Http\Controllers;

use App\Diving;
use App\Pool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class PoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pools = Pool::with('facility')->get();
        return view('Pool/list', ['pools' => $pools]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pool/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = 0;
        $imageName1 = '';
//        if ($request->file('main_photo')) {
//            $imageName1 = time() . '.' . $request->file('main_photo')->getClientOriginalExtension();
//            $request->file('main_photo')->move(public_path('img'), $imageName1);
//        }

//        for ($x = 0; $x < $count; $x++) {
//            $photo = ($request->file('many_photos')[$x]);
//            $imageName = $x . $photo->getClientOriginalName() . STR::random(10) . '.' . $photo->getClientOriginalExtension();
//            $photo->move(public_path('img'), $imageName);
//            $json[] = $imageName;
//        };


        $pool = new Pool;
//        $pool->main_photo = $imageName1 ? $imageName1 : '';
//        $pool->many_photos = json_encode($json);
        $pool->facility_id = $request->input('facility_id');
        $pool->description = $request->input('description');
        $pool->details = $request->input('details');
        $pool->entry = $request->input('entry');
        $pool->indoor_outdoor = $request->input('indoor_outdoor');
        $pool->heated = $request->input('heated') ? 1 : 0;
        $pool->measured_temperature = $request->input('measured_temperature');
        $pool->max_depth = $request->input('max_depth');
        $pool->min_depth = $request->input('min_depth');
        $pool->max_length = $request->input('max_length');
        $pool->width_length = $request->input('width_length');
        $pool->bather_load = $request->input('bather_load');
        $pool->ropped_off_lanes = $request->input('ropped_off_lanes');
        $pool->restrictions = $request->input('restrictions');
        $pool->comments = $request->input('comments');
        $pool->save();
        $arrayOfCount = $request->input('input_water');

        $pool->diving()->attach($request->input('diving'));
        $pool->feature()->attach($request->input('feature'));
        return redirect('/admin/pool')->with('info', 'Pool saved successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
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
        $pool = Pool::with('diving', 'feature')->find($id);
        return view('Pool/update', ['pool' => $pool]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pool = Pool::find($id);
        $path = 'img/' . $pool->main_photo;

        $poolData = array(
            'facility_id' => $request->input('facility_id'),
            'description' => $request->input('description'),
            'details' => $request->input('details'),
            'entry' => $request->input('entry'),
            'indoor_outdoor' => $request->input('indoor_outdoor'),
            'heated' => $request->input('heated') ? 1 : 0,
            'targeted_temperature' => $request->input('targeted_temperature'),
            'measured_temperature' => $request->input('measured_temperature'),
            'max_depth' => $request->input('max_depth'),
            'min_depth' => $request->input('min_depth'),
            'max_length' => $request->input('max_length'),
            'width_length' => $request->input('width_length'),
            'bather_load' => $request->input('bather_load'),
            'ropped_off_lanes' => $request->input('ropped_off_lanes'),
            'restrictions' => $request->input('restrictions'),
            'comments' => $request->input('comments'),
        );
//        if ($request->file('main_photo')) {
//            $oldImage = public_path($path);
//            File::delete($oldImage);
//            $imageName = time() . '.' . $request->file('main_photo')->getClientOriginalExtension();
//            $request->file('main_photo')->move(public_path('img'), $imageName);
//            $poolData['main_photo'] = $imageName;
//        }

//        if ($request->file('many_photos')) {
//            $array = json_decode($pool->many_photos);
//            $count = count($array);
//            for ($x = 0; $x < $count; $x++) {
//                $photo2 = $array[$x];
//                $path2 = '/img/' . $photo2;
//                $oldImage2 = public_path($path2);
//                File::delete($oldImage2);
//            };
//
//            $count1 = count($request->file('many_photos'));
//            $json = [];
//            for ($x = 0; $x < $count1; $x++) {
//                $photo1 = $request->file('many_photos')[$x];
//                $imageName = $x . $photo1->getClientOriginalName() . STR::random(10) . '.' . $photo1->getClientOriginalExtension();
//                $photo1->move(public_path('img'), $imageName);
//                $json[] = $imageName;
//            };
//            $poolData['many_photos'] = json_encode($json);
//
//        }
        $pool->update($poolData);
        $pool->diving()->detach();
        $pool->diving()->attach($request->input('diving'));

        $pool->feature()->detach();
        $pool->feature()->attach($request->input('feature'));

        return redirect('/admin/pool')->with('info', 'Pool saved successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $pool = Pool::find($id);
        $pool->diving()->detach();
        $pool->waterslide()->detach();
        $pool->feature()->detach();
        $pool->delete();
        return redirect('/admin/pool')->with('info', 'Pool deleted!');
    }
}
