@extends('Master')
@section('title','creer un article')
@section('content')


<form action="" method="post">
    <input type="text" name="titre" value="article de demonstration">
    <textarea name="content">Contenu de demonstration</textarea>
        <button>Enregistrer</button>
</form>



@endsection