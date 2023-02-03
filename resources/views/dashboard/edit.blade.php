@extends('layouts.main')

@section('title', 'Edit')
@section('content')

<div class="mb-3 ms-1 me-1 my-4">
  <label for="exampleFormControlInput1" class="form-label" for="username">Name</label>
  <input type="email" class="form-control" name="username" id="username">
</div>
<div class="mb-3 ms-1 me-1 my-4">
  <label for="exampleFormControlInput1" class="form-label" for="email">Email</label>
  <input type="email" class="form-control" name="email" id="email">
</div>
<div class="mb-3 ms-1 me-1 my-4">
  <label for="exampleFormControlInput1" class="form-label" for="no_hp">Phone Number</label>
  <input type="email" class="form-control" name="no_hp" id="no_hp">
</div>
<div class="mb-3 ms-1 me-1 my-4">
  <label for="exampleFormControlInput1" class="form-label" for="address">Address</label>
  <input type="email" class="form-control" name="address" id="address">
</div>

@endsection