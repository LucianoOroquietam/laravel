<div {{ $attributes->merge(['class' => ' border-t border-b px-4 py-3 m-4 mt-6 ' . $class ]) }} role="alert">
    @if($title)
        <p class="font-bold">{{ $title }}</p>
    @endif

    <p class="text-sm">{{ $slot->isEmpty() ? 'Este es un mensaje por defecto.' : $slot }}</p>
</div>
