@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-light text-service">Liste des icones</h1>
@stop

@section('content')
    <div class="row text-dark">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="container w-75 rounded p-2 text-center table table-dark">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">icone</th>
                            <th scope="col">Service</th>
                            <th scope="col">texte</th>
                            <th scope="col">Action</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($service as $item)
                                <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td >
                                    <i style="font-size: 30px" class="{{$item->icone->image}}"></i>
                                </td>
                                <td>{{$item->titre}}</td>
                                <td style="width: 50%">{{$item->text}}</td>
                                <th scope="col">
                                    
                                    <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#edit{{$item->id}}" aria-expanded="false" aria-controls="collapseExample">
                                          Edit
                                        </button>
                                      </p>
                                      <form action="/delete-service/{{$item->id}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    </th>
                                    <div class="collapse" id="edit{{$item->id}}">
                                      <div class="card card-body">
                                          <form action="/edit-service/{{$item->id}}" method="post">
                                            @csrf
                                            <div class="row">

                                                <div class="col-3">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">icone</label>
                                                        <select name="icone_id" class="form-control" id="exampleFormControlSelect1">

                                                            <option value="{{$item->icone->id}}">{{$item->icone->image}}</option>

                                                            @foreach ($icone as $elem)
                                                                <option value="{{$elem->id}}">{{$elem->image}}</option>
                                                            @endforeach
                                                            


                                                        </select>
                                                      </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1">Service : </label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="titre" value="{{$item->titre}}">
                                                      </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="col-6">
                                                        <h5>Description : </h5>
                                                        <textarea name="text" class="text-dark" value='{{$item->texte}}' id="texte" cols="50" rows="5">{{$item->text}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-2 d-flex align-items-center">
                                                    <button type="submit" class="btn btn-success">Modifier</button>
                                                </div>
                                            </div>
                                        </form>
                                      </div>
                                    </div>
                                </tr>

                            @endforeach

                        </tbody>
                        
                      </table>
                </div>
            </div>
        </div>
    </div>
@stop
