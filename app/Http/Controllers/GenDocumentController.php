<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Document;
use App\Models\GenDocument;
use App\Models\Route;
use App\Models\StatusDocument;
use App\Models\TypeObtainment;
use Illuminate\Http\Request;
use File;
use \Milon\Barcode\DNS1D;

class GenDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents=GenDocument::orderBy('id_gen_document', 'desc')->get();
        
        return view('gen_documents.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documents=Document::where('status', '1')->get();
        $status_documents=StatusDocument::where('status', '1')->get();
        $type_obtainments=TypeObtainment::where('status', '1')->get();
        $destinations=Destination::where('status', '1')->get();
        return view('gen_documents.create', compact('documents', 'status_documents', 
        'type_obtainments', 'destinations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_dependece=auth()->user()->id_dependence;
        $route=Route::where('id_dependence', $id_dependece)->get('description');
        $file=$request->file('file');

        if ($request->file('file')) {
            $path= public_path() . '/uploads/'. $route[0]->description;          
            $name = $file->getClientOriginalName();
            $extension=$file->getClientOriginalExtension();
            $file->move($path, $name);    
            $ruta=public_path() . '/uploads/'. $route[0]->description.'/'.$name;        
        }else {
            $name="";
            $extension="";
            $ruta="";
        }

        
        $gendocument=new GenDocument();       
        $gendocument->id_document=$request->id_document;
        $gendocument->id_user=auth()->user()->id;
        $gendocument->id_status_document=$request->id_status_document;
        $gendocument->id_type_obtainment=$request->id_type_obtainment;
        $gendocument->id_destination=$request->id_destination;
        $gendocument->name=$name;
        $gendocument->extension=$extension;
        $gendocument->numdoc=5;  //provicional
        $gendocument->num_folios=5;  //provicional
        $gendocument->num_image=5;  //provicional
        $gendocument->description=$request->description;
        $gendocument->reference=time();
        $gendocument->date=$request->date;
        $gendocument->ruta=$ruta;
        $gendocument->save();

        return redirect()->route('gen-documents.show', $gendocument->id_gen_document)->with('success', 'DOCUMENTOS SUBIDO EXITOSAMENTE');    




       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gendocument=GenDocument::find($id);       
        return view('gen_documents.show', compact('gendocument'));
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
        
        $route=Route::find($request->id_route);
        $route->description=$request->description;
       
        $route->save();
        return redirect()->route('routes.index')->with('success', 'RUTA ACTUALIZADA EXITOSAMENTE');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $route=Route::find($id);
        $route->status=1;        
        $route->save();
        return redirect()->route('routes.index')->with('success', 'RUTA BLOQUEADA EXITOSAMENTE'); 
    }
}
