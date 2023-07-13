@extends('instructor.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">instructor Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-text">Document : {{ $instructor->document }}</h5>
        <p class="card-title">Name : {{ $instructor->name }}</p>
        <p class="card-text">Last Name : {{ $instructor->last_name }}</p>
        <p class="card-text">Email : {{ $instructor->email }}</p>
        <p class="card-text">Telephone : {{ $instructor->telephone }}</p>
  </div>
       
    </hr>
  
  </div>
</div>