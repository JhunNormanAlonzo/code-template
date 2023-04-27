@props(['type' => 'submit', 'tag' => 'btn-secondary'])


<button type="{{$type}}" {{$attributes->merge(['class' => 'btn btn-sm '.$tag])}}>{{$slot}}</button>
