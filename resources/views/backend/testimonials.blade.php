@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-light text-center">testimonials</h1>
@stop

@section('content')
    <div class="row text-dark">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        
                        <div class="col-4">
                            <h3 class="text-center">Add</h3>
                            <div class="row card">
                                @can('webmaster')
                                    
                                    <form action="/add-testi" method="post">
                                    @csrf
                                    <div class="m-4">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Texte</label>
                                            <textarea class="form-control" name="texte" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <select name="team_id" class="form-control" name="" id="exampleFormControlSelect1">
                                            @foreach ($team as $item)
                                                <option value="{{$item->id}}" >{{$item->users->name}}</option>                                           
                                            @endforeach
                                            </select>


                                        </div>
                                        <button type="submit" style="width: 100%" class="btn btn-success">ajouter</button>
                                    </form>
                                @endcan

                            </div>
                        </div>
                        <div class="col-6 text-right">
                            <h3 >Voulez vous ajouter un nouveau membre parmi la TEAMS LABS ?</h3> <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              Ajouter
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un membre</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  @can('webmaster')
                                    <form action="/add-team" method="post" enctype="multipart/form-data">
                                        @csrf
                                    <div class="modal-body">
                                            <div class="m-4">
                                                
                                                <select class="form-control" name="user_id">
                                                    @foreach ($user as $item)
                                                    <div class="d-none">{{$sors=0}}</div>
                                                      @foreach ($team as $elem)
                                                        @if ($elem->user_id != $item->id && $sors==0)
                                                          <option value="{{$item->id}}">{{$item->name}}</option>
                                                          <div class="d-none">{{$sors++}}</div>
                                                        @endif
                                                      @endforeach
                            
                            
                                                    @endforeach
                                                </select>

                                                <div class="form-group">
                                                    <label for="fonction">Fonction</label>
                                                    <input type="text" class="form-control" name="fonction" id="fonction" >
                                                </div>

                            
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Créer</button>
                                            </div>
                                        </form>
                                      
                                  @endcan
                                </div>
                              </div>
                            </div> 
                        </div>              
                    </div>
                    <h1 class="m-0 text-dark text-center">Liste testimonials</h1>

                    <div class="row d-flex justify-content-center">
                        @foreach ($testi as $elem)
                        <div class="col-3 m-4">
                            @can('webmaster')
                                <form action="/edit-testi/{{$elem->id}}" method="post">
                                    @csrf
                                <div class="box-body box-profile bg-dark text-dark text-center rounded border">
                                    <img class="mt-4 profile-user-img img-responsive img-circle" src="{{ asset('img/' . $elem->team->users->pdp) }}" alt="User profile picture">
                                    
                                    <select style="width: 70%"  name="team_id" class="form-control my-3 mx-auto" name="" id="exampleFormControlSelect1">
                                        <option value="{{$elem->team->id}}" >{{$elem->team->users->name}}</option>                                           

                                        @foreach ($team as $item)
                                            <option value="{{$item->id}}" >{{$item->name}}</option>                                           
                                        @endforeach
                                    </select>
                                    
                                    <p class="text-muted text-center">{{$elem->team->users->fonction}}</p>
                    
                                    <ul class="list-group list-group-unbordered">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Texte</label>
                                            <textarea class="form-control" name="texte" id="exampleFormControlTextarea1" rows="3">{{$elem->texte}}</textarea>
                                        </div>
                                    </ul>
                    
                                    <button type="submit" style="width: 100%" class="btn btn-warning text-white">Modifier</button>

                                    
                                </div>
                            </form>
                                
                            @endcan
                            @can('webmaster')
                                <form action="/del-testi/{{$elem->id}}" method="post">
                                    @csrf
                                    <button type="submit" style="width: 100%" class="btn btn-danger text-white">Delete</button>
        
                                </form>
                                
                            @endcan
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
