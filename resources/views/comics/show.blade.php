@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pb-4 text-white">
        <div class="col">
            <h1>{{$comic->title}}</h1>
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        </div>
        <!-- /.col -->
        <div class="col">
            <p>{{$comic->description}}</p>
            <h5>{{$comic->price}} $</h5>
            <h5>{{$comic->series}}</h5>
            <h5>{{$comic->sale_date}}</h5>
            <h5>{{$comic->type}}</h5>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@endsection