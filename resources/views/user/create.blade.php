<!-- create.blade.php -->

@extends('master')
@section('content')
<div class="container">
  <a href="{{action('UserController@index')}}" class="btn btn-primary pull-right">Back</a>
  <h2 style="text-align:center;padding-bottom:20px">Create New User</h2>
  <form method="post" action="{{url('user')}}">
    {{csrf_field()}}
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="name" name="name">
      </div>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="email" name="email">
      </div>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Password" name="password">
      </div>
    </div>
    
    <div class="form-group row">
      <div class="col-md-2">&nbsp;</div>
      <div class="col-sm-10">
        <input type="submit" class="btn btn-primary">
      </div>
    </div>
  </form>
</div>
@endsection