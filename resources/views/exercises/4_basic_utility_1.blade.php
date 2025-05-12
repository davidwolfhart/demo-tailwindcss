@extends('exercises.app')

@section('title', 'Belajar Tailwind CSS | 4. Basic Utility - Bagian 1')

{{-- DEPRECATED Tailwind v3 --}}
{{-- @push('links')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
@endpush --}}

{{-- @push('scripts')
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        roboto: ['Roboto'],
                    },
                },
            },
        }
    </script>
@endpush --}}

{{-- @push('styles')
    <style>
        * {
            border: 1px solid red;
        }
    </style>
@endpush --}}



@section('content')
    <h1 class="text-5xl text-center font-bold mb-10">
        4. Basic Utility - Bagian 1 | Belajar
        <span class="bg-gradient-to-br from-green-500 via-yellow-500 to-blue-500 bg-clip-text text-transparent">
            Tailwind CSS
        </span>
    </h1>

    <div class="ml-3">
        <ul class="list-disc pl-5">
            <li>spacing and sizing</li>
            <li>typography</li>
            <li>color</li>
        </ul>
    </div>

    <section class="mb-10 bg-green-200">
        <h2>Spacing</h2>
        <div class="m-4">Margin</div>
        <div class="p-4">Padding</div>
    </section>

    <section class="mb-10 bg-blue-200">
        <h2>Sizing</h2>

        <div class="w-32 h-32">Box 1</div>
        {{-- <div class="max-w-xs min-h-screen">Box 2</div> --}}
    </section>

    <section class="mb-10 bg-gradient-to-r from-coffee-light/25 to-coffee-light/100">
        <h2 class="text-4xl font-bold mb-3 text-coffee-primary">Typography</h2>

        <div class="mb-4 font-serif text-gray-500"><a href="#" class="text-gray-700">David Saputra</a> 10 Mei 2025
        </div>
        <p class="mb-4 font-mono">
            <a href="#" class="underline font-semibold">Lorem ipsum</a> dolor sit, amet consectetur adipisicing elit.
            Vero maxime, voluptates, aspernatur nisi totam
            temporibus nesciunt veritatis quas dolores cupiditate fugiat nulla mollitia rem dolorum, magnam inventore
            voluptas consequuntur aperiam reprehenderit a vitae ut ipsam labore! Vel inventore, rem maiores porro laudantium
            delectus dolores eos distinctio temporibus, sed sapiente dolor?
        </p>
        <blockquote class="mb-4 font-roboto font-thin italic">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, quas commodi. Esse odit commodi adipisci
            aspernatur ea, quidem ab totam.
        </blockquote>
        <p class="mb-4 font-dancing-script text-white">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus sit similique excepturi explicabo
            exercitationem, officia eius aut est in officiis esse nostrum repudiandae architecto beatae voluptate vitae ipsa
            ullam atque!
        </p>
    </section>
@endsection

{{-- 
Margin menggunakan m-0: margin 0px
mt-0 mb-0 ml-0 mr-0: margin top, bottom, left, right

m-1: margin 4px / 0.25 rem

sm: 8px
md: 16px
lg: 24px
xl: 32px
2xl: 48px

Padding menggunakan p-0: padding 0px
pt-0 pb-0 pl-0 pr-0: padding top, bottom, left, right

p-1: padding 4px / 0.25 rem

min-h-screen untuk mengubah ukuran horizontal minimal sebesar layar

Add new font or style in the app.css
--}}
