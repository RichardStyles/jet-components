@props(['submit'])

<div {{ $attributes->merge(['class' => 'grid sm:space-y-5 bg-white rounded-md p-6 max-w-4xl mx-auto']) }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-jet-section-title>

    <div class="mt-5 md:mt-0 space-y-8 divide-y divide-gray-200">
        <form wire:submit.prevent="{{ $submit }}">
            <div class="py-5">
                <div class="grid grid-cols-6 items-start gap-4">
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div class="flex items-center justify-end px-4 py-3 text-right sm:px-6">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
