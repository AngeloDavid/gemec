<?php

namespace App\Http\Controllers;

use App\Equipment;
use App\TypeEqu;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    protected $title = ['Equipo','fa fa-laptop'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;

        $list = Equipment::all();
        $ruta = [['Inicio','/','fa fa-home'],['Equipo','equipo','fa fa-laptop']];

        return view('equipo.index', compact('title','ruta','list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = $this->title;
        $ruta = [['Inicio','/','fa fa-home'],['Equipo','equipo','fa fa-laptop'],['Nuevo','equipo/create','']];
        $isnew = true;
        $urlForm = 'equipo';
        $item = new Equipment ();
        $listType = TypeEqu::all();
        return view('equipo.new',compact('title','ruta','isnew','urlForm','item','listType'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Equipment $equipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipment $equipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipment $equipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipment $equipment)
    {
        //
    }
}
