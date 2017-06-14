@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Front page</div>

               
                <div class="pull-right"><a href="/admin/create"><div class="btn btn-info">ADD HOTEL</div></a></div>
                <center><div class="com-md-6">HOTELS</div>
                <br>
                <ul class="list-group">
                @foreach($Hotels as $Hotel)
                  <li class="list-group-item">{{$Hotel->name}}</li>
                @endforeach
                </ul>
                
                </center>
            </div>
        </div>
    </div>
</div>
@endsection
