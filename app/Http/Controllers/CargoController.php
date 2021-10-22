<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;
use App\Http\Requests\Cargo\StoreRequest;
use App\Http\Requests\Cargo\UpdateRequest;

class CargoController extends Controller
{
    //Listar
    public function index()
    {
        $list = Cargo::all();
        return $this->sendResponse($list, "LISTA  RECUPERADA");
    }

    //Recuperar por id
    public function show(Cargo $id)
    {
        return $this->sendResponse($id, "ID RECUPERADO");
    }
    //Editar  por id
    public function update(UpdateRequest $request, Cargo $id)
    {
        $id->update($request->all());
        return $this->sendResponse($id, "ID EDITADO");
    }
    //Eliminar  por id
    public function destroy(Cargo $id)
    {
        $id->delete();
        return $this->sendResponse($id, "ID ELIMINADO");
    }

    //Crear
    public function store(StoreRequest $request)
    {
        $id = Cargo::create($request->all());
        return $this->sendResponse($id, "CREADO CORRECTAMENTE");
    }

    //Cambio Estado a INACTIVO
    public function changeOK($id)
    {
        $result = Cargo::where('id', $id)->update(['estado' => 'INACTIVO']);
        return $this->sendResponse($result, "CAMBIO ESTADO OK");
    }
}