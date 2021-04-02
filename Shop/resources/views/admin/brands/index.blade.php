@extends('layouts.admin.app')

@section('content')
    @include('admin.brands.insert')

    <div class="text-right">
        <button class="btn btn-success btn-fab btn-icon btn-round"  data-toggle="modal" data-target="#addBrand">
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
        @foreach( $brands as $brand)
            <tr>
                <td class="text-center">{{$brand->id}}</td>
                <td>{{$brand->name}}</td>
                <td>{{$brand->created_at}}</td>
                <td class="td-actions text-right">

                    <a href="{{route('admin.brandShow', ['id'=>$brand->id])}}" rel="tooltip" class="btn btn-success btn-link btn-icon btn-sm"  >
                        <i class="tim-icons icon-settings"></i>
                    </a>
                    <form method="post" action="{{url('/admin/brand/' . $brand->id)}}">
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
