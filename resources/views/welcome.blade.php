@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row row-cols-6">
        @foreach($comics as $comic)
        <div class="col">
            <img src="{{$comic['thumb']}}" alt="">
            <h6 class="text-white mt-3">{{$comic['title']}}</h6>
        </div>
        <!-- /.col -->
        @endforeach
    </div>
    <!-- /.row -->
    <div class="load_more my-5">
        <h5>load more</h5>
    </div>
    <!-- /.container -->
</div>
<!-- /.container -->


<section class="banner">
    @include('partials.banner')
</section>
<!-- /.banner -->

@endsection