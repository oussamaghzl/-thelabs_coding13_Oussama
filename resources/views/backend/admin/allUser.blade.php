@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-light my-5 text-center">Liste des Users</h1>
@stop

@section('content')
    <div class="row">
        
        <div class="col-12">

            <div class="container-fluid w-75 mx-auto">
                <table class="table bg-light text-dark border text-center">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($user as $item)

                            <tr>
                                <th scope="row">{{$item->name}}</th>
                                <th scope="row">{{$item->email}}</th>
                                
                                @can('admin')
                                    
                                    <form action="/change-role/{{$item->id}}" method="post">
                                        @csrf
                                        <th>
                                            <select name="role_id">
                                                @foreach($role as $elem)
                                                <option value="{{$elem->id}}" {{$item->role_id == $elem->id  ? 'selected' : ''}}>{{$elem->role}}</option>
                                                @endforeach
                                            </select>
                                        </th>
                                        <th>
                                            <button type="submit" class="btn btn-warning">Modifier</button>
                                        </th>
                                    </form>

                                @endcan
                                
                            </tr>

                        @endforeach
                    </tbody>
                    <div class="text-center"> {{ $user->links() }}</div>
                  </table>
              </div>



            
        </div> 
    </div>    
@stop    















  