@props([
  'array' => [],
  'title' => 'Default Title',
  'headers' => ['h1', 'h2', 'h3'],
  'data' => ['name', 'sales_count', 'quantity'],
  'add' => false,
  'buttonRoute' => '',
  'buttonTitle' => '',
  'actions' => false,
  'baseRoute' => '',
])
<?php $i = 1 ?>

@use('Carbon\Carbon')
<div class="relative overflow-x-auto">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead
      class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border border-gray-300">
      <tr>
        @foreach ($headers as $header)
      <th scope="col" class="px-4 break-words py-3 border border-gray-300">{{ $header }}</th>
    @endforeach
        @if ($actions)
      <th scope="col" class="px-6 py-3 border border-gray-300">Actions</th>
    @endif
      </tr>
    </thead>
    <tbody>
      @foreach($array as $item)
      <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800">
      @foreach ($data as $x)
      <th scope="row"
      class="px-3 py-4 font-normal text-gray-900 dark:text-white border border-gray-300 max-w-[135px] break-words">
      @if ($x == 'created_at')
      {{ Carbon::parse($item[$x])->format('Y-m-d') }}
    @elseif($x == 'id')
      {{$i++}}
    @else
      {{ $item[$x] }}
    @endif
      </th>
    @endforeach
      @if ($actions)
      <th class=" py-4 font-normal text-gray-900 dark:text-white border border-gray-300 w-52">
      <x-actions :baseRoute='$baseRoute' name='Users' :id="$item['id']" />
      </th>
    @endif
      </tr>
    @endforeach
    </tbody>
  </table>
</div>