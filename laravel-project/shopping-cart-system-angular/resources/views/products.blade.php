@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1 class="text-center">{{ $title }}</h1>
        @foreach($products as $pro)
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$pro->title}}</h5>
                    <p class="card-text">{{$pro->description}}</p>
                    <a href="/view-details" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <!-- <div class="col-md-12">
            {{ $products->links() }}
        </div> -->
    </div>

</div>
@endsection