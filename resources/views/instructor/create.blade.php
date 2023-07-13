@extends('instructor.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Instructors Page</div>
  <div class="card-body">
      
      <form action="{{ url('instructor') }}" method="post">
        {!! csrf_field() !!}
        <label>Document</label></br>
        <input type="text" name="document" id="document" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="last_name" id="last_name" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" class="form-control"></br>
        <label>Telephone</label></br>
        <input type="text" name="telephone" id="telephone" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop