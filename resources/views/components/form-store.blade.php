@props(['action', 'method' => 'POST'])


<form action="{{$action}}" method="{{$method}}">
    @csrf
    {{$slot}}
</form>
