@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-light">Ready</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="box box-primary">
                    <div class="box-header">
                    <i class="ion ion-clipboard"></i>
                    <div class="row bg-warning">
                        <h4 class="box-title  m-0 p-3" style="color: white">EDIT</h4>
                    </div>
                    
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                    <ul class="todo-list ui-sortable">
                        @can('webmaster')
                            <form action="/edit-ready" method="POST">
                                @csrf

                                <li class="bg-dark border-bottom px-2 py-3">
                                    <p>Sous titre</p>
                                    <input type="text" name="soustitre" style="width: 60vh" value="{{$ready->soustitre}}" id="">
                                </li>

                                <li class="bg-dark border-bottom px-2 py-3">
                                    <p>Bouton</p>
                                    <input type="text" name="bouton" style="width: 60vh" value="{{$ready->bouton}}" id="">
                                </li>

                                <li class="bg-dark px-2 py-2 text-right">
                                    <button class="btn btn-success" type="submit">Modifier</button>
                                </li>

                                </form>
                            
                        @endcan
                    </ul>
                        
                    
                    </div>
            </div>
        </div>
    </div>
@stop
