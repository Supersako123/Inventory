@props([
  'products' => [],
])

<?php $i = 1 ?>

<x-container title="PRODUCT VIEW" add=true buttonRoute='products.add' buttonTitle='ADD PRODUCT'>
  <div class="relative overflow-x-auto ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead
        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border border-gray-300">
        <tr class="">
          <th scope="col" class="px-6 py-3 border border-gray-300">#</th>
          <th scope="col" class="px-6 py-3 border border-gray-300">Product Name</th>
          <th scope="col" class="px-6 py-3 border border-gray-300">Categories</th>
          <th scope="col" class="px-6 py-3 border border-gray-300">In-Stock</th>
          <th scope="col" class="px-6 py-3 border border-gray-300">Buying Price</th>
          <th scope="col" class="px-6 py-3 border border-gray-300">Selling Price</th>
          <th scope="col" class="px-6 py-3 border border-gray-300">Product Added</th>
          <th scope="col" class="px-6 py-3 border border-gray-300">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
      <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800">
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white border border-gray-300">
        {{ $i++ }}
        </th>
        <td class="px-6 py-4 border border-gray-300">
        {{ $product->name }}
        </td>
        <td class="px-6 py-4 border border-gray-300">
        {{ $product->category->name }}
        </td>
        <td class="px-6 py-4 border border-gray-300">
        {{ $product->quantity }}
        </td>
        <td class="px-6 py-4 border border-gray-300">
        {{ $product->buying_price }}
        </td>
        <td class="px-6 py-4 border border-gray-300">
        {{ $product->selling_price }}
        </td>
        <td class="px-6 py-4 border border-gray-300">
        {{ $product->created_at }}
        </td>
        <td class="px-6 py-4 border border-gray-300">
        <x-actions :id="$product->id" baseRoute="products" />
        </td>
      </tr>
    @endforeach
      </tbody>
    </table>
  </div>
  </div>
</x-container>