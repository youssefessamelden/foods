@extends('.layouts/nav')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}" />
@endsection


    @section('content')
        <!-- section 1 -->
        <div class="hero">
            <div class="opacity">
                <div class="title">
                    <div class="text">
                        <p>Best Food For Your Taste</p>
                        <span>Discover delectable cuisine and unforgettable moments in our
                            welcoming, culinary haven.</span>
                    </div>

                    <div class="buttons">
                        <div class="book t"><a href="{{ route('book') }}">Book A Table</a></div>
                        <div class="book"><a href="#">Explore Menue</a></div>
                    </div>
                </div>
            </div>
        </div>




        <!-- section 2 -->
        <div class="menue-card">
            <div class="content">
                <h2>Browse Our Menu</h2>
                <div class="cards">
                    <div class="card">
                        <div class="text-c">
                            <div class="photo">
                                <img src="{{ asset('assets/images/coffee.png') }}" alt="photo" />
                            </div>
                            <div class="paragragh">
                                <p>Breakfact</p>
                                <span>In the new era of technology we look in the future with
                                    certainty and pride for our live</span>
                            </div>
                            <div class="button">
                                <a href="{{ route('breakfast') }}">Explore Menu</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="text-c">
                            <div class="photo">
                                <img src="{{ asset('assets/images/bowl-of-white-rice.png') }}" alt="photo" />
                            </div>

                            <div class="paragragh">
                                <p>Main Dishes</p>
                                <span>In the new era of technology we look in the future with
                                    certainty and pride for our live</span>
                            </div>

                            <div class="button">
                                <a href="{{ route('main') }}">Explore Menu</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="text-c">
                            <div class="photo">
                                <img src="{{ asset('assets/images/soft-drink.png') }}" alt="photo" />
                            </div>

                            <div class="paragragh">
                                <p>Drinks</p>
                                <span>In the new era of technology we look in the future with
                                    certainty and pride for our live</span>
                            </div>

                            <div class="button">
                                <a href="{{ route('drinks') }}">Explore Menu</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="text-c">
                            <div class="photo">
                                <img src="{{ asset('assets/images/dessert.png') }}" alt="photo" />
                            </div>

                            <div class="paragragh">
                                <p>Desserts</p>
                                <span>In the new era of technology we look in the future with
                                    certainty and pride for our live</span>
                            </div>

                            <div class="button">
                                <a href="{{ route('dessert') }}">Explore Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- section 3 -->
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
                                        <i class="fa-solid fa-location-dot" style="color: #fafafa;"></i>
                                        <span>837w.Marshall Lane Marshalltown, IA 50158, Los Angeles</span>
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




        <!-- servses -->
        <div class='serves'>
            <div class="ser-cont">
                <div class='ser-title'>
                    We also offer unique services for your events
                </div>

                <div class='ser-cards'>

                    <div class='ser-card'>
                        <img src='{{ asset('assets/images/Caterings.jpg') }}' alt="Caterings" />
                        <div class='ser-cardtitle'>
                            <h2>Caterings</h2>
                            <p>In the new era of technology we look in the future with certainty for life.</p>
                        </div>
                    </div>

                    <div class='ser-card'>
                        <img src='{{ asset('assets/images/birthday.jpg') }}' alt="Caterings" />
                        <div class='ser-cardtitle'>
                            <h2>Birthdays</h2>
                            <p>In the new era of technology we look in the future with certainty for life.</p>
                        </div>
                    </div>

                    <div class='ser-card'>
                        <img src='{{ asset('assets/images/weeding.jpg') }}' alt="Caterings" />
                        <div class='ser-cardtitle'>
                            <h2>Weddings</h2>
                            <p>In the new era of technology we look in the future with certainty for life.</p>
                        </div>
                    </div>

                    <div class='ser-card'>
                        <img src='{{ asset('assets/images/events.jpg') }}' alt="Caterings" />
                        <div class='ser-cardtitle'>
                            <h2>Events</h2>
                            <p>In the new era of technology we look in the future with certainty for life.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <div class='contents'>
            <div class="content-con">
                <div class="con-imgs">
                    <div class='img-1'></div>
                    <div class='img-2con'>
                        <div class='img-2'></div>
                        <div class='img-3'></div>
                    </div>
                </div>

                <div class="con-text">
                    <div class="con-title">
                        <h2>Fastest Food Delivery in City</h2>
                        <p>Our visual designer lets you quickly and of drag a down your way to customapps for both keep
                            desktop.</p>
                    </div>

                    <div class="con-features">
                        <div class="fe1">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="30" height="30" rx="15" fill="#AD343E" />
                                <rect width="15.07" height="15.07" transform="translate(7 7.00015)" fill="#AD343E" />
                                <path
                                    d="M14.535 12.0235V14.5352L16.4188 16.4189M20.1863 14.5352C20.1863 17.6563 17.6561 20.1864 14.535 20.1864C11.4139 20.1864 8.88379 17.6563 8.88379 14.5352C8.88379 11.4141 11.4139 8.88391 14.535 8.88391C17.6561 8.88391 20.1863 11.4141 20.1863 14.5352Z"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Delivery within 30 minutes</span>
                        </div>
                        <div class="fe1">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="30" height="30" rx="15" fill="#AD343E" />
                                <rect width="15.07" height="15.07" transform="translate(7 7.00015)" fill="#AD343E" />
                                <path
                                    d="M12.6513 15.791L16.4188 12.0235M12.9653 12.3375H12.9716M16.1049 15.477H16.1112M18.9305 20.1864V10.1397C18.9305 9.44617 18.3682 8.88391 17.6746 8.88391H11.3955C10.7019 8.88391 10.1396 9.44617 10.1396 10.1397V20.1864L12.3374 18.9306L14.5351 20.1864L16.7328 18.9306L18.9305 20.1864ZM13.2792 12.3375C13.2792 12.5108 13.1387 12.6514 12.9653 12.6514C12.7919 12.6514 12.6513 12.5108 12.6513 12.3375C12.6513 12.1641 12.7919 12.0235 12.9653 12.0235C13.1387 12.0235 13.2792 12.1641 13.2792 12.3375ZM16.4188 15.477C16.4188 15.6504 16.2783 15.791 16.1049 15.791C15.9315 15.791 15.7909 15.6504 15.7909 15.477C15.7909 15.3036 15.9315 15.1631 16.1049 15.1631C16.2783 15.1631 16.4188 15.3036 16.4188 15.477Z"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Best Offer & Prices</span>
                        </div>
                        <div class="fe1">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="30" height="30" rx="15" fill="#AD343E" />
                                <rect width="15.07" height="15.07" transform="translate(7 7.00012)" fill="#AD343E" />
                                <path
                                    d="M8.88379 8.88385H10.1396L10.3908 10.1397M11.3955 15.163H17.6746L20.1863 10.1397H10.3908M11.3955 15.163L10.3908 10.1397M11.3955 15.163L9.95571 16.6028C9.56014 16.9983 9.8403 17.6747 10.3997 17.6747H17.6746M17.6746 17.6747C16.981 17.6747 16.4188 18.2369 16.4188 18.9305C16.4188 19.6241 16.981 20.1863 17.6746 20.1863C18.3682 20.1863 18.9305 19.6241 18.9305 18.9305C18.9305 18.2369 18.3682 17.6747 17.6746 17.6747ZM12.6513 18.9305C12.6513 19.6241 12.089 20.1863 11.3955 20.1863C10.7019 20.1863 10.1396 19.6241 10.1396 18.9305C10.1396 18.2369 10.7019 17.6747 11.3955 17.6747C12.089 17.6747 12.6513 18.2369 12.6513 18.9305Z"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Online Services Available</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- says -->
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

@section('title')
    home
@endsection
