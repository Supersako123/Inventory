<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Inventory System') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 flex">
        @include('layouts.navigation')
        <div class="h-20 flex items-center">
        </div>
        <div class="flex-row justify-center flex-grow">
            <div
                class="flex justify-between sm:px-11 px-4 w-f h-[75px] bg-white items-center font-semibold text-gray-500 text-lg">
                <div class="hidden lg:block">{{ \Carbon\Carbon::now()->format("F j, Y, g:i a") }}</div>
                <div>
                    <div class="sm:flex sm:items-center">
                        <x-dropdown width="48">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center font-semibold border border-transparent text-md leading-4 rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
                <div x-data="{ open: false }" class="relative block lg:hidden">
                    <!-- Hamburger Icon (visible on mobile) -->
                    <div @click="open = !open" class="flex lg:hidden cursor-pointer">
                        <svg fill="#000000" width="45px" height="45px" viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_iconCarrier">
                                <title>icn/menu</title>
                                <path
                                    d="M2 3h12a1 1 0 0 1 0 2H2a1 1 0 1 1 0-2zm0 4h12a1 1 0 0 1 0 2H2a1 1 0 1 1 0-2zm0 4h12a1 1 0 0 1 0 2H2a1 1 0 0 1 0-2z">
                                </path>
                            </g>
                        </svg>
                    </div>

                    <!-- Menu (hidden by default, visible when open is true) -->
                    <div x-show="open" x-transition
                        class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
                        <div class="bg-white p-8 w-3/4 sm:w-1/2 lg:w-1/3 rounded-lg shadow-lg">
                            <!-- Menu Items -->
                            <ul class="space-y-4 text-center">
                                <li><a href="dashboard" class="text-lg text-black">Dashboard</a></li>
                                <li><a href="users" class="text-lg text-black">User Management</a></li>
                                <li><a href="categories" class="text-lg text-black">Categories</a></li>
                                <li><a href="products" class="text-lg text-black">Products</a></li>
                                <li><a href="sales" class="text-lg text-black">Sales</a></li>
                            </ul>
                            <div class="mt-4">
                                <button @click="open = false"
                                    class="w-full py-2 px-4 bg-red-500 text-white rounded-full">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>