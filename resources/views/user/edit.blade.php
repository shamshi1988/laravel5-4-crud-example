<!-- edit.blade.php -->
@extends('master')
@section('content')
<div class="container">
  <a href="{{action('UserController@index')}}" class="btn btn-primary pull-right">Back</a>
  <h2 style="text-align:center;padding-bottom:20px">Update User {{$user->name}}</h2>
  <form method="post" action="{{action('UserController@update', $id)}}">
    {{csrf_field()}}
    <input name="_method" type="hidden" value="PATCH">
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="name" name="name" value="{{$user->name}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="email" name="email" value="{{$user->email}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Password" name="password" value="{{$user->password}}">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2">&nbsp;</div>
      <div class="col-sm-10">
        <input type="submit" class="btn btn-primary" value="Update">
      </div>
    </div>
  </form>
</div>
@endsection