@props([
  'title' => 'default',
  'color' => 'bg-gray-500',
  'number' => '0',
  'icon' => '',
])


<div class="h-[180px] w-[335px] bg-white flex rounded-lg overflow-hidden">
  <div class="w-[40%] {{$color}} h-full flex items-center justify-center">
    {!! $icon !!}
  </div>
  <div class="flex items-center flex-col justify-center flex-grow space-y-2">
    <span class="text-4xl font-semibold">{{$number}}</span>
    <span class="text-gray-500">{{$title}}</span>
  </div>

</div>