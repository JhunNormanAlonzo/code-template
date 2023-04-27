

@props(['type' => 'text', 'placeholder' => 'Placeholder'])

@php
    $name = $attributes->get('name');
    $class = $errors->has($name) ? "form-control is-invalid" : "form-control"
@endphp

<div class="form-floating my-2">
    <input type="{{$type}}" {{$attributes->merge(['class' => $class])}} id="float" value="{{old('name') ? old('name') : ''}}" placeholder="{{$placeholder}}" name="{{$name}}">
    <label for="float " class="text-muted">{{$placeholder}}</label>
</div>
