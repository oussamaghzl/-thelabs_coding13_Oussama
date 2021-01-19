@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
@can('webmaster')
    <form action="/edit-service/{{$service->id}}" method="post">
        @csrf
        <div class="container">

            <div class="row">
                <div class="col-3">
                    <div class="col icon" style="font-size: 100px;">
                        <i class="{{$service->icone->image}}"></i>
                    </div>
                    <select name="icon_id"><br>
                        @foreach($icons as $icon)
                        <option value="{{$icon->id}}" {{$service->icone_id == $icon->id  ? 'selected' : ''}}>{{$icon->image}}</option>
                        @endforeach
                    </select><br>
                    <button class="btn btn-success mt-4">Update</button>

                </div>
                <div class="col-9">
                    <label for="titre">Titre : <br><input type="text" id="titre" name="titre" value="{{$service->titre}}"></label><br>
                    <label for="texte">texte : <br><textarea id="texte" name="text" value="{{$service->text}}" cols="30" rows="10">{{$service->text}}</textarea><br>
                    </label>
                </div>
            </div>
        </div>
    </form>
    
@endcan

@stop