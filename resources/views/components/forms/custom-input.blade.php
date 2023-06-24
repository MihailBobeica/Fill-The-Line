@php
$name = $attributes['name'];
@endphp

<div>
    <label>
        <input {{ $attributes->merge() }}>
    </label>
</div>
<div class="{{ 'error-'.$name }}">
    @error($name)
    {{-- show only the first validation error message --}}
    {{ $errors->first($name) }}

    {{-- show all the validation error messages --}}
    {{--@foreach($errors->get($attributes['name']) as $errorMessage)
        {{ $errorMessage }}
    @endforeach--}}
    @enderror
</div>
