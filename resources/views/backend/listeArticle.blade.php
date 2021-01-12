@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-light text-center">Liste des articles</h1>
@stop

@section('content')
    <div class="row">

            @foreach ($article as $item)
                <div class="col-6 text-dark">

                    <div class="card mb-3">
                        <img class="card-img-top" height="40%" width="80%" src="{{asset('img/' . $item->image)}}" alt="Card image cap">
                        <div class="card-body">
                        <h3>{{$item->titre}}</h3>
                        <p class="card-text">{{$item->texte}}</p>
                        <h1 class="card-text"><small class="text-muted">Check : </small></h1>
                        <a href="/article-edit/{{$item->id}}">
                            <button class="btn btn-warning">
                                EDIT
                            </button>
                        </a>
                        </div>
                    </div>
                </div>

            @endforeach
    </div>
@stop
