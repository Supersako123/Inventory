<x-app-layout>

  <div class="md:p-10 p-4">
    <x-container add=true title='CATEGORIES' buttonTitle='ADD CATEGORY' buttonRoute='categories.add'>

      <x-data-table 
      actions=true 
      :headers="['#', 'Name', 'Created at']"
      :data="['id', 'name', 'created_at',]"
      :array='$categories'
      baseRoute='categories'
      />

    </x-container>

  </div>
</x-app-layout>