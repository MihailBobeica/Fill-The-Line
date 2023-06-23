<div>
    <label>
        <input {{ $attributes->merge() }}>
    </label>
</div>
@error($attributes['name'])
<div>
    {{-- show only the first validation error message --}}
    {{ $errors->first($attributes['name']) }}

    {{-- show all the validation error messages --}}
    {{--@foreach($errors->get($attributes['name']) as $errorMessage)
        {{ $errorMessage }}
    @endforeach--}}
</div>
@enderror
