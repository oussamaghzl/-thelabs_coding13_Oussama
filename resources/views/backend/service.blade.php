@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
    <div class="row text-dark">
        <div class="col-12">
            <div class="row mx-auto">
                <div class="col-3">
                    <h3 class="m-0 text-light  text-center">Creation de service</h3>
                    <br>
                    <div class="card rounded border">
                        @can('webmaster')
                            
                        <form action="/add-service" method="post" >
                            @csrf
                          <div class="modal-body">
                                <div class="m-4" >
                                    
                                    <div class="form-group">
                                        <label for="name">Titre du service</label>
                                        <input type="titre" class="form-control" name="titre" id="name" >
                                      </div>

                                      <div class="form-group">
                                          <label for="fonction">Texte du service</label>
                                          <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>

                                        <select name="icone_id" class="form-control" id="exampleFormControlSelect1">
    

                                            @foreach ($icone as $elem)
                                                <option value="{{$elem->id}}">{{$elem->image}}</option>
                                            @endforeach
                                            

                                        </select>

                                        <button type="submit" class="btn btn-primary">Creer</button>


                                    </div>
                                </div>
                                
                            </form>

                            @endcan
                        </div>
                </div>

                <div class="col-9">
                    <h3 class="m-0 text-light  text-center">Liste des services</h3>
                        <br>
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
                                            <a href="/edit-ser/{{$item->id}}">
                                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#edit{{$item->id}}" aria-expanded="false" aria-controls="collapseExample">
                                                Edit
                                                </button>
                                            </a>

                                          </p>
                                          @can('webmaster')
                                            <form action="/delete-service/{{$item->id}}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                              
                                          @endcan
                                        </th>
                                        
                                    </tr>
    
                                @endforeach
    
                            </tbody>
                            
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
