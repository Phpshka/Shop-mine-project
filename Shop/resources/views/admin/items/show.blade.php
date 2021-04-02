@extends('layouts.admin.app')

@section('content')
    @include('admin.items.update')

    <div class="text-right">
        <button class="btn btn-success btn-fab btn-icon btn-round"  data-toggle="modal" data-target="#updateItem">
            <i class="tim-icons icon-pencil"></i>
        </button>
    </div>
    <div class="card">
        <div class="card-body">
            {{$item->name}}
        </div>
    </div>
@endsection
