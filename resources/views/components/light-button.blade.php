@props(['type' => 'submit', 'tag' => 'btn-light'])


<button type="{{$type}}" {{$attributes->merge(['class' => 'btn btn-sm '.$tag])}}>{{$slot}}</button>
