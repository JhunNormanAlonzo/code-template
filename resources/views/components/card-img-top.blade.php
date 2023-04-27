@props(['url'])

<img src="{{$url}}" {{$attributes->merge(['class' => 'card-img-top'])}} alt="">
