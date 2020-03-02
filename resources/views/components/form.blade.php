@props(['method'])

<form method="{{ $method == 'get' ? 'get' : 'post' }}" {{ $attributes->merge(['class' => 'form']) }}>
    @if ($method != 'get')
        @csrf
    @endif

    @if (in_array(strtolower($method), ['put', 'patch', 'delete']))
        @method($method)
    @endif

    {{ $slot }}
</form>
