@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>All Products</h1>
        @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
        </div>
        @endif
        @foreach($products as $pro)
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$pro->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">
                        <p>Price: {{ $pro->price }}</p>
                    </h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="" class="card-link">View Details</a>
                    <a href="{{route('add-to.cart', ['id' => $pro->id])}}" class="card-link">Add To Cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection