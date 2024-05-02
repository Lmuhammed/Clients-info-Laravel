<div class="input-group mb-3">
    <label for="{{ $name }}" class="input-group-text">{{ $label }}</label>
    <input class="form-control" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ $slot }}" >
</div>
{{-- placeholder={{$slot}} --}}
{{-- {{$attributes->merge(['class' => 'form-control'])}}  --}}