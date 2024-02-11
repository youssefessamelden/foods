@extends('./layouts/nav')

@section('title')
    about
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}" />
@endsection


@section('content')
    <!-- section 1 -->
    <div class="about">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-6 photos">
                    <img src="{{ asset('assets/images/food.jpg') }}" class="img-fluid rounded-start" alt="..." />
                    <div class="img-card-con">
                        <div class="img-card">
                            <h3>Come and visit us</h3>
                            <div class="info">
                                <div class="info-contenet">
                                    <i class="fa-solid fa-phone"></i>
                                    <span>happytummy@restaurant.com</span>
                                </div>
                                <div class="info-contenet">
                                    <i class="fa-regular fa-envelope"></i>
                                    <span>happytummy@restaurant.com</span>
                                </div>
                                <div class="info-contenet">
                                    <i class="fa-solid fa-location-dot" style="color: #fafafa"></i>
                                    <span>837w.Marshall Lane Marshalltown, IA 50158, Los
                                        Angeles</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 texts">
                    <div class="card-body">
                        <h3 class="card-title">
                            We provide healthy food for your family.
                        </h3>
                        <p class="card-text">
                            Our story began with a vision to create a unique dining
                            experience that merges fine dining, exceptional service, and a
                            vibrant ambiance. Rooted in city's rich culinary culture, wa aim
                            to honor our local roots while infusing a global palate.
                        </p>
                        <p class="card-text">
                            <small class="text-body-secondary">At place, we believe that dining is not just about food,
                                but
                                also about the overall experience. Our staff, renowed for
                                thier warmth and dedication, strives to make every visit an
                                unforgettable event.</small>
                        </p>

                        <button>
                            <a href="">More About Us</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section 2 -->
    <div class="section2">
        <div class="section2-cont">
            <div class="bg">
                <div class="bg-opacity">
                    <div class="play-con">
                        <div class="play">
                            <i class="fa-solid fa-play" style="color: #ad343d"></i>
                        </div>
                        <div class="playtitle">
                            Feel the authentic & original taste from us
                        </div>
                    </div>
                </div>
            </div>

            <div class="features">
                <div class="card mb-3">
                    <div class="colx">
                        <img src="{{ asset('assets/images/choices.png') }}" class="img-fluid rounded-start"
                            alt="..." />
                    </div>
                    <div class="colu">
                        <div class="card-bod">
                            <h5 class="card-title">Multi Cuisine</h5>
                            <p class="card-text">
                                In the new era of technology we look in the future with
                                certainty live.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="colx">
                        <img src="{{ asset('assets/images/purchasing.png') }}" class="img-fluid rounded-start"
                            alt="..." />
                    </div>
                    <div class="colu">
                        <div class="card-bod">
                            <h5 class="card-title">Easy To Order</h5>
                            <p class="card-text">
                                In the new era of technology we look in the future with
                                certainty live.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="colx">
                        <img src="{{ asset('assets/images/timing.png') }}" class="img-fluid rounded-start" alt="..." />
                    </div>
                    <div class="colu">
                        <div class="card-bod">
                            <h5 class="card-title">Fast Delivery</h5>
                            <p class="card-text">
                                In the new era of technology we look in the future with
                                certainty live.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section3">
        <div class="section3-cont">
            <div class="informations">
                <div class="info-text">
                    <p class="h2">A little information for our valualble guest</p>
                    <p class="h4">
                        At place, we believe that dining is not just about food, but also
                        about the overall experiance. Our staff, renowned for thier warmth
                        and dedication, strives to make every vist an unforgettable event.
                    </p>
                </div>
                <div class="rectangles">
                    <div class="rectangle">
                        <h2>3</h2>
                        <p>Locations</p>
                    </div>
                    <div class="rectangle">
                        <h2>1995</h2>
                        <p>Founded</p>
                    </div>
                    <div class="rectangle">
                        <h2>65<sup>+</sup></h2>
                        <p>Staff Members</p>
                    </div>
                    <div class="rectangle">
                        <h2>100%</h2>
                        <p>Satisfied Customers</p>
                    </div>
                </div>
            </div>

            <div class="image"></div>
        </div>
    </div>

    <!-- section 4 -->
    <div class="section4">
        <div class="section4-cont">
            <div class="title4-content">
                <div class="title-4">What Our Customers Say</div>
                <div class="para">
                    We consider all the drivers of change gives you the components you
                    need to change to create a truly happens.
                </div>
            </div>

            <div class="cards-4">
                <div class="card-4">
                    <div class="card-content">
                        <div class="card-text">
                            <h2>“The best restaurant”</h2>
                            <p>
                                Last night, we dined at place and were simply blown away. From
                                the moment we stepped in, we were enveloped in an inviting
                                atmosphere and greeted with warm smiles.
                            </p>
                        </div>
                        <hr />
                        <div class="user">
                            <img src="{{ asset('assets/images/user1.jpg') }}" alt="user" class="userimg" />
                            <div class="user-text">
                                <h2>Sophire Robson</h2>
                                <p>Los Angeles, CA</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-4">
                    <div class="card-content">
                        <div class="card-text">
                            <h2>“The best restaurant”</h2>
                            <p>
                                Last night, we dined at place and were simply blown away. From
                                the moment we stepped in, we were enveloped in an inviting
                                atmosphere and greeted with warm smiles.
                            </p>
                        </div>
                        <hr />
                        <div class="user">
                            <img src="{{ asset('assets/images/user2.jpg') }}" alt="user" class="userimg" />
                            <div class="user-text">
                                <h2>Matt Cannon</h2>
                                <p>San Diego, CA</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-4">
                    <div class="card-content">
                        <div class="card-text">
                            <h2>“The best restaurant”</h2>
                            <p>
                                Last night, we dined at place and were simply blown away. From
                                the moment we stepped in, we were enveloped in an inviting
                                atmosphere and greeted with warm smiles.
                            </p>
                        </div>
                        <hr />
                        <div class="user">
                            <img src="{{ asset('assets/images/user3.jpg') }}" alt="user" class="userimg" />
                            <div class="user-text">
                                <h2>Andy Smith</h2>
                                <p>San Francisco, CA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
