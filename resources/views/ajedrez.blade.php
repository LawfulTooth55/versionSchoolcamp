@extends('layouts.Myapp')
@section('title', __('Ajedrez'))
@section('content2')

<main class="py-6 px-4 sm:p-6 md:py-10 md:px-8">
    <div class="max-w-4xl mx-auto grid grid-cols-1 lg:max-w-5xl lg:gap-x-20 lg:grid-cols-2">
        <div class="relative p-3 col-start-1 row-start-1 flex flex-col-reverse rounded-lg bg-gradient-to-t from-black/75 via-black/0 sm:bg-none sm:row-start-2 sm:p-0 lg:row-start-1">
            <h1 class="mt-1 text-lg font-semibold sm:text-slate-900 md:text-2xl">Robotica</h1>
            <p class="text-sm leading-4 text-black font-medium sm:text-slate-500 dark:sm:text-slate-400">La magia de la </p>
        </div>
        <div class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
            <img src="https://images.ecestaticos.com/1k0zhBDYHNndwF-S5-V1KzeFD4E=/2x75:1720x1041/1600x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2Fd8d%2Fb67%2Fb66%2Fd8db67b66d090764465afa568c239335.jpg" alt="" class="w-full h-60 object-cover rounded-lg sm:h-52 sm:col-span-2 lg:col-span-full" loading="lazy">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a7/Checkmate2.jpg" alt="" class="hidden w-full h-52 object-cover rounded-lg sm:block sm:col-span-2 md:col-span-1 lg:row-start-2 lg:col-span-2 lg:h-32" loading="lazy">
            <img src="https://thezugzwangblog.com/wp-content/uploads/2021/09/movimientos-especiales-ajedrez.webp" alt="" class="hidden w-full h-52 object-cover rounded-lg md:block lg:row-start-2 lg:col-span-2 lg:h-32" loading="lazy">
        </div>
        <dl class="mt-4 text-xs font-medium flex items-center row-start-2 sm:mt-1 sm:row-start-3 md:mt-2.5 lg:row-start-2">
            <dt class="sr-only">Reviews</dt>

            <dt class="sr-only">Location</dt>
            <dd class="flex items-center">
                <svg width="2" height="2" aria-hidden="true" fill="currentColor" class="mx-3 text-slate-300">
                    <circle cx="1" cy="1" r="1" />
                </svg>
                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-1 text-slate-400 dark:text-slate-500" aria-hidden="true">
                    <path d="M18 11.034C18 14.897 12 19 12 19s-6-4.103-6-7.966C6 7.655 8.819 5 12 5s6 2.655 6 6.034Z" />
                    <path d="M14 11a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                </svg>
                Baca, Yucatán
            </dd>
        </dl>
        <div class="mt-4 col-start-1 row-start-3 self-center sm:mt-0 sm:col-start-2 sm:row-start-2 sm:row-span-2 lg:mt-6 lg:col-start-1 lg:row-start-3 lg:row-end-4">
            <button type="button" class="bg-indigo-600 text-white text-sm leading-6 font-medium py-2 px-3 rounded-lg"><a href="{{ url('/registroalumno/create') }}">inscribirse</a></button>
        </div>
        <p class="mt-4 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1">
            El ajedrez es un juego de tablero entre dos contrincantes en el que cada uno dispone al inicio de 16 piezas móviles que se colocan sobre un tablero, ​ dividido en 64 casillas o escaques.
        </p>
        <p>Sedes disponibles: Baca, Telchac, Tizimin y Mérida</p>
    </div>
</main>

@endsection