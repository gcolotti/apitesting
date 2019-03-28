<?php

namespace App\Http\Controllers;

use App\Institute;
use Illuminate\Http\Request;

class InstitutesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institutes = Institute::get();

        return view('institutes.index', compact('institutes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('institutes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Institute::create($request->all());

        return reditect()->route('institutes.index')->with('success', 'Instituto creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $institute = Institute::findOrFail($id);

        return view('institutes.show', compact('institute'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $institute = Institute::findOrFail($id);

        return view('institutes.edit', compact('institute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Institute::findOrFail($id)->update($request->all());

        return redirect()->route('institutes.index')->with('sucecss', 'Instituto actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Institute::findOrFail($id)->destroy();

        return redirect()->route('institutes.index')->with('success', 'Instituto eliminado con éxito.');
    }

    /**
     * Shows delete confirmation view
     * @param $id
     */
    public function delete($id){
        $institute = Institute::findOrFail($id);

        return view('institutes.delete', compact('institute'));
    }
}
