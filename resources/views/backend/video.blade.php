@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
    <div class="row">
        <div class="col-12 text-dark">
            <div class="card">
                <h2 class="mb-5 text-dark text-center">Video</h2>
                    <div class="row container-fluid w-75 mx-auto text-dark">

                        <div class="col-6 text-left">
                            <h4><u>Colonne de gauche</u> </h4>
                            <br>
                            {{$video->colGauche}}
                        </div>

                        <div class="col-6 text-right">
                            <h4><u>Colonne de droite</u> </h4>
                            <br>
                            {{$video->colDroite}}
                        </div>

                    </div>

                    <h4 class="text-center"><u>Bouton de la page</u></h4>

                    <div class="mx-auto">
                        <button class="btn btn-primary">{{$video->bouton}}</button>
                    </div>

                    <div class="row m-4">
                        <div class="col-4 text-center">
                            <h4 class="text-center"><u>Lien de la video</u></h4>
                            <p>Lien : {{$video->video}}</p>
                        </div>
                        <div class="col-8 text-center">
                            <h4 class="text-center"><u>image de la video</u></h4>
                            <p>
                                Banniere de la video :
                            </p>
                            <img width="400px" src="{{asset("img/" . $video->image)}}" alt="">
                        </div>
                    </div>




                    <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Modifier la page Video</button>

                   
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div style="width: 100vh" class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit video</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                @can('webmaster')
                                    
                                    <form enctype="multipart/form-data" action="/edit-video" method="post">
                                        @csrf

                                            <div class="row text-center">

                                                <div class="col-6">
                                                    <h5>Colonne de gauche</h5>
                                                    <textarea name="colGauche" value='{{$video->colGauche}}' id="texte" cols="50" rows="5">{{$video->colGauche}}</textarea>
                                                </div>

                                                <div class="col-6">
                                                    <h5>Colonne de droite</h5>
                                                    <textarea name="colDroite" value='{{$video->colDroite}}' id="texte" cols="50" rows="5">{{$video->colDroite}}</textarea>
                                                </div>                                        
                                            </div>
                                                <h4 class="text-center"><u>Bouton de la page</u></h4>

                                                <div class="mx-auto text-center">
                                                    <input type="text" name="bouton" value="{{$video->bouton}}">
                                                </div>
                                                <div class="row m-4">
                                                    <div class="col-4 text-center">
                                                        <h4 class="text-center"><u>Lien de la video</u></h4>
                                                        <input type="text" name="video"  value="{{$video->video}}">
                                                    </div>
                                                    <div class="col-8 text-center">
                                                        <h4 class="text-center"><u>image de la video</u></h4>
                                                        <p>
                                                            Banniere de la video :
                                                        </p>

                                                        <div class="row m-4">

                                                            <div class="col-4 d-flex align-items-center">
                                                                <div class="custom-file">
                                                                    <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
                                                                    <label class="custom-file-label" style="width: 25vh" for="validatedCustomFile">Miniature</label>
                                                                </div>
                                                                
                                                            </div>

                                                            <div class="col-8">
                                                                <input type = "text" class = "d-none" name="image" value = "{{$video->image}}">
                                                                <img width="300px" src="{{asset("img/" . $video->image)}}" alt="">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                @endcan

                            </div>
                        </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
@stop
