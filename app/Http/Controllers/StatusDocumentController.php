<?php

namespace App\Http\Controllers;

use App\Models\StatusDocument;
use Illuminate\Http\Request;

class StatusDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status=StatusDocument::all();
        return view('status_document.index', compact('status'));
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
        StatusDocument::create($request->all());
        return redirect()->route('status-document.index')->with('success', 'ESTADO DE DOCUMENTO CREADO EXITOSAMENTE');
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
        
        $statu=StatusDocument::find($request->id_status_document);        
        $statu->description=$request->description_e;
        $statu->save();
        return redirect()->route('status-document.index')->with('success', 'ESTADO DE DOCUMENTO ACTUALIZADO EXITOSAMENTE');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $statu=StatusDocument::find($id);
        $statu->statu=1;        
        $statu->save();
        return redirect()->route('status-document.index')->with('success', 'ESTADO DE DOCUMENTO BLOQUEADO EXITOSAMENTE'); 
    }
}
