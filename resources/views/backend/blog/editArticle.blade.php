@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
    <div class="row container-fluid w-75 mx-auto">

                <div class="col-10 text-dark">
                    <h1 class="m-0 text-light text-center">article</h1>

                    <div class="card mb-3">
                        
                        <img class="card-img-top" height="40%" width="80%" src="{{asset('img/' . $article->image)}}" alt="Card image cap">
                        <div class="card-body">
                        <h3>{{$article->titre}}</h3>
                        <p class="card-text">{{$article->texte}}</p>
                        
                        
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <h1 class="m-0 text-light text-center">Edit </h1>

                    <form action="/edit-article/{{$article->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="">Modifier image article</label>
                        <input type="file" name="image" id="">
    
                        <label for="">Modifier le titre</label>
                        <input type="texte" name="titre" id="">
    
                        <label for="">Modifier le texte</label>
                        <input type="texte" name="texte" id="">

                        <div class="d-flex my-5">

                            <h1 class="card-text"><small class="text-muted">Check : </small></h1>
                                <button class="ml-2 btn btn-warning">
                                    Publier
                                </button>
                        </div>

                        <button class="btn btn-success" type="submit">Modifier l'article</button>
                    </form>

                    
                </div>

    </div>
@stop
