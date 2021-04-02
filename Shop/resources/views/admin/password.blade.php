@extends('layouts.admin.app')

@section('content')


    <div class="card">
        <div class="card-body">
            <form class="row login_form" action="{{route('admin.password.update')}}"  method="post" id="contactForm" >
                @csrf

                <div class="col-md-12 form-group">
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{session('success')}}
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-warning" role="alert">
                            {{session('error')}}
                        </div>
                    @endif
                <div class="form-group">
                    <label for="exampleInputEmail1">Old password</label>
                    <input id="oldPassword" type="password"  placeholder="old password" class="form-control @error('oldPassword') is-invalid @enderror" name="oldPassword" required autocomplete="new-password">

                    @error('oldPassword')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> New Password</label>
                    <input id="password" type="password" placeholder="new password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Confirm Password</label>
                            <input id="password-confirm" type="password"  placeholder="confirm password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>


@endsection
