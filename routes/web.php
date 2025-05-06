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
use App\Models\Post;
use App\Utils\Casting as UtilsCasting;

Route::get('/home', HomeController::class);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'posts']);
Route::get('/posts/{post}/{category?}', [PostController::class, 'postsCategory']);


Route::get('prueba', function () {


$post = Post::find(1);

// return $post->created_at->format('d-m-Y');
// return $post->published_at->diffForHumans();

// return $post->published_at->format('d-m-Y');


// dd($post->is_active);


$value = UtilsCasting::cast($post->published_at, 'datetime', 'Y-m-d');
return $value;


    //crear nuevo post

    // $post = new Post;
    // $post->title = 'TitUlO DE pruEbA 4';
    // $post->content = 'contenido de prueba 2';
    // $post->categoria = 'categoria de prueba 2';

    // $post->save();

    // return $post;



    //$post = Post::find(1); --> buscar por id

    /* actualizar registro
    $post = Post::where('title', 'Titulo de prueba 2')->first();

    $post->categoria = 'Desarrollo web';
    $post->save();
    return $post;
    */



    //$posts = Post::all();
    //$posts = Post::where('id', '>=', '2')->get();
    //$posts = Post::orderBy('id', 'desc')->get();

    /* lista registros
    $posts = Post::orderBy('categoria', 'asc')
                    ->select('title', 'categoria')
                    ->take(2) //canti de registros
                    ->get();
    return $posts;
    */

    /*eliminar
    $post = Post::find(1);
    $post->delete();
    return "el elemento con id: " . $post . " fue eliminado con exito";
    */
});





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
