<?php

namespace App\Exceptions;

use ErrorException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Translation\Exception\NotFoundResourceException;
use Symfony\Component\ErrorHandler\Error\UndefinedFunctionError;
use Illuminate\Http\Exceptions\PostTooLargeException;
use Symfony\Component\ErrorHandler\Error\FatalError;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    public function render($request, Throwable $e) //viene por defecto en laravel
    {
        if ($e instanceof QueryException) {
            //si la base de datos falla cuando un usuario esta loggeado
            if (Auth::check()){
                Auth::logout();
            }
            //error de base de datos
            return response()->view('viewerrores.errorconexionDB');
        }
        if ($e instanceof NotFoundHttpException) {
            // manejjo de un error 404
            // lanzar uns excepción para redirigir a otra URL
            return response()->view('viewerrores.error404');
        }
        if ($e instanceof NotFoundResourceException) {
            return response()->view('viewerrores.recursonoencontrado');
        }
        if ($e instanceof UndefinedFunctionError) {
            return response()->view('viewerrores.funcionnoencontrada');
        }
        if ($e instanceof ErrorException) { //Por si se ingresa un valor no valido en una ruta que llama a una funcion
            return response()->view('viewerrores.errorexception');
        }
        if ($e instanceof PostTooLargeException){
            return response()->view('viewerrores.posttoolarge');
        }
        if($e instanceof \PDOException){
            return response()->view('viewerrores.errorconexionDB');
        }
        if ($e instanceof FatalError) {
            if (Auth::check()){
                Auth::logout();
            }
            return response()->view('viewerrores.errorfatal');
        }
    return parent::render($request, $e);
    }
}
