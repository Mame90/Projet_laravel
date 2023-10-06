<?php

namespace App\Http\Controllers;

use App\Inscription;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Pagination\Paginator;

class FormController extends Controller

{
    public function index ():Paginator{

       return \App\Models\Post::paginate(25);

        // $posts= Post::paginate(25);
        // return $posts;

    }
    public function create1()
    {
 return view('layouts.create');
    }

public function show(string $slug ,string $id): RedirectResponse | Post
{
    $post = Post::findOrFail($id);
     dd($post);
    if($post->slug !==$slug)
    {
        return to_route('blog.show',['slug'=>$post->slug, 'id'=>$post->id]);
    }
    return $post;
}




    public function create()
    {
        return view('layouts.formulaire');
    }

    public function store(Request $request)
     {
        // dd($request->all());
        $post= Post::create([
            'prenom' => $request->input('prenom'),
            'nom' => $request->input('nom'),
            'email' => $request->input('email')
            // 'prenom' => 'required|string|max:20',
            // 'nom' => 'required|nom|string|max:20',
            // 'email' => 'required|email',
        ]);
        return redirect('/contact')->with('success', 'Enregistrement réussi avec success veille vous connecter a votre compte !');  // rediretion  vers un page souhaiter
    //     dd($request->all());
    //     $validatedData = $request->validate([
    //         'prenom' => 'required|string|max:20',
    //         'nom' => 'required|string|max:255',
    //         'email' => 'required|email',
    //         // Ajoutez ici les autres règles de validation pour les champs du formulaire
        // ]);

//         Inscription::create($validatedData);

//         return redirect('/')->with('success', 'Enregistrement réussi !');
   
// }

}

}