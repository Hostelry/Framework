@extends('site::layouts.master')

@section('content')
    <div class="relative overflow-hidden px-6 pb-6">
        <img src="{{asset('/images/wave.svg')}}" class="absolute top-0 left-2/5">
        <div class="container mx-auto relative">
            <div class="flex flex-col md:flex-row items-center pt-32 pb-16 md:pb-0">
                <div class="md:w-1/2 lg:w-1/3 mb-4 sm:mb-16 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold text-secondary leading-tight mb-6 md:mb-10">Hospitality Management Made Easy.</h1>
                    <h2 class="text-sm text-secondary-600 mb-2">A platform built for managing Inns, Pension Houses, and Hotels.</h2>
                </div>
                <div class="mt-16 sm:mt-0 flex-1 flex justify-end">
                    <img src="{{asset('/images/town.svg')}}">
                </div>
            </div>
        </div>
    </div>
    <div id="overview" class="bg-blue-100 mt-32 py-12">
        <div class="container mx-auto px-6 pt-12 pb-12 relative">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 md:pr-8 lg:pr-16">
                    <h1 class="font-bold text-center text-4xl mt-12 mb-12">What's our goal?</h1>
                    <img src="{{asset('/images/faq.svg')}}">
                    <p class="font-bold text-center text-2xl mt-12 mb-12">Happy Customers = Business Growth</p>
                </div>
                <div class="md:w-1/2">
                    <h3 class="text-center text-3xl text-black font-medium leading-snug tracking-wider">HOSPITALITY: AT ITS BEST!<span class="bg-primary h-1 w-20 block mt-4"></span></h3>
                    <br>
                    <p>Together, this is our reason why and this is our just cause.</p>
                    <br>
                    <div class="flex bg-green-lighter max-w-2xl mb-4">
                        <div class="w-2 bg-green-500"></div>
                        <div class="w-auto text-grey-darker items-center p-4">
                        <span class="text-lg font-bold pb-4">
                          Improved Booking Experience
                        </span>
                            <p class="leading-tight">
                                The best thing you can offer is customer satisfaction. Making sure that your customers are satisfied, enjoys their stay, and feels safe like it's their home.
                            </p>
                        </div>
                    </div>
                    <div class="flex bg-green-lighter max-w-2xl mb-4">
                        <div class="w-2 bg-green-500"></div>
                        <div class="w-auto text-grey-darker items-center p-4">
                        <span class="text-lg font-bold pb-4">
                          Improved Sales
                        </span>
                            <p class="leading-tight">
                                Assuring that what's on the menu is very available. Customers loved that!
                            </p>
                        </div>
                    </div>
                    <div class="flex bg-green-lighter max-w-2xl mb-4">
                        <div class="w-2 bg-green-500"></div>
                        <div class="w-auto text-grey-darker items-center p-4">
                        <span class="text-lg font-bold pb-4">
                          Improved housekeeping
                        </span>
                            <p class="leading-tight">
                                Proper maintenance on appliances and furniture.
                            </p>
                            <p class="leading-tight">
                                Proper replacement of linens
                            </p>
                            <p class="leading-tight">
                                Proper disposal of trash.
                            </p>
                            <p class="leading-tight">
                                Monitoring of Lost and Found Items
                            </p>
                        </div>
                    </div>
                    <div class="flex bg-green-lighter max-w-2xl mb-4">
                        <div class="w-2 bg-green-500"></div>
                        <div class="w-auto text-grey-darker items-center p-4">
                        <span class="text-lg font-bold pb-4">
                          Improved warehousing
                        </span>
                            <p class="leading-tight">
                                Having immediate feedback with issues and concerns especially for expiring and out of stock goods.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pricing" class="relative">
        <div class="container mx-auto px-6 pt-6 pb-12 relative">
            <h3 class="text-center text-4xl text-black font-medium leading-snug tracking-wider">Select a plan that suits your needs.<span class="bg-primary h-1 w-20 block mt-4"></span></h3>
            <p class="text-red-500 text-center">*Included features may vary per plan.</p>
            <div class="max-w-full md:max-w-6xl mx-auto my-3 md:px-8">
                <div class="relative block flex flex-col md:flex-row items-center">
                    <div class="w-11/12 max-w-sm sm:w-3/5 lg:w-1/3 sm:my-5 my-8 relative z-0 rounded-lg shadow-lg md:-mr-4">
                        <div class="bg-white text-black rounded-lg shadow-inner shadow-lg overflow-hidden">
                            <div class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black text-center px-8 lg:px-6">
                                <h2 class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide">
                                    Starter
                                </h2>
                                <h2 class="text-sm text-green-900 text-center pb-6">₱ 6750 /mo</h2>
                                Getting started in managing your business.
                            </div>
                            <div class="flex flex-wrap mt-3 px-6">
                                <ul>
                                    <li class="flex items-center">
                                        <div class=" rounded-full p-2 fill-current text-green-700">
                                            <svg
                                                class="w-6 h-6 align-middle"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="text-gray-700 text-lg ml-3">Main Branch ONLY</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class=" rounded-full p-2 fill-current text-green-700">
                                            <svg
                                                class="w-6 h-6 align-middle"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" ></path>
                                                <polyline points="22 4 12 14.01 9 11.01" ></polyline>
                                            </svg>
                                        </div>
                                        <span class="text-gray-700 text-lg ml-3">Up to 10 employees</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div
                                            class=" rounded-full p-2 fill-current text-red-700"
                                        >
                                            <svg
                                                class="w-6 h-6 align-middle"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="text-red-700 text-lg ml-3">Mobile Integration</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class=" rounded-full p-2 fill-current text-red-700">
                                            <svg
                                                class="w-6 h-6 align-middle"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" ></path>
                                                <polyline points="22 4 12 14.01 9 11.01" ></polyline>
                                            </svg>
                                        </div>
                                        <span class="text-red-700 text-lg ml-3">Customizable</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="block flex items-center p-8  uppercase">
                                <button onclick='location.href="{{route('site.pricing.starter')}}"' class="mt-3 text-lg font-semibold bg-black w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:bg-gray-700" >
                                    Select
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full max-w-md sm:w-2/3 lg:w-1/3 sm:my-5 my-8 relative z-10 bg-white rounded-lg shadow-lg border">
                        <div class="text-sm leading-none rounded-t-lg bg-green-900 text-white font-semibold uppercase py-4 text-center tracking-wide" >
                            BEST OFFER
                        </div>
                        <div class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black text-center px-8 lg:px-6" >
                            <h2 class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide" >
                                Expansion
                            </h2>
                            <h2 class="text-sm text-green-900 text-center pb-6"><span class="text-3xl">₱ 11475</span> /mo</h2>
                            Expanding your business in different locations.
                        </div>
                        <div class="flex pl-12 justify-start sm:justify-start mt-3">
                            <ul>
                                <li class="flex items-center">
                                    <div class="rounded-full p-2 fill-current text-green-700">
                                        <svg
                                            class="w-6 h-6 align-middle"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        >
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 text-lg ml-3">Multiple Branch</span>
                                </li>
                                <li class="flex items-center">
                                    <div
                                        class=" rounded-full p-2 fill-current text-green-700"
                                    >
                                        <svg
                                            class="w-6 h-6 align-middle"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        >
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 text-lg ml-3">Up to 50 employees</span>
                                </li>
                                <li class="flex items-center">
                                    <div
                                        class=" rounded-full p-2 fill-current text-green-700"
                                    >
                                        <svg
                                            class="w-6 h-6 align-middle"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        >
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 text-lg ml-3">Mobile Integration</span>
                                </li>
                                <li class="flex items-center">
                                    <div
                                        class=" rounded-full p-2 fill-current text-red-700"
                                    >
                                        <svg
                                            class="w-6 h-6 align-middle"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        >
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>
                                    </div>
                                    <span class="text-red-700 text-lg ml-3">Customizable</span>
                                </li>
                            </ul>
                        </div>

                        <div class="block flex items-center p-8  uppercase">
                            <button  onclick='location.href="{{route('site.pricing.expansion')}}"'
                                     class="mt-3 text-lg font-semibold bg-black w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:bg-gray-700">
                                Select
                            </button>
                        </div>
                    </div>
                    <div class="w-11/12 max-w-sm sm:w-3/5 lg:w-1/3 sm:my-5 my-8 relative z-0 rounded-lg shadow-lg md:-ml-4">
                        <div class="bg-white text-black rounded-lg shadow-inner shadow-lg overflow-hidden">
                            <div class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black text-center px-8 lg:px-6">
                                <h2 class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide">
                                    Deluxe
                                </h2>
                                <h2 class="text-sm text-green-900 text-center pb-6">₱ 24975 /mo</h2>
                                Resembling businesses in different locations.
                            </div>
                            <div class="flex flex-wrap mt-3 px-6">
                                <ul>
                                    <li class="flex items-center">
                                        <div class=" rounded-full p-2 fill-current text-green-700" >
                                            <svg
                                                class="w-6 h-6 align-middle"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" ></path>
                                                <polyline points="22 4 12 14.01 9 11.01" ></polyline>
                                            </svg>
                                        </div>
                                        <span class="text-gray-700 text-lg ml-3">Various Names and Branches</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class=" rounded-full p-2 fill-current text-green-700">
                                            <svg
                                                class="w-6 h-6 align-middle"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="text-gray-700 text-lg ml-3">Up to 100 employees</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div
                                            class=" rounded-full p-2 fill-current text-green-700"
                                        >
                                            <svg
                                                class="w-6 h-6 align-middle"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="text-gray-700 text-lg ml-3">Enhanced Mobile Integration</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class=" rounded-full p-2 fill-current text-green-700">
                                            <svg
                                                class="w-6 h-6 align-middle"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="text-gray-700 text-lg ml-3">Business Intelligence Tool</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class=" rounded-full p-2 fill-current text-red-700" >
                                            <svg
                                                class="w-6 h-6 align-middle"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="text-red-700 text-lg ml-3">Website and Social Marketing</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class=" rounded-full p-2 fill-current text-red-700" >
                                            <svg
                                                class="w-6 h-6 align-middle"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="text-red-700 text-lg ml-3">Customizable</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="block flex items-center p-8  uppercase">
                                <button  onclick='location.href="{{route('site.pricing.deluxe')}}"'  class="mt-3 text-lg font-semibold bg-black w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:bg-gray-700" >
                                    Select
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <button onclick='location.href="{{route('site.pricing')}}"' class="mt-3 text-lg font-semibold bg-black w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:bg-gray-700" >
                    View to compare plans and see detailed features.
                </button>
            </div>
        </div>
    </div>
    <div id="features" class="relative">
        <div class="container mx-auto px-6 pt-6 pb-12 relative">
            <h3 class="flex flex-col items-center text-4xl text-secondary font-bold">What's included in the plan? <span class="bg-primary h-1 w-20 block mt-4"></span></h3>
            <div class="flex flex-col md:flex-row items-center mb-24 md:mb-16 xl:mb-8 mt-16 md:mt-0 md:mt-16 lg:mt-0">
                <img src="{{asset('/images/booking.svg')}}" class="md:w-1/3">
                <div class="md:ml-16 xl:ml-32">
                    <h4 class="text-2xl md:text-3xl font-bold text-secondary-800 mb-4">Booking Management
                        <p class="text-secondary-700 text-xl mb-4 font-hairline">No need to watch you clock from time-to-time.</p>
                    </h4>
                    <p class="text-secondary-700 text-lg">We provide alerts and notifications on each guest. Automatically monitors the time remaining, extensions, and transferring for each guest.</p>
                </div>
            </div>
            <div class="flex flex-col-reverse md:flex-row items-center mb-24 md:mb-16 xl:mb-8">
                <div class="md:mr-16 xl:mr-32">
                    <h4 class="text-2xl md:text-3xl font-bold text-secondary-800 mb-4">Inventory Management
                        <p class="text-secondary-700 text-xl mb-4 font-hairline">Your stocks won't go to waste! We will keep you updated in near real-time.</p>
                    </h4>
                    <p class="text-secondary-700 text-lg">Making sure your supplies are fresh and enough to run on day-to-day operations. We alert and notifies you for a possible shortage of stocks and be able to create a purchase request on your behalf.</p>
                </div>
                <img src="{{asset('/images/inventory.svg')}}" class="md:w-1/3">
            </div>
            <div class="flex flex-col md:flex-row items-center mb-24 md:mb-16 xl:mb-8 mt-16 md:mt-0 md:mt-16 lg:mt-0">
                <img src="{{asset('/images/employees.svg')}}" class="md:w-1/3">
                <div class="md:ml-16 xl:ml-32">
                    <h4 class="text-2xl md:text-3xl font-bold text-secondary-800 mb-4">Employee Management
                        <p class="text-secondary-700 text-xl mb-4 font-hairline">Who's IN and Who's OUT?</p>
                    </h4>
                    <p class="text-secondary-700 text-lg">Ease of monitoring your employees while organizing their day-off, attendance, payroll processing, deductions and more.</p>
                </div>
            </div>
            <div class="flex flex-col-reverse md:flex-row items-center mb-24 md:mb-16 xl:mb-8">
                <div class="md:mr-16 xl:mr-32">
                    <h4 class="text-2xl md:text-3xl font-bold text-secondary-800 mb-4">Business Intelligence Tools
                        <p class="text-secondary-700 text-xl mb-4 font-hairline">Personalized data analysis to know your business more.</p>
                    </h4>
                    <p class="text-secondary-700 text-lg">Analyzing each event that happens in your business in near real-time gives you peace of mind and knowing what's doing good and what are the problems and bottlenecks in your day-to-day operations can help you create policies and solutions.</p>
                </div>
                <img src="{{asset('/images/monitoring.svg')}}" class="md:w-1/3">
            </div>
        </div>
    </div>
    <div id="partners" class="relative bg-blue-100 pb-24">
        <div class="mt-16">
            <div class="pt-16 pb-16 md:pb-32 relative">
                <img src="/images/overview.svg" class="w-full absolute bottom-full h-16 lg:h-auto object-cover object-top opacity-25">
                <div class="container px-6 mx-auto">
                    <div class="md:w-2/3 mx-auto relative">
                        <img src="/images/quote.svg" class="absolute top-0 left-0 sm:-ml-16 -mt-4">
                        <h2 class="text-center text-black text-4xl font-bold">OUR PARTNERS</h2>
                        <p class="text-black italic text-xl text-center">Join us! Together, we will improve the hospitality services in the Philippines.</p>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center -mt-16 md:-mt-2 lg:-mt-2 relative">
                <a href="#">
                    <img src="{{asset('/images/friendz.jpg')}}" class="w-12 h-12 md:w-24 md:h-24 lg:w-32 lg:h-32 mx-2 lg:mx-4 object-cover rounded-full border-2 md:border-4 border-white">
                </a>
                <a href="#">
                    <img src="{{asset('/images/northbaysuites.jpg')}}" class="w-12 h-12 md:w-24 md:h-24 lg:w-32 lg:h-32 mx-2 lg:mx-4 object-cover rounded-full border-2 md:border-4 border-white">
                </a>
            </div>
        </div>
        <div id="contact" class="container mx-auto px-6 py-24">
        </div>
        <br>
        <br>
    </div>
    <div id="demo" class="bg-white mt-8 py-8">
        <div class="container mx-auto px-6 pt-8 pb-12 relative">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 md:pr-8 lg:pr-16">
                    <h3 class="text-center text-4xl text-black font-bold leading-snug tracking-wider">REQUEST A DEMO<span class="bg-primary h-1 w-20 block mt-4"></span></h3>
                    <form method="POST" action="{{route('site.demo.request')}}">
                        @csrf
                        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                                    Hi! I'm
                                </label>
                                <input required class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" name="name">
                            </div>

                            <div class="w-full px-6">
                                <p class="text-md font-hairline">
                                    I have
                                    <select name="businesses">
                                        <option>One business</option>
                                        <option>One business with multiple branches</option>
                                        <option>Multiple business</option>
                                        <option>Multiple business with multiple branches</option>
                                    </select>
                                    with
                                    <select name="employees">
                                        <option>less than 10 employees</option>
                                        <option>10 employees</option>
                                        <option>50 employees</option>
                                        <option>100 employees</option>
                                        <option>more than 100 employees</option>
                                    </select>
                                    and running the business in
                                    <select name="operating">
                                        <option>less than 1 year</option>
                                        <option>1 year</option>
                                        <option>2 years</option>
                                        <option>3 years</option>
                                        <option>5 years</option>
                                        <option>more than 5 years</option>
                                    </select>
                                </p>
                            </div>
                            <br>
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="message">
                                    Additional Information
                                </label>
                                <textarea required class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-32 resize-none" id="message" name="message"></textarea>
                            </div>
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                                    Email
                                </label>
                                <input type="email" required class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" name="email">
                            </div>
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="contact-number">
                                    Mobile Number
                                </label>
                                <input required class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="contact-number" name="number">
                            </div>
                            <br>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                SEND
                            </button>
                        </div>
                    </form>
                </div>
                <div class="md:w-1/2">
                    <img src="{{asset('/images/demo.svg')}}">
                </div>
            </div>
        </div>
    </div>
@endsection
