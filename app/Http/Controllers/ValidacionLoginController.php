<?php

namespace App\Http\Controllers;

use App\Http\Requests\IniciarSesionFormRequest;
use Illuminate\Http\Request;

class ValidacionLoginController extends Controller
{
    public function iniciar_sesion(IniciarSesionFormRequest $request){
        return response()->json( $request->all());
    }
}
