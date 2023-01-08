@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label text-white">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Comics Title" aria-describedby="helpId">
            <small id="helpTitle" class="text-muted">Add Title</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label text-white">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label for="src" class="form-label text-white">Thumb Comics</label>
            <input type="text" name="src" id="src" class="form-control" placeholder="Comics" aria-describedby="helpId">
            <small id="helpThumb" class="text-muted">Add Thumb Comics</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label text-white">Price</label>
            <input type="text" name="Price" id="Price" class="form-control" placeholder="Comics" aria-describedby="helpId">
            <small id="helpPrice" class="text-muted">Add Price</small>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label text-white">Series</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="Comics" aria-describedby="helpId">
            <small id="helpSeries" class="text-muted">Add Series</small>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label text-white">Sale_Date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Comics" aria-describedby="helpId">
            <small id="helpSale_Date" class="text-muted">Add Sale_Date</small>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label text-white">Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="Comics" aria-describedby="helpId">
            <small id="helpType" class="text-muted">Add Type</small>
        </div>
        <div>
            <a href="" class="btn btn-primary my-3">Send</a>
        </div>
    </form>
</div>
@endsection