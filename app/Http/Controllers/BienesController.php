<?php

namespace App\Http\Controllers;

use App\Http\Requests\activos_fijo\StoreRequest;
use App\Http\Requests\activos_fijo\UpdateRequest;
use App\Models\Bienes;
use Illuminate\Http\Request;

class BienesController extends Controller
{
    //Listar
    public function index()
    {
        $list = Bienes::all();
        return $this->sendResponse($list, "LISTA RECUPERADA");
    }

    //Recuperar por id
    public function show(Bienes $id)
    {
        return $this->sendResponse($id, "ID RECUPERADO");
    }
    //Editar por id
    public function update(UpdateRequest $request, Bienes $id)
    {
        $id->update($request->all());
        return $this->sendResponse($id, "ID EDITADO");
    }
    //Eliminar por id
    public function detroy(Bienes $id)
    {
        $id->delete();
        return $this->sendResponse($id, "ID ELIMINADO");
    }

    //Crear
    public function store(StoreRequest $request)
    {
        $id= Bienes::create($request->all());
        return $this->sendResponse($id,"CREADO CORRECTAMENTE");
    }

    //Cambio Estado a INACTIVO
    public function changeOK($id)
    {
        $result=Bienes::where('id',$id)->update(['estado'=>'INACTIVO']);
        return $this->sendResponse($result, "CAMBIO DE ESTADO OK");
    }
}