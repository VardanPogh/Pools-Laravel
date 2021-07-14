<?php

namespace App\Http\Controllers;

use App\Country;
use App\Pool;
use App\State;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return view('Country/list', ['countries' => $countries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Country/create');
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
        ]);
        $country = new Country;
        $country->name = $request->input('name');
        $country->save();
        return redirect('/admin/country')->with('info', 'Country saved successfully!');

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
        $country = Country::find($id);
        return view('Country/update', ['country' => $country]);

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
        ]);
        $country = Country::find($id);
        $countryData = array(
            'name' => $request->input('name'),
        );
        $country->update($countryData);
        return redirect('/admin/country')->with('info', 'Country saved successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $country = Country::find($id);
//        $states = State::where('country_id',$id)->delete();
        $country->state()->each(function($state) {
            $state->city()->delete();
        });
        $country->state()->delete();
        $country->delete();
        return redirect('/admin/country')->with('info', 'Country deleted!');
    }
}
