@extends('layout')



@section('body')

<div class="container">
    <div class="w-75 mx-auto">
        <form action="/store" method="post">
            @csrf
            <input type="text" placeholder="title" name="title" class="form-control my-3">
            @if ($errors->has('title'))
            @error('title')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror
            @endif
            <input type="text" placeholder="description" name="description" class="form-control my-3">
            @if ($errors->has('description'))
            @error('description')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror
            @endif
            <input type="text" placeholder="price" name="price" class="form-control my-3">
            @if ($errors->has('price'))
            @error('price')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror
            @endif
            <button type="submit" class="btn btn-dark">Create</button>
        </form>
    </div>
</div>

@endsection