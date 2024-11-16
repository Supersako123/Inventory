@props([
  'action' => 'add',
  'product' => [],
  'categories' => [],
])


<x-container :title="ucfirst($action) . ' Product'">
  <form class="flex flex-col items-center lg:items-start" method="POST" action={{$action == 'add' ? route('products') : route('products', ['id' => $_GET['id']])}}>
    @csrf
    @if($action == 'edit')
    @method('patch')
  @endif

    <x-form-input class="w-64" name='name' title='Name' value="{{ $action == 'edit' ? $product->name : '' }}"
      icon='<svg fill="#000000" width="25px" height="25px" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M120,48v64a7.9954,7.9954,0,0,1-8,8H48a7.99539,7.99539,0,0,1-8-8V48a7.99539,7.99539,0,0,1,8-8h64A7.9954,7.9954,0,0,1,120,48Zm88-8H144a7.99539,7.99539,0,0,0-8,8v64a7.99539,7.99539,0,0,0,8,8h64a7.9954,7.9954,0,0,0,8-8V48A7.9954,7.9954,0,0,0,208,40Zm-96,96H48a7.99539,7.99539,0,0,0-8,8v64a7.99539,7.99539,0,0,0,8,8h64a7.9954,7.9954,0,0,0,8-8V144A7.9954,7.9954,0,0,0,112,136Zm96,0H144a7.99539,7.99539,0,0,0-8,8v64a7.99539,7.99539,0,0,0,8,8h64a7.9954,7.9954,0,0,0,8-8V144A7.9954,7.9954,0,0,0,208,136Z"></path> </g></svg>' 
    />


    <select id="category_id" name="category_id"
      class=" mt-4 w-64 border border-gray-300 text-gray-900 text-md focus:ring-blue-500 focus:border-blue-500 block p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option value="" selected>Select Product Category</option>
      @foreach ($categories as $category)
      <option value="{{ $category->id }}" {{$category->id == $product->category_id ? "selected" : ""}} >{{ $category->name }}</option>
    @endforeach
    </select>
    <x-input-error class="mt-2" :messages="$errors->get('category_id')" />

    <div class="flex lg:gap-4 gap-0 flex-col lg:flex-row mt-4 lg:items-center lg:text-center lg:align-middle">
      <x-form-input name='quantity' class="lg:w-40 w-64 lg:mb-0 mb-2" title="Quantity"
        value="{{ $action == 'edit' ? $product->quantity : '' }}"
        icon='<svg height="22px" width="22px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"> <g id="SVGRepo_bgCarrier" stroke-width="0"></g> <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g> <g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0 { fill: #000000; } </style> <g> <path class="st0" d="M486.998,140.232c-8.924-12.176-22.722-19.878-37.785-21.078l-311.616-24.68l-5.665-32.094 c-5.179-29.305-28.497-51.998-57.932-56.352l-5.662-0.845L34.65,0.185c-9.385-1.378-18.118,5.09-19.51,14.475 c-1.395,9.393,5.086,18.127,14.471,19.514v-0.008l39.357,5.834l0.009,0.026c14.788,2.164,26.526,13.586,29.131,28.324 l53.338,302.302c5.005,28.375,29.647,49.047,58.461,49.056h219.192c9.49,0,17.176-7.694,17.176-17.172 c0-9.486-7.686-17.18-17.176-17.18H209.906c-12.133,0.009-22.536-8.725-24.642-20.672l-7.461-42.299h244.342 c24.189,0,45.174-16.691,50.606-40.262l22.967-99.523C499.118,167.887,495.93,152.424,486.998,140.232z"> </path> <path class="st0" d="M223.012,438.122c-20.402,0-36.935,16.554-36.935,36.948c0,20.394,16.533,36.931,36.935,36.931 c20.401,0,36.944-16.537,36.944-36.931C259.955,454.676,243.413,438.122,223.012,438.122z"> </path> <path class="st0" d="M387.124,438.122c-20.406,0-36.935,16.554-36.935,36.948c0,20.394,16.529,36.931,36.935,36.931 c20.402,0,36.944-16.537,36.944-36.931C424.068,454.676,407.526,438.122,387.124,438.122z"> </path> </g> </g> </svg>'
        hasWidget=true />
      <x-form-input :value='$product' class="lg:w-40 w-64 lg:mb-0 mb-2" name='buying_price' hasWidget=true title="Buying Price"
        value="{{ $action == 'edit' ? $product->buying_price : '' }}"
        icon='<svg fill="#000000" height="23px" width="23px" version="1.2" baseProfile="tiny" id="MO0ney_sign_by_Adioma" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 256 256" xml:space="preserve"> <g id="SVGRepo_bgCarrier" stroke-width="0"></g> <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g> <g id="SVGRepo_iconCarrier"> <path d="M198.2,169.8c0-39.4-42.1-50.6-60.3-55.8c-34.4-9.6-37.3-22-36.8-28.3c1.2-15.5,18.2-19.3,34-15.9 c12.4,2.7,25.2,10,32.3,15.6L189.9,59c-11.1-7.6-25.3-17.4-46.1-21.4V12h-32.9v24.7C79,39.1,57.8,59.1,57.8,86.6 c0,26.8,19.4,39.4,38.8,48.8c16.2,7.7,61.4,15.8,58.8,36.2c-1.4,11.1-13.2,19.3-32.7,16.8c-17-2.1-35.2-16.4-35.2-16.4l-24.9,24.7 c15,12.1,30.9,19.7,48.2,23.2v24.1h32.9v-22.9C175.1,217.7,198.2,196.3,198.2,169.8z"> </path> </g> </svg>' />
      <x-form-input name='selling_price' class="lg:w-40 w-64 lg:mb-0 mb-2" hasWidget=true title="Selling Price"
        value="{{ $action == 'edit' ? $product->selling_price : '' }}"
        icon='<svg fill="#000000" height="23px" width="23px" version="1.2" baseProfile="tiny" id="MO0ney_sign_by_Adioma" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 256 256" xml:space="preserve"> <g id="SVGRepo_bgCarrier" stroke-width="0"></g> <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g> <g id="SVGRepo_iconCarrier"> <path d="M198.2,169.8c0-39.4-42.1-50.6-60.3-55.8c-34.4-9.6-37.3-22-36.8-28.3c1.2-15.5,18.2-19.3,34-15.9 c12.4,2.7,25.2,10,32.3,15.6L189.9,59c-11.1-7.6-25.3-17.4-46.1-21.4V12h-32.9v24.7C79,39.1,57.8,59.1,57.8,86.6 c0,26.8,19.4,39.4,38.8,48.8c16.2,7.7,61.4,15.8,58.8,36.2c-1.4,11.1-13.2,19.3-32.7,16.8c-17-2.1-35.2-16.4-35.2-16.4l-24.9,24.7 c15,12.1,30.9,19.7,48.2,23.2v24.1h32.9v-22.9C175.1,217.7,198.2,196.3,198.2,169.8z"> </path> </g> </svg>' />
    </div>
    <button type="submit"
      class="mt-8 border py-2 px-4 bg-blue-500 text-white border-blue-800 font-bold rounded-md">Submit</button>
  </form>
</x-container>