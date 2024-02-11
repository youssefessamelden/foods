@extends('./layouts/nav')

@section('title')
    menu
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}" />
@endsection

@section('content')
    <div class="menu">
        <div class="menu-content">
            <div class="titles">
                <div class="title-text">
                    <h1>Our Menu</h1>
                    <p>
                        We consider all the drivers of change gives you the components you
                        need to change to create a truly happens.
                    </p>
                </div>
                <div class="btms">
                    <div class="btm">
                        <a class="active-a" href="{{ route('menu') }}">All</a>
                    </div>
                    <div class="btm">
                        <a href="{{ route('breakfast') }}">Breakfast</a>
                    </div>
                    <div class="btm">
                        <a href="{{ route('main') }}">Main Dishes</a>
                    </div>
                    <div class="btm">
                        <a href="{{ route('drinks') }}">Drinks</a>
                    </div>
                    <div class="btm">
                        <a href="{{ route('dessert') }}">Desserts</a>
                    </div>
                </div>
            </div>

            <!-- foods card -->
            <div class="foods">
                <div class="food">
                    <div class="foods-card">
                        @foreach ($fooddata as $pro)
                    <div class="view-con foods-content">
                        <img src="{{ asset('storage/foods/'.$pro->photo) }}" alt="food" />
                        <div class="view-card food-text">
                            <p class="food-price"><span>price :</span> {{ $pro->price }}</p>
                            <p class="food-title"><span>title :</span> {{ $pro->name }}</p>
                            <p class="food-description">
                                <span>description :</span> {{ $pro->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- brand section -->
    <div class="brand">
        <div class="brand-content">
            <div class="brand-title">
                <div class="p1">You can order through apps</div>
                <div class="p2">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit enim bibendum
                    sed et aliquet aliquet risus tempor semper.
                </div>
            </div>

            <div class="brand-logo">
                <div class="logo1">
                    <div class="l1">
                        <img src="{{ asset('assets/images/uber eats.jpeg') }}" alt="uber eats" />
                    </div>
                    <div class="l1">
                        <img src="{{ asset('assets/images/grubhubpng.png') }}" alt="grubhubpng" />
                    </div>
                    <div class="l1 lp">Postmates</div>
                </div>
                <div class="logo2">
                    <div class="l2">
                        <img src="{{ asset('assets/images/Doordash_Logo.png') }}" alt="doordash" />
                    </div>
                    <div class="l2">
                        <img src="{{ asset('assets/images/foodpanda.jpeg') }}" alt="foodpanda" />
                    </div>
                    <div class="l2">
                        <img src="{{ asset('assets/images/deliveroo.png') }}" alt="deliveroo" />
                    </div>
                </div>
                <div class="logo1">
                    <div class="l3">
                        <img src="{{ asset('assets/images/instacart.jpeg') }}" alt="instacart" />
                    </div>
                    <div class="l3 lp2">JUST EAT</div>
                    <div class="l3">
                        <img src="{{ asset('assets/images/DiDi-Food.jpeg') }}" alt="didi food" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/menu.js') }}"></script>
@endsection
