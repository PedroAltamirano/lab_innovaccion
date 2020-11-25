<?php

namespace App\Http\Controllers\Aplicacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

// Helpers
use App\Helpers\CustomUrl; // $string
use App\Helpers\Archivos; // $nombre, $archivo, $disk

// Modelos
use App\Models\Solucion;
use App\Models\Soluciontipoinnova;
use App\Models\SolucionObservacion;

// Reglas de validacion
use App\Http\Requests\Solucion\Store1Post;
use App\Http\Requests\Solucion\Store2Post;
use App\Http\Requests\Solucion\Store3Post;
use App\Http\Requests\Solucion\UpdatePost;
use App\Http\Requests\Solucion\ObservacionPost;
class crudSoluciones extends Controller
{
    //
    public function store(Store1Post $request){
   
        $validatedData = $request->validated();
        if($solucion=Solucion::create($validatedData)){
            $solucion->user_id = auth()->id();
            $solucion->save();
            if(isset($validatedData['archivo'])){
                $imageName = Archivos::storeImagen($solucion->id, $validatedData['archivo'], 'soluciones');
                $solucion->archivo = $imageName;
                $solucion->save();
            }
            if($request->get('continue')){
                $request->session()->put('step', '2');
                return redirect()->route('app.soluciones.edit', [$solucion->problema_id, $solucion->id])->with(['status' => 'Solución fase 1 completada con éxito, continue con el siguiente paso', 'method' => 'PUT']);
            } else {
                return redirect()->route('app.escritorio')->with(['status' => 'Solución fase 1 completada con éxito, no se olvide de completarla más tarde']);
            }

        }
        return back()->with('error', 'Solución no fue creada');
       
    }
    public function update(UpdatePost $request,Solucion $solucion){
        if(Auth::id() != $solucion->user_id && (!Auth::user()->hasRole('admin') && !Auth::user()->hasRole('superadmin'))){
            return back()->with('error', 'No ingresaste esta solución.');
        }
        $validatedData = $request->validated();
        $solucion->update($validatedData);
        if(isset($validatedData['archivo'])){
            $imageName = Archivos::storeImagen($solucion->id, $validatedData['archivo'], 'soluciones');
            $solucion->archivo = $imageName;
            $solucion->save();
        }

        if($request->get('continue')){
            $request->session()->put('step', '2');
            return redirect()->route('app.soluciones.edit', [$solucion->problema_id, $solucion->id])->with(['status' => 'Solución fase 1 completada con éxito', 'method' => 'PUT']);
        } else {
            return back()->with(['status' => 'Solución fase 1 completada con éxito, no se olvide de completarla más tarde']);
        }

    }
    public function updateFase2(Store2Post $request,Solucion $solucion){
        if(Auth::id() != $solucion->user_id && (!Auth::user()->hasRole('admin') && !Auth::user()->hasRole('superadmin'))){
            return back()->with('error', 'No ingresaste esta solución.');
        }
        $validatedData = $request->validated();
        $solucion->update($validatedData);
        Soluciontipoinnova::where('solucion_id',$solucion->id)->delete();
        foreach ($validatedData['tipo_institucion'] as $propuesta){
            $conpropuesta=Soluciontipoinnova::create([
                'solucion_id'=>$solucion['id'],
                'tipoinnovacion_id' =>$propuesta
            ]);
            $conpropuesta->save();
        }

        if($request->get('continue')){
            $request->session()->put('step', '3');
            return redirect()->route('app.soluciones.edit', [$solucion->problema_id, $solucion->id])->with(['status' => 'Solución fase 2 completada con éxito, continue con el último paso', 'method' => 'PUT']);
        } else {
            return redirect()->route('app.escritorio')->with(['status' => 'Solución fase 2 completada con éxito, no se olvide de completarla más tarde']);
        }

    }
    public function updateFase3(Store3Post $request,Solucion $solucion){
        if(Auth::id() != $solucion->user_id && (!Auth::user()->hasRole('admin') && !Auth::user()->hasRole('superadmin'))){
            return back()->with('error', 'No ingresaste esta solución.');
        }
        $validatedData = $request->validated();
        $solucion->update($validatedData);
        if($request->get('continue')){
            $request->session()->put('step', '3');
            return redirect()->route('app.soluciones.edit', [$solucion->problema_id, $solucion->id])->with(['status' => 'Innovación solución creada con éxito', 'method' => 'PUT']);
        } else {
            return redirect()->route('app.escritorio')->with(['status' => 'Solución fase 3 completada con éxito, se ha registrado su solucón exitosamente']);
        }

    }

    public function destroy(Solucion $solucion) {
        // dd($problema->id);
        if(Auth::id() != $solucion->user_id && (!Auth::user()->hasRole('superadmin'))){
            return back()->with('error', 'No ingresaste esta solución.');
        }

        $solucion->delete();
        Soluciontipoinnova::where('solucion_id',$solucion->id)->delete();
        return redirect()->route('home')->with('status', 'Solución eliminada con éxito.');
    }

    public function observacioncrear(ObservacionPost $request) {

        $validatedData = $request->validated();
        if($observacion=SolucionObservacion::create($validatedData)){
            
            return back()->with('status', 'Observación creada con éxito.' );
        }
        
    }
}
