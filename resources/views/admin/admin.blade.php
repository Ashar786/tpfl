@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    ADMIN SECTION
                </div>
                <center><div class="btn btn-info"><a href="/admin/create">ADD HOTEL</a></div>
                <br>
                <h2>TOTAL HOTEL IN DB</h2>
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
