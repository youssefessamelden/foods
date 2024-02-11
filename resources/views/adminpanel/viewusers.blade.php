@extends('layouts.nav')

@section('title')
    view users
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/viewfoods.css') }}">
@endsection
@section('content')
    <table class="table">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">role</th>
            <th scope="col">picture</th>
            <th scope="col">action</th>
        </tr>
        @foreach ($viewuser as $pro)
            <tr>
                <td><p>{{ $pro->id }}</p></td>
                <td> <p>{{ $pro->name }}</p></td>
                <td> <p>{{ $pro->email }}</p></td>
                <td> <p>{{ $pro->role }}</p></td>
                <td> <p>{{ $pro->profile_photo_path }}</p></td>
                <td>
                    <a class="bg-success update admin-btn" href="{{ route('admin', $pro->id) }}">change to admin</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
