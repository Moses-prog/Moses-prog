
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YourApp - Social Media Boost & Affiliate Platform</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body class="bg-gray-900 text-white font-sans antialiased">
    <div class="relative">
        <!-- Header -->
        <header class="absolute top-0 left-0 right-0 z-10">
            <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
                <a href="/" class="text-xl font-bold">YourApp</a>
                <div>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-white hover:text-gray-300">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-white hover:text-gray-300">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-white hover:text-gray-300">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </nav>
        </header>

        <!-- Hero Section -->
        <section class="min-h-screen flex items-center justify-center text-center bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1516321497487-e288fb19713f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
            <div class="bg-black bg-opacity-50 p-10 rounded-lg" data-aos="fade-up">
                <h1 class="text-5xl font-extrabold mb-4">Boost Your Social Media Presence</h1>
                <p class="text-xl mb-8">Join our platform to grow your audience and earn through our affiliate program.</p>
                <a href="{{ route('register') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">Get Started Now</a>
            </div>
        </section>

        <!-- How It Works -->
        <section class="py-20">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-down">How It Works</h2>
                <div class="flex flex-wrap text-center">
                    <div class="w-full md:w-1/3 p-4" data-aos="fade-right">
                        <div class="p-6 bg-gray-800 rounded-lg">
                            <svg class="w-12 h-12 mx-auto mb-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                            <h3 class="text-xl font-semibold mb-2">1. Sign Up</h3>
                            <p>Create an account in minutes and get access to our powerful tools.</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 p-4" data-aos="fade-up">
                        <div class="p-6 bg-gray-800 rounded-lg">
                            <svg class="w-12 h-12 mx-auto mb-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <h3 class="text-xl font-semibold mb-2">2. Boost Profile</h3>
                            <p>Use our services to increase your social media engagement and reach.</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 p-4" data-aos="fade-left">
                        <div class="p-6 bg-gray-800 rounded-lg">
                            <svg class="w-12 h-12 mx-auto mb-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v.01"></path></svg>
                            <h3 class="text-xl font-semibold mb-2">3. Earn via Affiliate</h3>
                            <p>Refer others and earn a commission for every new customer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section class="py-20 bg-gray-800">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-down">Key Features</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center" data-aos="zoom-in">
                        <svg class="w-16 h-16 mx-auto mb-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                        <h3 class="text-xl font-semibold">Real-time Analytics</h3>
                    </div>
                    <div class="text-center" data-aos="zoom-in" data-aos-delay="200">
                        <svg class="w-16 h-16 mx-auto mb-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-2m-4-4l4 4m0-4l-4 4"></path></svg>
                        <h3 class="text-xl font-semibold">Affiliate Dashboard</h3>
                    </div>
                    <div class="text-center" data-aos="zoom-in" data-aos-delay="400">
                        <svg class="w-16 h-16 mx-auto mb-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.78-2.67 9.345M12 11c0-3.517 1.009-6.78 2.67-9.345m0 18.69C17.331 16.78 20 13.517 20 10c0-4.418-3.582-8-8-8S4 5.582 4 10c0 3.517 2.669 6.78 5.33 9.345" /></svg>
                        <h3 class="text-xl font-semibold">Targeted Growth</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- Affiliate Earning Structure -->
        <section class="py-20">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-down">Affiliate Earning Structure</h2>
                <div class="bg-gray-800 p-8 rounded-lg" data-aos="flip-up">
                    <p class="text-lg text-center">Earn a <span class="text-indigo-400 font-bold">20% commission</span> on all sales generated through your referral link. Payments are made monthly via PayPal.</p>
                </div>
            </div>
        </section>

        <!-- Screenshots or Demo Previews -->
        <section class="py-20 bg-gray-800">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-down">See It In Action</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <img src="https://via.placeholder.com/600x400.png?text=App+Screenshot+1" alt="App Screenshot 1" class="rounded-lg" data-aos="zoom-in-right">
                    <img src="https://via.placeholder.com/600x400.png?text=App+Screenshot+2" alt="App Screenshot 2" class="rounded-lg" data-aos="zoom-in-left">
                </div>
            </div>
        </section>

        <!-- FAQs -->
        <section class="py-20">
            <div class="container mx-auto px-6" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-center mb-12">Frequently Asked Questions</h2>
                <div class="max-w-3xl mx-auto">
                    <div class="border-b border-gray-700">
                        <button class="w-full text-left py-4 focus:outline-none">
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-semibold">Is this service safe?</span>
                                <span>&#9660;</span>
                            </div>
                        </button>
                        <div class="mt-2 text-gray-400 hidden">
                            <p>Yes, our service is 100% safe and complies with the terms of service of all major social media platforms.</p>
                        </div>
                    </div>
                    <div class="border-b border-gray-700">
                        <button class="w-full text-left py-4 focus:outline-none">
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-semibold">How do I get paid?</span>
                                <span>&#9660;</span>
                            </div>
                        </button>
                        <div class="mt-2 text-gray-400 hidden">
                            <p>We pay our affiliates monthly via PayPal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Form -->
        <section class="py-20 bg-gray-800">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-down">Contact Us</h2>
                <form action="/contact" method="POST" class="max-w-xl mx-auto" data-aos="fade-up">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium mb-1">Name</label>
                        <input type="text" name="name" id="name" class="w-full p-2 rounded bg-gray-700 border border-gray-600 focus:outline-none focus:border-indigo-500">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium mb-1">Email</label>
                        <input type="email" name="email" id="email" class="w-full p-2 rounded bg-gray-700 border border-gray-600 focus:outline-none focus:border-indigo-500">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium mb-1">Message</label>
                        <textarea name="message" id="message" rows="4" class="w-full p-2 rounded bg-gray-700 border border-gray-600 focus:outline-none focus:border-indigo-500"></textarea>
                    </div>
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300">Send Message</button>
                </form>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-900 py-8">
            <div class="container mx-auto px-6 text-center">
                <p>&copy; {{ date('Y') }} YourApp. All rights reserved.</p>
            </div>
        </footer>

    </div>
    <script>
        AOS.init();
        document.querySelectorAll('.border-b button').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                content.classList.toggle('hidden');
            });
        });
    </script>
</body>
</html>
