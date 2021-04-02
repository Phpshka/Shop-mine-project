@extends('layouts.admin.app')

@section('content')
    @include('admin.news.update')

    <div class="text-right">
        <button class="btn btn-success btn-fab btn-icon btn-round"  data-toggle="modal" data-target="#updateNews">
            <i class="tim-icons icon-pencil"></i>
        </button>
    </div>
    <div class="card">
        <div class="card-body">
            {{$new->title}}
        </div>
    </div>
@endsection
