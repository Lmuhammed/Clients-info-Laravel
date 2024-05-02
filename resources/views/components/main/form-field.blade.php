<div class="mb-3">
    <label for="{{ $name }}" class="form-label h5 mt-1 mb-2">{{ $label }}</label>
    <input class="form-control" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ $slot }}" >
</div>
{{-- placeholder={{$slot}} --}}
{{-- {{$attributes->merge(['class' => 'form-control'])}}  --}}