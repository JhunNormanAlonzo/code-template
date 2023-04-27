@extends('layouts.app')



@section('content')
    <h5>Test</h5>

<div class="modal fade" id="createModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create</h5>
            </div>
            <div class="modal-body">
                Hello there
            </div>
        </div>
    </div>
</div>

<x-add-button-modal></x-add-button-modal>
@endsection


@section('script')

@endsection
