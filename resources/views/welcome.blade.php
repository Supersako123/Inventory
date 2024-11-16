<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inventory System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100 min-h-screen flex flex-col">
  
  <!-- Navbar -->
  <nav class="p-6 bg-white shadow-md dark:bg-gray-800 flex justify-end space-x-4">
    @auth
      <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-gray-600 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
        Dashboard
      </a>
    @else
      <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-gray-600 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
        Log in
      </a>
      @if (Route::has('register'))
        <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-gray-600 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
          Register
        </a>
      @endif
    @endauth
  </nav>

  <!-- Welcome Section -->
  <header class="text-center py-16  text-black">
    <h1 class="text-4xl font-bold">Welcome to Inventory Manager</h1>
    <p class="mt-4 text-lg">Your efficient solution for tracking and managing inventory.</p>
  </header>

  <!-- Main Content -->
  <main class="flex-1 px-6 py-8">
    <div class="max-w-4xl mx-auto">
      <!-- Features Section -->
      <section class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
        <div class="p-6 rounded-lg shadow-md bg-white border-blue-500 border-[1px]">
          <h2 class="text-2xl font-semibold mb-4">Track Your Inventory</h2>
          <p class="text-gray-600 dark:text-gray-300">Easily monitor stock levels, add new items, and keep track of inventory changes all in one place.</p>
        </div>
        <div class="p-6  rounded-lg shadow-md  bg-white border-blue-500 border-[1px]">
          <h2 class="text-2xl font-semibold mb-4">Manage Users</h2>
          <p class="text-gray-600 dark:text-gray-300">Control user access, assign roles, and maintain a secure and organized system for managing team members.</p>
        </div>
        <div class="p-6  rounded-lg shadow-md bg-white border-blue-500 border-[1px]">
          <h2 class="text-2xl font-semibold mb-4">Track sales</h2>
          <p class="text-gray-600 dark:text-gray-300">Keep a detailed record of each individual sale, view total sales counts, and calculate the total gross sum of all sales to stay on top of your business performance.</p>
        </div>
        <div class="p-6  rounded-lg shadow-md bg-white border-blue-500 border-[1px]">
          <h2 class="text-2xl font-semibold mb-4">Category based sorting</h2>
          <p class="text-gray-600 dark:text-gray-300">organize items by categories, making it easier to locate and manage your inventory.</p>
        </div>
      </section>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-200 dark:bg-gray-800 py-4 text-center text-gray-600 dark:text-gray-400">
    <p>&copy; 2024 Jonathan Sako. All rights reserved.</p>
  </footer>

</body>
</html>
