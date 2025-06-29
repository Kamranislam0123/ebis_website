@extends('layouts.website', ['pageName' => 'home'])
@section('website-contents')
@section('title', 'Home')
@push('website-css')

@endpush


<section class="hero_slider" id="home">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- First Slide -->
            <div class="carousel-item active">
                <div class="hero-container" style="background-image: url('assets/images/Banner Image.png');">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 d-flex flex-column justify-content-center text-left hero-content">
                                <h1 class="hero-title mb-3">Your Trusted
                                    Immigration Partner</h1>

                                <a class="btn" href="#">Apply Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second Slide -->
            <div class="carousel-item">
                <div class="hero-container" style="background-image: url('assets/images/Banner Image.png');">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 d-flex flex-column justify-content-center text-left hero-content">
                                <h1 class="hero-title mb-3">Your Trusted
                                    Immigration Partner</h1>
                                <a class="btn" href="#">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Third Slide (Add more slides as needed) -->
            <div class="carousel-item">
                <div class="hero-container" style="background-image: url('assets/images/Banner Image.png');">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 d-flex flex-column justify-content-center text-left hero-content">
                                <h1 class="hero-title mb-3">Next-Gen Financial Technology</h1>

                                <a class="btn" href="#">Apply Now <x-antdesign-arrow-right-o /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel Controls -->
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button> -->
        <!-- <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
    </div>
</section>

