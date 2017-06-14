@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <div class="pull-right"><a href="/admin/create"><div class="btn btn-info">ADD HOTEL</div></a></div>
                <center><div class="com-md-6">HOTELS</div>
                <br>
                <ul class="list-group">
                @foreach($Hotels as $Hotel)
                  <a href="{{'/admin/'.$Hotel->id}}"><li class="list-group-item">{{$Hotel->name}}</li></a>
                @endforeach
                </ul>
                
                </center>
            </div>
        </div>
    </div>
</div>
@endsection
