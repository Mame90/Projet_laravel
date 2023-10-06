<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//MVC


 Route::middleware(['first'])->group(function () {
    // Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    //  Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    // Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
    // Route::get('/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    // Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');
    // Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
 });
 
//MVC


//les routes models binding  cette partie me permet de bien gerer la logique des donnees

// Route::get('/users/{id}',function($id){
//     $us= User::findOrFail($id);
//        dd($us);
//      })->name('users');

     // La bonne pratique avec les routes models binding

    //  Route::get('/', function(){
    //     return view('Master')->name('master');
    // });
    

    //  Route::get('/', function(){
    //     return view ('Master')->name('home') ;
    //  });
     Route::get('/users/{user}',function(User $user){
        // return $user->name;
           dd($user);
         })->name('users')->missing(function(){
            return redirect()->route('master');
         });

    // Les routes simples avec l'utilisations des OREM eloquent
Route::get('/', function () {
   $posts= Post::paginate(25);
 //  $posts= Post::where('id', '>', 1)->update([ cet instruction permet d'effecctuer un mis a jourr avec query binding
   //$posts= Post::create([
      // 'prenom'=>'Moustapha',
      // 'nom'=>'Gueye',
      // 'email'=>'moustaph@gmail.com',

 //  ]);
    return $posts;
// mise a jour
//$posts= Post::find(1);
// $posts->prenom= "Ousmane";
// $posts->nom= "Seck";
// $posts->email= "Seckndanan@gmail.com";
//suppresion  
//$posts->delete;

   // Query builder permet de faire si on le souhaite des requetes sql dans la base
   // $posts= Post::where('id'> 2);
   // dd($posts);

 //  $posts= Post::paginate(2); // paginatevpermet de faire des pagination sur la bse de donneee
  // dd($posts);
  return  $posts;
   // return Post::all(['id','prenom']);
   //dd(Post::findOrFail(9));
   //  return view('layouts.index');
})->name('index');

// Route::get('/{$slug}-{id}', function(string $slug, string  $id, Request $request){
//    $post= Post::find($id);
//    return $post;
// })->where([
//    'id'=>'[0-9]+',
//    'prenom'=>'[a-z0-9\-]+'
// ])->name('show');


// Route::get('/contact}', function () {
//     return view('layouts.contact');
// })->name('contact');
// routes pour un formulaire
// Route::get('/create', [AdminController::class, 'create'])->name('create');
//Route::post('/create', [AdminController::class, 'store'])->name('store');
// Route::prefix('/blog')->name('blog.')->controller('BaseController::class')->group(function(){
//     Route::get('/formulaire', 'create')->name('formulaire');
// });

//Route::prefix('/blog')->name('blog.')->controller(FormController::class)->group(function(){
   Route::prefix('/blog')->name('blog.')->controller(FormController::class)->group(function(){

   Route::get('/','index')->name('index');
   Route::get('/new','create')->name('create');
   Route::post('/new',  'store');

   // Route::post('/create',[FormController::class, 'store'])->name('store');
   
      // $posts= Post::paginate(25);
      //  return $posts;

   // });
   Route::get('/{slug}-{id}','show')
     ->where([
      'id'=>'[0-9]+',
      'slug'=>'[a-z0-9\-]+'
   ])->name('show');

});

Route::get('/create', [FormController::class, 'create'])->name('create');
Route::post('/create',[FormController::class, 'store'])->name('store');

    


// les groupes de routes [ LES MIDDLEWARE]
 // j'ai eu a le prefixer avec le mot cle prefix (admin) et et nommee avec le mot cle name ('admin.')

// Route::middleware(['first','second'])->prefix('admin')->name('admin.')->group(function(){

    Route::get('/', function () {
        return view('layouts.index');
    })->name('index');
    Route::get('/contact', function () {
        return view('layouts.contact');
    })->name('contact');

//});
// Route::middleware(['first', 'second'])->prefix('admin')->group(function () {

//     Route::get('/cd', function () {
//         return view('layouts.index');
//     })->name('index');

//     Route::get('/contact', function () {
//         return view('layouts.contact');
//     })->name('contact');

// });


    