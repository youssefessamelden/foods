@extends('layouts.nav')

@section('title')
    adminpannel
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/editpro.css') }}">
@endsection

@section('content')
    <div class="back" method="post">
        <div>
            <a target="_blank" href="{{ route('viewusers') }}" class="back-btn" id="users"></a>
            <a target="_blank" href="{{ route('viewbooking') }}" class="back-btn" id="notify"></a>
            <a target="_blank" href="{{ route('addfoodsview') }}" class="back-btn" id="add"> <span>ADD PRODUCTS</span></a>
            <a target="_blank" href="{{ route('showfoods') }}" class="back-btn" id="view"></a>
        </div>

    </div>
@endsection
