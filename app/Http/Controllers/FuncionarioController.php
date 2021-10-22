<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Http\Requests\funcionario\StoreRequest;
use App\Http\Requests\funcionario\UpdateRequest;


class FuncionarioController extends Controller
{
    //Listar
    public function index()
    {
        $list = Funcionario::all();
        return $this->sendResponse($list, "LISTA RECUPERADA");
    }

    //Recuperar por id
    public function show($id)
    {
        return $this->sendResponse($id, "ID RECUPERADO");
    }

    //Editar por id
    public function update(UpdateRequest $request, Funcionario $id)
    {
        $id->update($request->all());
        return $this->sendResponse($id, "ID EDITADO");
    }

    //Eliminar por id
    public function destroy(Funcionario $id)
    {
        $id->delete();
        return $this->sendResponse($id, "ID ELIMINADO");
    }

    //Crear
    public function store(StoreRequest $request)
    {
        $id = Funcionario::create($request->all());
        return $this->sendResponse($id, "CREADO CORRECTAMENTE");
    }
    public function changeOK($id)
    {
        $result = Funcionario::where('id',$id)->update(['estado'=>'INACTIVO']);
        return $this->sendResponse($result, "CAMBIO ESTADO OK");
    }
}