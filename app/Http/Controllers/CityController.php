<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::with('state')->get();
        return view('City/list', ['cities' => $cities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('City/create');
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
            'state_id' => 'required',
        ]);
        $city = new City;
        $city->name = $request->input('name');
        $city->state_id = $request->input('state_id');
        $city->save();
        return redirect('/admin/city')->with('info', 'City saved successfully!');
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
        $city = City::find($id);
        return view('City/update', ['city' => $city,'selectedCountry'=>$city->state->country_id]);
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
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'state_id' => 'required',
        ]);
        $city = City::find($id);
        $cityData = array(
            'name' => $request->input('name'),
            'state_id' => $request->input('state_id'),
        );
        $city->update($cityData);
        return redirect('/admin/city')->with('info', 'City saved successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $city = City::find($id);
        $city->delete();
        return redirect('/admin/city')->with('info', 'City deleted!');
    }
    public function getCityByStateId($id)
    {
        return (City::where('state_id', $id)->get());
    }
}
