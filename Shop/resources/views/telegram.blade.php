
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
    <!-- ================ end banner area ================= -->

    <!--================Login Box Area =================-->
    <section class="tracking_box_area section-margin--small">
        <div class="container">
            <form action="{{ url('/send-message') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="tracking_box_inner">
                <p>To track your order please enter your Order ID in the box below and press the "Track" button. This
                    was given to you on your receipt and in the confirmation email you should have received.</p>
                    <div class="col-md-12 form-group">
                        <input type="text" placeholder="Name" class="form-control" id="name" name="name"  >
                    </div>
                <div class="col-md-12 form-group">
                    <input type="email" placeholder="email" class="form-control" id="email" name="email"  >
                </div>
                <div class="col-md-12 form-group">
                    <input type="phone" placeholder="phone" class="form-control" id="phone" name="phone"  >
                </div>
                    <div class="col-md-12 form-group">
                        <textarea name="message" id="message" class="form-control" placeholder="Enter your query" rows="10"></textarea>
                    </div>
                <div class="col-md-10 form-group">
                    <div class="custom-file">
                        <input type="file" id="file" name="file" class="custom-file-input">
                        <label class="custom-file-label" for="file">Choose file</label>
                    </div>
                </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" value="submit" class="button button-tracking">Track Order</button>
                    </div>
            </div>
            </form>
        </div>

    </section>
    <!--================End Login Box Area =================-->




@endsection
