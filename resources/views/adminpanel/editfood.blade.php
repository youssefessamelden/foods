@extends('layouts.nav')

@section('title')
    edit
@endsection

@section('css')
@endsection
<link rel="stylesheet" href="{{ asset('assets/css/add.css') }}">
@section('content')
    <div class="form_con" dir='rtl'>
        <div class="form_main">
            <form class="addpro jos" method="post" enctype="multipart/form-data" action="{{ route('updatefoods',$prodata->id) }}">
                @csrf
                    <input type="num" name="id" value="{{ $prodata->id }}" readonly>

                    <div class="adding">
                        <label for="image">Image</label>
                        <input type="file" name="f_photo" id="image">
                    </div>

                    <div class="adding">
                        <label for="title">Title</label>
                        <input type="text" name="f_title" id="title" value="{{ $prodata->name }}" required>
                    </div>

                    <div class="adding">
                        <label for="catagry">Category</label>
                        <input type="text" name="f_category" id="category" value="{{ $prodata->category }}" required>
                    </div>

                    <div class="adding-dec">
                        <label for="descreption">descreption</label>
                        <textarea name="f_descreption" id="descreption" cols="30" rows="10" required>{{ $prodata->description }}</textarea>
                    </div>

                    <div class="adding">
                        <label for="price">Price</label>
                        <input type="text" name="f_price" id="price" value="{{ $prodata->price }}" required>
                    </div>
                    <button name="submit" id="submit">UPDATE</button>
            </form>
        </div>
    </div>
@endsection
