<x-app-layout>

  <x-container class="m-4 lg:m-10 overflow-x-auto" title="USERS VIEW" add=true buttonTitle="ADD USER" buttonRoute="users.add">
    <x-data-table title="USER MANAGEMENT" :headers="['#', 'Name', 'Email', 'User Role']" :add="true"
      buttonTitle="ADD USER" buttonRoute="users.add" :data="['id', 'name', 'email', 'role_name']" :array='$users'
      actions=true baseRoute='users' />
  </x-container>
</x-app-layout>