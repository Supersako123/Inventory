@props([
  'action' => '',
  'user' => [],
])


<x-app-layout>
  <div class="md:p-10 p-4">
    <x-container :title="ucfirst($action) . ' User'">
      <form method="POST" class="flex flex-col md:items-start items-center" action={{$action == 'add' ? route('users') : route('users', ['id' => $_GET['id']])}}>
        @csrf
        @if($action == 'edit')
      @method('patch')
    @endif
        <div class="flex gap-4 md:flex-row flex-col">
          <x-form-input class="w-64" name='name' title='Name' value="{{ $action == 'edit' ? $user->name : '' }}" />
          <x-form-input name='email' value="{{ $action == 'edit' ? $user->email : '' }}" title='Email' class="w-64" />
        </div>
        <div class="flex gap-3 mt-4">
          <x-form-input name='password' title="{{$action == 'edit' ? 'New Password' : 'Password'}}" class="w-64" />
        </div>
        <div class="flex mt-4">
          <x-form-input name='password_confirmation'
            title="{{$action == 'edit' ? 'Confirm New Password' : 'Confirm Password'}}" class="w-64" />
        </div>
        <div class="w-64 mt-4">
          <select id="default" name="role"
            class=" border border-gray-300 text-gray-900 text-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @isset($user->role_id)
        <option value="">Select User Role</option>
        <option value="2" @selected($user->role_id == 2)>User</option>
        <option value="1" @selected($user->role_id == 1)>Admin</option>
      @else
    <option value="">Select User Role</option>
    <option value="2">User</option>
    <option value="1">Admin</option>
  @endisset
          </select>
          <x-input-error class="mt-2" :messages="$errors->get('role')" />
        </div>
        <button type="submit"
          class="mt-8 border py-2 px-4 bg-blue-500 text-white border-blue-800 font-bold rounded-md">Submit
        </button>
      </form>
  </div>
  </x-container>
  </div>
</x-app-layout>