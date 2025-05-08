@props(['type' , 'title' => 'titulo por default'])
@php
switch ($type) {
    case 'info':
        $class = 'bg-blue-100 border-t border-b border-blue-500 text-blue-700';
        break;

    case 'titled':
        $class = 'bg-red-100 border border-red-400 text-red-700';
        break;

    case 'success':
        $class = 'bg-green-100 border-l-4 border-green-500 text-green-700';
        break;

    case 'warning':
        $class = 'bg-orange-100 border-l-4 border-orange-500 text-orange-700';
        break;

    case 'dark':
        $class = 'bg-indigo-900 text-indigo-100 border border-indigo-700';
        break;

    default:
        $class = 'bg-gray-100 border border-gray-400 text-gray-700';
        break;
}
@endphp

<div {{ $attributes->merge(['class' => ' border-t border-b px-4 py-3 m-4 mt-6 ' . $class ]) }} role="alert">
    @if($title)
        <p class="font-bold">{{ $title }}</p>
    @endif

    <p class="text-sm">{{ $slot->isEmpty() ? 'Este es un mensaje por defecto.' : $slot }}</p>
</div>

