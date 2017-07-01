<!-- index.blade.php -->
@extends('master')
@section('content')
  <div class="container">
    <h2 style="text-align:center;">Users List</h2>
    <a href="{{action('UserController@create')}}" class="btn btn-primary pull-right">Add User</a>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['name']}}</td>
        <td>{{$post['email']}}</td>
        <td>{{$post['password']}}</td>
        <td><a href="{{action('UserController@edit', $post['id'])}}" class="btn btn-primary">Edit</a></td>
        <td>
          <form action="{{action('UserController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection