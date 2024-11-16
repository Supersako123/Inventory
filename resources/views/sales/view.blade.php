<x-app-layout>
  <x-container class="m-10" title='Sales'>
    <x-data-table
    :headers="['#','Product name', 'Quantity', 'Total', 'Date']"
    :array='$sales'
    :data="['id','name','quantity','total','created_at']"
    />
  </x-container>
</x-app-layout> 