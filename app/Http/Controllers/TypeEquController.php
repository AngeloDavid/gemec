<?php

namespace App\Http\Controllers;

use App\TypeEqu;
use Illuminate\Http\Request;


class TypeEquController extends Controller
{
    protected $title = 'Tipo de Equipo';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $title = $this->title;
        $list = TypeEqu::all();

        $ruta = [['Inicio','/','fa fa-home'],['TipoEquipo','tipo','fa fa-th-large']];
        return view('tipo.index', compact('title','ruta','list'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = $this->title;
        $ruta = [['Inicio','/','fa fa-home'],['TipoEquipo','tipo','fa fa-th-large']];
        $isnew = true;
        $urlForm = 'tipo';
        $tipo = new TypeEqu ();
        return view('tipo.new',compact('title','ruta','isnew','urlForm','tipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = request()->all();

        TypeEqu::create(['name'=>$data['name'],'status'=> $data['status']]);
        return redirect()->route('tipo.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeEqu  $typeEqu
     * @return \Illuminate\Http\Response
     */
    public function show(TypeEqu $typeEqu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeEqu  $typeEqu
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeEqu $typeEqu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeEqu  $typeEqu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeEqu $typeEqu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeEqu  $typeEqu
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeEqu $typeEqu)
    {
        //
    }
}
