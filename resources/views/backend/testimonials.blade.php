@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-light text-center">Liste testimonials</h1>
@stop

@section('content')
    <div class="row text-dark">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <h3 class="text-center">Add</h3>
                            <div class="row card">
                                <form action="/add-testi" method="post">
                                @csrf
                                <div class="m-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Texte</label>
                                        <textarea class="form-control" name="texte" id="exampleFormControlTextarea1" rows="3"></textarea>
                                      </div>
                                      <select name="team_id" class="form-control" name="" id="exampleFormControlSelect1">
                                          @foreach ($team as $item)
                                              <option {{$item->id}}>{{$item->name}}</option>                                           
                                          @endforeach
                                        </select>


                                    </div>
                                    <button type="submit" style="width: 100%" class="btn btn-success">ajouter</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
