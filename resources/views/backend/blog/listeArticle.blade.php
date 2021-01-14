@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-light text-center">Liste des articles</h1>
@stop


    {{-- ADIMNISTRATEUR --}}

@section('content')
    <div class="row">

            @foreach ($article as $item)
                <div class="col-6 text-dark">

                    <div class="card mb-3">
                        <img class="card-img-top" height="40%" width="80%" src="{{asset('img/' . $item->image)}}" alt="Card image cap">
                        <div class="card-body">
                        <h3>{{$item->titre}}</h3>
                        <p class="card-text">{{$item->texte}}</p>
                        @if ($item->check == 'non')

                            <div class="d-flex ">

                                <h1 class="card-text"><small class="text-muted">Check : </small></h1>
                                    <form action="/edit-check/{{$item->id}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <input class="d-none" name='check' value="oui">
                                        <button type="submit" class="ml-2 btn btn-warning">
                                            Publier
                                        </button>
                                    </form>
                                    
                                    <form class="ml-5" action="/delete-article/{{$item->id}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <button type="submit" class=" btn btn-danger">
                                            NE PAS PUBLIER
                                        </button>
                                    </form>
                                    
                            </div>           

                        @else

                            <div class="d-flex my-5">

                                    <button class="ml-2 btn btn-success">
                                        Article VALIDER ! 
                                    </button>
                            </div> 
                            
                            <div class="d-flex">
                                <a href="/article-edit/{{$item->id}}">
                                    <button class="btn btn-warning">
                                        EDIT
                                    </button>
                                </a>
                                <form class="ml-5" action="/delete-article/{{$item->id}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Supprimer l'article</button>
                                </form>
                            </div>
                        @endif

                        </div>
                    </div>
                </div>

            @endforeach
    </div>
@stop
