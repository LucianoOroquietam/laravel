<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
Aquí puedes registrar rutas web para tu aplicación. Estas rutas son cargadas
por RouteServiceProvider dentro de un grupo que contiene
el grupo de middleware "web". ¡Crea algo increíble!
|

? es para decir que puede ser opcional
laravel analiza las url igual que nest de arriba hacia abajo
importa el orden de las rutas ,

al array se le pasan dos parametros
[clase,el nombre del metodo]

esta ruta la interpreta como que hay un __invoke en el controller
Route::get('/home', HomeController::class);

*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/home', HomeController::class);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'posts']);
Route::get('/posts/{post}/{category?}', [PostController::class, 'postsCategory']);





/*

Route::get('/', function(){
    return view('testView');
});

/*Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts', function(){
    return "Aca se mostraran todos los posts";
});


Route::get('posts/create', function(){
    return 'aqui se mostrara un form enviado por post';
});


Route::get('/posts/{post}', function($post){
    return "Aca se mostrara el post {$post}";
});

Route::get('/posts/{post}/{category?}', function($post, $category = null){
    if(isset($category)){
        return "Aca se mostrar el post {$post} de la categoria {$category}";
    }
    return "Aca se mostrar el post {$post} sin la category";
});
*/

