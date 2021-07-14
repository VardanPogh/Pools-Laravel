<?php

namespace App\Http\Controllers;

use App\Diving;
use App\Waterslide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class WaterslideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $waterslides = Waterslide::with('facility')->get();
        return view('Waterslide/list', ['waterslides' => $waterslides]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Waterslide/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $imageName1 = '';
//        if ($request->file('main_photo')) {
//            $imageName1 = time() . '.' . $request->file('main_photo')->getClientOriginalExtension();
//            $request->file('main_photo')->move(public_path('img'), $imageName1);
//        }

        $waterslide = new Waterslide;
//        $waterslide->main_photo = $imageName1 ? $imageName1 : '';
        $waterslide->facility_id = $request->input('facility_id');
        $waterslide->description = $request->input('description');
        $waterslide->min_height = $request->input('min_height');
        $waterslide->min_age = $request->input('min_age');
        $waterslide->outlet = $request->input('outlet');
        $waterslide->slide_height = $request->input('slide_height');
        $waterslide->speed = $request->input('speed');
        $waterslide->requires = $request->input('requires');
        $waterslide->other_comments = $request->input('other_comments');
        $waterslide->save();

        $waterslide->feature_of_waterslide()->attach($request->input('feature_of_waterslide'));
        return redirect('/admin/waterslide')->with('info', 'Waterslide saved successfully!');

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
        $waterslide = Waterslide::with('feature_of_waterslide')->find($id);
        return view('Waterslide/update', ['waterslide' => $waterslide]);

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
        $waterslide = Waterslide::find($id);
//        $path = 'img/' . $waterslide->main_photo;

        $waterslideData = array(
            'facility_id' => $request->input('facility_id'),
            'description' => $request->input('description'),
            'min_height' => $request->input('min_height'),
            'min_age' => $request->input('min_age'),
            'outlet' => $request->input('outlet'),
            'slide_height' => $request->input('slide_height'),
            'speed' => $request->input('speed'),
            'requires' => $request->input('requires'),
            'other_comments' => $request->input('other_comments'),
        );
//        if ($request->file('main_photo')) {
//            $oldImage = public_path($path);
//            File::delete($oldImage);
//            $imageName = time() . '.' . $request->file('main_photo')->getClientOriginalExtension();
//            $request->file('main_photo')->move(public_path('img'), $imageName);
//            $waterslideData['main_photo'] = $imageName;
//        }
        $waterslide->update($waterslideData);

        $waterslide->feature_of_waterslide()->detach();
        $waterslide->feature_of_waterslide()->attach($request->input('feature_of_waterslide'));

        return redirect('/admin/waterslide')->with('info', 'Waterslide saved successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $waterslide = Waterslide::find($id);
        $waterslide->feature_of_waterslide()->detach();
        $waterslide->delete();
        return redirect('/admin/waterslide')->with('info', 'Waterslide deleted!');
    }
}
