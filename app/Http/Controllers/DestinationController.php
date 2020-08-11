<?php

namespace App\Http\Controllers;

use App\Models\Departament;
use App\Models\Destination;
use App\Models\Municipaly;
use App\Models\Title;
use App\Models\TypeCustomer;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $destinations=Destination::all();
        $type_customers=TypeCustomer::all();
        $titles=Title::all();
        $departaments=Departament::all();
        $municipalities=Municipaly::all();
        return view('destinations.index', compact('destinations', 'type_customers', 'titles',
        'departaments', 'municipalities'));
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
        $des=new Destination();
        $des->first_name=$request->first_name;
        $des->last_name=$request->last_name;
        $des->nid=$request->nid;
        $des->full_name=$request->first_name.' '.$request->last_name;
        $des->phone=$request->phone;
        $des->email=$request->email;
        $des->address=$request->address;
        $des->id_type_customer=$request->id_type_customer;
        $des->id_title=$request->id_title;
        $des->id_municipality=$request->id_municipality;
        $des->description=$request->description;
        $des->save();
        return redirect()->route('destinations.index')->with('success', 'DESTINO CREADO EXITOSAMENTE');
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

    public function getMunicipialities($id)
    {
        $mun=Municipaly::where('id_departament', $id)->get();
       
        return response()->json($mun);
        
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

      
        
        $des= Destination::find($request->id_destination);
        $des->first_name=$request->first_name;
        $des->last_name=$request->last_name;
        $des->nid=$request->nid;
        $des->full_name=$request->first_name.' '.$request->last_name;
        $des->phone=$request->phone;
        $des->email=$request->email;
        $des->address=$request->address;
        $des->id_type_customer=$request->id_type_customer;
        $des->id_title=$request->id_title;
        $des->id_municipality=$request->id_municipality;
        $des->description=$request->description;
        $des->save();
        return redirect()->route('destinations.index')->with('success', 'DESTINO ACTUALIZADO EXITOSAMENTE');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destination=Destination::find($id);
        $destination->status=0;        
        $destination->save();
        return redirect()->route('destinations.index')->with('success', 'DESTINO BLOQUEADO EXITOSAMENTE'); 
    }
}
