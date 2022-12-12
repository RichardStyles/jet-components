<div {{ $attributes->class(['flex items-center space-x-4 -m-1 p-2 rounded-md', 'bg-red-200' => $hasWarning]) }}>
    @if (isset($label))
        {{ $label }}
    @endif

    {{ $element }}
    {{ $error }}
</div>
