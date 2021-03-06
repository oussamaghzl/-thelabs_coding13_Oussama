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

                    @can('adminWebmaster', $article)
                        
                        <form action="/edit-article/{{$article->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="">Modifier image article</label>
                            <input type="file" name="image" id="">
        
                            <label for="">Modifier le titre</label>
                            <textarea name="titre" id="" cols="50" rows="1">{{$article->titre}}</textarea>

                            <label for="">Modifier le texte</label>
                            <textarea name="texte" id="" cols="50" rows="5">{{$article->texte}}</textarea>

                            <label for="">Nos Tags</label><br>

                            <div class="d-none">
                                <input type="text" name="auteur_id" value="{{$article->auteur_id}}">
                            </div>

                            <select name="cats[]" class="city form-control" data-placeholder="Pilih Kota" style="width: 100%;" multiple="multiple">
                                @foreach($tags as $item)
                                    @if(in_array($item->id, $tableauTags))
                                    <option value="{{ $item->id }}" selected="true">{{ $item->name }}</option>
                                    @else
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif 
                                @endforeach
                            </select>
                            
                            <label for="">Nos Categories</label><br>

                            <select name="tabcateg[]" class="city form-control" data-placeholder="Pilih Kota" style="width: 100%;" multiple="multiple">
                                @foreach($categories as $item)
                                    @if(in_array($item->id, $tableauCat))
                                    <option value="{{ $item->id }}" selected="true">{{ $item->name }}</option>
                                    @else
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif 
                                @endforeach
                            </select>

                            

                            <button class="btn btn-success" type="submit">Modifier l'article</button>
                        </form>
                    @endcan

                    
                </div>

    </div>
@stop
