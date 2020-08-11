<?php

namespace App\Http\Controllers;


use App\Models\TypeCustomer;
use Illuminate\Http\Request;

class TypeCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types=TypeCustomer::all();
        return view('type_customers.index', compact('types'));
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
        TypeCustomer::create($request->all());
        return redirect()->route('type-customers.index')->with('success', 'TIPO DE CLIENTE CREADO EXITOSAMENTE');
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
                
        $type=TypeCustomer::find($request->id_type_customer);       
        $type->description=$request->description_e;
        $type->save();
        return redirect()->route('type-customers.index')->with('success', 'TIPO DE CLIENTE ACTUALIZAO EXITOSAMENTE');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type=TypeCustomer::find($id);
        $type->status=1;        
        $type->save();
        return redirect()->route('type_documents.index')->with('success', 'TIPO DE DOCUMENTO BLOQUEADO EXITOSAMENTE'); 
    }
}
