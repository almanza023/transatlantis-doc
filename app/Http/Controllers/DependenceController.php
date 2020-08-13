<?php

namespace App\Http\Controllers;

use App\Models\Dependece;
use App\Models\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;


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
        DB::beginTransaction();
        try {
            $dependence=Dependece::create($request->all());
            $route=new Route();
            $route->id_dependence=$dependence->id_dependence;
            $route->description=$dependence->id_dependence.'-'.$dependence->name;
            $route->save();
            $path=public_path().'/uploads/'.$route->description;         
            File::makeDirectory($path, $mode = 0777, true, true);   
         
        DB::commit();
            
        return redirect()->route('dependences.index')->with('success', 'DEPENDENCIA CREADA EXITOSAMENTE');
        } catch (\Exception $ex) {
            DB::rollback();
            return response()->json(['warning' => $ex->getMessage()]);
     }

       
       
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
