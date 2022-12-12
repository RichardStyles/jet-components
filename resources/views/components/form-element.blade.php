<div {{ $attributes->merge(['class' => 'flex items-center space-x-4']) }}>
    @if (isset($label))
        {{ $label }}
    @endif

    {{ $element }}
    {{ $error }}
</div>
