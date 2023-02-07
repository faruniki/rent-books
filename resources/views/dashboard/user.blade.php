@extends('layouts.main')

@section('content')
@section('title', 'Users')


<div class="col-sm-12 tabel-user">
    <table class="table">
        <thead>
            <tr style="background-color: #222; color: #fff;"  >
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $i = 1; ?>
        @foreach($user as $users)
        <tbody>
            <tr class="joko">
                <td>{{$i++}}</td>
                <td>{{$users->username}}</td>
                <td>{{$users->email}}</td>
                <td>{{$users->no_hp}}</td>
                <td>{{$users->address}}</td>
                <td>
                    <form action="{{route('deleteUser', $users->id)}}" method="post">
                        @csrf
                        <a href="{{route('editUser', $users->id)}}" class="btn btn-primary edit-button" style="border-radius: 3px;">Edit</a>
                        <button class="btn btn-danger delete-button" style="border-radius: 3px;">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>

@endsection