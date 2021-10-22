<?php

namespace App\Http\Controllers;

use App\Models\ActivosFijo;
use Illuminate\Http\Request;
use App\Http\Requests\activos_fijo\StoreRequest;
use App\Http\Requests\activos_fijo\UpdateRequest;

class ActivosFijosController extends Controller
{
    //Listar
    public function index()
    {
        $activosfijos = ActivosFijo::all();
        //return $this->sendResponse($activosfijos,"LISTA RECUPERADA");
        //return view('admin.index')->with('activosfijos',$activosfijos);
    }

    //Recuperar por id
    public function show(ActivosFijo $id)
    {
        return $this->sendResponse($id, "ID RECUPERADO");
    }
    //Editar  por id
    public function update(UpdateRequest $request, ActivosFijo $id)
    {
        $id->update($request->all());
        return $this->sendResponse($id, "ID EDITADO");
    }
    //Eliminar  por id
    public function destroy(ActivosFijo $id)
    {
        $id->delete();
        return $this->sendResponse($id, "ID ELIMINADO");
    }

    //Crear
    public function store(StoreRequest $request)
    {
        $id = ActivosFijo::create($request->all());
        return $this->sendResponse($id, "CREADO CORRECTAMENTE");
    }

    //Cambio Estado a INACTIVO
    public function changeOK($id)
    {
        $result = ActivosFijo::where('id', $id)->update(['estado' => 'INACTIVO']);
        return $this->sendResponse($result, "CAMBIO ESTADO OK");
    }
}
