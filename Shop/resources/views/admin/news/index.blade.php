@extends('layouts.admin.app')

@section('content')
    @include('admin.news.insert')

    <div class="text-right">
        <button class="btn btn-success btn-fab btn-icon btn-round"  data-toggle="modal" data-target="#addNews">
            <i class="tim-icons icon-simple-add"></i>
        </button>
    </div>



    <table class="table">
        <thead>
        <tr>
            <th class="text-center">#</th>
            <th>title</th>
            <th>Preview</th>
            <th>News</th>

            <th class="text-right">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $news as $new)
            <tr>
                <td class="text-center">{{$new->id}}</td>
                <td>{{$new->title}}</td>
                <td>{{$new->small}}</td>
                <td>{{$new->long}}</td>
                <td class="td-actions text-right">
                    <a href="{{route('admin.newShow', ['id'=>$new->id])}}" rel="tooltip" class="btn btn-success btn-link btn-icon btn-sm"  >
                            <i class="tim-icons icon-settings"></i>
                    </a>
                    <form method="post" action="{{url('/admin/news/' . $new->id)}}">
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
