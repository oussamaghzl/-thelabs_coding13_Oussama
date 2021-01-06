@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="mt-5 mb-3 text-light text-center ">NavBar</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body py-4">

                    <header class="header-section d-flex justify-content-center ">

                        <div class="row d-flex">

                            <nav>
                                <form action="/modif-navbar" enctype="multipart/form-data" method="post">
                                    @csrf  
                                    <div class="row d-flex">
                                        <div class="col-6">
                                            <img src="{{asset("img/logoPetit.jpg")}}" alt="">
                                        </div>
                                        <div class="col-6">
                                            <ul class="menu-list d-flex ">
                                                <div class="form-group">
                                                    <input name="page1" value="{{$navbar->page1}}" type="text" class="form-control" id="texte-1"  >
                                                </div>
                                                <div class="form-group">
                                                    <input name="page2" value="{{$navbar->page2}}" type="text" class="form-control" id="texte-1" >
                                                </div>
                                                <div class="form-group">
                                                    <input name="page3" value="{{$navbar->page3}}" type="text" class="form-control" id="texte-1" >
                                                </div>
                                                <div class="form-group">
                                                    <input name="page4" value="{{$navbar->page4}}"  type="text" class="form-control" id="texte-1" >
                                                </div>
                                            </ul>
                                        </div>
                                        <div class="mx-auto">

                                            <button type="submit" class="btn btn-success">Modifier</button>
                                        </div>
                                    </div>
                                </form>

                            </nav>

                        </div>

                    </header>

                </div>
                
            </div>
            <h2 class="mt-5 mb-3 text-light text-center ">Logo du site</h2>
            <div class="card-body">
                <form action="/modif-logo" enctype="multipart/form-data" method="post">
                    @csrf
                    <img src="{{asset("img/logoGrand.jpg")}}" alt="">
    
                    <input type="file" name="lien" value="{{$logo->lien}}">
                    <button type="submit">Modifier</button>
                </form>
                
            </div>
        </div>  
    </div>
@stop
