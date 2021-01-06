@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    @stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body py-5">

                    <div class="bg-white col-12">
                                                    
                            <h2 class="mb-5  text-dark text-center ">Titre du site</h2>
                            
                        
                    </div>

                        <div class="row">
                            <div class="col-4">

                                <div class="box box-primary">
                                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                                    <i class="ion ion-clipboard"></i>
                        
                                    <h4 class="box-title bg-warning m-0 p-3">Liste des titres</h4>
                        
                                    
                                    </div>

                                    <!-- /.box-header -->
                                    <div class="box-body">
                                    <ul class="todo-list ui-sortable">
                                        
                                        <li>
                                        <span class="text">Let theme shine like a star</span>
                                        <div class="tools">
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash-o"></i>
                                        </div>
                                        </li>
                                        
                                        
                                        
                                    </ul>
                                    <div class="box-footer clearfix no-border">
                                        <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
                                    </div>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>


                            
                            <div class="row m-5">

                                <form action="/edit-titre" method="post" >

                                    @csrf

                                    <div class="form-group">
                                        <input style="width: 90vh" name="grandTitre" value="{{$titre->grandTitre}}" type="text" class="mx-auto form-control" id="titre-1">
                                        <button type="submit" class="mt-4 btn btn-success">Modifier</button>
                                    </div>
    
                                </form>
                                
                            </div>

                            <h2 class="mb-5 text-dark text-center ">Caroussel du site</h2>

                            <p>Liste d'image dans le caroussel</p>

                            <div class="row text-center mx-auto">

                                @foreach ($caroussel as $item)

                                <ul class="col" style="list-style: none;" >

                                    <img style="width: 150px" src="{{asset("img/" . $item->image)}}" alt="">

                                        <li>
                                            <form action="/modif-logo/{{$item->id}}" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <input type="file" name="lien" value="{{$item->lien}}">
                                                <button class="btn btn-success" type="submit">Modifier</button>
                                            </form>
                                        </li>   

                                        <li>
                                            <form action="/delete-logo/{{$item->id}}" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </li>
                                    </ul>
                                    
                                @endforeach
                                  
                            </div>
                            <div class=" text-center">

                                    <p>Ajouter des images</p>

                                    <form action="/add-logo" enctype="multipart/form-data" method="post">
                                                        
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                            <label style="width: 78px;" class="custom-file-label text-left" for="validatedCustomFile"></label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                          </div>
                                    </form>
                                </div>

                                

                            </div>
                         
                    </div>

                </div>
                
            </div>

        </div>

    </div>
    
@stop
