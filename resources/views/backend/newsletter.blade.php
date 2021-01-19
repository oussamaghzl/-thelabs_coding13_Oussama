@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-light my-5 text-center">Newsletter</h1>
@stop

@section('content')
    <div class="row">
        
        <div class="col-12">

            <div class="container-fluid w-75 mx-auto">
                <table class="table bg-light text-dark border text-center">
                    <thead>
                        <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($newsletter as $item)

                            <tr>
                            <th scope="row">{{$item->email}}</th>
                            <th>
                                @can('webmaster')
                                    <form action="/delete-newsletter/{{$item->id}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            Désabonner
                                        </button>
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
@stop    















  