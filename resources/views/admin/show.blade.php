@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">comments</div>

                
                
                <center><div class="com-md-6">HOTELS</div>
                <br>
                <h1>{{$item->name}}</h1>

                </center>
            </div>
            <h2>Comments:</h2>
            @if (Auth::guest())
                <div class="comments"> 
                    <ul class="list-group"> 
                @foreach($item->Comments as $comment)
                      <li class="list-of-group-item">{{$comment->body}}</li>
                @endforeach
                    </ul>
                </div>
            @else
                <div class="comments"> 
                        <ul class="list-group"> 
                    @foreach($item->Comments as $comment)
                          <li class="list-of-group-item">{{$comment->body}}</li>
                    @endforeach
                        </ul>
                </div>
                <form action="/comment" method="Post">
                {{csrf_field()}}
                    <input type="hidden" name="hotel_id" value="{{$item->id}}" placeholder="ADD a Comment">
                     <textarea rows="4" cols="50" name="body">
                    
                    </textarea> 
                <input type="Submit" name="Submit" value="Done">

                </form>
                @endif
        </div>
    </div>
</div>
@endsection
