@props(['type' => 'submit', 'tag' => 'btn-warning'])


<button type="{{$type}}" {{$attributes->merge(['class' => 'btn btn-sm '.$tag])}}>{{$slot}}</button>
