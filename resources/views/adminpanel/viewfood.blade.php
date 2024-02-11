@extends('layouts.nav')

@section('title')
    view
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/viewfoods.css') }}">
@endsection
@section('content')
    <table class="table">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">category</th>
            <th scope="col">description</th>
            <th scope="col">image</th>
            <th scope="col">action</th>
        </tr>
        @foreach ($fooddata as $pro)
            <tr>
                <td>
                    <p>{{ $pro->id }}</p>
                </td>
                <td>
                    <p>{{ $pro->name }}</p>
                </td>
                <td>
                    <p>{{ $pro->price }}</p>
                </td>
                <td>
                    <p>{{ $pro->category }}</p>
                </td>
                <td>
                    <p>{{ $pro->description }}</p>
                </td>
                <td><img src="{{ asset('storage/foods/' . $pro->photo) }}" alt="food" /></td>
                <td>
                    <p>
                        <a class="update bg-success" target="_blank" href="{{ route('update', $pro->id) }}">Update</a>
                        <a onclick="return confirm('Are you sure to delete this?')" class="delete bg-danger"
                            href="{{ route('delete', $pro->id) }}">Delete</a>
                    </p>
                </td>
            </tr>
        @endforeach
    </table>

    <a class="deleteall" href="{{ route('deleteall') }}">delete all</a>
@endsection
