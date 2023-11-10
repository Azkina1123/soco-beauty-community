@if ($type == 'success')
    <div class="my-5 bg-success border-t border-b border-success text-success px-4 py-3" role="alert">
    @elseif ($type == 'error')
        <div class="my-5 bg-error border-t border-b border-error text-error px-4 py-3" role="alert">
@endif

<p class="font-bold">{{ $title }}</p>
<p class="text-sm">{{ $content }}</p>
</div>
