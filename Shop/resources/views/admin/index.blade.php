@extends('layouts.admin.app')

@section('content')
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title">Table of users</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <thead class=" text-primary">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th class="text-right">Created</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td class="text-center">{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->password}}</td>
                                        <td class="text-right">{{$user->created_at}}</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" class="btn btn-info btn-link btn-icon btn-sm">
                                                <i class="tim-icons icon-single-02"></i>
                                            </button>

                                            <form method="post" action="{{url('/admin/index/' . $user->id)}}">
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
                                </thead>

                        </div>
                    </div>

                </div>


            </div>

        </div>


@endsection
