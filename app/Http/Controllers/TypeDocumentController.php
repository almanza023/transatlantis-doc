<?php

namespace App\Http\Controllers;

use App\Models\Dependece;
use App\Models\TypeDocument;
use Illuminate\Http\Request;

class TypeDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type_documents=TypeDocument::all();
        return view('type_documents.index', compact('type_documents'));
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
        TypeDocument::create($request->all());
        return redirect()->route('type_documents.index')->with('success', 'TIPO DOCUMENTO CREADO EXITOSAMENTE');
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
        
        $type=TypeDocument::find($request->id_type_document);       
        $type->description=$request->description_e;
        $type->save();
        return redirect()->route('type_documents.index')->with('success', 'TIPO DE DOCUMENTO ACTUALIZADA EXITOSAMENTE');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type=TypeDocument::find($id);
        $type->status=1;        
        $type->save();
        return redirect()->route('type_documents.index')->with('success', 'TIPO DE DOCUMENTO BLOQUEADO EXITOSAMENTE'); 
    }
}
