<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="theme-color" content="#000000" />
{{--        <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"/>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
        <title>Blayne Bennett's Portfolio</title>
    </head>
    <body class="antialiased w-100 h-100 mx-0 my-0 px-0 py-0">
        {{--NAV--}}
        <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
            <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
                <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                    <a class="text-md font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-white"
                       href="#main">Blayne Bennett</a>
                    <button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                            type="button"
                            onclick="toggleNavbar('example-collapse-navbar')">
                        <i class="text-white fas fa-bars"></i>
                    </button>
                </div>

                {{--NAV LINKS--}}
                <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
                     id="example-collapse-navbar">
                    {{--MAIN NAV--}}
                    <ul class="flex flex-col lg:flex-row list-none mr-auto">
                        <li class="flex items-center">
                            <a class="lg:text-gray-300 hover:text-gray-600 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                               href="#about">
                                <i class="lg:text-gray-300 text-gray-500 fas fa-user text-lg leading-lg mr-2"></i>
                                About</a>
                        </li>
                        <li class="flex items-center">
                            <a class="lg:text-gray-300 hover:text-gray-600 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                               href="#work">
                                <i class="lg:text-gray-300 text-gray-500 fas fa-briefcase text-lg leading-lg mr-2"></i>
                                Work</a>
                        </li>
                        <li class="flex items-center">
                            <a class="lg:text-gray-300 hover:text-gray-600 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                               href="#projects">
                                <i class="lg:text-gray-300 text-gray-500 fas fa-project-diagram text-lg leading-lg mr-2"></i>
                                Projects</a>
                        </li>
                        <li class="flex items-center">
                            <a class="lg:text-gray-300 hover:text-gray-600 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                               href="#contact">
                                <i class="lg:text-gray-300 text-gray-500 fas fa-id-card-alt text-lg leading-lg mr-2"></i>
                                Contact Me!</a>
                        </li>
                    </ul>

                    {{--MOBILE NAV--}}
                    <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                        <li class="flex items-center">
                            <a class="lg:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                               href="https://www.linkedin.com/in/blayne-bennett-22906b155/">
                            <i class="lg:text-gray-300 hover:text-gray-600 text-gray-500 fab fa-linkedin text-lg leading-lg">
                            </i><span class="lg:hidden inline-block ml-2">Linkedin</span></a>
                        </li>
                        <li class="flex items-center">
                            <a class="lg:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                               href="https://github.com/BJBT">
                                <i class="lg:text-gray-300 hover:text-gray-600 text-gray-500 fab fa-github text-lg leading-lg"></i>
                                <span class="lg:hidden inline-block ml-2">Github</span>
                            </a>
                        </li>
                        <li class="flex items-center">
                            <button class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:bg-yellow-500 outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                                    type="button"
                                    style="transition: all 0.15s ease 0s;">
                                <i class="fas fa-arrow-alt-circle-down mr-1"></i>
                                Resume
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            {{--MAIN PAGE--}}
            <div class="relative pt-16 pb-32 flex content-center items-center justify-center shadow-2xl" id="main"
                 style="min-height: 100vh;">
                <div class="absolute top-0 w-full h-full bg-center bg-cover bg-gray-800">
                </div>
                <div class="container relative mx-auto">
                    <div class="items-center flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                            <div class="pr-14">
                                <h2 class="text-white font-semibold text-4xl">
                                    Hello There! My Name Is
                                </h2>
                                <h1 class="text-gray-600 font-bold text-6xl">
                                    Blayne <span class="text-yellow-500">Bennett</span>
                                </h1>
                                <p class="mt-4 text-lg text-gray-300">
                                    I am a software engineer based out of Arizona! <br>
                                   I specialize in building useful
                                   (and sometimes cool) things on the web!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden shadow-xl"
                     style="height: 70px; transform: translateZ(0px);">
                        <svg
                            class="absolute bottom-0 overflow-hidden"
                            xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="none"
                            version="1.1"
                            viewBox="0 0 2560 100"
                            x="0"
                            y="0">
                        <polygon class="text-yellow-500 fill-current"
                                 points="2560 0 2560 100 0 100">
                        </polygon>
                    </svg>
                </div>
            </div>

            {{--ABOUT ME--}}
            <div class="pb-20 -mt-24 shadow-2xl" id="about">
                <div class="container bg-gray-300 mx-auto px-10 py-10 rounded-lg shadow-xl">
                    <div class="flex flex-wrap items-center mt-32">
                        <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                            <h2 class="text-4xl mb-2 font-semibold leading-normal">
                                About Me
                            </h2>
                            <p class="text-lg font-dark leading-relaxed mt-4 mb-4 text-gray-700">
                                I enjoy building anything on the web from simple websites, to complex
                                marketing management web applications and everything in between.
                            </p>
                            <p class="text-lg font-dark leading-relaxed mt-4 mb-4 text-gray-700">
                                On my free time I love to <span class="text-gray-900 text-bold">snowboard</span> 🏂 , <span class="text-gray-900 text-bold">read</span> 📚 , <span class="text-gray-900 text-bold">travel</span> ✈️ , and <span class="text-gray-900 text-bold">learn</span> new things.
                                Whether that be hobbies or technologies / frameworks! 🧠
                            </p>
                        </div>
                        <div class="w-full md:w-4/12 px-4 mr-auto ml-auto mt-4">
                            <div class="mt-6">
                                <h3 class="font-bold text-lg text-gray-800 mt-8 mb-4">
                                    These Are The Technologies I Work With:
                                </h3>
                                <ul class="list-none mt-6">
                                    <li class="py-2 mb-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span class="mr-2 text-gray-600 bg-yellow-500 p-3 text-center items-center justify-center w-10 h-10 shadow-lg rounded-full"
                                                ><i class="fab fa-laravel"></i
                                                    ></span>
                                            </div>
                                            <div>
                                                <h4 class="text-gray-800">
                                                    Laravel
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2 mb-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span class="mr-2 text-gray-600 bg-yellow-500 p-3 text-center items-center justify-center w-10 h-10 shadow-lg rounded-full"
                                                ><i class="fab fa-php"></i
                                                    ></span>
                                            </div>
                                            <div>
                                                <h4 class="text-gray-800">
                                                    PHP
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2 mb-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span class="mr-2 text-gray-600 bg-yellow-500 p-3 text-center items-center justify-center w-10 h-10 shadow-lg rounded-full"
                                                ><i class="far fa-paper-plane"></i
                                                    ></span>
                                            </div>
                                            <div>
                                                <h4 class="text-gray-800">
                                                    Tailwind CSS
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2 mb-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span class="mr-2 text-gray-600 bg-yellow-500 p-3 text-center items-center justify-center w-10 h-10 shadow-lg rounded-full"
                                                ><i class="fab fa-html5"></i
                                                    ></span>
                                            </div>
                                            <div>
                                                <h4 class="text-gray-800">
                                                    HTML5 & (S)CSS
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2 mb-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span class="mr-2 text-gray-600 bg-yellow-500 p-3 text-center items-center justify-center w-10 h-10 shadow-lg rounded-full"
                                                ><i class="fas fa-database"></i
                                                    ></span>
                                            </div>
                                            <div>
                                                <h4 class="text-gray-800">
                                                    MySQL / SQL
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2 mb-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span class="mr-2 text-gray-600 bg-yellow-500 p-3 text-center items-center justify-center w-10 h-10 shadow-lg rounded-full"
                                                ><i class="fab fa-apple"></i
                                                    ></span>
                                            </div>
                                            <div>
                                                <h4 class="text-gray-800">
                                                    MacOS
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--WORK EXPERIENCE--}}
            <section class="relative py-20" id="work">
                <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden shadow-2xl -mt-20"
                     style="height: 80px; transform: translateZ(0px);">
                    <svg class="absolute bottom-0 overflow-hidden"
                         xmlns="http://www.w3.org/2000/svg"
                         preserveAspectRatio="none"
                         version="1.1"
                         viewBox="0 0 2560 100"
                         x="0"
                         y="0">
                        <polygon
                                class="text-yellow-500 fill-current"
                                points="2560 0 2560 100 0 100"
                        ></polygon>
                    </svg>
                </div>
                <div class="container mx-auto px-4">
                    <h3 class="justify-start text-3xl font-semibold">Where I Have Worked:</h3>
                    <div class="items-center place-content-start px-6 py-6">
                        <div x-data="{ openTab: 1,
                                       activeClasses: 'border-l border-t border-r rounded-lg text-gray-700 shadow-lg',
                                       inactiveClasses: 'text-gray-500 hover:bg-yellow-500 opacity-50 rounded-lg shadow-md' }"
                             class="max-w-lg mx-auto p-6">
                            <ul class="flex border-b place-content-start">
                                <li @click="openTab = 1" class="-mb-px mr-1">
                                    <button :class="openTab === 1 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold">
                                        Ripe Metrics
                                    </button>
                                </li>
                                <li @click="openTab = 2" class="mr-1">
                                    <button :class="openTab === 2 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold">
                                        Honeywell Aero
                                    </button>
                                </li>
                                <li @click="openTab = 3" class="mr-1">
                                    <button :class="openTab === 3 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold">Reserved For You</button>
                                </li>
                            </ul>
                            <div class="w-full pt-4">
                                <div x-show="openTab === 1">
                                    <p class="mt-4 text-lg leading-relaxed text-gray-600">
                                       Full Stack Software Engineer Intern <span class="mt-4 text-lg leading-relaxed text-gray-900"> @ Ripe Metrics </span>
                                    </p>
                                    <p class="mt-4 text-md leading-relaxed text-gray-600">
                                        August 25, 2020 - January 25, 2021
                                    </p>
                                    <ul class="list-none mt-6">
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div>
                                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full bg-yellow-500 mr-3">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h4 class="text-gray-600">
                                                        Use Laravel, PHP, PHPUnit and a TDD (Test Driven Development)
                                                        workflow to assist in building out a multi-faceted, user friendly, marketing platform
                                                    </h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div>
                                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full bg-yellow-500 mr-3">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h4 class="text-gray-600">Work with the design team to help redesign UI using TailwindCSS and Livewire</h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div>
                                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full bg-yellow-500 mr-3">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h4 class="text-gray-600">Communicate with other developers, designers, and managers on a daily basis</h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div x-show="openTab === 2">
                                    <p class="mt-4 text-lg leading-relaxed text-gray-600">
                                        Test Technician <span class="mt-4 text-lg leading-relaxed text-gray-900"> @ Honeywell </span>
                                    </p>
                                    <p class="mt-4 text-md leading-relaxed text-gray-600">
                                        August 2017 - Current
                                    </p>
                                    <ul class="list-none mt-6">
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div>
                                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full bg-yellow-500 mr-3">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h4 class="text-gray-600">
                                                        Work with software like ALTDS and VLIS to calculate flows and pressures to properly calibrate
                                                        pneumatic valves for Boeing, Airbus, IAI, the military and various other customers.
                                                    </h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div>
                                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full bg-yellow-500 mr-3">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h4 class="text-gray-600">
                                                        Collaborate closely in a team setting to identify current days needs to deliver a timely product
                                                        to our customers
                                                    </h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div>
                                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full bg-yellow-500 mr-3">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h4 class="text-gray-600">
                                                        Ensure from assembly of product, all the way through to final preparation that the product is well
                                                        taken care of, built right, and calibrated properly.
                                                    </h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div x-show="openTab === 3">
                                    <p class="mt-4 text-lg leading-relaxed text-gray-600">
                                        Software Engineer <span class="mt-4 text-lg leading-relaxed text-gray-900"> @ Your Company </span>
                                    </p>
                                    <p class="mt-4 text-md leading-relaxed text-gray-600">
                                        Soon!
                                    </p>
                                    <ul class="list-none mt-6">
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div>
                                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full bg-yellow-500 mr-3">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h4 class="text-gray-600">
                                                       I would love an opportunity to work with you and your team at your company! Thanks for
                                                        taking the time and looking over my site!
                                                    </h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                     style="height: 70px; transform: translateZ(0px);">
                    <svg
                            class="absolute bottom-0 overflow-hidden"
                            xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="none"
                            version="1.1"
                            viewBox="0 0 2560 100"
                            x="0"
                            y="0">
                        <polygon class="text-gray-600 fill-current"
                                 points="2560 0 2560 100 0 100">
                        </polygon>
                    </svg>
                </div>
            </section>

            {{--PROJECTS--}}
            <section class="pt-20 pb-48 bg-gray-600" id="projects">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap justify-center text-center mb-24">
                        <div class="w-full lg:w-6/12 px-4">
                            <h2 class="text-4xl font-semibold text-gray-900">My Projects</h2>
                            <p class="text-lg leading-relaxed m-4 text-gray-900">
                               Here are just a few projects I have worked on!
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                            <div class="px-6">
                                <img alt=""
                                     src="{{ asset('images/port_site.png') }}"
                                     class="h-46 w-full shadow-2xl rounded-lg mx-auto"
                                />
                                <div class="pt-6 text-center">
                                    <h5 class="text-xl font-bold text-gray-900">This site you're on!</h5>
                                    <p class="mt-1 text-sm text-gray-300 font-semibold">
                                        A simple laravel project using TailwindCSS, and Alpinejs
                                    </p>
                                </div>
                                <ul>
                                    <li class="py-2 mt-2">
                                        <div class="flex items-center">
                                            <div>
                                                <a href="https://github.com/BJBT/Laravel-portfolio"
                                                   class="m-4 p-2 text-gray-600 bg-yellow-500 shadow-lg rounded-lg">
                                                    <i class="fab fa-github"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                            <div class="px-6">
                                <img alt=""
                                     src="{{ asset('images/fluv.png') }}"
                                     class="h-46 w-full shadow-2xl rounded-lg mx-auto"
                                />
                                <div class="pt-6 text-center">
                                    <h5 class="text-xl font-bold text-gray-900">Fluvvia</h5>
                                    <p class="mt-1 text-sm text-gray-300 font-semibold">
                                        A white label small business management software built using Laravel / PHP, and TailwindCSS.
                                    </p>
                                </div>
                                <ul>
                                    <li class="py-2 mt-2">
                                        <div class="flex items-center">
                                            <div>
                                                <a href="https://github.com/BJBT/Laravel-portfolio"
                                                   class="m-4 p-2 text-gray-600 bg-yellow-500 shadow-lg rounded-lg">
                                                    <i class="fab fa-github"></i>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="https://fluv.com"
                                                   class="m-4 p-2 text-gray-600 bg-yellow-500 shadow-lg rounded-lg">
                                                    <i class="fas fa-globe-americas"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                            <div class="px-6">
                                <img
                                        alt="..."
                                        src="https://images.unsplash.com/photo-1493612276216-ee3925520721?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                        class="shadow-lg rounded-full max-w-full mx-auto"
                                        style="max-width: 120px;"
                                />
                                <div class="pt-6 text-center">
                                    <h5 class="text-xl font-bold text-gray-900">Project # 3</h5>
                                    <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                        Website
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                            <div class="px-6">
                                <img
                                        alt="..."
                                        src="https://images.unsplash.com/photo-1493612276216-ee3925520721?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                        class="shadow-lg rounded-full max-w-full mx-auto"
                                        style="max-width: 120px;"
                                />
                                <div class="pt-6 text-center">
                                    <h5 class="text-xl font-bold text-gray-900">Project # 4</h5>
                                    <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                        Website
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{--CONTACT ME--}}
            <section class="pb-20 relative block bg-gray-800" id="contact">
                <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                     style="height: 80px; transform: translateZ(0px);">
                    <svg class="absolute bottom-0 overflow-hidden"
                         xmlns="http://www.w3.org/2000/svg"
                         preserveAspectRatio="none"
                         version="1.1"
                         viewBox="0 0 2560 100"
                         x="0"
                         y="0">
                        <polygon class="text-gray-800 fill-current"
                                 points="2560 0 2560 100 0 100">
                        </polygon>
                    </svg>
                </div>
                <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
                    <div class="flex flex-wrap text-center justify-center">
                        <div class="w-full lg:w-6/12 px-4 mx-8 my-8">
                            <h2 class="text-4xl font-semibold text-white">Want to get in contact?</h2>
                            <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                                Complete this form and I will get back to you within 24 hours!
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="relative block py-24 lg:pt-0 bg-gray-800">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300">
                                <div class="flex-auto p-5 lg:p-10">
                                    <div class="relative w-full mb-3 mt-8">
                                        <label
                                                class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                for="full-name"
                                        >Full Name</label
                                        ><input
                                                type="text"
                                                class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                                placeholder="Full Name"
                                                style="transition: all 0.15s ease 0s;"
                                        />
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label
                                                class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                for="email"
                                        >Email</label
                                        ><input
                                                type="email"
                                                class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                                placeholder="Email"
                                                style="transition: all 0.15s ease 0s;"
                                        />
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label
                                                class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                for="message"
                                        >Message</label
                                        ><textarea
                                                rows="4"
                                                cols="80"
                                                class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                                placeholder="Type a message..."
                                        ></textarea>
                                    </div>
                                    <div class="text-center mt-6">
                                        <button
                                                class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                                type="button"
                                                style="transition: all 0.15s ease 0s;"
                                        >
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>
    <script>
        function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("block");
        }
    </script>
</html>

