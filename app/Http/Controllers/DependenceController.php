<?php

namespace App\Http\Controllers;

use App\Models\Dependece;
use Illuminate\Http\Request;

class DependenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dependences=Dependece::orderBy('id_dependence', 'desc')->get();
        
        return view('dependences.index', compact('dependences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Dependece::create($request->all());
        return redirect()->route('dependences.index')->with('success', 'DEPENDENCIA CREADA EXITOSAMENTE');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        
        $dependence=Dependece::find($request->id_dependence);
        $dependence->name=$request->name_e;
        $dependence->description=$request->description_e;
        $dependence->save();
        return redirect()->route('dependences.index')->with('success', 'DEPENDENCIA ACTUALIZADA EXITOSAMENTE');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dependence=Dependece::find($id);
        $dependence->status=1;        
        $dependence->save();
        return redirect()->route('dependences.index')->with('success', 'DEPENDENCIA BLOQUEADO EXITOSAMENTE'); 
    }
}
