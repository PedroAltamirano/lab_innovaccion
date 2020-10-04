<?php

namespace App\Http\Controllers\Aplicacion;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

// Models
use App\Models\Fondo;

class FondosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function verFondos(Request $request)
    {
        return view('aplicacion.fondos.fondos');
    }

    public function showForm(Request $request)
    {
        $fondo = new Fondo;
        return view('aplicacion.fondos.frmFondos', compact('fondo'))->with(['url' => route('app.fondos.post'), 'method' => 'POST']);
    }

    public function edit($id)
    {
        $fondo = Fondo::find($id);
        return view('aplicacion.fondos.frmFondos', compact('fondo'))->with(['url' => route('app.fondos.put', $fondo->id), 'method' => 'PUT']);
    }

}
