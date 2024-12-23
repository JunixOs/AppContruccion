<?php

namespace App\Http\Controllers;

use App\Models\Prenda;
use App\Http\Requests\PrendaRequest;
use App\Models\User;
use App\Http\Requests\UserRequest;
use finfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
/**
 * Class PrendaController
 * @package App\Http\Controllers
 */
class PrendaController extends Controller
{
    public function image($id)
    {
        $prenda = Prenda::find($id);

        // Si no se encuentra la prenda, devolver un 404
        if (!$prenda) {
            abort(404);
        }
    
        // Obtener los datos de la imagen
        $imagedata = $prenda->image;
    
        // Detectar el tipo MIME
        $tipoMIME = new \finfo(FILEINFO_MIME_TYPE);
        $mimetype = $tipoMIME->buffer($imagedata);
    
        // Devolver la imagen con el tipo MIME adecuado
        return response($imagedata, 200)->header('Content-Type', $mimetype);
    }
    /**
     * Muestra todas las prendas subidas
     */
    public function index()
    {
        $prendas = Prenda::paginate();

        /*
        foreach ($prendas as $prenda) {
            // Detectar el tipo MIME de la imagen
            $imagedata = $prenda->image;
    
            // Asignar una URL para acceder a la imagen
            $prenda->imageurl = PrendaController::image($imagedata);
            //$prenda->image_mimetype = $mimetype;  // Asignar el MIME type para usarlo si lo necesitas
        }
        */

        return view('prenda.index', compact('prendas'))
            ->with('i', (request()->input('page', 1) - 1) * $prendas->perPage());
    }

    public function redirect()
    {
        $prendas = Prenda::paginate();
        return view('prenda.misprendas', compact('prendas'))
            ->with('i', (request()->input('page', 1) - 1) * $prendas->perPage());
    }
    public function confirmation($id)
    {
        return view('prenda.confirmationdelete', compact('id')); //Paso la variable a la vista, para poder usarlo ahi
    }
    /**
     * Muestra el formulario para crear una prenda
     */
    public function create()
    {
        $prenda = new Prenda();
        return view('prenda.create', compact('prenda'));
    }

    /**
     * Almacena una nueva prenda 
     */
    public function store(PrendaRequest $request)
    {
        if($request->validated())
        {

            $prenda = new Prenda();
            if ($request->hasFile('image'));
            {  
                //Obtener la imagen
                $image = $request->file('image');

                //Leer como binario
                $imagedata= file_get_contents($image->getRealPath());
                $prenda->image = $imagedata; //tipo blob
                /*
                // Asignar una URL para acceder a la imagen
                $prenda->imageurl = route('prenda.image', ['id' => $prenda->id]);*/

                /*
                // Almacenar la imagen como ruta
                $image = $request->file('image');
                $DestinationPath = 'images/image/';
                $filename = time() . '-' . $image->getClientOriginalName(); //Evita los nombes repetidos colocando un texto del tiempo actual
                $upload = $request->file('image')->move($DestinationPath,$filename);
                $prenda->image = $DestinationPath . $filename;
                */
            }
            $prenda->user_id = $request->user_id;
            $prenda->descripcion = $request->descripcion;
            $prenda->precio = $request->precio;
            $prenda->tiempo_uso = $request->tiempo_uso;
            $prenda->user_name = $request->user_name;
            $prenda->talla = $request->talla;
            $prenda->save();
            //Prenda::create($request->validated());
            return redirect()->route('prendas.index')
                ->with('success', 'Prenda creada exitosamente');
        }
    }

    /**
     * Muestra los datos de la prenda a detalle
     */
    public function show($id)
    {
        $data=Prenda::find($id);
        $user_id = $data->user_id;


        $prenda = Prenda::find($id);
        $user = User::find($user_id); //Busco en la base de datos
        /*
        $imagedata = $prenda->image;
        $imageurl = PrendaController::image($imagedata);
        */

        return view('prenda.show', compact('prenda','user')); //Paso las variables a la vista
    }

    /**
     * Muestra el formulario
     */
    public function edit($id)
    {
        $prenda = Prenda::find($id);

        return view('prenda.edit', compact('prenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PrendaRequest $request, Prenda $prenda)
    {
        if($request->validated())
        {
            /*
            if ($request->hasFile('image'))
            {
                File::delete($prenda->image);
                $image = $request->file('image');
                $DestinationPath = 'images/image/';
                $filename = time() . '-' . $image->getClientOriginalName(); //Evita los nombes repetidos colocando un texto del tiempo actual
                $upload = $image->move($DestinationPath,$filename);
                $prenda->image = $DestinationPath . $filename;
            }
            */
            
            if ($request->hasFile('image')) //Si hay una imagen en la actualizacion entonces guarda todo
            {  
                //Obtener la imagen
                $image = $request->file('image');

                //Leer como binario
                $imagedata= file_get_contents($image->getRealPath());
                $prenda->image = $imagedata; //tipo blob

                $prenda->precio = $request->precio;
                $prenda->descripcion = $request->descripcion;
                $prenda->tiempo_uso = $request->tiempo_uso;
                $prenda->user_id = $request->user_id;
                $prenda->user_name = $request->user_name;
                $prenda->talla = $request->talla;
                $prenda->save();
                /*
                // Asignar una URL para acceder a la imagen
                $prenda->imageurl = route('prenda.image', ['id' => $prenda->id]); */
                return redirect()->route('prendas.index')
                ->with('success', 'Prenda actualizada exitosamente');
            }
            else {
                $prenda->precio = $request->precio;
                $prenda->descripcion = $request->descripcion;
                $prenda->tiempo_uso = $request->tiempo_uso;
                $prenda->user_id = $request->user_id;
                $prenda->user_name = $request->user_name;
                $prenda->talla = $request->talla;
                $prenda->save();
                return redirect()->route('prendas.index')
                ->with('success', 'Prenda actualizada exitosamente');
            }

            //$prenda->update($request->validated());
        }
    }

    public function destroy($id)
    {
        /*
        $image = Prenda::find($id);
        File::delete($image->image);
        */
        Prenda::find($id)->delete();
        return redirect()->route('prendas.index')
            ->with('success', 'Prenda eliminada exitosamente');
    }
}
