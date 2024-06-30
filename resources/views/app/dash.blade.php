<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SEASalon</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<!--
// v0 by Vercel.
// https://v0.dev/t/IpUZ456pXki
-->

    <div class="container flex flex-row">
        <div class="sidebar fixed min-h-screen w-[160px] sm:w-[200px] border-2 bg-muted/40 block">
            <div class="flex flex-col gap-2">
                <div class="flex h-[60px] items-center px-6">
                    <a class="flex items-center gap-2 font-semibold" href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 50 50">
                            <path fill="currentColor"
                                d="M34.781 6.664H27.83c-1.256.004-1.209 1.876 0 1.865h6.951v.957H27.83c-1.249-.011-1.203 1.86 0 1.865h6.951v.978H27.83c-1.249 0-1.203 1.87 0 1.865h6.951v.932H27.83c-1.223.009-1.203 1.881 0 1.887h6.951v.934H27.83c-1.223-.004-1.228 1.865 0 1.865h6.951v.932H27.83c-1.223.004-1.228 1.875 0 1.866h6.951v.955H27.83c-1.223-.011-1.228 1.858 0 1.865h6.951v.93H27.83c-1.223-.001-1.203 1.872 0 1.866h6.951v18.159c.004 2.767 4.207 2.717 4.219 0V3.89c-.012-1.264-1.05-2.862-2.758-2.867H27.83c-1.256.001-1.209 1.873 0 1.865l6.951.023v.93H27.83c-1.254-.006-1.207 1.865 0 1.866h6.951zm-7.429 32.194C27.348 35.628 24 32.154 20 34.404V22.05L17.413 1.675c-.054-.539-.511-.666-.818-.675c-.317.009-.952.136-1.021.675L13 22.05v12.354c-4-2.25-7.24 1.246-7.241 4.429c.001 2.832 2.181 5.158 5.131 5.151c2.972.007 5.11-2.6 5.11-5.151V26h1v12.833c0 2.856 2.212 4.97 4.67 5.104c-.041 1.566.47 3.8 1.432 4.686c1.128 1.04 2.471-.29 1.92-1.373c-.532-1.008-1.054-1.605-.63-3.806c1.772-.82 2.956-2.546 2.96-4.586m-16.348 2.541a2.542 2.542 0 0 1 0-5.085c1.386.008 2.515 1.145 2.525 2.544a2.552 2.552 0 0 1-2.525 2.541m8.571-2.541a2.553 2.553 0 0 1 2.526-2.544a2.548 2.548 0 0 1 2.525 2.544a2.545 2.545 0 0 1-2.525 2.541a2.549 2.549 0 0 1-2.526-2.541" />
                        </svg>
                        <span class="">SEASalon</span>
                    </a>
                </div>
                <div class="flex-1">
                    <nav class="grid items-start px-4 text-sm font-medium">
                        @if (auth()->user()->role == 'admin')
                            <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-primary transition-all hover:bg-accent hover:text-accent-foreground"
                                href="/admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                Home
                            </a>
                            <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-muted-foreground transition-all hover:bg-accent hover:text-accent-foreground"
                                href="/admin/branches">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M13 14c-3.36 0-4.46 1.35-4.82 2.24C9.25 16.7 10 17.76 10 19a3 3 0 0 1-3 3a3 3 0 0 1-3-3c0-1.31.83-2.42 2-2.83V7.83A2.99 2.99 0 0 1 4 5a3 3 0 0 1 3-3a3 3 0 0 1 3 3c0 1.31-.83 2.42-2 2.83v5.29c.88-.65 2.16-1.12 4-1.12c2.67 0 3.56-1.34 3.85-2.23A3.01 3.01 0 0 1 14 7a3 3 0 0 1 3-3a3 3 0 0 1 3 3c0 1.34-.88 2.5-2.09 2.86C17.65 11.29 16.68 14 13 14m-6 4a1 1 0 0 0-1 1a1 1 0 0 0 1 1a1 1 0 0 0 1-1a1 1 0 0 0-1-1M7 4a1 1 0 0 0-1 1a1 1 0 0 0 1 1a1 1 0 0 0 1-1a1 1 0 0 0-1-1m10 2a1 1 0 0 0-1 1a1 1 0 0 0 1 1a1 1 0 0 0 1-1a1 1 0 0 0-1-1" />
                                </svg> 
                                Branches
                            </a>
                            <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-muted-foreground transition-all hover:bg-accent hover:text-accent-foreground"
                                href="/admin/services">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 256 256">
                                    <path fill="currentColor"
                                        d="M238.78 183.79L98.28 87.65A40.2 40.2 0 0 0 100 76a40 40 0 1 0-15.29 31.45l30 20.56l-30 20.56a40 40 0 1 0 3.57 59.74A39.73 39.73 0 0 0 100 180a40.2 40.2 0 0 0-1.72-11.66l37.72-25.8l89.22 61.06a12 12 0 0 0 13.56-19.81m-167.47 7.54A16 16 0 1 1 76 180a16 16 0 0 1-4.69 11.33M48.69 87.3a16 16 0 1 1 22.62 0a16 16 0 0 1-22.62 0m112.82 23.24a12 12 0 0 1 3.13-16.68l60.58-41.46a12 12 0 0 1 13.56 19.81l-60.59 41.46a12 12 0 0 1-16.68-3.13" />
                                </svg> Services
                            </a>
                        @else
                            <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-primary transition-all hover:bg-accent hover:text-accent-foreground"
                                href="/dashboard">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                Home
                            </a>
                            <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-muted-foreground transition-all hover:bg-accent hover:text-accent-foreground"
                                href="/dashboard/reservation">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M5 21V5q0-.825.588-1.412T7 3h6v2H7v12.95l5-2.15l5 2.15V11h2v10l-7-3zM7 5h6zm10 4V7h-2V5h2V3h2v2h2v2h-2v2z" />
                                </svg>
                                Reservation
                            </a>
                        @endif
                        <form method="POST" action="/logout">
                            @csrf
                            <button
                                class="flex items-center gap-3 rounded-lg px-3 py-2 text-muted-foreground transition-all hover:bg-accent hover:text-accent-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M15 4.001H5v14a2 2 0 0 0 2 2h8m1-5l3-3m0 0l-3-3m3 3H9" />
                                </svg>
                                Logout
                            </button>
                        </form>
                    </nav>
                </div>
            </div>
        </div>
        <div class="navbara flex flex-col w-full ml-[160px] sm:ml-[200px]">
            <header class="flex h-14 lg:h-[60px] items-center gap-4 border-b bg-muted/40 px-6">
                <div class="flex-1">
                    <h1 class="font-semibold text-lg flex items-end"><span class="cursor-pointer hover:font-black transition text-2xl mr-2" id="nav-toggle">&equiv;</span> Dashboard</h1>
                </div>
            </header>


            <div class="content w-full p-4">
                @yield('content')
            </div>
        </div>
    </div>

    
    <script>
        const navToggle = document.getElementById('nav-toggle')
        const sideBar = document.querySelector('.sidebar')
        const navBar = document.querySelector('.navbara')


        navToggle.addEventListener('click', () => {
            sideBar.classList.toggle('hidden')
            navBar.classList.toggle('ml-[160px]')
            navBar.classList.toggle('sm:ml-[200px]')
            
        })
    </script>
    <script src={{ asset('js/jquery.js') }}></script>
</body>

</html>
