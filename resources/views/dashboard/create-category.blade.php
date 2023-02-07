@extends('layouts.main')

@section('content')
@section('title', 'Create Book')

<style>
body {
  font-family: Arial;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 5px;
  background-color: #D4D4D4;
  padding: 20px;
}
</style>

<div class="container">
  <form action="{{route('createCategory')}}" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="name" autofocus required>
    <input type="submit" value="Submit">
  </form>
</div>


@endsection