<nav x-data="{ open: false }" class="bg-gray-800  lg:block hidden ">
     <div class="py-6 px-16 w-full text-center text-white bg-green-600 font-bold text-xl">Inventory System</div>
            <div class="flex flex-col">      
                    <x-nav-link :href="route('dashboard')" class="flex items-center gap-6 py-6">
                    <svg style="transform: scale(0.9);" width="30px" height="30px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Dashboard</title> <g id="Dashboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <rect id="Container" x="0" y="0" width="24" height="24"> </rect> <rect id="shape-1" stroke="#ffffff" stroke-width="2" stroke-linecap="round" x="4" y="4" width="16" height="16" rx="2"> </rect> <line x1="4" y1="9" x2="20" y2="9" id="shape-2" stroke="#ffffff" stroke-width="2" stroke-linecap="round"> </line> <line x1="9" y1="10" x2="9" y2="20" id="shape-3" stroke="#ffffff" stroke-width="2" stroke-linecap="round"> </line> </g> </g></svg>
                        {{ __('Dashboard') }}
                    </x-nav-link>
                
                    <x-nav-link :href="route('users')" class="flex items-center gap-6 py-6" >
                    <svg style="transform: scale(1);" width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="8" r="4" fill="#ffffff"></circle> <path d="M5.33788 17.3206C5.99897 14.5269 8.77173 13 11.6426 13H12.3574C15.2283 13 18.001 14.5269 18.6621 17.3206C18.79 17.8611 18.8917 18.4268 18.9489 19.0016C19.0036 19.5512 18.5523 20 18 20H6C5.44772 20 4.99642 19.5512 5.0511 19.0016C5.1083 18.4268 5.20997 17.8611 5.33788 17.3206Z" fill="#ffffff"></path> </g></svg>
                        {{ __('User Management') }}
                    </x-nav-link>
           
                    <x-nav-link :href="route('categories')" class="flex items-center gap-6 py-6">
                    <svg style="transform: scale(0.8);" width="30px" height="30px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="none">
  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
  <g id="SVGRepo_iconCarrier">
    <title>category-list-solid</title>
    <g id="Layer_2" data-name="Layer 2">
      <g id="invisible_box" data-name="invisible box">
        <rect width="48" height="48" fill="none"></rect>
      </g>
      <g id="icons_Q2" data-name="icons Q2">
        <path d="M24,10h0a2,2,0,0,1,2-2H42a2,2,0,0,1,2,2h0a2,2,0,0,1-2,2H26A2,2,0,0,1,24,10Z"></path>
        <path d="M24,24h0a2,2,0,0,1,2-2H42a2,2,0,0,1,2,2h0a2,2,0,0,1-2,2H26A2,2,0,0,1,24,24Z"></path>
        <path d="M24,38h0a2,2,0,0,1,2-2H42a2,2,0,0,1,2,2h0a2,2,0,0,1-2,2H26A2,2,0,0,1,24,38Z"></path>
        <path d="M12,2a2.1,2.1,0,0,0-1.7,1L4.2,13a2.3,2.3,0,0,0,0,2,1.9,1.9,0,0,0,1.7,1H18a2.1,2.1,0,0,0,1.7-1,1.8,1.8,0,0,0,0-2l-6-10A1.9,1.9,0,0,0,12,2Z"></path>
        <path d="M12,30a6,6,0,1,1,6-6A6,6,0,0,1,12,30Z"></path>
        <path d="M16,44H8a2,2,0,0,1-2-2V34a2,2,0,0,1,2-2h8a2,2,0,0,1,2,2v8A2,2,0,0,1,16,44Z"></path>
      </g>
    </g>
  </g>
</svg>

                        {{ __('Categories') }}
                    </x-nav-link>
                    <x-nav-link :href="route('products')" class="flex items-center gap-6 py-6">
                    <svg style="transform: scale(0.8);" width="30px" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="none" stroke="#ffffff" stroke-width="2" d="M1,2 L23,2 L23,9 L1,9 L1,2 Z M4,12 L5,12 L5,13 L4,13 L4,12 Z M4,5 L5,5 L5,6 L4,6 L4,5 Z M4,19 L5,19 L5,20 L4,20 L4,19 Z M1,16 L23,16 L23,23 L1,23 L1,16 Z M1,9 L23,9 L23,16 L1,16 L1,9 Z"></path> </g></svg>
                        {{ __('Products') }}
                    </x-nav-link>
             
                    <x-nav-link :href="route('sales')" class="flex items-center gap-6 py-6" >
                    <svg style="transform: scale(0.8);" width="30px" height="30px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M2 0H14V16H12L10 14L8 16L6 14L4 16H2V0ZM5 4H11V6H5V4ZM11 8H5V10H11V8Z" fill="#ffffff"></path> </g></svg>
                        {{ __('Sales') }}
                    </x-nav-link>
            
            </div>
</nav>
