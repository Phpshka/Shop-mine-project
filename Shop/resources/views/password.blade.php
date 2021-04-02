@extends('layouts.app')

@section('dashboard')
    <section class="blog-banner-area" id="category">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>Login / Register</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login/Register</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <div class="hover">
                            <h4>New to our website?</h4>
                            <p>There are advances being made in science and technology everyday, and a good example of this is the</p>
                            <a class="button button-account" href="register.html">Create an Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Log in to enter</h3>
                            <form class="row login_form" action="{{route('password.update')}}"  method="post" id="contactForm" >
                            @csrf
                                <div class="col-md-12 form-group">
                            @if(session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{session('success')}}
                                </div>
                            @endif
                            @if(session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{session('error')}}
                                </div>
                            @endif


                                <div class="col-md-12 form-group">

                                    <input id="oldPassword" type="password"  placeholder="old password" class="form-control @error('oldPassword') is-invalid @enderror" name="oldPassword" required autocomplete="new-password">

                                    @error('oldPassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>



                                <div class="col-md-12 form-group">
                                    <input id="password" type="password" placeholder="new password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>



                                <div class="col-md-12 form-group">
                                    <input id="password-confirm" type="password"  placeholder="confirm password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="button button-login w-100">Log In</button>

                            </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
