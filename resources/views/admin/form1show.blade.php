@extends('admin.master')
@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

 <div class="content-wrapper">

<div class="container">
<form action="/home/postform1" method="post">
      @csrf()
  <div class="form-group">
    <label for="exampleInputEmail1">Asset Name </label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Asset name">
    @if($errors->has('name'))
        <label class="alert alert-danger" >{{$errors->first('name')}}</label>
        @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Asset Description </label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="description" placeholder="Asset Description">
    @if($errors->has('description'))
        <label class="alert alert-danger" >{{$errors->first('description')}}</label>
        @endif
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

</div>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@stop