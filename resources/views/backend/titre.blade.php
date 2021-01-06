@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    @stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body py-5">

                    <div class="bg-white col-12">
                                                    
                            <h2 class="mb-5  text-dark text-center ">Titre / Caroussel</h2>
                            
                        
                    </div>

                        <div class="row">
                            <div class="col-5">

                                <div class="box box-primary">
                                    <div class="box-header">
                                    <i class="ion ion-clipboard"></i>
                                    <div class="row bg-warning">
                                        <h4 class="box-title  m-0 p-3" style="color: white">Liste des titres</h4>
                                    </div>
                                    
                                    </div>

                                    <!-- /.box-header -->
                                    <div class="box-body">
                                    <ul class="todo-list ui-sortable">

                                        <form action="/edit-titre" enctype="multipart/form-data" method="post">
                                            @csrf

                                            <li class="bg-dark border-bottom px-2 py-3">
                                                <input type="text" name="grandTitre" style="width: 60vh" value="{{$titre->grandTitre}}" id="">
                                            </li>

                                            <li class="bg-dark border-bottom px-2 py-3">
                                                <input type="text" name="titre1" style="width: 60vh" value="{{$titre->titre1}}" id="">
                                            </li>

                                            <li class="bg-dark border-bottom px-2 py-3">
                                                <input type="text" name="titre2" style="width: 60vh" value="{{$titre->titre2}}" id="">
                                            </li>

                                            <li class="bg-dark border-bottom px-2 py-3">
                                                <input type="text" name="titre3" style="width: 60vh" value="{{$titre->titre3}}" id="">
                                            </li>

                                            <li class="bg-dark border-bottom px-2 py-3">
                                                <input type="text" name="titre4" style="width: 60vh" value="{{$titre->titre4}}" id="">
                                            </li>

                                            <li class="bg-dark  px-2 py-3">
                                                <input type="text" name="titre5" style="width: 60vh" value="{{$titre->titre5}}" id="">
                                            </li>

                                            <li class="bg-dark px-2 py-2 text-right">
                                                <button class="btn btn-success" type="submit">Modifier</button>
                                            </li>

                                            </form>
                                    </ul>
                                        
                                    
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-6">

                                <div class="box  box-primary">
                                    <div class="box-header ui-sortable-handle">
                                    <i class="ion ion-clipboard"></i>
                        
                                        <div class="row bg-danger">
                                            <div class="col-8">
                                                <h5 class="box-title  m-0 p-4" style="color: white">Liste des images du caroussel</h5>

                                            </div>
                                            <div class="col-4">
                                                <form action="/add-carou" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class=" row mt-3">
                                                        <div class="col">
                                                            <input name="image" type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile" style="width: 9vh"></label>

                                                        </div>
                                                        <div class="col">
                                                            <button type="submit" class="btn btn-warning">Ajouter</button>

                                                        </div>
                                                      </div>
                                                </form>

                                            </div>
                                        </div>                        
                                    </div>

                                    <!-- /.box-header -->
                                    <div class="box-body">
                                    <ul class="todo-list ui-sortable">
                                        
                                        @foreach ($caroussel as $item)
                                            <li>
                                                <b style="padding: 0px 50px">{{$item->id}}</b>
                                                <img style="width: 100px" src="{{asset("img/" . $item->image)}}" alt="">
            
                                                <div class="tools pt-3">
                                                    <form action="/logo-delete/{{$item->id}}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </li>
                                        @endforeach
                                        
                                        
                                    </ul>
                                    
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>


                        
                         
                    </div>

                </div>
                
            </div>

        </div>

    </div>
    
@stop