@extends('layouts.app')
@section('main')
    <div class="border rounded my-5 mx-auto d-flex flex-column align-items-stretch bg-white" style="width: 580px;">
        <div class="d-flex justify-content-between flex-shrink-0 p-3 link-dark  border-bottom">
            <span class="fs-5 fw-semibold">Total List : {{ $data->total() }}</span>
        </div>
        @foreach ($data as $item)
            <div class="list-group list-group-flush border-bottom scrollarea">
                <div class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">{{ $item->task }}</strong>
                        <small>Wed</small>
                    </div>
                    <div class="col-10 mb-1 small">{{ $item->user }}</div>
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center mt-2">
            {{ $data->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
