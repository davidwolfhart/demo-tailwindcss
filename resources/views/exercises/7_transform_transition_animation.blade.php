@extends('exercises.app')

@section('title', 'Belajar Tailwind CSS | 7. Transform, Transition, Animation')

@section('content')
    <h1 class="text-5xl font-bold text-blue-600 mb-100">7. Transform, Transition, Animation | Belajar Tailwind CSS</h1>

    <div
        class="w-40 h-40 bg-sky-500 mx-auto rounded-lg shadow-lg hover:scale-125 hover:rotate-45 hover:bg-pink-500 hover:translate-x-16 transition">
    </div>

    {{-- Rotate Animation --}}
    <div class="w-40 h-40 bg-pink-500 mx-auto group m-100">
        <div class="w-full h-full bg-sky-500 group-hover:rotate-180 transition-all duration-500 ease-in-out origin-top-left">

        </div>
    </div>

    {{-- Spin Animation --}}
    <button class="flex items-center gap-2 px-4 py-2 bg-pink-300 text-white rounded-full mx-auto mb-100">
        <div class="w-4 h-4 border-2 border-pink-500 border-t-pink-700 rounded-full animate-spin"></div>
        <span>Loading...</span>
    </button>

    {{-- Ping Animation --}}
    <div class="w-40 h-40 mx-auto mb-100 bg-pink-300">
        <span class="relative flex size-5">
            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-pink-500 opacity-75"></span>
            <span class="relative inline-flex size-5 rounded-full bg-pink-700"></span>
        </span>
    </div>

    {{-- Pulsing Animation --}}
    <div class="mx-auto w-full max-w-sm rounded-md border border-blue-300 p-4 mb-100">
        <div class="flex animate-pulse space-x-4">
            <div class="size-10 rounded-full bg-gray-300"></div>
            <div class="flex-1 space-y-6 py-1">
                <div class="h-2 rounded bg-gray-300"></div>
                <div class="space-y-3">
                    <div class="grid grid-cols-3 gap-4">
                        <div class="col-span-2 h-2 rounded bg-gray-300"></div>
                        <div class="col-span-1 h-2 rounded bg-gray-300"></div>
                    </div>
                    <div class="h-2 rounded bg-gray-300"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
