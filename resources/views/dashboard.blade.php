<x-app-layout>
    <div class="flex justify-center gap-12 mt-9 flex-wrap">
        <x-info-square :number='$users' title='Users' color='bg-violet-400'
            icon='<svg width="90px" height="90px" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>user-filled</title> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="icon" fill="#ffffff" transform="translate(85.333333, 42.666667)"> <path d="M170.666667,170.666667 C217.794965,170.666667 256,132.461632 256,85.3333333 C256,38.2050347 217.794965,7.10542736e-15 170.666667,7.10542736e-15 C123.538368,7.10542736e-15 85.3333333,38.2050347 85.3333333,85.3333333 C85.3333333,132.461632 123.538368,170.666667 170.666667,170.666667 Z M213.333333,213.333333 L128,213.333333 C57.307552,213.333333 1.42108547e-14,270.640885 1.42108547e-14,341.333333 L1.42108547e-14,426.666667 L341.333333,426.666667 L341.333333,341.333333 C341.333333,270.640885 284.025781,213.333333 213.333333,213.333333 Z" id="user"> </path> </g> </g> </g></svg>' />
        <x-info-square :number='$categories' title='Categories' color='bg-orange-400'
            icon='<svg fill="#ffffff" width="90px" height="90px" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M120,48v64a7.9954,7.9954,0,0,1-8,8H48a7.99539,7.99539,0,0,1-8-8V48a7.99539,7.99539,0,0,1,8-8h64A7.9954,7.9954,0,0,1,120,48Zm88-8H144a7.99539,7.99539,0,0,0-8,8v64a7.99539,7.99539,0,0,0,8,8h64a7.9954,7.9954,0,0,0,8-8V48A7.9954,7.9954,0,0,0,208,40Zm-96,96H48a7.99539,7.99539,0,0,0-8,8v64a7.99539,7.99539,0,0,0,8,8h64a7.9954,7.9954,0,0,0,8-8V144A7.9954,7.9954,0,0,0,112,136Zm96,0H144a7.99539,7.99539,0,0,0-8,8v64a7.99539,7.99539,0,0,0,8,8h64a7.9954,7.9954,0,0,0,8-8V144A7.9954,7.9954,0,0,0,208,136Z"></path> </g></svg>' />
        <x-info-square :number='$products' title='Products' color='bg-blue-400'
            icon='<svg height="90px" width="90px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#ffffff;} </style> <g> <path class="st0" d="M507.316,126.733L138.349,97.498l-5.612-31.861c-5.154-29.076-28.294-51.611-57.524-55.942L9.677,0 L4.684,33.717l65.544,9.72c14.676,2.165,26.342,13.504,28.919,28.134l52.95,300.107c4.969,28.168,29.431,48.69,58.044,48.698 h229.728l6.828-34.102H210.142c-12.049,0.017-22.373-8.662-24.454-20.522l-7.42-41.992h283.58L507.316,126.733z"></path> <path class="st0" d="M223.148,438.658c-20.253,0-36.667,16.426-36.667,36.678c0,20.254,16.414,36.663,36.667,36.663 c20.258,0,36.675-16.409,36.675-36.663C259.823,455.084,243.405,438.658,223.148,438.658z"></path> <path class="st0" d="M386.068,438.658c-20.257,0-36.666,16.426-36.666,36.678c0,20.254,16.409,36.663,36.666,36.663 c20.258,0,36.68-16.409,36.68-36.663C422.748,455.084,406.327,438.658,386.068,438.658z"></path> </g> </g></svg>' />
        <x-info-square :number='$totalSales' title='Sales' color='bg-green-400'
            icon='<svg fill="#ffffff" height="90px" width="90px" version="1.2" baseProfile="tiny" id="MO0ney_sign_by_Adioma" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 256 256" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M198.2,169.8c0-39.4-42.1-50.6-60.3-55.8c-34.4-9.6-37.3-22-36.8-28.3c1.2-15.5,18.2-19.3,34-15.9 c12.4,2.7,25.2,10,32.3,15.6L189.9,59c-11.1-7.6-25.3-17.4-46.1-21.4V12h-32.9v24.7C79,39.1,57.8,59.1,57.8,86.6 c0,26.8,19.4,39.4,38.8,48.8c16.2,7.7,61.4,15.8,58.8,36.2c-1.4,11.1-13.2,19.3-32.7,16.8c-17-2.1-35.2-16.4-35.2-16.4l-24.9,24.7 c15,12.1,30.9,19.7,48.2,23.2v24.1h32.9v-22.9C175.1,217.7,198.2,196.3,198.2,169.8z"></path> </g></svg>' />
    </div>



<div class="gap-10 space-x-4 mt-9 mb-12 flex flex-wrap flex-grow justify-center">
    <x-container title="HIGHEST SELLING PRODUCT" class="bg-white">
        <x-data-table 
            :array='$highestSelling' 
            title='HIGHEST SELLING PRODUCTS' 
            :headers="['Name', 'Revenue', 'Total Quantity']" 
            :data="['name', 'total_sales', 'quantity']"
        />
    </x-container>

    <x-container title="LATEST SALES" class="bg-white">
        <x-data-table 
            :array='$latestSales' 
            title='LATEST SALES' 
            :headers="['#', 'Product Name', 'Date', 'Revenue']" 
            :data="['id', 'name', 'created_at', 'total_sales']"
        />
    </x-container>

    <x-container title="RECENTLY ADDED PRODUCTS" class="bg-white">
        <x-data-table 
            :array='$recentlyAdded' 
            title='RECENTLY ADDED PRODUCTS'
            :headers="['Product Name', 'Date Created', 'Total Quantity']" 
            :data="['name', 'created_at', 'quantity']"
        />
    </x-container>
</div>


</x-app-layout>