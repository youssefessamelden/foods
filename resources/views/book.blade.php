@extends('./layouts/nav')

@section('title')
    book
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/book.css') }}" />
@endsection

@section('content')
    <div class="book-contain">
        <div class="book">
            <div class="book-title">
                <h2>Book A Table</h2>
                <p>
                    We consider all the drivers of change gives you the components you
                    need to change to create a truly happens.
                </p>
            </div>

            <form method="post"
                {{-- @if (auth()->user())  --}}
                action="{{ route('booking') }}"
                    {{-- @else
                        action="{{ route('login') }}" @endif --}}
                class="book-form">
                @csrf
                @if (auth()->user())
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @else
                <div class="alert alert-danger">
                        <ul>
                            <li>please login first</li>
                        </ul>
                    </div>
                @endif
                <input type="text" name="userid"
                    value="
                @if (auth()->user()) {{ Auth::user()->id }}
                @else
                0
                @endif
                "
                    hidden>
                <div class="bo-fo-content">
                    <div class="box">
                        <div class="row1">
                            <div class="row1-content">
                                <p class="title">Date</p>
                                <input name="b_date" type="date" value="{{ date('Y-m-d',strtotime('today')) }}" min="{{ date('Y-m-d') }}" />
                            </div>
                            <div class="row1-content">
                                <p class="title">Time</p>
                                <input name="b_time" type="time" value="18:30:00">
                            </div>
                        </div>

                        <div class="row1">
                            <div class="row1-content">
                                <p class="title">Name</p>
                                <input type="text" name="b_name" placeholder="Enter your Name" />
                            </div>
                            <div class="row1-content">
                                <p class="title">Phone</p>
                                <input type="text" name="b_phone" placeholder="x-xxx-xxx-xxxx" />
                            </div>
                        </div>

                        <div class="row1">
                            <div class="row2-content">
                                <p class="title">Total Person</p>
                                <select name="person">
                                    <option>1Person</option>
                                    <option>2Person</option>
                                    <option>3Person</option>
                                    <option>4Person</option>
                                </select>
                            </div>
                        </div>

                        <button class="submit" type="submit">Book A Table</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="map"></div>
@endsection

@section('js')
    @if (Session::has('message'))
        <script>
            swal('booked done', '{{ Session::get('message') }}', 'success', {
                button: true,
                button: "ok",
            })
        </script>
    @endif

    @if (Session::has('error'))
        <script>
            swal('booked Error', '{{ Session::get('error') }}', 'error', {
                button: true,
                button: "ok",
            })
        </script>
    @endif
@endsection
