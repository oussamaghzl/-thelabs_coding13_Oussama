@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if (Auth::user()->role_id == 1)
                        <h1 style="font-size: 30px" class="text-dark text-center">
                            Bonjour Administrateur,
                            <br>
                            <h4 style="font-weight: lighter" class="text-dark">
                            Vous avez accés à toutes les pages !
                            </h4>
                        </h1>
                    @endif
                    @if (Auth::user()->role_id == 2)
                    <h1 style="font-size: 30px" class="text-dark ">
                        Bonjour Rédacteur,
                        <br>
                            <h4 style="font-weight: lighter" class="text-dark">
                                Vous avez seulement accès à la catégorie Blog !
                            </h4>
                        </h1>
                    @endif
                    @if (Auth::user()->role_id == 3)
                    <h1 style="font-size: 30px" class="text-dark text-center">
                        Bonjour Webmaster,
                        <br>
                            <h4 style="font-weight: lighter" class="text-dark">
                            Vous avez accés à toutes les pages sauf la page Profil et liste des users !
                            </h4>
                        </h1>
                    @endif
                    @if (Auth::user()->role_id == 4)
                    <h1 style="font-size: 30px" class="text-dark text-center">
                        Bonjour Membre,
                        <br>
                            <h4 style="font-weight: lighter" class="text-dark">
                            Tu fais quoi ici  ?!
                            </h4>
                        </h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop
