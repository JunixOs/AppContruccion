<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prenda;
use App\Http\Requests\PrendaRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $prendas = Prenda::paginate();
        return view('prenda.index', compact('prendas'))
            ->with('i', (request()->input('page', 1) - 1) * $prendas->perPage());
    }
}
