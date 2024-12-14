<?php

namespace App\Http\Controllers;

use App\Models\Juguete;
use App\Http\Requests\JugueteRequest;
use App\Models\User;

/**
 * Class JugueteController
 * @package App\Http\Controllers
 */
class JugueteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $juguetes = Juguete::paginate();

        return view('juguete.index', compact('juguetes'))
            ->with('i', (request()->input('page', 1) - 1) * $juguetes->perPage());
    }

    public function redireccionar()
    {
        $juguetes = Juguete::paginate();
        return view('juguete.misjuguetes', compact('juguetes'))
            ->with('i', (request()->input('page', 1) - 1) * $juguetes->perPage());
    }
    public function confirmation($id)
    {
        return view('juguete.confirmationdelete', compact('id'));
    }

    public function image($id)
    {
        $juguete = Juguete::find($id);

        if (!$juguete) {
            abort(404);
        }
    
        $imagedata = $juguete->image;
    
        $tipoMIME = new \finfo(FILEINFO_MIME_TYPE);
        $mimetype = $tipoMIME->buffer($imagedata);
    
        return response($imagedata, 200)->header('Content-Type', $mimetype);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $juguete = new Juguete();
        return view('juguete.create', compact('juguete'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JugueteRequest $request)
    {
        if($request->validated())
        {

            $juguete = new Juguete();
            if ($request->hasFile('image'));
            {  
                //Obtener la imagen
                $image = $request->file('image');

                //Leer como binario
                $imagedata= file_get_contents($image->getRealPath());
                $juguete->image = $imagedata; //tipo blob
            }
            $juguete->user_id = $request->user_id;
            $juguete->descripcion = $request->descripcion;
            $juguete->precio = $request->precio;
            $juguete->tiempo_uso = $request->tiempo_uso;
            $juguete->user_name = $request->user_name;
            $juguete->save();
            //$juguete::create($request->validated());
            return redirect()->route('juguetes.index')
            ->with('success', 'Juguete añadido con exito.');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Juguete::find($id);

        $user_id = $data->user_id;
        $user= User::find($user_id);

        $juguete = Juguete::find($id);

        return view('juguete.show', compact('juguete','user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $juguete = Juguete::find($id);

        return view('juguete.edit', compact('juguete'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JugueteRequest $request, Juguete $juguete)
    {
        if ($request->hasFile('image'));
        {  
            //Obtener la imagen
            $image = $request->file('image');

            //Leer como binario
            $imagedata= file_get_contents($image->getRealPath());
            $juguete->image = $imagedata; //tipo blob

            /*
            // Asignar una URL para acceder a la imagen
            $juguete->imageurl = route('jugu$juguete.image', ['id' => $juguete->id]); */
        }
        $juguete->precio = $request->precio;
        $juguete->descripcion = $request->descripcion;
        $juguete->tiempo_uso = $request->tiempo_uso;
        $juguete->user_id = $request->user_id;
        $juguete->user_name = $request->user_name;
        $juguete->save();
        //$juguete->update($request->validated());

        return redirect()->route('juguetes.index')
            ->with('success', 'Juguete actualizado exitosamente');
    }


    public function destroy($id)
    {
        Juguete::find($id)->delete();

        return redirect()->route('juguetes.index')
            ->with('success', 'Juguete eliminado exitosamente');
    }
}
