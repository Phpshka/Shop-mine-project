@extends('layouts.app')
@section('dashboard')

    <section class="blog-banner-area" id="blog">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>Blog Details</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

<section class="blog_area single-post-area py-80px section-margin--small">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">
                        <div class="feature-img">
                            <img class="img-fluid" src="img/blog/feature-img1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-3">
                        <div class="blog_info text-right">
                            <div class="post_tag">

                            </div>
                            <ul class="blog_meta list">
                                <li>
                                    <a href="#">
                                        <i class="lnr lnr-user"></i>
                                        By admin
                                    </a>
                                </li>
                                <li>
                                    <a href="#">  <i class="lnr lnr-calendar-full"></i>
                                        {{$new->created_at}}

                                    </a>
                                </li>
                            </ul>
                            <ul class="social-links">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-behance"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 blog_details">
                        <h2>{{$new->title}}</h2>
                        <p class="excert">
                            {{$new->small}}
                        </p>
                        <p>
                            {{$new->long}}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection