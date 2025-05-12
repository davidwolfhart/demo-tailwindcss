@extends('exercises.app')

@section('title', 'Belajar Tailwind CSS | 11. Grid Layout')

@section('content')
    <div class="container mx-auto p-5 bg-slate-200">
        <h1 class="text-xl font-bold text-center mx-auto text-slate-800 sm:text-2xl md:text-3xl lg:text-4xl">
            Belajar Tailwind CSS | 11. Grid Layout
        </h1>

        <div class="mt-3 grid grid-cols-2 gap-2 md:grid-cols-4 md:gap-4">
            <h2 class="h-15 text-xl font-semibold text-slate-800">David Saputra</h2>
            <h3 class="h-15 text-lg font-semibold text-slate-700">@davidwolfhart</h3>

            <div class="h-15 bg-sky-500 aspect-video rounded-lg"></div>
            <div class="h-15 bg-sky-500 aspect-video rounded-lg"></div>
            <div class="h-15 bg-sky-500 aspect-video rounded-lg"></div>
            <div class="h-15 bg-sky-500 aspect-video rounded-lg"></div>
            <div class="h-15 bg-sky-500 aspect-video rounded-lg"></div>
            <div class="h-15 bg-sky-500 aspect-video rounded-lg"></div>
            <div class="h-15 bg-sky-500 aspect-video rounded-lg"></div>
            <div class="h-15 bg-sky-500 aspect-video rounded-lg"></div>
            <div class="h-15 bg-sky-500 aspect-video rounded-lg"></div>
            <div class="h-15 bg-sky-500 aspect-video rounded-lg"></div>
        </div>
    </div>
@endsection
