<?php

namespace App\Http\Controllers;


use App\Models\Document;
use App\Models\TypeDocument;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents=Document::all();
        $type_documents=TypeDocument::all();
        return view('documents.index', compact('documents', 'type_documents'));
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
        Document::create($request->all());
        return redirect()->route('documents.index')->with('success', 'DOCUMENTO CREADO EXITOSAMENTE');
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
        
        $document=Document::find($request->id_document);       
        $document->name=$request->name_e;
        $document->version=$request->version_e;
        $document->date=$request->date_e;
        $document->id_type_document=$request->id_type_document_e;
        $document->save();
        return redirect()->route('documents.index')->with('success', 'DOCUMENTO ACTUALIZADO EXITOSAMENTE');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document=Document::find($id);
        $document->status=1;        
        $document->save();
        return redirect()->route('documents.index')->with('success', 'DOCUMENTO BLOQUEADO EXITOSAMENTE'); 
    }
}
