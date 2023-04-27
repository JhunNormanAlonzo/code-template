@extends('layouts.app')

@section('content')

    <x-form-store action="">
        <x-light-button>Save</x-light-button>
        <x-primary-button>Save</x-primary-button>
        <x-secondary-button>Save</x-secondary-button>
        <x-warning-button>Save</x-warning-button>
        <x-dark-button>Save</x-dark-button>
        <x-danger-button>Save</x-danger-button>
    </x-form-store>



@endsection

@section('script')
    <script type="module">
        $(document).ready(function (){

        });
    </script>
@endsection
