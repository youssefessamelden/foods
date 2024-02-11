@extends('.layouts/nav')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/mybooking.css') }}" />
@endsection

@section('title')
    my booking
@endsection

@section('content')
    <div class="bookn-con">
        <div class="bookings">
            @foreach ($bookview as $pro)
                <div class="bookin">
                    <p>name: <span>{{ $pro->name }}</span></p>
                    <p>persons: <span>{{ $pro->person }}</span> </p>
                    <p>phone: <span>{{ $pro->phone }}</span> </p>
                    <p>time:<span>{{ $pro->time }}</span></p>
                    <p>data:<span>{{ $pro->date }}</span></p>
                    <p>status:<span
                            class="
                    @if ($pro->status == 'pendeng') text-info @endif
                    @if ($pro->status == 'accept') text-success @endif
                    @if ($pro->status == 'reject') text-danger @endif
                    ">{{ $pro->status }}</span>
                    </p>
                    <a onclick="return confirm('Are you sure to delete this?')" class="delete bg-danger"
                        href="{{ route('deletebooking', $pro->id) }}">Delete</a>
                </div>
            @endforeach
        </div>
        <a onclick="return confirm('Are you sure to delete all?')" class="delete bg-danger allf"
            href="{{ route('deleteallbooking') }}">delete all</a>
    </div>
@endsection
