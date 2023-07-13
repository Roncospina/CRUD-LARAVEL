@extends('instructor.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('instructor/' .$instructor->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$instructor->id}}" id="id" />
        <label>Document</label></br>
        <input type="text" name="document" id="document" value="{{$instructor->document}}" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$instructor->name}}" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="last_name" id="last_name" value="{{$instructor->last_name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" value="{{$instructor->email}}" class="form-control"></br>
        <label>Telephone</label></br>
        <input type="text" name="telephone" id="telephone" value="{{$instructor->telephone}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop