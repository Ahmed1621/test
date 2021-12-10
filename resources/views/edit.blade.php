@extends('layout')



@section('body')

<div class="container">
    <div class="w-75 mx-auto">
        <form action="/update/{{ $product['id'] }}" method="post">
            @csrf
            <input type="text" value="{{ $product['title'] }}" placeholder="title" name="title" class="form-control my-3">
            @if ($errors->has('title'))
            @error('title')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror
            @endif
            <input type="text" value="{{ $product['description'] }}" placeholder="description" name="description" class="form-control my-3">
            @if ($errors->has('description'))
            @error('description')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror
            @endif
            <input type="text" value="{{ $product['price'] }}" placeholder="price" name="price" class="form-control my-3">
            @if ($errors->has('price'))
            @error('price')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror
            @endif
            <button type="submit" class="btn btn-dark">Update</button>
        </form>
    </div>
</div>

@endsection