<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/bootstrap-5.3.1-dist/css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('assets/css/nav.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}" />
    @yield('css')
</head>

<body>
    @section('nav')
        <div class="header">
            <div class="nav-small">

                <div class="logo">
                    <img src="{{ asset('assets/images/noodles.png') }}" alt="logo" />

                    <p>Bistro Bliss</p>
                </div>
                @if (auth()->user())
                    <ul class="icon-con nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm"
                        id="pillNav2" role="tablist"
                        style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
                        <li class="nav-item" role="presentation">
                            <div class="menuejo">
                                <button class="nav-link jo rounded-5" id="contact-tab2" data-bs-toggle="tab" type="button"
                                    role="tab" aria-selected="false"><i class="fa-solid fa-bell"></i>
                                    <div class="notifynum">
                                        <div class="nutify-con">
                                            {{ auth()->user()->unreadNotifications->count() }}
                                        </div>
                                    </div>
                                </button>

                                <ul class="bg-light overflow-y-auto menuess hide rounded-5" id="ul-list">
                                    @foreach (auth()->user()->unreadNotifications as $item)
                                        <li class="mb-2"> <a href="{{ route('mark', $item->id) }}"
                                                class="inf list-group-item list-group-item-action border-bottom border-primary-subtle">
                                                <div>
                                                    time: {{ $item->data['time'] }}
                                                </div>
                                                <div>
                                                    date: {{ $item->data['date'] }}
                                                </div>
                                                <div>
                                                    persons: {{ $item->data['person'] }}
                                                </div>
                                                <div>
                                                    status: <span
                                                        class="
                                                        @if ($item->data['status'] == 'pendeng') text-info @endif
                                                        @if ($item->data['status'] == 'accept') text-success @endif
                                                        @if ($item->data['status'] == 'reject') text-danger @endif
                                                        ">{{ $item->data['status'] }}</span>
                                                </div>
                                            </a></li>
                                    @endforeach
                                    @foreach (auth()->user()->readNotifications as $item)
                                        <li class="mb-2"> <a href="#"
                                                class="cursor text-secondary list-group-item list-group-item-action border-bottom border-primary-subtle">
                                                <div>
                                                    time: {{ $item->data['time'] }}
                                                </div>
                                                <div>
                                                    date: {{ $item->data['date'] }}
                                                </div>
                                                <div>
                                                    persons: {{ $item->data['person'] }}
                                                </div>
                                                <div>
                                                    status: <span
                                                        class="
                                                        @if ($item->data['status'] == 'pendeng') text-info @endif

                                                        @if ($item->data['status'] == 'accept') text-success @endif
                                                        @if ($item->data['status'] == 'reject') text-danger @endif

                                                        ">{{ $item->data['status'] }}</span>
                                                </div>
                                            </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    </ul>
                @endif
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="tobbar-con">
                <div class="topbar">
                    <div class="left-tobbar">
                        <div class="phone">
                            <i class="fa-solid fa-phone"></i>
                            (414) 857 -0107
                        </div>
                        <div class="phone">
                            <i class="fa-regular fa-envelope"></i>
                            Yummy@bistrobliss
                        </div>
                    </div>

                    <div class="right-tobbar">
                        <div class="icons">
                            <i class="fa-brands fa-twitter"></i>
                        </div>
                        <div class="icons">
                            <i class="fa-brands fa-facebook-f"></i>
                        </div>
                        <div class="icons">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <div class="icons">
                            <i class="fa-brands fa-github"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottombar-con">
                <div class="bottombar">

                    <div class="logo">
                        <img src="{{ asset('assets/images/noodles.png') }}" alt="logo" />

                        <p>Bistro Bliss</p>
                    </div>
                    <div class="menues">
                        <div class="menue">
                            <a href="{{ route('home') }}">Home</a>
                        </div>
                        <div class="menue">
                            <a href="{{ route('about') }}">About</a>
                        </div>
                        <div class="menue">
                            <a href="{{ route('menu') }}">Menu</a>
                        </div>
                        <div class="menue">
                            <p>Pages</p>
                        </div>
                    </div>
                    <div
                        class="profile-hid relative sm:flex sm:justify-center sm:items-center bg-dots-darker bg-center selection:bg-red-500 selection:text-white">
                        @if (Route::has('login'))
                            <div class="sm:relative profile text-right z-10">
                                @auth
                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">



                                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                                <button
                                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                    <img class="h-8 w-8 rounded-full object-cover"
                                                        src="{{ Auth::user()->profile_photo_url }}"
                                                        alt="{{ Auth::user()->name }}" />
                                                </button>
                                            @else
                                                <span class="inline-flex rounded-md">
                                                    <button type="button"
                                                        class="profile-btm inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-indigo-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                        {{ Auth::user()->name }}

                                                        <svg class="ms-2 -me-0.5 h-4 w-4 arrowdown"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                        </svg>
                                                        <i class="fa-solid fa-angle-right" style="color: #000000;"></i>
                                                    </button>
                                                </span>
                                            @endif

                                        </x-slot>

                                        <x-slot name="content" class="open-menu">
                                            <!-- Account Management -->
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                {{ __('Manage Account') }}
                                            </div>

                                            <x-dropdown-link class="live-a" href="{{ route('profile.show') }}">
                                                {{ __('Profile') }}
                                            </x-dropdown-link>

                                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                                    {{ __('API Tokens') }}
                                                </x-dropdown-link>
                                            @endif

                                            <div class="border-t border-gray-200"></div>
                                                <a class="text-primary block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="{{ route('mybooking') }}">all my booking</a>
                                            <div class="border-t border-gray-200"></div>
                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}" x-data>
                                                @csrf

                                                <x-dropdown-link href="{{ route('logout') }}"
                                                    @click.prevent="$root.submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 login-a">Log
                                        in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 login-a">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>


                    <div class="booking">
                        <button> <a href="{{ route('book') }}">Book A Table</a> </button>
                    </div>
                    @if (auth()->user())
                        <ul class="icon-hid nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm"
                            id="pillNav2" role="tablist"
                            style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
                            <li class="nav-item" role="presentation">
                                <div class="menuejo">
                                    <button class="nav-link jo2 rounded-5" id="contact-tab2" data-bs-toggle="tab"
                                        type="button" role="tab" aria-selected="false"><i
                                            class="fa-solid fa-bell"></i>
                                        <div class="notifynum">
                                            <div class="nutify-con">
                                                {{ auth()->user()->unreadNotifications->count() }}
                                            </div>
                                        </div>
                                    </button>

                                    <ul class="bg-light menuess hide2 rounded-5 overflow-y-auto" id="ul-list">
                                        @foreach (auth()->user()->unreadNotifications as $item)
                                            <li class="mb-2"> <a href="{{ route('mark', $item->id) }}"
                                                    class="inf list-group-item list-group-item-action border-bottom border-primary-subtle">
                                                    <div>
                                                        time: {{ $item->data['time'] }}
                                                    </div>
                                                    <div>
                                                        date: {{ $item->data['date'] }}
                                                    </div>
                                                    <div>
                                                        persons: {{ $item->data['person'] }}
                                                    </div>
                                                    <div>
                                                        status: <span
                                                            class="
                                                        @if ($item->data['status'] == 'pendeng') text-info @endif

                                                        @if ($item->data['status'] == 'accept') text-success @endif
                                                        @if ($item->data['status'] == 'reject') text-danger @endif

                                                        ">{{ $item->data['status'] }}</span>
                                                    </div>
                                                </a></li>
                                        @endforeach
                                        @foreach (auth()->user()->readNotifications as $item)
                                            <li class="mb-2"> <a href="#"
                                                    class="cursor text-secondary list-group-item list-group-item-action border-bottom border-primary-subtle">
                                                    <div>
                                                        time: {{ $item->data['time'] }}
                                                    </div>
                                                    <div>
                                                        date: {{ $item->data['date'] }}
                                                    </div>
                                                    <div>
                                                        persons: {{ $item->data['person'] }}
                                                    </div>
                                                    <div>
                                                        status: <span
                                                            class="
                                                        @if ($item->data['status'] == 'pendeng') text-info @endif

                                                        @if ($item->data['status'] == 'accept') text-success @endif
                                                        @if ($item->data['status'] == 'reject') text-danger @endif

                                                        ">{{ $item->data['status'] }}</span>
                                                    </div>
                                                </a></li>
                                        @endforeach

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    @endif
                </div>
            </div>
        </div>
        <div class="load-con">
            <span class="loader"></span>
        </div>
    @show
    {{-- <x-app-layout>

    </x-app-layout> --}}
    @yield('content')




    @section('footer')
        <div class="form-container">
            <div class="footer">
                <div class="foot">
                    <div class="foot-1">
                        <ul class="col1">
                            <div class="logo">
                                <svg width="56" height="55" viewBox="0 0 56 55" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_349_28)">
                                        <path
                                            d="M47.6695 0.80383C47.3609 0.625798 46.9931 0.575068 46.6466 0.662739C46.3 0.750411 46.0029 0.969345 45.8203 1.27163L36.1489 17.3631C36.0993 17.4465 36.0593 17.5351 36.0295 17.6272C34.9474 18.0212 33.9374 18.5848 33.0387 19.2959C30.1083 14.4064 24.7391 11.3276 18.8732 11.3276C9.82213 11.3276 2.45967 18.5483 2.43444 27.4317H0.300903L0.491673 28.9239C1.60183 37.597 7.04798 45.1725 14.8787 49.1615V54.2826H35.0843C37.6455 54.2826 39.7292 52.2343 39.7292 49.7182V49.1621C47.5624 45.1713 53.0061 37.5958 54.1187 28.9239L54.3095 27.4305H50.4566C50.4387 22.8963 47.4781 19.0415 43.36 17.5861L55.4264 6.18174C55.9631 5.67465 55.9803 4.83454 55.4621 4.30751C55.3394 4.18203 55.1926 4.08154 55.0303 4.01178C54.868 3.94202 54.6932 3.90435 54.5161 3.90092C54.3389 3.8975 54.1628 3.92839 53.9978 3.99183C53.8328 4.05526 53.6821 4.15001 53.5544 4.27064L40.1132 16.9762C39.9926 16.9714 39.8726 16.9581 39.7501 16.9581C39.6726 16.9581 39.5981 16.969 39.5218 16.9702L48.1458 2.62004C48.236 2.47007 48.2952 2.30413 48.3201 2.13169C48.3449 1.95925 48.3349 1.78369 48.2907 1.61504C48.2465 1.44638 48.1689 1.28794 48.0623 1.14875C47.9557 1.00956 47.8222 0.892356 47.6695 0.80383ZM18.8726 13.9803C24.04 13.9803 28.7501 16.8372 31.0929 21.3134C30.2388 22.4671 29.6332 23.7798 29.3132 25.1712C28.2394 20.4763 23.9698 16.9569 18.8726 16.9569C12.9852 16.9569 8.19567 21.6519 8.17044 27.4311H5.13537C5.15998 20.0109 11.3114 13.9803 18.8726 13.9803ZM18.8726 22.5935C16.1464 22.5935 13.928 24.7603 13.9027 27.4311H10.872C10.8972 23.1145 14.4744 19.6102 18.8726 19.6102C23.272 19.6102 26.8529 23.1145 26.8757 27.4311H23.8412C23.8172 24.7603 21.5987 22.5935 18.8726 22.5935ZM21.1384 27.4317H16.6067C16.6188 26.8487 16.8628 26.2934 17.2866 25.885C17.7103 25.4765 18.2801 25.2472 18.8738 25.2462C19.4673 25.2473 20.0367 25.4768 20.46 25.8853C20.8833 26.2938 21.1269 26.8489 21.1384 27.4317ZM51.1975 30.0844C49.6966 37.7928 44.3741 44.3644 36.9975 47.5121H32.6744V50.1654H36.9686C36.8675 50.5817 36.6267 50.9525 36.2851 51.2182C35.9434 51.4838 35.5207 51.6288 35.0849 51.6299H17.5803V50.1654H22.6443V47.5121H17.6129C10.2363 44.3662 4.91321 37.7928 3.41106 30.0844H51.1975ZM37.4849 27.4317C37.4968 26.8489 37.7405 26.2939 38.1639 25.8854C38.5873 25.4769 39.1567 25.2475 39.7501 25.2462C40.3441 25.2467 40.9143 25.4758 41.3383 25.8844C41.7624 26.2929 42.0065 26.8484 42.0184 27.4317H37.4849ZM39.7501 19.6108C44.1514 19.6108 47.7335 23.1151 47.7569 27.4317H44.7206C44.696 24.7609 42.4769 22.5941 39.7501 22.5941C37.024 22.5941 34.8074 24.7609 34.7827 27.4317H31.7495C31.7741 23.1151 35.3514 19.6108 39.7501 19.6108Z"
                                            fill="white" />
                                        <path
                                            d="M39.1742 42.9139C39.3902 42.9139 39.6086 42.8637 39.8098 42.7568C41.4592 41.8897 42.9066 40.6947 44.0599 39.248C45.2131 37.8012 46.047 36.1345 46.5083 34.3539C46.5525 34.1848 46.5623 34.0088 46.5371 33.8361C46.5119 33.6633 46.4522 33.4971 46.3615 33.347C46.2708 33.1969 46.1507 33.0659 46.0083 32.9615C45.8659 32.8571 45.704 32.7813 45.5317 32.7385C45.3594 32.6957 45.1802 32.6867 45.0043 32.7121C44.8285 32.7374 44.6595 32.7967 44.507 32.8863C44.3546 32.976 44.2216 33.0943 44.1158 33.2346C44.01 33.3748 43.9334 33.5342 43.8905 33.7035C43.5222 35.1266 42.8561 36.4588 41.9346 37.6151C41.0131 38.7714 39.8565 39.7265 38.5385 40.4196C38.2727 40.5585 38.0618 40.7808 37.9396 41.051C37.8173 41.3213 37.7906 41.6239 37.8637 41.9108C37.9368 42.1976 38.1055 42.4522 38.343 42.634C38.5805 42.8158 38.8731 42.9143 39.1742 42.9139Z"
                                            fill="white" />
                                        <path
                                            d="M35.9059 45.0064C36.7902 45.0064 37.5071 44.3023 37.5071 43.4337C37.5071 42.5652 36.7902 41.8611 35.9059 41.8611C35.0215 41.8611 34.3046 42.5652 34.3046 43.4337C34.3046 44.3023 35.0215 45.0064 35.9059 45.0064Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_349_28">
                                            <rect width="56" height="55" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                <span>Bistro Bliss</span>
                            </div>
                            <p>
                                In the new era of technology we look a in the future with
                                certainty and pride to for our company and.
                            </p>

                            <div class="social">
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="17.5" cy="17.5" r="17.5" fill="#AD343E" />
                                    <path
                                        d="M25.2487 13.7333C24.7249 13.9661 24.172 14.1116 23.59 14.1989C24.172 13.8497 24.6376 13.2968 24.8413 12.6275C24.2884 12.9476 23.6773 13.1804 23.0081 13.3259C22.4843 12.773 21.7277 12.4238 20.9129 12.4238C19.3416 12.4238 18.0613 13.7042 18.0613 15.2755C18.0613 15.5083 18.0904 15.712 18.1486 15.9157C15.7916 15.7993 13.6673 14.6644 12.2415 12.9185C12.0087 13.355 11.8632 13.8206 11.8632 14.3443C11.8632 15.3337 12.3579 16.2067 13.1436 16.7304C12.678 16.7013 12.2415 16.585 11.8341 16.3813V16.4104C11.8341 17.8071 12.8235 18.971 14.1329 19.2329C13.9001 19.2911 13.6383 19.3202 13.3764 19.3202C13.2018 19.3202 12.9981 19.2911 12.8235 19.262C13.2018 20.3969 14.2493 21.2408 15.5006 21.2408C14.5112 21.9973 13.2891 22.4629 11.9505 22.4629C11.7177 22.4629 11.4849 22.4629 11.2812 22.4338C12.5616 23.2486 14.0456 23.7141 15.6752 23.7141C20.942 23.7141 23.8228 19.3493 23.8228 15.5665C23.8228 15.4501 23.8228 15.3046 23.8228 15.1882C24.3757 14.8099 24.8704 14.3152 25.2487 13.7333Z"
                                        fill="white" />
                                </svg>

                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="17.5" cy="17.5" r="17.5" fill="#AD343E" />
                                    <path
                                        d="M15.883 25.3846V18.4427H13.5469V15.7373H15.883V13.7421C15.883 11.4268 17.2971 10.166 19.3626 10.166C20.352 10.166 21.2023 10.2397 21.4501 10.2726V12.6923L20.0176 12.6929C18.8943 12.6929 18.6768 13.2267 18.6768 14.01V15.7373H21.3558L21.007 18.4427H18.6768V25.3846H15.883Z"
                                        fill="white" />
                                </svg>

                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="17.5" cy="17.5" r="17.5" fill="#AD343E" />
                                    <path
                                        d="M17.499 10.5639C19.7599 10.5639 20.0276 10.5724 20.9208 10.6131C21.4578 10.6197 21.9897 10.7183 22.4933 10.9046C22.8586 11.0455 23.1903 11.2613 23.4671 11.5381C23.744 11.8149 23.9597 12.1466 24.1006 12.5119C24.287 13.0156 24.3856 13.5475 24.3921 14.0845C24.4325 14.9776 24.4413 15.2453 24.4413 17.5062C24.4413 19.7671 24.4329 20.0349 24.3921 20.928C24.3856 21.465 24.287 21.9969 24.1006 22.5006C23.9597 22.8658 23.744 23.1976 23.4671 23.4744C23.1903 23.7512 22.8586 23.967 22.4933 24.1078C21.9897 24.2942 21.4578 24.3928 20.9208 24.3994C20.028 24.4397 19.7603 24.4486 17.499 24.4486C15.2377 24.4486 14.97 24.4401 14.0772 24.3994C13.5402 24.3928 13.0083 24.2942 12.5046 24.1078C12.1394 23.967 11.8077 23.7512 11.5308 23.4744C11.254 23.1976 11.0382 22.8658 10.8974 22.5006C10.711 21.9969 10.6124 21.465 10.6058 20.928C10.5655 20.0349 10.5567 19.7671 10.5567 17.5062C10.5567 15.2453 10.5651 14.9776 10.6058 14.0845C10.6124 13.5475 10.711 13.0156 10.8974 12.5119C11.0382 12.1466 11.254 11.8149 11.5308 11.5381C11.8077 11.2613 12.1394 11.0455 12.5046 10.9046C13.0083 10.7183 13.5402 10.6197 14.0772 10.6131C14.9704 10.5728 15.2381 10.5639 17.499 10.5639ZM17.499 9.03809C15.2006 9.03809 14.9111 9.04776 14.0079 9.08889C13.3051 9.10287 12.6097 9.23594 11.9514 9.48244C11.3867 9.69521 10.8752 10.0286 10.4526 10.4595C10.0214 10.8822 9.6877 11.394 9.4748 11.9591C9.2283 12.6174 9.09523 13.3127 9.08125 14.0155C9.04093 14.9179 9.03125 15.2074 9.03125 17.5058C9.03125 19.8042 9.04093 20.0937 9.08206 20.997C9.09604 21.6998 9.22911 22.3951 9.4756 23.0534C9.68827 23.6184 10.0217 24.1302 10.4526 24.553C10.8754 24.9839 11.3872 25.3174 11.9522 25.53C12.6105 25.7765 13.3059 25.9096 14.0087 25.9236C14.9119 25.9639 15.2002 25.9744 17.4998 25.9744C19.7994 25.9744 20.0877 25.9647 20.9909 25.9236C21.6937 25.9096 22.3891 25.7765 23.0474 25.53C23.6097 25.3121 24.1204 24.9791 24.5467 24.5525C24.973 24.1259 25.3056 23.6151 25.5232 23.0526C25.7697 22.3943 25.9028 21.699 25.9167 20.9962C25.9571 20.0937 25.9667 19.8042 25.9667 17.5058C25.9667 15.2074 25.9571 14.9179 25.9159 14.0147C25.9019 13.3119 25.7689 12.6166 25.5224 11.9582C25.3097 11.3932 24.9763 10.8815 24.5454 10.4587C24.1225 10.0277 23.6108 9.6943 23.0458 9.48163C22.3875 9.23513 21.6921 9.10206 20.9893 9.08809C20.0869 9.04776 19.7974 9.03809 17.499 9.03809Z"
                                        fill="white" />
                                    <path
                                        d="M17.4968 13.1621C16.6368 13.1621 15.7961 13.4171 15.081 13.8949C14.3659 14.3728 13.8086 15.0519 13.4794 15.8464C13.1503 16.641 13.0642 17.5153 13.232 18.3588C13.3998 19.2023 13.8139 19.9771 14.4221 20.5853C15.0302 21.1934 15.805 21.6075 16.6485 21.7753C17.492 21.9431 18.3663 21.857 19.1609 21.5279C19.9554 21.1988 20.6346 20.6414 21.1124 19.9263C21.5902 19.2112 21.8452 18.3705 21.8452 17.5105C21.8452 16.3572 21.3871 15.2512 20.5716 14.4357C19.7561 13.6202 18.6501 13.1621 17.4968 13.1621ZM17.4968 20.3331C16.9386 20.3331 16.3929 20.1675 15.9287 19.8574C15.4645 19.5472 15.1027 19.1064 14.8891 18.5907C14.6755 18.0749 14.6196 17.5074 14.7285 16.9598C14.8374 16.4123 15.1062 15.9094 15.501 15.5146C15.8957 15.1199 16.3986 14.8511 16.9462 14.7422C17.4937 14.6332 18.0612 14.6891 18.577 14.9028C19.0927 15.1164 19.5336 15.4782 19.8437 15.9424C20.1539 16.4065 20.3194 16.9522 20.3194 17.5105C20.3194 18.2591 20.022 18.977 19.4927 19.5064C18.9634 20.0357 18.2454 20.3331 17.4968 20.3331Z"
                                        fill="white" />
                                    <path
                                        d="M22.0318 14.0039C22.5929 14.0039 23.0479 13.549 23.0479 12.9878C23.0479 12.4266 22.5929 11.9717 22.0318 11.9717C21.4706 11.9717 21.0156 12.4266 21.0156 12.9878C21.0156 13.549 21.4706 14.0039 22.0318 14.0039Z"
                                        fill="white" />
                                </svg>

                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="17.5" cy="17.5" r="17.5" fill="#AD343E" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M18.2796 9.03809C13.7909 9.03809 10.1797 12.6493 10.1797 17.138C10.1797 20.7154 12.5084 23.7528 15.7146 24.8328C16.1196 24.9003 16.2546 24.6641 16.2546 24.4278C16.2546 24.2253 16.2546 23.7191 16.2546 23.0441C13.9934 23.5504 13.5209 21.9641 13.5209 21.9641C13.1496 21.0191 12.6096 20.7829 12.6096 20.7829C11.8672 20.2767 12.6771 20.2767 12.6771 20.2767C13.4871 20.3442 13.9259 21.1204 13.9259 21.1204C14.6346 22.3691 15.8158 21.9979 16.2883 21.7954C16.3558 21.2554 16.5583 20.9179 16.7946 20.7154C15.0059 20.5129 13.1159 19.8042 13.1159 16.6992C13.1159 15.8217 13.4196 15.0792 13.9596 14.5392C13.8921 14.3367 13.5884 13.5268 14.0271 12.3793C14.0271 12.3793 14.7021 12.1768 16.2546 13.223C16.8958 13.0543 17.6046 12.953 18.2796 12.953C18.9545 12.953 19.6633 13.0543 20.3045 13.223C21.857 12.1768 22.532 12.3793 22.532 12.3793C22.9707 13.493 22.7007 14.303 22.5995 14.5392C23.1057 15.113 23.4432 15.8217 23.4432 16.6992C23.4432 19.8042 21.5533 20.4791 19.7308 20.6816C20.0345 20.9179 20.2708 21.4241 20.2708 22.1666C20.2708 23.2466 20.2708 24.1241 20.2708 24.3941C20.2708 24.5966 20.4058 24.8666 20.8445 24.7991C24.0507 23.7528 26.3794 20.7154 26.3794 17.138C26.3794 12.6493 22.7682 9.03809 18.2796 9.03809Z"
                                        fill="white" />
                                </svg>
                            </div>
                        </ul>

                        <div class="cat">
                            <ul>
                                <p>Pages</p>
                                <li><a class="f-home" href="{{ route('home') }}">Home</a> </li>
                                <li><a class="f-home" href="{{ route('about') }}">About</a></li>
                                <li><a class="f-home" href="{{ route('menu') }}">Menu</a></li>
                                <li>Pricing</li>
                                <li>Blog</li>
                                <li>Contact</li>
                                <li>Delivery</li>
                            </ul>

                            <ul>
                                <p>Utility Pages</p>
                                <li>Start Here</li>
                                <li>Styleguide</li>
                                <li>Password Protected</li>
                                <li>404 Not Found</li>
                                <li>Licenses</li>
                                <li>Changelog</li>
                                <li>View More</li>
                            </ul>
                        </div>

                        <div class="fimg">
                            <p>Follow Us On Instagram</p>

                            <div class="imgs">
                                <img src="{{ asset('assets/images/footer1.jpg') }}" alt="" />
                                <img src="{{ asset('assets/images/footer2.jpg') }}" alt="" />
                                <img src="{{ asset('assets/images/footer3.jpg') }}" alt="" />
                                <img src="{{ asset('assets/images/footer4.jpg') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bot">
                    <div class="hr"></div>
                    <span>Copyright © 2023 Hashtag Developer. All Rights Reserved</span>
                </div>
            </div>
        </div>
    @show
    <script src="{{ asset('assets/js/jquery-3.6.4.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="/bootstrap-5.3.1-dist/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @livewireScripts
    <script src="{{ asset('assets/js/nav.js') }}"></script>
    @yield('js')
</body>

</html>
