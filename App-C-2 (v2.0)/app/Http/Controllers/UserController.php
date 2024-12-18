<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Models\Juguete;
use App\Models\Prenda;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
/*
    User: yonel.ordonez@unas.edu.pe
    Contra: user123

    User: yonelsilva75@gmail.com
    Contra: usuario1234

    User: pepe@gmail.com
    Contra: 12345678
*/
/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function image($id)
    {
        $imagen_perfil = User::find($id);

        if (!$imagen_perfil) {
            abort(404);
        }
    
        $imagedata = $imagen_perfil->imagen_perfil;
    
        $tipoMIME = new \finfo(FILEINFO_MIME_TYPE);
        $mimetype = $tipoMIME->buffer($imagedata);
    
        return response($imagedata, 200)->header('Content-Type', $mimetype);
    }

    public function index()
    {
        $users = User::paginate();

        return view('user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    /*
    public function create()
    {
        $user = new User();
        return view('user.create', compact('user'));
    }
    */
    public function confirmate($id)
    {
        return view('user.confirmationdelete', compact('id')); //Paso la variable a la vista, para poder usarlo ahi
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user, Prenda $prenda)
    {
        if($request->validated())
        {
            
            if ($request->hasFile('imagen_perfil'))
            {  
                $image = $request->file('imagen_perfil');
                
                $imagedata= file_get_contents($image->getRealPath());
                $user->imagen_perfil = $imagedata; //tipo blob

            }
            $user->name = $request->name;
            $user->telefono = $request->telefono;
            $user->extension_telefonica = $request->extension_telefonica;
            $user->email=$request->email;
            $actual=now()->timestamp;
            $user->updated_at = $actual;

            //Actualizar datos de las prendas y juguetes
            $registros_prenda= Prenda::where('user_id','=',$request->id)->get();
            foreach ($registros_prenda as $filas) {
                $filas->user_name = $request->name;
                $filas->save();
            }
            $user->save();
            
            $registros_juguete = Juguete::where('user_id','=',$request->id)->get();
            foreach ($registros_juguete as $filas_j) {
                $filas_j->user_name = $request->name;
                $filas_j->save();
            }
            //
            return redirect()->route('users.index')
                ->with('success', 'Datos actualizados con exito!');
        }

    }

    public function destroy($id)
    {
        User::find($id)->delete();
        //borrar prendas y juguetes del usuario
        $prendas_borrar = Prenda::where('user_id','=',$id)->get();
        foreach ($prendas_borrar as $borrar) {
            $borrar->delete();
        }
        $juguetes_borrar = Juguete::where('user_id','=',$id)->get();
        foreach ($juguetes_borrar as $borrar_j) {
            $borrar_j->delete();
        }
        Auth::logout(); 
        return redirect()->route('logout')
        ->with('success', 'Usuario eliminado con exito!')
        ->header('login',route('home'));
    }
}
