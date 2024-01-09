@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($products as $prod)
            <div class="col-md-3">
            <div class="card">
  <img src="{{$prod->image}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$prod->title}}</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="{{route('product-details', ['id' => $prod->id])}}" class="btn btn-primary">View Details</a>
    <!-- <a href="{{env('APP_URL')}}/product/{{$prod->id}}" class="btn btn-primary">View Details</a> -->
  </div>
</div>
            </div>
        @endforeach        
    </div>

</div>
@endsection