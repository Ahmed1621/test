@extends('layout')



@section('body')


<div class="container">

    <form action="/search" method="get">
        <div class="w-25 d-flex align-item-center">
            <input type="text" class="form-control my-3" name="search">
            <button type="submit" class="btn btn-sm btn-primary">Search</button>
        </div>
    </form>

    @if (count($products) == 0)
    there is no product
    @else
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">price</th>
                <th scope="col">category</th>
                <th scope="col">actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <th>{{$product['id']}}</th>
                <td>{{$product['title']}}</td>
                <td>{{$product['price']}}</td>
                <td>category</td>
                <td>
                    <a href="/product/{{$product['id']}}" class="btn btn-success">view</a>
                    <a href="/edit/{{$product['id']}}" class="btn btn-warning">edit</a>
                    <a href="/destroy/{{$product['id']}}" class="btn btn-danger">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection