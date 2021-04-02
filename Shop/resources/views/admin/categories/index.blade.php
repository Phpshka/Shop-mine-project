@extends('layouts.admin.app')

@section('content')
    @include('admin.categories.insert')
    <div class="text-right">
        <button class="btn btn-success btn-fab btn-icon btn-round"  data-toggle="modal" data-target="#addCategory">
            <i class="tim-icons icon-simple-add"></i>
        </button>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th class="text-center">#</th>
            <th>name</th>
            <th>created_at</th>
            <th class="text-right">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $categories as $category)
        <tr>
            <td class="text-center">{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->created_at}}</td>
            <td class="td-actions text-right">
                <a href="{{route('admin.categoryShow', ['id'=>$category->id])}}" rel="tooltip" class="btn btn-success btn-link btn-icon btn-sm"  >
                    <i class="tim-icons icon-settings"></i>
                </a>
                <form method="post" action="{{url('/admin/category/' . $category->id)}}">
                    @csrf
                    {{method_field('delete')}}
                    <button type="submit" rel="tooltip" class="btn btn-danger btn-link btn-icon btn-sm">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                </form>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
@endsection
