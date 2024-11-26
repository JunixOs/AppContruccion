<?php

namespace App\Http\Controllers;

use App\Models\Prenda;
use App\Http\Requests\PrendaRequest;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File; 
/**
 * Class PrendaController
 * @package App\Http\Controllers
 */
class PrendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prendas = Prenda::paginate();
        return view('prenda.index', compact('prendas'))
            ->with('i', (request()->input('page', 1) - 1) * $prendas->perPage());
    }

    public function redirect()
    {
        $prendas = Prenda::paginate();
        return view('prenda.misprendas', compact('prendas'))
            ->with('i', (request()->input('page', 1) - 1) * $prendas->perPage());
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prenda = new Prenda();
        return view('prenda.create', compact('prenda'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PrendaRequest $request)
    {
        if($request->validated())
        {

            $prenda = new Prenda();

            if ($request->hasFile('image'));
            {
                $image = $request->file('image');
                $DestinationPath = 'images/image/';
                $filename = time() . '-' . $image->getClientOriginalName(); //Evita los nombes repetidos colocando un texto del tiempo actual
                $upload = $request->file('image')->move($DestinationPath,$filename);
                $prenda->image = $DestinationPath . $filename;
            }
            $prenda->user_id = $request->user_id;
            $prenda->descripcion = $request->descripcion;
            $prenda->precio = $request->precio;
            $prenda->tiempo_uso = $request->tiempo_uso;
            $prenda->save();
            //Prenda::create($request->validated());
            return redirect()->route('prendas.index')
                ->with('success', 'Prenda created successfully.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $prenda = Prenda::find($id);
        return view('prenda.show', compact('prenda'));
    }

    /**
     * Show the form for editing the specified resource.
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
        if ($request->hasFile('image'))
        {
            File::delete($prenda->image);
            $image = $request->file('image');
            $DestinationPath = 'images/image/';
            $filename = time() . '-' . $image->getClientOriginalName(); //Evita los nombes repetidos colocando un texto del tiempo actual
            $upload = $image->move($DestinationPath,$filename);
            $prenda->image = $DestinationPath . $filename;
        }
        $prenda->precio = $request->precio;
        $prenda->descripcion = $request->descripcion;
        $prenda->tiempo_uso = $request->tiempo_uso;
        $prenda->user_id = $request->user_id;
        $prenda->save();
        //$prenda->update($request->validated());

        return redirect()->route('prendas.index')
            ->with('success', 'Prenda updated successfully');
    }

    public function destroy($id)
    {
        $image = Prenda::find($id);
        File::delete($image->image);
        Prenda::find($id)->delete();
        return redirect()->route('prendas.index')
            ->with('success', 'Prenda deleted successfully');
    }
}
