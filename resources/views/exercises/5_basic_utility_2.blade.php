@extends('exercises.app')

@section('title', 'Belajar Tailwind CSS | 5. Basic Utility - Bagian 2')

@section('content')
    <h1 class="text-5xl font-bold text-blue-600 mb-3">5. Basic Utility - Bagian 2 | Belajar Tailwind CSS</h1>

    <div class="ml-3 mb-3">
        <ul class="list-disc pl-5">
            <li>background and border</li>
            <li>rounding and shadow</li>
            <li>effect and filters</li>
        </ul>
    </div>

    <div class="max-w-xl h-96 bg-slate-300 mb-3 mx-auto overflow-y-scroll bg-local" {{-- bg-[url('/images/tailwind.png')] bg-cover bg-center"> --}}
        style="background-image: url('/images/tailwind.png')">
        <p class="p-5 text-white">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis tempora nisi temporibus minus possimus
            qui maxime, quisquam vel consectetur ipsam aspernatur repellat aperiam, modi cupiditate, inventore delectus
            sapiente optio dolor repellendus ullam deserunt nulla? Sunt accusamus blanditiis, rem, excepturi repudiandae,
            illo nobis a amet aut quos tenetur omnis minus tempore repellendus provident. Maxime laudantium velit, ex qui
            iusto veritatis? Libero quibusdam dicta obcaecati nemo eius, perferendis molestiae maiores. Adipisci voluptatem
            sint quos praesentium nemo? Explicabo quibusdam rem est. Asperiores quas officiis sed et consequatur deserunt
            esse, dolor impedit reiciendis repellat aperiam hic laudantium iure. In magnam dolor inventore deleniti corrupti
            delectus officiis maiores praesentium, cupiditate molestias! Minima nesciunt, iste veritatis, labore obcaecati
            aliquam molestias excepturi in reiciendis modi eos dolor temporibus sint reprehenderit ratione saepe beatae
            voluptatum repellendus eligendi aperiam, error aut quas quis assumenda. Accusamus dignissimos laudantium
            impedit. Dicta expedita, ratione aliquam laborum earum cupiditate. Eveniet quia dicta sit veniam adipisci cum
            labore libero deleniti quibusdam asperiores est, laborum molestiae nostrum qui quasi vel dignissimos modi sequi!
            Dolorem minima illo hic voluptate id incidunt labore. Deserunt, incidunt maxime. Dolores consectetur dolor
            consequuntur voluptates, nobis voluptatibus molestias impedit dolore dignissimos labore placeat perspiciatis vel
            odit laboriosam inventore ipsa esse porro!
        </p>
    </div>

    <div class="m-32 max-w-xl mx-auto h-96 bg-slate-300 bg-contain bg-no-repeat bg-center rounded-4xl 
    border-4 border-slate-500 shadow-2xl shadow-amber-500 overflow-hidden bg-blend-overlay"
        style="background-image: url('/images/tailwind.png')">

        <div class="w-full h-full bg-amber-200 mix-blend-multiply opacity-50">
        </div>
    </div>

    <div class="m-32 max-w-xl mx-auto h-96 bg-slate-300 bg-contain bg-no-repeat bg-center rounded-4xl 
    border-4 border-slate-500 shadow-2xl shadow-amber-500 overflow-hidden blur-xs hover:blur-none flex"
        style="background-image: url('/images/tailwind.png')">

        <div class="w-[200px] h-[200px] bg-white/30 m-auto backdrop-blur-md rounded-full">

        </div>
    </div>
@endsection

{{-- 
arbitrary value using []
example mt-[42px] ; bg-[#c0ffee]

bg-cover: allow stretching
bg-contain: crop
--}}
