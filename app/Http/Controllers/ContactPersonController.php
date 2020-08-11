<?php

namespace App\Http\Controllers;


use App\Models\ContactPerson;
use App\Models\Document;
use App\Models\TypeDocument;
use Illuminate\Http\Request;

class ContactPersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $contacts=ContactPerson::all();
        return view('contact_person.index', compact('contacts'));
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
        ContactPerson::create($request->all());
        return redirect()->route('contacts.index')->with('success', 'CONTACTO CREADO EXITOSAMENTE');
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
        
        $contact=ContactPerson::find($request->id_contact_person);       
        $contact->first_name=$request->first_name_e;
        $contact->last_name=$request->last_name_e;
        $contact->phone=$request->phone_e;
        $contact->email=$request->email_e;
        $contact->address=$request->address_e;
        $contact->save();
        return redirect()->route('contacts.index')->with('success', 'CONTACTO ACTUALIZADO EXITOSAMENTE');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact=ContactPerson::find($id);
        $contact->status=0;        
        $contact->save();
        return redirect()->route('contacts.index')->with('success', 'CONTACTO BLOQUEADO EXITOSAMENTE'); 
    }
}
