@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-light my-5 text-center">Mail Box</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            
            <div class="container-fluid w-75 mx-auto">
                <table class="table bg-light text-dark border text-center">
                    <thead>
                      <tr>
                        <th scope="col">De</th>
                        <th scope="col">subject</th>
                        <th scope="col">message</th>
                        <th scope="col">Heure</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($newMessage as $item)
                        
                            <tr>
                            <th scope="row">{{$item->name}}</th>
                            <td>{{$item->subject}}</td>
                            <td>{{Str::limit($item->message, 50, ' ...') }}</td>
                            <td>{{$item->created_at->format('H:i:s')}}</td>
                            </tr>

                        @endforeach
                    </tbody>
                  </table>
              </div>



            
        </div>    
    </div>    
@stop    















  