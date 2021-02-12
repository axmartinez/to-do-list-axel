<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListUser;
class ListController extends Controller
{
    public function nuevaTarea(){
        return view('listsUsers.nueva');
    }
    public function storeTarea(Request $request){
        $nuevo=ListUser::create([
            'user_id' => auth()->user()->id,
            'descripcion' => $request->descripcion,
        ]);
        return redirect('mi-lista')->with("mensaje","Tarea añadida");
    }
    public function actualizar(Request $request){
        $tarea = ListUser::find($request->id);
        $tarea->descripcion = $request->descripcion;
        $tarea->save();
        return redirect('mi-lista')->with("mensaje","Tarea actualizada");

    }
    public function eliminar(Request $request){
        $tarea = ListUser::find($request->id);
        $tarea->delete();
        return redirect('mi-lista')->with("mensaje","Tarea eliminada");
    }
}
