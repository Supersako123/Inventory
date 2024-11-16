<x-app-layout>
  <div class="md:p-10 p-4">
    <x-product-form
    :action="$action"
    :product="$product ?? []" 
    :categories="$categories"
    />
  </div>
</x-app-layout>