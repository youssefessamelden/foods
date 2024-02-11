@extends('layouts.nav')

@section('title')
    view booking
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/viewfoods.css') }}">
@endsection
@section('content')
    <table class="table">
        <tr>
            <th scope="col">user_id</th>
            <th scope="col">name</th>
            <th scope="col">persons</th>
            <th scope="col">time</th>
            <th scope="col">date</th>
            <th scope="col">status</th>
            <th scope="col">action</th>
        </tr>
        @foreach ($bookview as $pro)
            <tr>
                <td>
                    <p>{{ $pro->user_id }}</p>
                </td>
                <td>
                    <p>{{ $pro->name }}</p>
                </td>
                <td>
                    <p>{{ $pro->person }}</p>
                </td>
                <td>
                    <p>{{ $pro->time }}</p>
                </td>
                <td>
                    <p>{{ $pro->date }}</p>
                </td>
                <td>
                    <p class="
                    @if ($pro->status == 'pendeng')
                        text-info
                    @endif
                    @if ($pro->status == 'reject')
                        text-danger
                    @endif
                    @if ($pro->status == 'accept')
                        text-success
                    @endif
                    "
                    >{{ $pro->status }}</p>
                </td>
                <td>
                    <p>
                        <a class="update bg-success" href="{{ url('accept', $pro->id) }}">accept</a>
                        <a class="delete bg-danger" href="{{ url('reject', $pro->id) }}">reject</a>
                    </p>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
