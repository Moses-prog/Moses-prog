<header class="sticky top-0 left-0 right-0 z-20 glassmorphism">
    <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="/" class="text-xl font-bold">YourApp</a>
        <div class="hidden md:flex space-x-8">
            <a href="#how-it-works" class="text-white hover:text-gray-300">How It Works</a>
            <a href="#features" class="text-white hover:text-gray-300">Features</a>
            <a href="#faqs" class="text-white hover:text-gray-300">FAQs</a>
        </div>
        <div>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300">Dashboard</a>
                @else
                    <a href="{{ route('register') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300">Register</a>
                @endauth
            @endif
        </div>
    </nav>
</header>
