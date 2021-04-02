@extends('layouts.admin.app')

@section('content')
    @include('admin.brands.update')

    <div class="text-right">
        <button class="btn btn-success btn-fab btn-icon btn-round"  data-toggle="modal" data-target="#updateBrand">
            <i class="tim-icons icon-pencil"></i>
        </button>
    </div>
    <div class="card">
        <div class="card-body">
            {{$brand->name}}
        </div>
    </div>
@endsection
