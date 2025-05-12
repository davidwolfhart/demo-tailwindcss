@extends('exercises.app')

@section('title', 'Belajar Tailwind CSS | 9. Responsive Design')

@section('content')

    <div class="container mx-auto p-5 bg-slate-200 sm:bg-slate-300">
        <h1 class="text-2xl sm:text-3xl font-bold text-blue-600 mb-3">9. Responsive Design | Belajar Tailwind CSS</h1>

        <h2 class="text-xl sm:text-2xl font-bold  text-slate-800 mb-3">David <span class="text-red-800">Wolfhart</span></h2>

        <img class="rounded-xl shadow-xl mb-3 mx-auto" src="https://picsum.photos/1280/720" alt="images">

        <h3 class="text-lg sm:text-xl font-semibold text-slate-800 mt-2 mb-1">Belajar Tailwind CSS</h3>

        <p class="text-slate-700 mb-3 text-justify">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. A natus facere tempora minus quia explicabo.
            Reprehenderit quo repellat eveniet veritatis, numquam provident. Voluptas assumenda iste delectus sed
            repudiandae, esse officiis maiores ipsa alias itaque rerum mollitia sunt iusto, commodi tempore quos dignissimos
            eaque aliquam vero cupiditate totam, nemo odit! Tenetur.
        </p>

        <div class="">
            <a class="inline-block px-5 py-3 bg-red-500 text-white text-sm uppercase 
                rounded-lg shadow-lg font-semibold hover:bg-red-600 active:bg-red-700 transition duration-150 ease-in-out"
                href="">Subscribe Channel Youtube</a>
        </div>
    </div>
@endsection
