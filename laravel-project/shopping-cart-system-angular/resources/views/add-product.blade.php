@extends('layouts.app')

@section("content")
<div class="container">
    <div class="row">
    
        <div class="col-md-12">
        <form action="{{route('post-product')}}" method="post" enctype="multipart/form-data">
            @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    @error('email')
    <div class="text text-danger">{{ $message }}</div>
    @enderror
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Title</label>
    <input type="text" name="title" value="{{old('title')}}" class="form-control" id="exampleInputPassword1">
    @if ($errors->has('title'))
        <span class="text text-danger ">{{ $errors->first('title') }}</span>
    @endif
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="text" name="price" value="{{old('price')}}" class="form-control" id="exampleInputPassword1" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input type="file" name="image" class="form-control" id="exampleInputPassword1" >
    @if ($errors->has('image'))
        <span class="text text-danger ">{{ $errors->first('image') }}</span>
    @endif
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>
@endsection