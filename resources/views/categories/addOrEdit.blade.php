@props([
  'action' => '',
  'category' => [],
])


<x-app-layout>
  <div class="md:p-10 p-4">
    <x-container :title="ucfirst($action) . ' Category'">
      <form method="POST" action={{$action == 'add' ? route('categories') : route('categories', ['id' => $_GET['id']])}}>
        @csrf
        @if($action == 'edit')
      @method('patch')
    @endif
        <div class="flex max-w-80 flex-grow">
          <x-form-input name='name' title='Name' value="{{ $action == 'edit' ? $category->name : '' }}" class="w-full" />
        </div>
        <div class="max-w-80 mt-4">
          <x-input-error class="mt-2" :messages="$errors->get('role')" />
        </div>
        <button type="submit"
          class="mt-2 border py-2 px-4 bg-blue-500 text-white border-blue-800 font-bold rounded-md">Submit</button>
      </form>
  </div>
  </x-container>
  </div>
</x-app-layout>