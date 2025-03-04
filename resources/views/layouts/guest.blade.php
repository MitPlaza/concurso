<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased" style="background: #AFE2E3">
    <div class=" min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">


        <div class="w-4xl mt-0 px-0 py-0  overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.0.0/dist/flowbite.min.js"></script>
</body>

<footer class=" rounded-lg shadow-sm m-4 " style="background: #0095A5;">
    <div class="w-full mx-auto max-w-screen-xl p-4 flex items-center justify-between">
        <ul
            class="mx-auto text-center font-medium flex flex-row p-4 md:p-0 mt-4 rounded-lg space-x-4 md:space-x-8 rtl:space-x-reverse md:mt-0 ">
            <li><a href="https://www.instagram.com/bambino_chile/" target="_blank">
                    <svg class="text-gray-200" fill="#ffffff" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="30" height="30" viewBox="0 0 24 24">
                        <path
                            d="M 8 3 C 5.243 3 3 5.243 3 8 L 3 16 C 3 18.757 5.243 21 8 21 L 16 21 C 18.757 21 21 18.757 21 16 L 21 8 C 21 5.243 18.757 3 16 3 L 8 3 z M 8 5 L 16 5 C 17.654 5 19 6.346 19 8 L 19 16 C 19 17.654 17.654 19 16 19 L 8 19 C 6.346 19 5 17.654 5 16 L 5 8 C 5 6.346 6.346 5 8 5 z M 17 6 A 1 1 0 0 0 16 7 A 1 1 0 0 0 17 8 A 1 1 0 0 0 18 7 A 1 1 0 0 0 17 6 z M 12 7 C 9.243 7 7 9.243 7 12 C 7 14.757 9.243 17 12 17 C 14.757 17 17 14.757 17 12 C 17 9.243 14.757 7 12 7 z M 12 9 C 13.654 9 15 10.346 15 12 C 15 13.654 13.654 15 12 15 C 10.346 15 9 13.654 9 12 C 9 10.346 10.346 9 12 9 z">
                        </path>
                    </svg></a>
            </li>
            <li><a href="https://www.youtube.com/channel/UCJwBUXbVdKMQVYXANX2nl8g" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" fill="#ffffff" width="30" height="30"
                        viewBox="0 0 50 50">
                        <path
                            d="M 44.898438 14.5 C 44.5 12.300781 42.601563 10.699219 40.398438 10.199219 C 37.101563 9.5 31 9 24.398438 9 C 17.800781 9 11.601563 9.5 8.300781 10.199219 C 6.101563 10.699219 4.199219 12.199219 3.800781 14.5 C 3.398438 17 3 20.5 3 25 C 3 29.5 3.398438 33 3.898438 35.5 C 4.300781 37.699219 6.199219 39.300781 8.398438 39.800781 C 11.898438 40.5 17.898438 41 24.5 41 C 31.101563 41 37.101563 40.5 40.601563 39.800781 C 42.800781 39.300781 44.699219 37.800781 45.101563 35.5 C 45.5 33 46 29.398438 46.101563 25 C 45.898438 20.5 45.398438 17 44.898438 14.5 Z M 19 32 L 19 18 L 31.199219 25 Z">
                        </path>
                    </svg></a>
            </li>
            <li><a href="https://www.facebook.com/BambinoChile/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" fill="#ffffff"
                        viewBox="0 0 30 30">
                        <path
                            d="M12,27V15H8v-4h4V8.852C12,4.785,13.981,3,17.361,3c1.619,0,2.475,0.12,2.88,0.175V7h-2.305C16.501,7,16,7.757,16,9.291V11 h4.205l-0.571,4H16v12H12z">
                        </path>
                    </svg></a>
            </li>
        </ul>
    </div>
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="mx-auto text-sm text-gray-100 sm:text-center ">© 2025 <a href="https://bambino.cl"
                class="hover:underline">Bambino</a>. All Rights Reserved.
        </span>


    </div>

</footer>

</html>