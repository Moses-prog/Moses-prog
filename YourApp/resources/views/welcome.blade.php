
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YourApp - Boost Your Profile. Earn While You Do.</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .glassmorphism {
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="bg-gray-900 text-white font-sans antialiased">
    <div class="relative">
        @include('layouts.navigation')

        <!-- Hero Section -->
        <section class="min-h-screen flex items-center justify-center text-center bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1516321497487-e288fb19713f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
            <div class="bg-black bg-opacity-60 p-10 rounded-lg" data-aos="fade-up">
                <h1 class="text-5xl font-extrabold mb-4">Boost Your Profile. Earn While You Do.</h1>
                <p class="text-xl mb-8">The ultimate platform to skyrocket your social media presence and earn affiliate commissions.</p>
                <a href="{{ route('register') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">Register Now</a>
            </div>
        </section>

        <!-- How It Works -->
        <section id="how-it-works" class="py-20">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-down">How It Works</h2>
                <div class="flex flex-wrap text-center">
                    <div class="w-full md:w-1/3 p-4" data-aos="fade-right">
                        <div class="p-6 bg-gray-800 rounded-lg">
                            <svg class="w-12 h-12 mx-auto mb-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                            <h3 class="text-xl font-semibold mb-2">1. Create Account</h3>
                            <p>Sign up for free and get instant access to our platform.</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 p-4" data-aos="fade-up">
                        <div class="p-6 bg-gray-800 rounded-lg">
                            <svg class="w-12 h-12 mx-auto mb-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <h3 class="text-xl font-semibold mb-2">2. Boost Social Media</h3>
                            <p>Choose a package and watch your social media presence grow.</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 p-4" data-aos="fade-left">
                        <div class="p-6 bg-gray-800 rounded-lg">
                            <svg class="w-12 h-12 mx-auto mb-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v.01"></path></svg>
                            <h3 class="text-xl font-semibold mb-2">3. Earn Commission via Affiliates</h3>
                            <p>Refer new users and earn commissions on their purchases.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section id="features" class="py-20 bg-gray-800">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-down">Features</h2>
                <div class="grid md:grid-cols-4 gap-8">
                    <div class="text-center" data-aos="zoom-in">
                        <svg class="w-16 h-16 mx-auto mb-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        <h3 class="text-xl font-semibold">Social Media Boost</h3>
                    </div>
                    <div class="text-center" data-aos="zoom-in" data-aos-delay="200">
                        <svg class="w-16 h-16 mx-auto mb-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v.01"></path></svg>
                        <h3 class="text-xl font-semibold">Affiliate System</h3>
                    </div>
                    <div class="text-center" data-aos="zoom-in" data-aos-delay="400">
                        <svg class="w-16 h-16 mx-auto mb-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.78-2.67 9.345M12 11c0-3.517 1.009-6.78 2.67-9.345m0 18.69C17.331 16.78 20 13.517 20 10c0-4.418-3.582-8-8-8S4 5.582 4 10c0 3.517 2.669 6.78 5.33 9.345" /></svg>
                        <h3 class="text-xl font-semibold">AI Interaction</h3>
                    </div>
                    <div class="text-center" data-aos="zoom-in" data-aos-delay="600">
                        <svg class="w-16 h-16 mx-auto mb-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8"></path></svg>
                        <h3 class="text-xl font-semibold">And many more...</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- Earnings / Packages Section -->
        <section class="py-20">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-down">Our Packages</h2>
                <div class="flex flex-wrap justify-center">
                    <div class="w-full md:w-1/3 p-4" data-aos="flip-left">
                        <div class="p-8 bg-gray-800 rounded-lg text-center">
                            <h3 class="text-2xl font-bold mb-4">Basic</h3>
                            <p class="text-4xl font-bold mb-4">$10</p>
                            <ul class="text-left mb-8">
                                <li class="mb-2"><span class="text-green-500 mr-2">&#10003;</span>1,000 Followers</li>
                                <li class="mb-2"><span class="text-green-500 mr-2">&#10003;</span>10,000 Likes</li>
                                <li class="mb-2"><span class="text-green-500 mr-2">&#10003;</span>Basic Support</li>
                            </ul>
                            <a href="{{ route('register') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300">Register</a>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 p-4" data-aos="flip-up">
                        <div class="p-8 bg-indigo-600 rounded-lg text-center relative">
                            <span class="absolute top-0 right-0 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-bl-lg">Most Popular</span>
                            <h3 class="text-2xl font-bold mb-4">Premium</h3>
                            <p class="text-4xl font-bold mb-4">$50</p>
                            <ul class="text-left mb-8">
                                <li class="mb-2"><span class="text-white mr-2">&#10003;</span>10,000 Followers</li>
                                <li class="mb-2"><span class="text-white mr-2">&#10003;</span>100,000 Likes</li>
                                <li class="mb-2"><span class="text-white mr-2">&#10003;</span>Priority Support</li>
                            </ul>
                            <a href="{{ route('register') }}" class="bg-white text-indigo-600 font-bold py-2 px-4 rounded-lg transition duration-300">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Affiliate Structure -->
        <section class="py-20 bg-gray-800">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-down">Affiliate Structure</h2>
                <div class="bg-gray-900 p-8 rounded-lg" data-aos="flip-up">
                    <p class="text-lg text-center">Earn a <span class="text-indigo-400 font-bold">20% commission</span> on all sales generated through your referral link. Payments are made monthly via PayPal.</p>
                </div>
            </div>
        </section>

        <!-- Screenshots/Demo -->
        <section class="py-20">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-down">See It In Action</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <img src="https://via.placeholder.com/600x400.png?text=App+Screenshot+1" alt="App Screenshot 1" class="rounded-lg" data-aos="zoom-in-right" style="width: 100%; height: auto; object-fit: cover;">
                    <img src="https://via.placeholder.com/600x400.png?text=App+Screenshot+2" alt="App Screenshot 2" class="rounded-lg" data-aos="zoom-in-left" style="width: 100%; height: auto; object-fit: cover;">
                </div>
            </div>
        </section>

        <!-- FAQs -->
        <section id="faqs" class="py-20 bg-gray-800">
            <div class="container mx-auto px-6" data-aos="fade-up" x-data="{ openFaq: null }">
                <h2 class="text-3xl font-bold text-center mb-12">Frequently Asked Questions</h2>
                <div class="max-w-3xl mx-auto">
                    <div class="border-b border-gray-700">
                        <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full text-left py-4 focus:outline-none">
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-semibold">How do I earn?</span>
                                <span x-text="openFaq === 1 ? '-' : '+'">&#9660;</span>
                            </div>
                        </button>
                        <div x-show="openFaq === 1" x-collapse class="mt-2 text-gray-400">
                            <p>You can earn by reselling our services or through our affiliate program, which pays a 20% commission on every sale made through your referral link.</p>
                        </div>
                    </div>
                    <div class="border-b border-gray-700">
                        <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left py-4 focus:outline-none">
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-semibold">How do I register?</span>
                                <span x-text="openFaq === 2 ? '-' : '+'">&#9660;</span>
                            </div>
                        </button>
                        <div x-show="openFaq === 2" x-collapse class="mt-2 text-gray-400">
                            <p>Click on the "Register" button on the top right corner of the page and fill out the registration form. It's that simple!</p>
                        </div>
                    </div>
                    <div class="border-b border-gray-700">
                        <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full text-left py-4 focus:outline-none">
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-semibold">How long to boost?</span>
                                <span x-text="openFaq === 3 ? '-' : '+'">&#9660;</span>
                            </div>
                        </button>
                        <div x-show="openFaq === 3" x-collapse class="mt-2 text-gray-400">
                            <p>The delivery time for our boost services depends on the package you choose. However, we always strive to deliver as fast as possible.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="py-20">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-down">Contact Us</h2>
                @if(session('success'))
                    <div class="bg-green-500 text-white p-4 rounded-lg mb-6 text-center">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('contact.store') }}" method="POST" class="max-w-xl mx-auto" data-aos="fade-up">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium mb-1">Name</label>
                        <input type="text" name="name" id="name" class="w-full p-2 rounded bg-gray-700 border border-gray-600 focus:outline-none focus:border-indigo-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium mb-1">Email</label>
                        <input type="email" name="email" id="email" class="w-full p-2 rounded bg-gray-700 border border-gray-600 focus:outline-none focus:border-indigo-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium mb-1">Message</label>
                        <textarea name="message" id="message" rows="4" class="w-full p-2 rounded bg-gray-700 border border-gray-600 focus:outline-none focus:border-indigo-500" required></textarea>
                    </div>
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300">Send Message</button>
                </form>
            </div>
        </section>

        @include('layouts.footer')

    </div>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
