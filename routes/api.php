<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('users/{id}',function (Request $request, $id) {
    $persona = User::findOrFail($id);
    return $persona;
});

Route::get('users',function (Request $request) {

    $persona = User::get();
    return $persona;
});

Route::post('users',function (Request $request) {
    $persona = new User;

    //DESIDI QUITARLE LAS VALIDACIONES POR QUE PIENSO QUE PARA SER UN PROYECTO DE PRUEVA
    //NO SERIA MUY NECESARIA Y NO LAS APLIQUE EN LA BASE DE DATOS HACI QUE DESIDE MEJOR OMITIRLAS PERO SI PUEDO TRABAJAR CON ELLAS

    // $request->validate([
    //     'nombre' => 'required|max:45',
    //     'segundoNombre' => 'required|max:45',
    //     'apellido' => 'required|max:45',
    //     'segundoApellido' => 'required|max:45',
    //     'apellidoDeCasado' => 'required|max:45',
    //     'tipoDeDocumento' => 'required|max:8',
    //     'fechaDeNacimiento' => 'required|max:10',
    //     'telefono' => 'required|numeric',
    //     'email' => 'required|max:40|email|unique:users',
    //     'sexo' => 'required|max:9',
    //     'estadoCivil' => 'required|max:10',
    //     'direccion' => 'required|max:50'
    // ]);

    $persona->nombre = $request->input('nombre');
    $persona->segundoNombre = $request->input('segundoNombre');
    $persona->apellido = $request->input('apellido');
    $persona->segundoApellido = $request->input('segundoApellido');
    $persona->apellidoDeCasado = $request->input('apellidoDeCasado');
    $persona->tipoDeDocumento = $request->input('tipoDeDocumento');
    $persona->fechaDeNacimiento = $request->input('fechaDeNacimiento');
    $persona->telefono = $request->input('telefono');
    $persona->email = $request->input('email');
    $persona->sexo = $request->input('sexo');
    $persona->estadoCivil = $request->input('estadoCivil');
    $persona->direccion = $request->input('direccion');
    $persona->save();

    return "guardado";
});


Route::put('users/{id}',function (Request $request, $id) {
    $persona = User::findOrFail($id);
    //DESIDI QUITARLE LAS VALIDACIONES POR QUE PIENSO QUE PARA SER UN PROYECTO DE PRUEVA
    //NO SERIA MUY NECESARIA Y NO LAS APLIQUE EN LA BASE DE DATOS HACI QUE DESIDE MEJOR OMITIRLAS PERO SI PUEDO TRABAJAR CON ELLAS

    // $request->validate([
    //     'nombre' => 'required|max:45',
    //     'segundoNombre' => 'required|max:45',
    //     'apellido' => 'required|max:45',
    //     'segundoApellido' => 'required|max:45',
    //     'apellidoDeCasado' => 'required|max:45',
    //     'tipoDeDocumento' => 'required|max:8',
    //     'fechaDeNacimiento' => 'required|max:10',
    //     'telefono' => 'required|numeric',
    //     'email' => 'required|max:40|email|unique:users,email,'.$id,
    //     'sexo' => 'required|max:9',
    //     'estadoCivil' => 'required|max:10',
    //     'direccion' => 'required|max:50'
    // ]);

    $persona->nombre = $request->input('nombre');
    $persona->segundoNombre = $request->input('segundoNombre');
    $persona->apellido = $request->input('apellido');
    $persona->segundoApellido = $request->input('segundoApellido');
    $persona->apellidoDeCasado = $request->input('apellidoDeCasado');
    $persona->tipoDeDocumento = $request->input('tipoDeDocumento');
    $persona->fechaDeNacimiento = $request->input('fechaDeNacimiento');
    $persona->telefono = $request->input('telefono');
    $persona->email = $request->input('email');
    $persona->sexo = $request->input('sexo');
    $persona->estadoCivil = $request->input('estadoCivil');
    $persona->direccion = $request->input('direccion');
    $persona->save();

    return "cambios del user $id ";
});


Route::delete('users/{id}',function (Request $request, $id) {
    $empleados = User::findOrFail($id);
    $empleados->delete();
    return $empleados;
});