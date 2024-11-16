@props([
  'type' => 'input',
  'icon' => '',
  'name' => '',
  'title' => '',
  'hasWidget' => false,
  'value' => '',
])



@if($type == 'input')
  <div {{ $attributes->merge(['class' => 'relative']) }}>
    @if ($icon)
    <div class="absolute inset-y-0 start-0 flex items-center ps-2 pointer-events-none">
    {!!$icon!!}
    </div>
  @endif
    <input required type={{$hasWidget ? 'number' : 'search'}} step="0.01" id={{$name}} name={{$name}}
    class="block w-full p-2 {{$icon ? 'ps-10' : ''}} text-md text-gray-900 border border-gray-300  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
    placeholder="{{$title}}"
    value="{{$value}}"
    />
    
  </div>
  <x-input-error class="mt-2 flex justify-center " :messages="$errors->get($name)" />
@endif

@if($type == 'dropdown')

@endif