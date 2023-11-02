@if (isset($color))
    <button type="{{ $type }}"
        class="w-full h-fit text-btn text-light-slate-grey px-3 py-2 hover:text-medium-forest-green text-center">{{ $label }}</button>
@else
    <button type="{{ $type }}"
        class="w-full h-fit text-btn text-light-slate-grey px-3 py-2 hover:text-cool-blue text-center">{{ $label }}</button>
@endif
