<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\aux_contable\StoreRequest;
use App\Http\Requests\aux_contable\UpdateRequest;
use App\Models\AuxContable;

class AuxContableController extends Controller
{
    //Listar
    public function index ()
    {
        $list = AuxContable::all();
        return $this->sendResponse($list, "LISTA RECUPERADA");
    }

    //Recuperar por id
    public function show(AuxContable $id)
    {
        return $this->sendResponse($id, "ID RECUPERADO");
    }
    //Editar por id
    public function update(UpdateRequest $request, AuxContable $id)
    {
        $id->update($request->all());
        return $this->sendResponse($id, "ID EDITADO");
    }
    //Eliminar por id
    public function destroy(AuxContable $id)
    {
        $id->delete();
        return $this->sendResponse($id, "ID ELIMINADO");
    }
    //Crear
    public function store(StoreRequest $request)
    {
        $id = AuxContable::create($request->all());
        return $this->sendResponse($id, "CREADO CORRECTAMENTE");
    }
    //Cambio de estado a INACTIVO
    public function changeOK($id)
    {
        $result = AuxContable::where('id', $id)->update(['estado' => 'INACTIVO']);
        return $this->sendResponse($result, "CAMBIO ESTADO OK");
    }
}