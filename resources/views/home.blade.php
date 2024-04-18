<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <div x-data="{ state: false }">

        <nav x-data="{ isOpen: false }" class="border-b dark:border-gray-700">
            <div class="container px-6 py-6 mx-auto lg:flex lg:justify-between lg:items-center">
                <div class="flex items-center justify-between">
                    <a href="#">
                        <img class="w-auto" height="50" src="https://empregosyoyota.net/storage/images/logo.png"
                            alt="">
                    </a>

                    <!-- Mobile menu button -->
                    <div class="flex lg:hidden">
                        <button x-cloak @click="isOpen = !isOpen" type="button"
                            class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                            aria-label="toggle menu">
                            <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                            </svg>

                            <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
                    class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white shadow-md lg:bg-transparent lg:dark:bg-transparent lg:shadow-none dark:bg-gray-900 lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">
                    <div class="flex flex-col space-y-8 lg:flex-row lg:items-center lg:space-y-0 lg:-px-8">
                        <a class="block font-medium text-gray-700 dark:text-gray-200 lg:mx-8 hover:text-gray-900 dark:hover:text-gray-400 hover:underline"
                            href="#">Início</a>
                        <a class="block font-medium text-gray-700 dark:text-gray-200 lg:mx-8 hover:text-gray-900 dark:hover:text-gray-400 hover:underline"
                            href="#">Sobre</a>
                        <a class="block font-medium text-gray-700 dark:text-gray-200 lg:mx-8 hover:text-gray-900 dark:hover:text-gray-400 hover:underline"
                            href="#">Artigos</a>
                        <a class="block font-medium text-gray-700 dark:text-gray-200 lg:mx-8 hover:text-gray-900 dark:hover:text-gray-400 hover:underline"
                            href="#">Currículos</a>

                        <button
                            class="flex items-center justify-center px-5 py-2 text-sm font-medium tracking-wide text-center text-white capitalize transition-colors duration-300 transform bg-gray-700 rounded-lg hover:bg-gray-600 focus:outline-none focus:bg-gray-600">
                            Empregos
                        </button>
                    </div>
                </div>
            </div>
        </nav>
        <section class="py-28">
            <div
                class="max-w-screen-xl mx-auto text-gray-600 gap-x-12 items-center justify-between overflow-hidden md:flex md:px-8">
                <div class="flex-none space-y-5 px-4 sm:max-w-lg md:px-0 lg:max-w-xl">
                    <h1 class="text-sm text-gray-900 font-medium">
                        A tua carreira começa agora
                    </h1>
                    <h2 class="text-4xl text-gray-800 font-extrabold md:text-5xl">
                        Encontre a vaga dos teus sonhos
                    </h2>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus voluptatem accusantium
                        doloremque laudantium, totam rem aperiam, eaque ipsa quae.
                    </p>
                    <div class="items-center gap-x-3 space-y-3 sm:flex sm:space-y-0">
                        <a href="javascript:void(0)"
                            class="block py-2 px-4 text-center text-white font-medium bg-gray-900 duration-150 hover:bg-black active:bg-black rounded-lg shadow-lg hover:shadow-none">
                            Ver oportunidades
                        </a>
                    </div>
                </div>
                <div class="flex-none mt-14 md:mt-0 md:max-w-xl">
                    <img src="https://images.unsplash.com/photo-1573164713619-24c711fe7878?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1738&amp;q=80"
                        class="md:rounded-tl-[108px]" alt="" />
                </div>
            </div>
        </section>
    </div>

    <section class="pt-14 bg-gray-50">
        <div class="max-w-screen-xl mx-auto px-4 md:text-center md:px-8">
            <div class="max-w-xl md:mx-auto">
                <h3 class="text-gray-800 text-3xl font-semibold sm:text-4xl">
                    Últimas Oportunidades
                </h3>
                <p class="mt-3 text-gray-600">
                    Vagas de emprego recentemente publicadas
                </p>
            </div>
        </div>
    </section>

    <section>
        <div
            class="relative flex min-h-screen flex-col items-center justify-center overflow-hidden bg-gray-50 p-6 sm:py-12">
            <div
                class="job-card flex w-full my-4 max-w-6xl flex-col justify-between gap-3 rounded-md bg-white px-8 py-8 shadow-xl shadow-gray-100 sm:flex-row sm:items-center hover:shadow-lg hover:shadow-gray-400 transition duration-300 ease-in-out">
                <div>
                    <span class="text-sm text-gray-700">Kwame Oil and Gas</span>
                    <h3 class="mt-px font-bold">Engenheiro Backend Full Stack Sênior</h3>
                    <p class="text-slate-600">O QHSE Group Transocean está focado em ser o empregador preferido para a
                        indústria de perfuração. Nos desafiamos todos os dias para impulsionar o desempenho da
                        empresa...</p>
                    <div class="mt-2 flex items-center gap-3">
                        <span class="rounded-full bg-gray-200 px-3 py-1 text-sm text-gray-700">14-04-2024</span>
                        <span class="flex items-center gap-1 text-sm text-slate-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Luanda
                        </span>
                    </div>
                </div>
                <div>
                    <button
                        class="flex items-center gap-1 rounded-md bg-gray-900 px-4 py-2 font-medium text-white hover:bg-gray-800 transition duration-300 ease-in-out">
                        Detalhes
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </button>
                </div>
            </div>

            <div
                class="job-card flex w-full my-4 max-w-6xl flex-col justify-between gap-3 rounded-md bg-white px-8 py-8 shadow-xl shadow-gray-100 sm:flex-row sm:items-center hover:shadow-lg hover:shadow-gray-400 transition duration-300 ease-in-out">
                <div>
                    <span class="text-sm text-gray-700">Kwame Oil and Gas</span>
                    <h3 class="mt-px font-bold">Engenheiro Backend Full Stack Sênior</h3>
                    <p class="text-slate-600">O QHSE Group Transocean está focado em ser o empregador preferido para a
                        indústria de perfuração. Nos desafiamos todos os dias para impulsionar o desempenho da
                        empresa...</p>
                    <div class="mt-2 flex items-center gap-3">
                        <span class="rounded-full bg-gray-200 px-3 py-1 text-sm text-gray-700">14-04-2024</span>
                        <span class="flex items-center gap-1 text-sm text-slate-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Luanda
                        </span>
                    </div>
                </div>
                <div>
                    <button
                        class="flex items-center gap-1 rounded-md bg-gray-900 px-4 py-2 font-medium text-white hover:bg-gray-800 transition duration-300 ease-in-out">
                        Detalhes
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </button>
                </div>
            </div>

            <div
                class="job-card flex w-full my-4 max-w-6xl flex-col justify-between gap-3 rounded-md bg-white px-8 py-8 shadow-xl shadow-gray-100 sm:flex-row sm:items-center hover:shadow-lg hover:shadow-gray-400 transition duration-300 ease-in-out">
                <div>
                    <span class="text-sm text-gray-700">Kwame Oil and Gas</span>
                    <h3 class="mt-px font-bold">Engenheiro Backend Full Stack Sênior</h3>
                    <p class="text-slate-600">O QHSE Group Transocean está focado em ser o empregador preferido para a
                        indústria de perfuração. Nos desafiamos todos os dias para impulsionar o desempenho da
                        empresa...</p>
                    <div class="mt-2 flex items-center gap-3">
                        <span class="rounded-full bg-gray-200 px-3 py-1 text-sm text-gray-700">14-04-2024</span>
                        <span class="flex items-center gap-1 text-sm text-slate-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Luanda
                        </span>
                    </div>
                </div>
                <div>
                    <button
                        class="flex items-center gap-1 rounded-md bg-gray-900 px-4 py-2 font-medium text-white hover:bg-gray-800 transition duration-300 ease-in-out">
                        Detalhes
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </button>
                </div>
            </div>

            <div
                class="job-card flex w-full my-4 max-w-6xl flex-col justify-between gap-3 rounded-md bg-white px-8 py-8 shadow-xl shadow-gray-100 sm:flex-row sm:items-center hover:shadow-lg hover:shadow-gray-400 transition duration-300 ease-in-out">
                <div>
                    <span class="text-sm text-gray-700">Kwame Oil and Gas</span>
                    <h3 class="mt-px font-bold">Engenheiro Backend Full Stack Sênior</h3>
                    <p class="text-slate-600">O QHSE Group Transocean está focado em ser o empregador preferido para a
                        indústria de perfuração. Nos desafiamos todos os dias para impulsionar o desempenho da
                        empresa...</p>
                    <div class="mt-2 flex items-center gap-3">
                        <span class="rounded-full bg-gray-200 px-3 py-1 text-sm text-gray-700">14-04-2024</span>
                        <span class="flex items-center gap-1 text-sm text-slate-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Luanda
                        </span>
                    </div>
                </div>
                <div>
                    <button
                        class="flex items-center gap-1 rounded-md bg-gray-900 px-4 py-2 font-medium text-white hover:bg-gray-800 transition duration-300 ease-in-out">
                        Detalhes
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-14">
        <div class="max-w-screen-xl mx-auto px-4 md:text-center md:px-8">
            <div class="max-w-xl md:mx-auto">
                <h3 class="text-gray-800 text-3xl font-semibold sm:text-4xl">
                    O nosso Blog
                </h3>
                <p class="mt-3 text-gray-600">
                    Veja os últimos artigos e notícias
                </p>
            </div>
        </div>
    </section>

    <section class="mx-auto px-4 sm:px-6 lg:px-8 max-w-screen-xl">
        <!-- recent posts -->
        <div class="flex mt-16 mb-4 px-4 lg:px-0 items-center justify-between">
            <h2 class="font-bold text-3xl">Latest news</h2>
            <a class="bg-gray-200 hover:bg-green-200 text-gray-800 px-3 py-1 rounded cursor-pointer">
                View all
            </a>
        </div>
        <div class="block space-x-0 lg:flex lg:space-x-6">

            <div class="rounded w-full lg:w-1/2 lg:w-1/3 p-4 lg:p-0">
                <img src="https://images.unsplash.com/photo-1526666923127-b2970f64b422?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60"
                    class="rounded" alt="technology" />
                <div class="p-4 pl-0">
                    <h2 class="font-bold text-2xl text-gray-800">Put all speaking her delicate recurred possible.</h2>
                    <p class="text-gray-700 mt-2">
                        Set indulgence inquietude discretion insensible bed why announcing. Middleton fat two satisfied
                        additions.
                        So continued he or commanded household smallness delivered. Door poor on do walk in half. Roof
                        his head the what.
                    </p>

                    <a href="#" class="inline-block py-2 px-4 rounded text-white bg-gray-900 mt-2 ml-auto"> Le
                        mais </a>
                </div>
            </div>

            <div class="rounded w-full lg:w-1/2 lg:w-1/3 p-4 lg:p-0">
                <img src="https://images.unsplash.com/photo-1504384764586-bb4cdc1707b0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60"
                    class="rounded" alt="technology" />
                <div class="p-4 pl-0">
                    <h2 class="font-bold text-2xl text-gray-800">Is at purse tried jokes china ready decay an. </h2>
                    <p class="text-gray-700 mt-2">
                        Small its shy way had woody downs power. To denoting admitted speaking learning my exercise so
                        in.
                        Procured shutters mr it feelings. To or three offer house begin taken am at.
                    </p>

                    <a href="#" class="inline-block py-2 px-4 rounded text-white bg-gray-900 mt-2 ml-auto"> Le
                        mais </a>
                </div>
            </div>

            <div class="rounded w-full lg:w-1/2 lg:w-1/3 p-4 lg:p-0">
                <img src="https://images.unsplash.com/photo-1483058712412-4245e9b90334?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80"
                    class="rounded" alt="technology" />
                <div class="p-4 pl-0">
                    <h2 class="font-bold text-2xl text-gray-800">As dissuade cheerful overcame so of friendly he
                        indulged unpacked.</h2>
                    <p class="text-gray-700 mt-2">
                        Alteration connection to so as collecting me.
                        Difficult in delivered extensive at direction allowance.
                        Alteration put use diminution can considered sentiments interested discretion.
                    </p>

                    <a href="#" class="inline-block py-2 px-4 rounded text-white bg-gray-900 mt-2 ml-auto"> Le
                        mais </a>
                </div>
            </div>

        </div>
        <!-- end recent posts -->
    </section>

    <!-- component -->
    <footer class="w-full min-h-screen flex items-center justify-center bg-black mt-10 pt-10">
        <div class="md:w-2/3 w-full px-4 text-white flex flex-col mx-auto px-4 sm:px-6 lg:px-8 max-w-screen-xl">
            <div class="w-full text-7xl font-bold">
                <h3 class="w-full md:w-2/3">Encontre o seu emprego ideal</h3>
            </div>
            <div class="flex mt-8 flex-col md:flex-row md:justify-between">
                <p class="w-full md:w-2/3 text-gray-400">Não recrutamos ninguém, nossa missão é divulgar as vagas do
                    Jornal de Angola e de outras fontes seguras.</p>
            </div>
            <div class="flex flex-col">
                <div class="flex mt-24 mb-12 flex-row justify-between">
                    <a class="hidden md:block cursor-pointer text-gray-600 hover:text-white uppercase">Sobre</a>
                    <a
                        class="hidden md:block cursor-pointer text-gray-600 hover:text-white uppercase">Oportunidades</a>
                    <a class="hidden md:block cursor-pointer text-gray-600 hover:text-white uppercase">Artigos</a>
                    <a class="hidden md:block cursor-pointer text-gray-600 hover:text-white uppercase">Termos e
                        Condições</a>
                    <div class="flex flex-row space-x-8 items-center justify-between">
                        <a>
                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.89782 12V6.53514H5.67481L5.93895 4.39547H3.89782V3.03259C3.89782 2.41516 4.06363 1.99243 4.91774 1.99243H6V0.0847928C5.47342 0.0262443 4.94412 -0.00202566 4.41453 0.000112795C2.84383 0.000112795 1.76542 0.994936 1.76542 2.82122V4.39147H0V6.53114H1.76928V12H3.89782Z"
                                    fill="white" />
                            </svg>
                        </a>
                        <a>
                            <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.99536 2.91345C5.17815 2.91345 4.39441 3.23809 3.81655 3.81594C3.2387 4.3938 2.91406 5.17754 2.91406 5.99475C2.91406 6.81196 3.2387 7.5957 3.81655 8.17356C4.39441 8.75141 5.17815 9.07605 5.99536 9.07605C6.81257 9.07605 7.59631 8.75141 8.17417 8.17356C8.75202 7.5957 9.07666 6.81196 9.07666 5.99475C9.07666 5.17754 8.75202 4.3938 8.17417 3.81594C7.59631 3.23809 6.81257 2.91345 5.99536 2.91345ZM5.99536 7.99586C5.46446 7.99586 4.9553 7.78496 4.57989 7.40955C4.20448 7.03415 3.99358 6.52499 3.99358 5.99408C3.99358 5.46318 4.20448 4.95402 4.57989 4.57861C4.9553 4.20321 5.46446 3.99231 5.99536 3.99231C6.52626 3.99231 7.03542 4.20321 7.41083 4.57861C7.78624 4.95402 7.99714 5.46318 7.99714 5.99408C7.99714 6.52499 7.78624 7.03415 7.41083 7.40955C7.03542 7.78496 6.52626 7.99586 5.99536 7.99586Z"
                                    fill="white" />
                                <path
                                    d="M9.19863 3.51848C9.59537 3.51848 9.91698 3.19687 9.91698 2.80013C9.91698 2.4034 9.59537 2.08179 9.19863 2.08179C8.8019 2.08179 8.48029 2.4034 8.48029 2.80013C8.48029 3.19687 8.8019 3.51848 9.19863 3.51848Z"
                                    fill="white" />
                                <path
                                    d="M11.6821 2.06975C11.5279 1.67138 11.2921 1.30961 10.99 1.00759C10.6879 0.705576 10.326 0.469972 9.92759 0.31586C9.46135 0.140842 8.9688 0.0462069 8.4709 0.0359839C7.82919 0.00799638 7.62594 0 5.99867 0C4.37139 0 4.16282 -6.70254e-08 3.52643 0.0359839C3.02891 0.0456842 2.53671 0.140339 2.07108 0.31586C1.67255 0.469792 1.31059 0.705333 1.00844 1.00737C0.706289 1.30941 0.47061 1.67127 0.316526 2.06975C0.141474 2.53595 0.0470554 3.02855 0.0373167 3.52643C0.00866281 4.16748 0 4.37072 0 5.99867C0 7.62594 -4.96485e-09 7.83319 0.0373167 8.4709C0.0473123 8.96935 0.14127 9.46113 0.316526 9.92825C0.471042 10.3266 0.70695 10.6883 1.00918 10.9903C1.3114 11.2923 1.6733 11.5279 2.07175 11.6821C2.5365 11.8642 3.0289 11.9656 3.52777 11.982C4.16948 12.01 4.37272 12.0187 6 12.0187C7.62728 12.0187 7.83585 12.0187 8.47223 11.982C8.97008 11.9719 9.46262 11.8775 9.92892 11.7028C10.3272 11.5483 10.689 11.3125 10.9911 11.0104C11.2932 10.7083 11.529 10.3466 11.6835 9.94825C11.8587 9.48179 11.9527 8.99 11.9627 8.49156C11.9913 7.85051 12 7.64727 12 6.01932C12 4.39138 12 4.18481 11.9627 3.54709C11.9549 3.04216 11.86 2.54237 11.6821 2.06975ZM10.8705 8.42159C10.8662 8.80562 10.7961 9.18608 10.6633 9.54642C10.5632 9.80555 10.41 10.0409 10.2135 10.2372C10.017 10.4336 9.78162 10.5867 9.52243 10.6866C9.16608 10.8188 8.78967 10.8889 8.4096 10.8938C7.77654 10.9231 7.59796 10.9305 5.97468 10.9305C4.35007 10.9305 4.18414 10.9305 3.53909 10.8938C3.15921 10.8892 2.78298 10.8191 2.42692 10.6866C2.16683 10.5873 1.93048 10.4345 1.73316 10.2381C1.53584 10.0417 1.38194 9.80605 1.28143 9.54642C1.15045 9.18995 1.08039 8.81398 1.07419 8.43425C1.04554 7.8012 1.03887 7.62261 1.03887 5.99933C1.03887 4.37539 1.03887 4.20946 1.07419 3.56375C1.0785 3.17993 1.14859 2.7997 1.28143 2.43958C1.48467 1.91382 1.90116 1.5 2.42692 1.29876C2.78316 1.16691 3.15928 1.09682 3.53909 1.09151C4.17281 1.06286 4.35073 1.05486 5.97468 1.05486C7.59862 1.05486 7.76522 1.05486 8.4096 1.09151C8.7897 1.09609 9.16617 1.1662 9.52243 1.29876C9.7816 1.39889 10.017 1.55211 10.2134 1.74858C10.4099 1.94504 10.5631 2.18041 10.6633 2.43958C10.7942 2.79606 10.8643 3.17203 10.8705 3.55175C10.8992 4.18547 10.9065 4.36339 10.9065 5.98734C10.9065 7.61062 10.9065 7.78521 10.8778 8.42226H10.8705V8.42159Z"
                                    fill="white" />
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/channel/UCjtCbnkIaiCJgj13sEZ9iqw">
                            <svg width="13" height="9" viewBox="0 0 13 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill="white" d="M12.7355 1.415C12.6616 1.14357 12.517 0.896024 12.3162 0.697014C12.1154 0.498004 11.8654 0.354468 11.5911 0.280692C10.5739 0.00450089 6.5045 4.87928e-06 6.5045 4.87928e-06C6.5045 4.87928e-06 2.43578 -0.00449139 1.41795 0.259496C1.14379 0.336667 0.894302 0.482233 0.693428 0.68222C0.492554 0.882207 0.347041 1.1299 0.270859 1.40152C0.00259923 2.40737 9.51671e-07 4.49358 9.51671e-07 4.49358C9.51671e-07 4.49358 -0.0025972 6.59006 0.263714 7.58564C0.413109 8.13609 0.851549 8.57094 1.40885 8.71931C2.43643 8.9955 6.49476 9 6.49476 9C6.49476 9 10.5641 9.00449 11.5813 8.74115C11.8557 8.6675 12.106 8.52429 12.3073 8.32569C12.5086 8.12709 12.6539 7.87996 12.729 7.60876C12.998 6.60355 12.9999 4.51798 12.9999 4.51798C12.9999 4.51798 13.0129 2.42086 12.7355 1.415ZM5.20282 6.42628L5.20607 2.57244L8.58823 4.50257L5.20282 6.42628Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <hr class="border-gray-600" />
                <p class="w-full text-center my-12 text-gray-600">Copyright © 2024 Empregos Yoyota</p>
            </div>
        </div>
    </footer>
</body>

</html>
