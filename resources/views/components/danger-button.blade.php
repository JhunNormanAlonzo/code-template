@props(['type' => 'submit', 'tag' => 'btn-danger'])


<button type="{{$type}}" {{$attributes->merge(['class' => 'btn btn-sm '.$tag])}}>{{$slot}}</button>
