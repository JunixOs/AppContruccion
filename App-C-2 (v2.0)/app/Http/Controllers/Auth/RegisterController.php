<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\UserController;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'telefono' => ['required', 'integer', 'digits_between:5,10'],
            'extension_telefonica' => ['required','string', 'max:255'],
            'imagen_perfil' => ['nullable','image','mimes:jpeg,png,jpg,gif,svg,bmp,webp,tiff','max:2048']
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'name.max' => 'El nombre no puede tener más de 255 caracteres.',
            
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Por favor, ingresa un correo electrónico válido.',
            'email.unique' => 'Este correo electrónico ya está registrado.',
            
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
            
            'telefono.required' => 'El teléfono es obligatorio.',
            'telefono.integer' => 'El teléfono debe ser un número entero.',
            'telefono.digits_between' => 'El teléfono debe tener entre 5 y 10 digitos',
            
            'extension_telefonica.required' => 'La extensión telefónica es obligatoria.',
            'extension_telefonica.max' => 'La extensión telefónica no puede tener más de 255 caracteres.',
            
            'imagen_perfil.image' => 'El archivo debe ser una imagen.',
            'imagen_perfil.mimes' => 'La imagen debe tener uno de los siguientes formatos: jpeg, png, jpg, gif, svg, bmp, webp, tiff.',
            'imagen_perfil.max' => 'La imagen no puede pesar más de 2MB.',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']), //Con hash activado
            //'password' => $data['password'],
            'telefono' => $data['telefono'],
            'extension_telefonica' => $data['extension_telefonica'],
        ]);
    }
}
