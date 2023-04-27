@props(['action', 'method' => 'POST'])


<form action="{{$action}}" method="{{$method}}">
    @csrf
    @method('DELETE')
    {{$slot}}
</form>
