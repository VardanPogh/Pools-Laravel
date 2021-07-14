<?php

namespace App\Http\Controllers;

use App\City;
use App\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::with('country')->get();
        return view('State/list', ['states' => $states]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('State/create');
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
        $state = new State;
        $state->name = $request->input('name');
        $state->code = $request->input('code');
        $state->country_id = $request->input('country_id');
        $state->save();
        return redirect('/admin/state')->with('info', 'State saved successfully!');
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
        $state = State::find($id);
        return view('State/update', ['state' => $state]);
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
        $state = State::find($id);
        $stateData = array(
            'name' => $request->input('name'),
            'code' => $request->input('code'),
            'country_id' => $request->input('country_id'),
        );
        $state->update($stateData);
        return redirect('/admin/state')->with('info', 'State saved successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $state = State::find($id);
        $city = City::where('state_id',$id)->delete();
        $state->delete();
        return redirect('/admin/state')->with('info', 'State deleted!');
    }

    public function getStateByCountryId($id)
    {
        return (State::where('country_id', $id)->get());
    }


}