<section class="-top-55 relative z-50">
    <div class="container mx-auto px-4">
        <!-- Whole section wrapped in a card with margin, padding, border, and shadow -->
        <div class="border border-gray-300 bg-white rounded-2xl shadow-lg overflow-hidden p-4 m-4">
            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 divide-y-2 sm:divide-y-0 sm:divide-x-2 divide-dashed divide-red-600">
                <!-- First Stat Card -->
                <div
                    class="flex flex-col items-center justify-center p-5 text-center transition-transform duration-300 ease-in-out hover:transform hover:translate-y-[-5px]">
                    <div class="text-2xl mb-3">
                        <img src="assets/images/icons/nomad-visa.png" alt="Visa Icon" class="w-16 h-16">
                    </div>
                    <div class="text-xl font-bold text-gray-900">99%</div>
                    <div class="font-semibold text-gray-600">Visa Success Rate</div>
                </div>

                <!-- Second Stat Card -->
                <div
                    class="flex flex-col items-center justify-center p-5 text-center transition-transform duration-300 ease-in-out hover:transform hover:translate-y-[-5px]">
                    <div class="text-2xl mb-3">
                        <img src="assets/images/icons/education.png" alt="Success Students Icon" class="w-16 h-16">
                    </div>
                    <div class="text-xl font-bold text-gray-900">300+</div>
                    <div class="font-semibold text-gray-600">Success Students</div>
                </div>

                <!-- Third Stat Card -->
                <div
                    class="flex flex-col items-center justify-center p-5 text-center transition-transform duration-300 ease-in-out hover:transform hover:translate-y-[-5px]">
                    <div class="text-2xl mb-3">
                        <img src="assets/images/icons/deal.png" alt="Partner Institutions Icon" class="w-16 h-16">
                    </div>
                    <div class="text-xl font-bold text-gray-900">200+</div>
                    <div class="font-semibold text-gray-600">Partner Institutions</div>
                </div>

                <!-- Fourth Stat Card -->
                <div
                    class="flex flex-col items-center justify-center p-5 text-center transition-transform duration-300 ease-in-out hover:transform hover:translate-y-[-5px]">
                    <div class="text-2xl mb-3">
                        <img src="assets/images/icons/rating.png" alt="Successful Reviews Icon" class="w-16 h-16">
                    </div>
                    <div class="text-xl font-bold text-gray-900">100+</div>
                    <div class="font-semibold text-gray-600">Successful Reviews</div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="-top-30 relative bg-white">
    <div class="container mx-auto px-4 text-center">
        <p class="text-5xl font-bold mb-8">Why Choose Us</p> <!-- Added mb-8 for bottom margin -->
        <div class="grid grid-cols-1 sm:grid-cols-2 py-4  lg:grid-cols-4 gap-8">
            <!-- Canada Card -->
            <div class="relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">
                <img src="https://placehold.co/600x600?text=Canada" alt="Canada"
                    class="w-full h-full object-cover transform transition-transform duration-300 ease-in-out hover:scale-105">
                <div
                    class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                    <span class="text-white text-xl font-semibold">Canada</span>
                </div>
            </div>

            <!-- UK Card -->
            <div class="relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">
                <img src="https://placehold.co/600x600?text=UK" alt="UK"
                    class="w-full h-full object-cover transform transition-transform duration-300 ease-in-out hover:scale-105">
                <div
                    class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                    <span class="text-white text-xl font-semibold">UK</span>
                </div>
            </div>

            <!-- USA Card -->
            <div class="relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">
                <img src="https://placehold.co/600x600?text=USA" alt="USA"
                    class="w-full h-full object-cover transform transition-transform duration-300 ease-in-out hover:scale-105">
                <div
                    class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                    <span class="text-white text-xl font-semibold">USA</span>
                </div>
            </div>

            <!-- Australia Card -->
            <div class="relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">
                <img src="https://placehold.co/600x600?text=Australia" alt="Australia"
                    class="w-full h-full object-cover transform transition-transform duration-300 ease-in-out hover:scale-105">
                <div
                    class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                    <span class="text-white text-xl font-semibold">Australia</span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="">
    <div class="container mx-auto px-4 text-center">
        <!-- Heading -->
        <p class="text-5xl font-bold py-4 mb-8">Explore By Country</p>

        <!-- Layout with 2 columns -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <!-- Left Column: Explore By Country Cards -->
            <div class="grid grid-cols-2 gap-4">
                <!-- Canada Card -->
                <div class="relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">
                    <img src="https://placehold.co/600x600?text=Canada" alt="Canada"
                        class="w-full h-full object-cover transform transition-transform duration-300 ease-in-out hover:scale-105">
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                        <span class="text-white text-xl font-semibold">Canada</span>
                    </div>
                </div>

                <!-- UK Card -->
                <div class="relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">
                    <img src="https://placehold.co/600x600?text=UK" alt="UK"
                        class="w-full h-full object-cover transform transition-transform duration-300 ease-in-out hover:scale-105">
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                        <span class="text-white text-xl font-semibold">UK</span>
                    </div>
                </div>

                <!-- Australia Card -->
                <div class="relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">
                    <img src="https://placehold.co/600x600?text=Australia" alt="Australia"
                        class="w-full h-full object-cover transform transition-transform duration-300 ease-in-out hover:scale-105">
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                        <span class="text-white text-xl font-semibold">Australia</span>
                    </div>
                </div>

                <!-- China Card -->
                <div class="relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">
                    <img src="https://placehold.co/600x600?text=China" alt="China"
                        class="w-full h-full object-cover transform transition-transform duration-300 ease-in-out hover:scale-105">
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                        <span class="text-white text-xl font-semibold">China</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Success Stories -->

            <div class="bg-gray-800 text-white rounded-2xl shadow-lg p-6">
                <h3 class="text-3xl text-left font-semibold mb-4">Success Stories</h3>

                <!-- Success Stories Carousel -->
                <div id="successStoriesCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- First Success Story -->
                        <div class="carousel-item active">
                            <div class="flex items-center mb-6">
                                <img src="https://placehold.co/100x100" alt="Sofia Rahman" class="w-24 h-24 object-cover rounded-full mr-4">
                                <div>
                                    <p class="text-xl text-left font-semibold">Sofia Rahman</p>
                                    <p class="text-gray-400">University Of Toronto</p>
                                </div>
                            </div>
                            <p class="text-lg mb-4 text-justify">
                                EBIS provided excellent guidance throughout my abroad journey. Their expertise was invaluable, from visa assistance to cultural adaptation, ensuring a smooth and stress-free experience.
                            </p>
                        </div>

                        <!-- Second Success Story -->
                        <div class="carousel-item">
                            <div class="flex items-center mb-6">
                                <img src="https://placehold.co/100x100" alt="Ahmed Hassan" class="w-24 h-24 object-cover rounded-full mr-4">
                                <div>
                                    <p class="text-xl text-left font-semibold">Ahmed Hassan</p>
                                    <p class="text-gray-400">University of British Columbia</p>
                                </div>
                            </div>
                            <p class="text-lg mb-4 text-justify">
                                The team at EBIS made my dream of studying abroad a reality. Their professional approach and attention to detail ensured everything went perfectly from application to arrival.
                            </p>
                        </div>

                        <!-- Third Success Story -->
                        <div class="carousel-item">
                            <div class="flex items-center mb-6">
                                <img src="https://placehold.co/100x100" alt="Fatima Ali" class="w-24 h-24 object-cover rounded-full mr-4">
                                <div>
                                    <p class="text-xl text-left font-semibold">Fatima Ali</p>
                                    <p class="text-gray-400">McGill University</p>
                                </div>
                            </div>
                            <p class="text-lg mb-4 text-justify">
                                I'm grateful for EBIS's support during my study abroad journey. They handled all the complex paperwork and provided excellent guidance every step of the way.
                            </p>
                        </div>
                    </div>

                    <!-- Carousel Controls -->
                    <div class="flex justify-between items-center mt-4">
                        <!-- Read More Button -->
                        <a href="#" class="text-lg font-semibold text-blue-500 hover:text-blue-700">Read More</a>

                        <!-- Right Arrow Button -->
                        <button class="carousel-control-next flex-shrink-0 ml-4" type="button" data-bs-target="#successStoriesCarousel" data-bs-slide="next">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h8m0 0l-4 4m4-4l-4-4M12 2a10 10 0 100 20 10 10 0 000-20z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pt-28">
<div class="container mx-auto px-4 text-center">
        <div class="flex justify-between items-center   rounded-lg ">
        <!-- Left Section: Image and Info -->
        <div class="w-1/2">
            <img src="https://placehold.co/600x600" alt="Study in the UK" class="rounded-lg">
        </div>

        <!-- Right Section: Text and Button -->
        <div class="w-1/2 pl-8">
            <p class="text-5xl font-bold text-gray-800 mb-4">ABOUT US</p>
            <p class="text-lg text-gray-600 text-justify mb-6">
                From they fine john he give of rich he. They age and draw mrs like. Improving end
                disturbs may instantly was household applauded incommode. Why kept very ever home mrs.
                Considered sympathize ten uncommonly occasional assistance sufficient not.
            </p>
            <a href="#" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-lg text-lg hover:bg-blue-700 transition duration-300">
                Read More
            </a>
        </div>
    </div>
</div>
</section>




@endsection