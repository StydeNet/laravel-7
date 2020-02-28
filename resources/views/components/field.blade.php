<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input name="{{ $name }}" type="{{ $type }}" class="form-control" id="{{ $name }}" aria-describedby="{{ $name }}_help">
    @if ($help)
        <small id="{{ $name }}_help" class="form-text text-muted">{{ $help }}</small>
    @endif
</div>
