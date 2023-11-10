<input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}"
    {{ $required ? 'required' : '' }} value="{{ isset($value) ? $value : '' }}"
    class="outline-0 rounded-md mt-2 px-3 py-2 w-full bg-transparent ring-1 ring-light-slate-grey focus:ring-2 focus:ring-cyan-blue">
