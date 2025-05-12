<nav class="bg-white shadow-sm top-0 z-50">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">
        <a href="{{ url('/') }}" class="text-xl font-bold text-indigo-600">
            {{ config('app.name') }}
        </a>
        <ul class="flex gap-6 text-gray-700 font-medium">
            <li><a href="{{ url('/') }}" class="hover:text-indigo-600">Home</a></li>
            <li><a href="{{ url('/about') }}" class="hover:text-indigo-600">About</a></li>
            <li><a href="{{ url('/projects') }}" class="hover:text-indigo-600">Projects</a></li>
            <li><a href="{{ url('/contact') }}" class="hover:text-indigo-600">Contact</a></li>
        </ul>
    </div>
</nav>
