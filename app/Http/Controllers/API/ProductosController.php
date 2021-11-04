<?php

namespace App\Http\Controllers\API;

use App\Models\Productos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Request\GuardarProductosRequest;
use App\Http\Requests\EditarProductosRequest;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Productos::query()->paginate();
        return response($productos, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarProductosRequest $request)
    {
        Productos::create($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'Productos guardado exitosamente'
        ]);   
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $producto)
    {
        return response()->json([
            'res'=>true,
            'data'=>$producto
        ]); 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditarProductosRequest $request,Productos $producto)
    {
        $producto->update($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'productos actualizado exitosamente'
        ],200); 

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $producto)
    {
        $producto->delete();
        return response()->json([
            'res'=>true,
            'mensaje'=>'productos Eliminado exitosamente'
        ]);
    }
}