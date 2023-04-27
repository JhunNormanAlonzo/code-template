
@props(['target' => 'createModal'])

<button type="button" data-bs-toggle="modal" title="Add Record" data-bs-target="#{{$target}}" {{$attributes->merge(['class' => 'btn btn-success shadow-lg position-fixed rounded-circle'])}} style="bottom: 20px; right: 20px;">
    <i class="fas fa-plus fs-1 p-1"></i>
</button>
