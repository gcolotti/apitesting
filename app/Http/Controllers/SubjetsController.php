<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjets = Subjet::get();

        return view('subjets.index', compact('subjets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subjets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Subjet::create($request->all());

        return reditect()->route('subjets.index')->with('success', 'Materia creada con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subjet = Subjet::findOrFail($id);

        return view('subjets.show', compact('subjet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subjet = Subjet::findOrFail($id);

        return view('subjets.edit', compact('subjet'));
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
        Subjet::findOrFail($id)->update($request->all());

        return redirect()->route('subjets.index')->with('sucecss', 'Materia actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subjet::findOrFail($id)->destroy();

        return redirect()->route('subjets.index')->with('success', 'Materia eliminada con éxito.');
    }

    /**
     * Shows delete confirmation view
     * @param $id
     */
    public function delete($id){
        $subjet = Subjet::findOrFail($id);

        return view('subjets.delete', compact('subjet'));
    }
}
