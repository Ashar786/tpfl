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
                <center><a href="/admin/"><div class="btn btn-info">Back</div></a>
                
                <form class="form-inline" action="/admin" method="Post">
                {{csrf_field()}}
                  <div class="form-group">
                    <label for="exampleInputName2">Name of the Hotel</label>
                    <input type="text" class="form-control" id="exampleInputName2" name="name" placeholder="Hotel Name">
                  </div>
                  
                  <a href="/admin"><button type="submit" class="btn btn-default"> ADD HOTEL</button></a>

                </form>
                

                </center>
            </div>
        </div>
    </div>
</div>
@endsection
