@extends('exercises.app')

@section('title', 'Belajar Tailwind CSS | 8. Layouting')

@section('content')
    <div class="container mx-auto bg-gray-300 p-5 min-h-screen">
        <h1 class="text-5xl font-bold text-blue-600 p-5">8. Layouting | Belajar Tailwind CSS</h1>

        <div class="border rounded-lg shadow-lg p-5 bg-gray-200 relative">
            <div class="w-10 h-10 bg-pink-300 rounded-full flex absolute -top-5 -right-5 cursor-pointer ">
                <span class="text-sm m-auto">❌</span>
            </div>
            <img class="float-right" src="https://picsum.photos/200/100" alt="images">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio maxime soluta suscipit corporis
                doloribus, iure, delectus nam totam, nulla beatae fugiat vero velit quisquam alias accusamus ad sunt ratione
                quis repudiandae consectetur amet? Quisquam beatae reprehenderit sint iusto corrupti blanditiis itaque nobis
                perferendis perspiciatis eius dolore ad fugiat aperiam quidem quod rem, fuga impedit debitis eligendi
                recusandae qui veritatis voluptatum totam quasi! Cupiditate quos fugiat explicabo praesentium, expedita
                tempore architecto quas consectetur doloribus animi distinctio et aliquid fuga rem, commodi ut? Nostrum,
                facere porro? Nostrum, saepe maiores ipsa veritatis ad nulla ipsam perferendis expedita vel iure maxime
                adipisci! Sed, laborum?
            </p>
        </div>

        <div class="h-screen bg-amber-200 my-5">

        </div>

        <div class="w-10 h-10 rounded-full bg-sky-200 flex fixed cursor-pointer bottom-5 right-5">
            <a class="text-sm m-auto" href="#">🔝</a>
        </div>
    </div>

    <div class="container mx-auto my-10 border rounded-lg shadow-lg p-5 bg-gray-200 columns-3">
        <img src="https://picsum.photos/600/400" alt="">
        <img src="https://picsum.photos/600/400" alt="">
        <img src="https://picsum.photos/600/400" alt="">
        <img src="https://picsum.photos/600/400" alt="">
        <img src="https://picsum.photos/600/400" alt="">
        <img src="https://picsum.photos/600/400" alt="">
    </div>
@endsection
