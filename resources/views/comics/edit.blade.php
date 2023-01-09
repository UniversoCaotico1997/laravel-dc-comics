@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-white">Update a New Comic</h1>
    @include('partials.errors')

    <form action="{{route('comics.update', $comic->id)}}" method="post" class="pb-4">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label text-white">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Comics Title" aria-describedby="helpId" value="{{old('title',$comic->title)}}">
            <small id="helpTitle" class="text-muted">Add Title</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label text-white">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4">{{old('description',$comic->description)}}</textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label text-white">Thumb Comics</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Thumb Comics" aria-describedby="helpId" value="{{old('thumb',$comic->thumb)}}">
            <small id="helpThumb" class="text-muted">Add Thumb Comics</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label text-white">Price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="Price" aria-describedby="helpId" value="{{old('price',$comic->price)}}">
            <small id="helpPrice" class="text-muted">Add Price</small>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label text-white">Series</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="Series" aria-describedby="helpId" value="{{old('series',$comic->series)}}">
            <small id="helpSeries" class="text-muted">Add Series</small>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label text-white">Sale_Date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Sale_Date" aria-describedby="helpId" value="{{old('sale_date',$comic->sale_date)}}">
            <small id="helpSale_Date" class="text-muted">Add Sale_Date</small>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label text-white">Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="Type" aria-describedby="helpId" value="{{old('type',$comic->type)}}">
            <small id="helpType" class="text-muted">Add Type</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection