@extends('layouts.admin.app')

@section('content')
    @include('admin.items.insert')

    <div class="text-right">
        <button class="btn btn-success btn-fab btn-icon btn-round"  data-toggle="modal" data-target="#addItem">
            <i class="tim-icons icon-simple-add"></i>
        </button>
    </div>



    <table class="table">
        <thead>
        <tr>
            <th class="text-center">#</th>
            <th>name</th>
            <th>description</th>
            <th>price</th>
            <th>count</th>
            <th>gender</th>
            <th>brand</th>
            <th>category</th>
            <th>orders</th>
            <th>sizes</th>
            <th>image</th>
            <th class="text-right">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $items as $item)
            <tr>
                <td class="text-center">{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->count}}</td>
                <td>{{($item->gender == 1) ? 'male' : 'female'}}</td>
                <td>{{$item->brand->name}}</td>
                <td>{{$item->category->name}}</td>
                <td>{{count($item->orders)}}</td>
                <td>
                    @foreach($item->sizes as $size)
                        <p>{{$size->size_id}}</p>
                    @endforeach
                </td>
                <td><img src="{{$item->images->first()->url}}"></td>
                <td class="td-actions text-right">
                    <a href="{{route('admin.itemShow', ['id'=>$item->id])}}" rel="tooltip" class="btn btn-success btn-link btn-icon btn-sm"  >
                        <i class="tim-icons icon-settings"></i>
                    </a>
                    <form method="post" action="{{url('/admin/item/' . $item->id)}}">
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
    {{$items->links()}}
@endsection
