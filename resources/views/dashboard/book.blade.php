@extends('layouts.main')

@section('content')
@section('title', 'Books')


<div class="col-sm-12 table-coi">
    <form action="{{route('addBook')}}">
        <button type="submit" class="add-button">Add+</button>
    </form>
    <table class="table">
        <thead>
            <tr class="table-dark">
                <th>No</th>
                <th>Cover</th>
                <th>Name</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $i = 1; ?>
        @foreach($book as $books)
        <tbody>
            <tr>
                <td>{{$i++}}</td>
                <td><img src="{{("assets/img/". $books->cover)}}" style="height:100px; width:90px; object-fit: cover;"></td>
                <td>{{$books->title}}</td>
                <td>{{$books->author}}</td>
                <td>{{$books->publisher}}</td>
                <td>{{$books->status}}</td>
                <td>
                    <form action="{{route('deleteBook', $books->id)}}" method="post">
                        @csrf
                        <a href="" class="btn btn-primary" style="border-radius: 3px; font-size: 12px;">Edit</a>
                        <button class="btn btn-danger" style="border-radius: 3px; font-size: 12px;">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>

@endsection