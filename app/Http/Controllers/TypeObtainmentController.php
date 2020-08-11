<?php

namespace App\Http\Controllers;


use App\Models\TypeObtainment;
use Illuminate\Http\Request;

class TypeObtainmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types=TypeObtainment::all();
        return view('type_obtainment.index', compact('types'));
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
        TypeObtainment::create($request->all());
        return redirect()->route('type-obtainments.index')->with('success', 'TIPO DE OBTENCIÓN CREADA EXITOSAMENTE');
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
        
        $type=TypeObtainment::find($request->id_type_obtainment);       
        $type->name=$request->name_e;
        $type->description=$request->description_e;
        $type->save();
        return redirect()->route('type-obtainments.index')->with('success', 'TIPO DE OBTENCIÓN ACTUALIZADA EXITOSAMENTE');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type=TypeObtainment::find($id);
        $type->status=1;        
        $type->save();
        return redirect()->route('type-obtainments.index')->with('success', 'TIPO DE OBTENCION BLOQUEADA EXITOSAMENTE'); 
    }
}
