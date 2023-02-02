@extends('layouts.main')

@section('title', 'Users')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <?php $i = 1; ?>
  @foreach($user as $users)
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{$i++}}</td>
      <td>{{$users->name}}</td>
      <td>{{$users->email}}</td>
      <td>{{$users->no_hp}}</td>
      <td>{{$users->address}}</td>
    </tr>
  </tbody>
  @endforeach
</table>

@endsection