<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = People::latest()->paginate(5);
    
        return view('people.index',compact('people'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastName' => 'required',
            'phone' => 'required',
            'street' => 'required',
            'city/conutry' => 'required'
        ]);

        People::create($request->all());

        return redirect()->route('people.index')->with('success', 'Person created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show(People $people)
    {
        return view('people.show',compact('people'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit(People $people)
    {
        return view('people.edit',compact('people'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, People $people)
    {
        $request->validate([
            'name' => 'required',
            'lastName' => 'required',
            'phone' => 'required',
            'street' => 'required',
            'city/conutry' => 'required'
        ]);
    
        People::update($request->all());

        return redirect()->route('people.index')->with('success', 'Person updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $people)
    {
        $person->delete();
    
        return redirect()->route('person.index')->with('success','Person deleted successfully');
    }
}
