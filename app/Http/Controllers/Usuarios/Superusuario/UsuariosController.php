<?php

namespace App\Http\Controllers\Usuarios\Superusuario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Perfil;
use App\Models\Dependencia;
use App\Http\Requests\UsuarioRequest;
use App\Events\Bitacora;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usuarios = User::Search($request)->orderBy('perfil_id')->get();
        $perfiles = Perfil::get();
        $dependencias = Dependencia::all();
        return view('usuarios/superusuario/usuarios/index')
        ->with('perfiles',$perfiles)
        ->with('dependencias',$dependencias)
        ->with('dato',$request)
        ->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioRequest $request)
    {

        $usuario = new User($request->all());
        /*$usuario->nombre="user";*/
        $usuario->password =bcrypt($request->password);

        if ($request->input('perfil_id')==1 || $request->input('perfil_id')==2 || $request->input('perfil_id') == 3  ) {
            $usuario->dependencia_id= 6;
            $usuario->email_verified_at = '2019-09-05 08:27:58';

        }else{
            $usuario->dependencia_id= $request->dependencia_id;
        }
        // dd($usuario);
        $usuario->save();
        event(new Bitacora($usuario,'Alta','Creacion de usuario: '.$request->nombre));
        return redirect()->route('usuarios.index')->with('message_success','Usuario creado correctmente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $usuario = User::findOrFail($request->id);

        $usuario->nombre            = $request->nombre;
        $usuario->perfil_id         = $request->perfil_id;
        $usuario->dependencia_id    = $request->dependencia_id;
        $usuario->email             = $request->email;
        $usuario->password          = bcrypt($request->password);
        $usuario->activo            = $request->activo;
        $usuario->id                = $request->id;


        event(new Bitacora($usuario,'Modificacion','Creacion de usuario: '.$request->nombre));
            // dd($request->all(),$usuario);
        $usuario->save();

        return redirect()->route('usuarios.index')->with('message_success','Usuario actualizado correctmente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
