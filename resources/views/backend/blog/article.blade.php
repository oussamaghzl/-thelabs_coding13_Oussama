@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-light">Article</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="box box-primary">
                    <div class="box-header">
                    <i class="ion ion-clipboard"></i>
                    
                    
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body py-3 container-fluid w-75 mx-auto text-dark">

                        <form action="/add-article" enctype="multipart/form-data" method="POST" >
                            @csrf

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                                <h3> Vous etes l'auteur : <b>{{Auth::user()->name}}</b></h3>
                                
                                <div class="form-group">
                                    <label for="1t">Titre de l'article</label>
                                    <input type="text" class="form-control" id="1t" value="{{ old('titre') }}" name="titre" >
                                </div>
                                <div class="form-group">
                                    <label for="2t">Date de l'article</label>
                                    <input type="date" class="form-control" id="2t" value="{{ old('date') }}" name="date" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Texte</label>
                                    <textarea class="form-control" name="texte" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>
                                <div class="form-group">
                                    <label for="3t">Image de l'article</label>
                                    <input type="file" class="form-control" id="3t" value="{{ old('image') }}" name="image">
                                </div>
                                

                                <div  class="form-row">
                                    <div class="form-group">
                                    <label>Select Tag</label>
                                    <select multiple="" style="height: 150px; width: 500px;" class="form-control" value="{{ old('cats[]') }}" name="cats[]">
                                        @foreach ($tag as $item)
                                            <option value="{{$item->id}}"  {{ in_array($item->id, old('cats') ?: []) ? 'selected' : '' }}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>

                                <div  class="form-row">
                                    <div class="form-group">
                                    <label>Select Categorie</label>
                                    <select multiple="" style="height: 150px; width: 500px;" class="form-control" value="{{ old('tabcateg[]') }}" name="tabcateg[]">

                                        @foreach ($categorie as $item)
                                            <option value="{{$item->id}}"  {{ in_array($item->id, old('tabcateg') ?: []) ? 'selected' : '' }}>{{$item->name}}</option>
                                        @endforeach

                                    </select>
                                    </div>
                                </div>
                            
                                <button class="btn btn-success" type="submit">Creer l'article</button>

                            </form>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
@stop
