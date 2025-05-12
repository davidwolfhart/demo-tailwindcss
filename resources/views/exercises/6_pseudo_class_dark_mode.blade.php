@extends('exercises.app')

@section('title', 'Belajar Tailwind CSS | 6. Pseudo-class & Dark Mode')

{{-- @push('styles')
    <style>
        #toggle:checked+div .dot {
            transform: translateX(1.5rem);
        }
    </style>
@endpush --}}

@section('content')
    <h1 class="text-5xl font-bold text-blue-600">6. Pseudo-class & Dark Mode | Belajar Tailwind CSS
    </h1>

    <hr class="my-10">

    <button
        class="my-10 px-5 py-2 text-white rounded-full font-semibold font-roboto bg-sky-500 block mx-auto 
        hover:bg-sky-600 active:bg-sky-700 focus:ring focus:ring-sky-300
        dark:bg-slate-500 dark:hover:bg-slate-600 dark:active:bg-slate-700"
        id="toggleDark">
        {{-- onclick="document.documentElement.classList.toggle('dark')" id="toggleDark"> --}}
        Toggle Dark Mode
    </button>

    {{-- <div class="flex justify-center">
        <!-- Toggle Switch -->
        <label for="toggle" class="cursor-pointer flex items-center gap-2">
            <span class="text-sm text-gray-600 dark:text-gray-300">Light Mode</span>
            <input id="toggle" type="checkbox" class="" onchange="toggleDarkMode(this)">
            <div class="w-12 h-6 bg-gray-300 rounded-full relative transition-colors dark:bg-gray-700">
                <div class="dot absolute left-1 top-1 w-4 h-4 bg-white rounded-full transition-transform"></div>
            </div>
            <span class="text-sm text-gray-600 dark:text-gray-300">Dark Mode</span>
        </label>
    </div> --}}

    <div class="flex justify-center">
        <label for="darkToggle" class="cursor-pointer flex items-center gap-2">
            <span class="text-sm text-gray-600 dark:text-gray-300">Light</span>
            <input id="darkToggle" type="checkbox" class="sr-only" onchange="toggleDarkMode(this)">
            <div id="toggleTrack" class="w-12 h-6 bg-gray-300 rounded-full relative transition-colors dark:bg-gray-700">
                <div id="toggleDot" class="dot absolute top-1 left-1 w-4 h-4 bg-white rounded-full transition-transform">
                </div>
            </div>
            <span class="text-sm text-gray-600 dark:text-gray-300">Dark</span>
        </label>
    </div>


    <div class="max-w-lg my-10 border border-slate-200 shadow-md rounded-xl mx-auto p-5 font-roboto hover:bg-sky-500 group">
        <h5 class="font-bold text-slate-700 text-lg mb-3 group-hover:text-white">Belajar Tailwind CSS</h5>
        <p
            class="text-slate-600 group-hover:text-white text-justify selection:bg-amber-500 selection:text-slate-600 first-letter:text-5xl first-letter:float-left">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis ad tempore odio sequi, ut tempora alias,
            provident harum veritatis quasi quibusdam minus consectetur vel praesentium neque autem dolore quam iste!
        </p>
    </div>

    <div class="max-w-lg my-10 p-5 border border-slate-200 shadow-md rounded-xl mx-auto font-roboto">
        <form action="">
            <label for="email">
                <span class="block font-semibold text-slate-700 mb-1">Email</span>
                <input
                    class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 
                        focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500
                        invalid:focus:ring-red-500 invalid:focus:border-red-500 invalid:text-red-500 
                        valid:ring-green-500 valid:border-green-500 peer"
                    type="email" id="email" placeholder="Enter your email...">
                <p class="text-sm m-1 text-red-500 invisible peer-invalid:visible">Email is invalid</p>
            </label>
        </form>
    </div>
@endsection

@push('scripts')
    {{-- <script>
        const html = document.documentElement;
        const darkMode = localStorage.getItem('theme') === 'dark';

        if (darkMode) html.classList.add('dark');

        document.getElementById('toggleDark').onclick = () => {
            html.classList.toggle('dark');
            localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
        };
    </script> --}}

    {{-- <script>
        // On page load, set initial theme
        // if (localStorage.theme === 'dark' ||
        //     (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        //     document.documentElement.classList.add('dark')
        //     document.getElementById('darkToggle').checked = true
        // }

        const isDark = (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches));

        const html = document.documentElement;
        const toggle = document.getElementById('darkToggle');

        if (isDark) {
            html.classList.add('dark');
            toggle.checked = true
        }

        function toggleDarkMode(checkbox) {
            if (checkbox.checked) {
                html.classList.add('dark')
                localStorage.setItem('theme', 'dark')
            } else {
                html.classList.remove('dark')
                localStorage.setItem('theme', 'light')
            }
        }
    </script> --}}

    <script>
        const html = document.documentElement;
        const toggle = document.getElementById('darkToggle');
        const dot = document.getElementById('toggleDot');

        function setTogglePosition(isDark) {
            dot.classList.toggle('translate-x-6', isDark);
        }

        // On load
        const isDark = localStorage.theme === 'dark' ||
            (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches);

        if (isDark) {
            html.classList.add('dark');
            toggle.checked = true;
            setTogglePosition(true);
        }

        function toggleDarkMode(checkbox) {
            const isDark = checkbox.checked;
            html.classList.toggle('dark', isDark);
            setTogglePosition(isDark);
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        }
    </script>
@endpush
