@extends('layouts.app')

@section('content')



<x-success-alert>
   <x-alert-heading>Success</x-alert-heading>
    <x-alert-text>User Created Successfully!</x-alert-text>
</x-success-alert>

@endsection

@section('script')
    <script type="module">
        $(document).ready(function (){

        });
    </script>
@endsection
