@extends('layouts.main')

@section('title', 'Categories')
@section('content')

<div class="col-sm-12 table-coi">
    <form action="{{route('addCategory')}}">
        <button type="submit" class="add-button">Add+</button>
    </form>
    <table class="table">
        <thead>
            <tr class="table-dark">
                <th>Genre</th>
            </tr>
        </thead>
        <?php $i = 1; ?>
        @foreach($category as $categories)
        <tbody>
            <tr>
                <td>{{$i++}}</td>
                <td>{{$categories->title}}</td>
                <td>
                    <form action="{{route('deleteCategory', $categories->id)}}" method="post">
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