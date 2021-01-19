@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-light">Profil de l'utilisateur connecté</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row container-fluid w-50 mx-auto border bg-light">
                        <div class="col-3">
                            <div class="box-body box-profile">
                                <img class="profile-user-img img-responsive img-circle" src="{{asset('img/'. Auth::user()->pdp )}}" alt="User profile picture">
                  
                              </div>
                        </div>
                        <div class="col-8">
                            <div class="border">
                                <h2>{{Auth::user()->name}}</h2>
                                <p>Role : {{Auth::user()->roles->role}}</p>
                                <p>Email : {{Auth::user()->email}}</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@stop

























