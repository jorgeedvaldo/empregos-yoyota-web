@extends('templates.app')
@section('cover')
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
@endsection

@section('content')
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

                <a href="#" class="inline-block py-2 px-4 rounded text-white bg-gray-900 mt-2 ml-auto"> Ler mais </a>
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

                <a href="#" class="inline-block py-2 px-4 rounded text-white bg-gray-900 mt-2 ml-auto"> Ler mais </a>
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

                <a href="#" class="inline-block py-2 px-4 rounded text-white bg-gray-900 mt-2 ml-auto"> Ler mais </a>
            </div>
        </div>

    </div>
    <!-- end recent posts -->
</section>
@endsection
