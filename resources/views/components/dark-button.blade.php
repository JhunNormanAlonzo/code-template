@props(['type' => 'submit', 'tag' => 'btn-dark'])


<button type="{{$type}}" {{$attributes->merge(['class' => 'btn btn-sm '.$tag])}}>{{$slot}}</button>
