<?php

namespace App\Http\Controllers;

use App\Collaborator;
use Illuminate\Http\Request;

class CollaboratorController extends Controller
{
    protected $title = ['Colaborador','fa fa-user'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;

        $list = Collaborator::all();
        $ruta = [['Inicio','/','fa fa-home'],['Colaborador','colaborador','fa fa-user']];

        return view('colaborador.index', compact('title','ruta','list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = $this->title;
        $ruta = [['Inicio','/','fa fa-home'],['COLABORADOR','colaborador','fa fa-user'],['Nuevo','colaborador/create','']];
        $isnew = true;
        $urlForm = 'colaborador';
        $item = new Collaborator ();
        return view('colaborador.new',compact('title','ruta','isnew','urlForm','item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->all();
        Collaborator::create(['name'=>$data['name'],'area'=>$data['area'],'cargo'=>$data['cargo'],'status'=> '1']);
        return redirect()->route('colaborador.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Collaborator  $collaborator
     * @return \Illuminate\Http\Response
     */
    public function show(Collaborator $collaborator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Collaborator  $collaborator
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Collaborator::find($id);
        $title = $this->title;
        $ruta = [['Inicio','/','fa fa-home'],['COLABORADOR','colaborador','fa fa-user'],['Editar','colaborador/create','']];
        $isnew = false;
        $urlForm = 'colaborador/'.$id;
        if($item == null)
            return redirect()->route('colaborador.index');
        else
            return view('colaborador.new',compact('title','ruta','isnew','urlForm','item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Collaborator  $collaborator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collaborator $collaborator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Collaborator  $collaborator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collaborator $collaborator)
    {
        //
    }
}
