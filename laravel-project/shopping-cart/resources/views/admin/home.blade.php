@extends('layouts.app')

@section("content")
<div class="container-fluid">
  <div class="row">
    <x-SidebarNav /> 
    
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="{{route('add.user-form')}}" class="btn btn-success">Add User</a>
          </div>
          
        </div>
      </div>

      
      <h2>Users</h2>
      @if(session('message'))
      <div class="alert alert-success" id="msg_box">
        {{session('message')}}
      </div>
      @endif
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Image</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $u)
            <tr>
              <td>{{$u->id}}</td>
              <td><img src="{{$u->image}}" width="100px" height="100px" alt=""></td>
              <td>{{$u->name}}</td>
              <td>{{$u->email}}</td>
              <td>
                <a onclick="return confirm('are you sure you want to delete ?')" href="{{route('delete.user', ['id'=>$u->id])}}" class="btn btn-danger">Delete</a>
                <a href="{{route('edit.user', ['id'=>$u->id])}}" class="btn btn-primary">Update</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<script>
    setTimeout(() => {
        msg_box.style.display = "none";
    }, 2000);
</script>
@endsection