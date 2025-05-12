@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-xl w-full text-center">
            <h1 class="text-4xl font-bold mb-4">Hi, I'm David Wolfhart 👋</h1>
            <p class="text-lg mb-6 text-gray-700">
                I'm a backend developer who loves working with Laravel and databases.
            </p>
            <a href="#projects" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-md">
                View My Projects
            </a>
        </div>
    </div>
@endsection
