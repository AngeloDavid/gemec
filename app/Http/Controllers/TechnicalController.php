<?php

namespace App\Http\Controllers;

use App\Technical;
use Illuminate\Http\Request;

class TechnicalController extends Controller
{
    protected $title = ['Tecnico','fa fa-user'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = $this->title;

        $list = Technical::all();
        $ruta = [['Inicio','/','fa fa-home'],['Tecnico','tecnico','fa fa-th-large']];

        return view('tecnico.index', compact('title','ruta','list'));
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
        $ruta = [['Inicio','/','fa fa-home'],['Tecnico','tecnico','fa fa-th-large'],['Nuevo','tecnico/create','']];
        $isnew = true;
        $urlForm = 'tecnico';
        $tecnico = new Technical ();
        return view('tecnico.new',compact('title','ruta','isnew','urlForm','tecnico'));
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
        //dd($data);
        if($data['password'] ==  $data['cpassword']){
            echo 'Correcto';

        }else{
            echo 'incorrecto';

        }


        $this->validate($request, [
            'cpassword' => 'required|confirmed|min:6',
        ]);

        Technical::create(['name'=>$data['name'],'status'=> '1','username' => $data['username'],
        'password' =>$data['password'],'rol' => $data['rol']]);
        return redirect()->route('tecnico.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Technical  $technical
     * @return \Illuminate\Http\Response
     */
    public function show(Technical $technical)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Technical  $technical
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tecnico = Technical::find($id);
        $title = $this->title;
        $ruta = [['Inicio','/','fa fa-home'],['tecnico','tecnico','fa fa-th-large'],['Editar','tecnico','']];
        $isnew = false;
        $urlForm = 'tecnico/'.$id;
        if($tecnico == null)
            return redirect()->route('tecnico.index');
        else
            return view('tecnico.new',compact('title','ruta','isnew','urlForm','tecnico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Technical  $technical
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        $data = request()->all();
        $tecnico = Technical::find($id);
        $tecnico->update($data);
        $tecnico->status = isset( $data['status'])?true:false;
        $tecnico->save();
        return redirect()->route('tecnico.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Technical  $technical
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $id->delete();

        return redirect()->route('tecnico.index');

    }
}
