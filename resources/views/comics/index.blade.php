@extends('layouts.app')

@section('content')
<div class="container">
    <div class="heading d-flex justify-content-between">
        <h2 class="text-white">Comics</h2>
        <div>
            <a href="{{route('comics.create')}}" class="btn btn-primary">Add Comics</a>
        </div>
    </div>


    <div class="table-responsive">
        <table class="table table-striped
            table-hover	
            table-borderless
            table-primary
            align-middle">
            <thead class="table-light">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Thumb</th>
                    <th>Price</th>
                    <th>Series</th>
                    <th>Sale_date</th>
                    <th>Type</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($comics as $comic)
                <tr class="table-primary">
                    <td scope="row">{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>
                    <td><img src="{{$comic->thumb}}" alt=""></td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    @endforeach

                </tr>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>

</div>
<!-- /.container -->
@endsection