@extends('layouts.nav')

@section('title')
    adding
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/add.css') }}">
@endsection
@section('content')
    <div class="form_con">
        <div class="form_main">
            <form class="addpro jos" method="post" enctype="multipart/form-data" action="{{ route('addfoods') }}">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @foreach ($foodsdata as $items)
                    <div class="adding">
                        <input type="num" name="id" value="{{ $items->id + 1 }}" readonly>
                    </div>
                @endforeach

                <div class="adding-p">
                    <span>image</span>
                    <label for="image" class="button-p">Image</label>
                    <input type="file" name="f_photo" id="image">
                </div>

                <div class="adding">
                    <label for="title">Title</label>
                    <input type="text" name="f_title" id="title">
                </div>

                <div class="adding">
                    <label for="catagry">Category</label>
                    <input type="text" name="f_category" id="category">
                </div>

                <div class="adding-dec">
                    <label for="descreption">descreption</label>
                    <textarea name="f_descreption" id="descreption" cols="30" rows="10"></textarea>
                </div>

                <div class="adding">
                    <label for="price">Price</label>
                    <input type="text" name="f_price" id="price"/>
                </div>

                <button name="submit" id="submit">ADD</button>
            </form>
        </div>
    </div>
@endsection
