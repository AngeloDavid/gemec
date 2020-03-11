<?php

namespace App\Http\Controllers;

use App\Maintenance;
use App\Equipment;
Use App\Technical;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    protected $title = ['Mantenimiento','fa fa-laptop'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = $this->title;

        $list = Maintenance::all();
        $ruta = [['Inicio','/','fa fa-home'],['Mantenimiento','mantenimiento','fa fa-laptop']];

        return view('mantenimiento.index', compact('title','ruta','list'));
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
        $ruta = [['Inicio','/','fa fa-home'],['Mantenimiento','mantenimiento','fa fa-laptop'],['Nuevo','mantenimiento/create','']];
        $isnew = true;
        $urlForm = 'mantenimiento';
        $item = new Maintenance ();
        $listEqui = Equipment::all();
        $listTec = Technical::all();
        return view('mantenimiento.new',compact('title','ruta','isnew','urlForm','item','listEqui','listTec'));

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
        dd($request->all());
        Maintenance::create($data);
        return redirect()->route('mantenimiento.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function show(Maintenance $maintenance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function edit(Maintenance $maintenance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maintenance $maintenance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maintenance $maintenance)
    {
        //
    }
}
