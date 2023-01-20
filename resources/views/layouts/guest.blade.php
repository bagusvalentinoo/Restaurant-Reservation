<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Le Jourdain') }}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="bg-brown shadow-md" x-data="{ isOpen: false }">
        <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <a href="{{ route('index') }}"
                    class="text-xl font-bold text-transparent text-white md:text-2xl hover:text-green-400">
                    Le Jourdain
                </a>
                <div @click="isOpen = !isOpen" class="flex md:hidden">
                    <button type="button" class="d-none hover:text-gray-400 focus:outline-none focus:text-gray-400"
                        aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd"
                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            <div :class="isOpen ? 'flex' : 'hidden'"
                class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                <a class="text-transparent text-base text-white hover:text-green-400" href="{{ route('index') }}">
                    <i class="fa-solid fa-house mr-2"></i>Home</a>
                <a class="text-transparent text-base text-white hover:text-green-400"
                    href="{{ route('categories.index') }}"><i
                        class="fa-solid fa-table-cells-large mr-2"></i>Categories</a>
                <a class="text-transparent text-base text-white hover:text-green-400"
                    href="{{ route('menus.index') }}"><i class="fa-solid fa-utensils mr-2"></i>Our Menu</a>
                <a class="text-transparent text-base text-white hover:text-green-400"
                    href="{{ route('reservations.step.one') }}"><i class="fa-solid fa-book mr-2"></i>Make
                    Reservation</a>
            </div>
        </nav>
    </div>
    <div class="font-sans text-gray-900 antialiased min-h-screen bg-brown">
        {{ $slot }}
    </div>
    <footer class="bg-brown border-t border-gray-200">
        <div class="p-5 row-cols-3 flex justify-center items-center">
            <div class="col">
                <h2 class="white">Map and Contact</h2>
                <p><i class="fa-solid fa-location-dot mr-2"></i>101 rue des Couronnes 75020 Paris 20</p>
                <p><i class="fa-solid fa-phone mr-2"></i>01 43 66 29 10</p>
                <div class="flex items-center mt-4 ml-1">
                    <a class="black mr-20 icons-media" href="https://www.instagram.com/bagusvalentinoo/"><i
                            class="fa-brands fa-instagram fs-30"></i></a>
                    <a class="black icons-media" href="#"><i class="fa-brands fa-facebook fs-30"></i></a>
                </div>
            </div>
            <div class="col mr-50">
                <h2 class="white">Contact Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, sunt temporibus placeat
                    voluptatum tempora quaerat molestiae quidem voluptas.</p>
            </div>
            <div class="col">
                <h2 class="white">Stay Updated</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, sunt temporibus placeat
                    voluptatum tempora quaerat molestiae quidem voluptas.</p>
            </div>
        </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/script.js" type="text/javascript"></script>
</body>

</html>
