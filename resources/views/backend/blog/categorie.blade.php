@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-light">Categorie</h1>
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
                        @can('webmaster')
                            
                        <form action="/add-categorie"  method="POST" >
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

                            <div class="form-group">
                                <label for="1t">Nom du Categorie</label>
                                <input type="text" class="form-control" id="1t" value="{{ old('name') }}" name="name" >
                            </div>

                            <button class="btn btn-warning" type="submit">Creer la catégorie</button>

                            </form>
                        @endcan
                        </ul>
                    </div>
            </div>
        </div>
    </div>
@stop
