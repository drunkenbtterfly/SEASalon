<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SEASalon</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
</head>
</head>
<body class="bg-gradient-to-tr from-gray-700 to-indigo-700">
<header>
  <nav class="bg-black md:px-20 py-4 px-6 rounded-b-3xl">
        <div class="flex items-center justify-between">
            <div class="font-bold text-lg flex items-center">
                <a href="#">
                    <p class="text-gradient text-2xl font-bold">SEASalon</p>
                </a>
            </div>
        
            <div class="md:hidden">
                <button id="hamburger" class="text-indigo-700 focus:outline-none">
                    <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        
            <div id="menu" class="hidden md:flex md:items-center md:space-x-4">
                <a href="/" class="text-gradient text-xl font-semibold hover:underline">Home</a>
                <a href="/servicess" class="text-gradient text-xl font-semibold hover:underline">Services</a>
                <a href="/login" class="text-gradient text-xl font-semibold hover:underline">Reservations</a>
                <a href="/reviewss" class="text-gradient text-xl font-semibold ml-10 hover:underline">Reviews</a>
            </div>
        </div>

        <div id="mobile-menu" class="menu md:hidden mt-2">
            <a href="/" class="block text-gradient text-2xl font-bold py-2 hover:underline">Home</a>
            <a href="/servicess" class="block text-gradient text-2xl font-bold py-2 hover:underline">Services</a>
            <a href="/login" class="block text-gradient text-2xl font-bold py-2 hover:underline">Reservations</a>
            <a href="/reviewss" class="block text-gradient text-2xl font-bold py-2 hover:underline">Reviews</a>
        </div>
    </nav>
</header>


    <div class="content">
        @yield('content')
    </div>
        



    <footer class="bg-black p-8 rounded-t-3xl">
        <div class="container flex flex-col sm:flex-row gap-4 sm:items-start sm:justify-between w-full max-w-[1200px] mx-auto my-0">
            <div class="footer-left flex">
                <a href="/">
                    <h1 class="text-gradient text-2xl font-bold">SEASalon</h1>
                </a>
            </div>
            <div class="footer-right flex flex-col gap-4 sm:gap-12 sm:items-start sm:flex-row">
                <div class="f-menu-1 flex flex-col gap-1"> {{-- Footer Menu 1 --}}
                    <div class="fm1-head">
                        <h3 class="text-gradient font-bold text-lg">Menu</h3>
                    </div>
                    <div class="fm1-body">
                        <ul class="flex flex-col gap-1">
                            <a class="text-gradient font-medium hover:text-slate-600 transition" href="/">
                                <li>Home</li>
                            </a>
                            <a class="text-gradient font-medium hover:text-slate-600 transition" href="/servicess">
                                <li>Services</li>
                            </a>
                            <a class="text-gradient font-medium hover:text-slate-600 transition" href="/login">
                                <li>Reservations</li>
                            </a>
                            <a class="text-gradient font-medium hover:text-slate-600 transition" href="/reviewss">
                                <li>Reviews</li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="f-menu-2">
                    <div class="fm2-head">
                        <h3 class="text-gradient font-bold text-lg">Social</h3>
                    </div>
                    <div class="fm2-body">
                        <ul class="flex flex-col gap-1">
                            <a class="text-gradient font-medium hover:text-slate-600 transition" href="#">
                                <li>Facebook</li>
                            </a>
                            <a class="text-gradient font-medium hover:text-slate-600 transition" href="#">
                                <li>Instagram</li>
                            </a>
                            <a class="text-gradient font-medium hover:text-slate-600 transition" href="#">
                                <li>Twitter</li>
                            </a>
                            <a class="text-gradient font-medium hover:text-slate-600 transition" href="#">
                                <li>Maps</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        document.getElementById('hamburger').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('active');

        document.addEventListener('DOMContentLoaded', () => {
        const elements = document.querySelectorAll('.animate-on-scroll');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-slide-up');
                    observer.unobserve(entry.target);
                }
            });
        });

        elements.forEach(element => {
            observer.observe(element);
        });
        });
        });

        var map = L.map('map').setView([-6.200000, 106.816666], 10);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    L.marker([-6.200000, 106.816666]).addTo(map)
      .bindPopup('Lokasi Anda')
      .openPopup();
    
  </script>
</body>
</html>