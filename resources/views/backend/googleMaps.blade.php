@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-light">GOOGLE MAPS</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="box box-primary">
                    <div class="box-header">
                    <i class="ion ion-clipboard"></i>
                    <div class="row bg-warning">
                        <h4 class="box-title  m-0 p-3" style="color: white">Edit</h4>
                    </div>
                    
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                    <ul class="todo-list ui-sortable">

                        

                        <form action="/edit-contact" method="POST" >
                            @csrf
                            <div class="d-none">
                                <li class="bg-dark border-bottom px-2 py-3">
                                    <input type="text" name="titre" style="width: 60vh" value="{{$contact->titre}}" id="">
                                </li>
    
                                <li class="bg-dark border-bottom px-2 py-3">
                                    <input type="text" name="rue" style="width: 60vh" value="{{$contact->rue}}" id="">
                                </li>
    
                                <li class="bg-dark border-bottom px-2 py-3">
                                    <input type="text" name="codepostal" style="width: 60vh" value="{{$contact->codepostal}}" id="">
                                </li>
    
                                <li class="bg-dark border-bottom px-2 py-3">
                                    <input type="text" name="telephone" style="width: 60vh" value="{{$contact->telephone}}" id="">
                                </li>
    
                                <li class="bg-dark border-bottom px-2 py-3">
                                    <input type="text" name="email" style="width: 60vh" value="{{$contact->email}}" id="">
                                </li>
                            </div>
                            <li class="bg-dark border-bottom px-2 py-3">
                                <input type="text" name="recherche" style="width: 60vh" class="px-4 py-3" value="{{$contact->recherche}}" id="">
                            </li>

                            <li class="bg-dark px-2 py-2 text-right">
                                <button class="btn btn-success" type="submit">Modifier</button>
                            </li>

                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
