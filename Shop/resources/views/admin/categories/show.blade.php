@extends('layouts.admin.app')

@section('content')
    @include('admin.categories.update')

    <div class="text-right">
        <button class="btn btn-success btn-fab btn-icon btn-round"  data-toggle="modal" data-target="#updateCategory">
            <i class="tim-icons icon-pencil"></i>
        </button>
    </div>
    <div class="card">
        <div class="card-body">
            {{$category->name}}
        </div>
    </div>
@endsection
