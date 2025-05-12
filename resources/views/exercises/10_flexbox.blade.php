@extends('exercises.app')

@section('title', 'Belajar Tailwind CSS | 10. Flexbox')

@section('content')
    <div class="container mx-auto p-5 bg-slate-200 md:flex">
        <div class="md:flex-auto">
            <h1 class="text-xl font-bold text-slate-800">David Wolfhart</h1>

            <img class="mx-auto my-3 rounded-xl shadow-xl md:hidden" src="https://picsum.photos/1280/720" alt="image">

            <h2 class="text-lg mb-1 font-semibold text-slate-700">Belajar Tailwind CSS | 10. Flexbox</h2>

            <p class="text-slate-700 text-justify mb-3">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga culpa enim maiores magnam reiciendis
                provident non cupiditate autem deserunt recusandae amet praesentium tenetur dignissimos blanditiis vitae
                eius commodi temporibus id iusto voluptate, assumenda mollitia consequuntur. Dolor qui rem fugit rerum iusto
                alias nulla consequuntur tenetur officiis ut, corrupti optio aliquid!
            </p>
        </div>

        <div class="ml-5 hidden md:w-full md:flex">
            <img class="object-cover rounded-l-full" src="https://picsum.photos/1280/720" alt="image">
        </div>
    </div>

    <h1 class="text-4xl font-bold text-center mx-auto my-10 text-slate-800">My Gallery</h1>

    <div class="container mx-auto p-5 sm:flex sm:flex-wrap sm:gap-5 sm:justify-evenly">
        @foreach (range(0, 5) as $i)
            <div class="rounded-t-md shadow-md overflow-hidden mb-5 sm:mb-0 sm:w-72 md:w-88 lg:w-104">
                <img class="w-full" src="https://picsum.photos/600/400" alt="images">
                <div class="p-3">
                    <h3 class="text-lg font-semibold text-slate-800">Image Title</h3>
                    <p class="text-slate-700 text-justify">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae commodi obcaecati, blanditiis
                        similique ipsa quisquam veritatis deserunt illum perspiciatis doloremque temporibus, aliquid
                        corporis
                        repudiandae reprehenderit nulla dolore, quia soluta aspernatur?
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
