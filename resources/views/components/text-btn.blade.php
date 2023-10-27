@if (isset($color))
    <a href="{{ $route }}"
        class="text-light-slate-grey px-3 py-2 hover:text-medium-forest-green text-center">{{ $label }}</a>
@else
    <a href="{{ $route }}"
        class="text-light-slate-grey px-3 py-2 hover:text-cool-blue text-center">{{ $label }}</a>
@endif
