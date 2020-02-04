<?php

namespace App\Http\Controllers\Usuarios\Administrador\Asm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Asm;
class ActividadesController extends Controller
{
    public function index($asm)
    {
        $asm = Asm::findOrFail($asm);
        return view('usuarios.administrador.asm.validar.actividades.index')
        ->with('asm',$asm);
     }

     
}
