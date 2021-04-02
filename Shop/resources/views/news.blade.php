@extends('layouts.app')
@section('dashboard')


    <section class="blog-banner-area" id="blog">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>Our Blog</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

<section class="blog_area">
      <div class="container">
          <div class="row">
              @foreach($news as $new)
              <div class="col-lg-8">
                  <div class="blog_left_sidebar">
                      <article class="row blog_item">
                          <div class="col-md-3">
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
                                          <a href="#">
                                              <i class="lnr lnr-calendar-full"></i>
                                              {{$new->created_at}}

                                          </a>
                                      </li>

                                  </ul>
                              </div>
                          </div>
                          <div class="col-md-9">
                              <div class="blog_post">
                                  <img src="{{route('newsDetails', ['id'=>$new->id])}}" alt="">
                                  <div class="blog_details">
                                      <a href="">
                                          <h2>{{$new->title}}</h2>
                                      </a>
                                      <p>{{$new->small}}</p>
                                      <a class="button button-blog" href="{{route('newsDetails', ['id'=>$new->id])}}">View More</a>
                                  </div>
                              </div>
                          </div>
                      </article>
                  </div>
              </div>

              @endforeach
          </div>

          <nav class="blog-pagination justify-content-center d-flex">
              <ul class="pagination">
                  <li class="page-item">
                      <a href="#" class="page-link" aria-label="Previous">
                                      <span aria-hidden="true">
                                          <span class="lnr lnr-chevron-left"></span>
                                      </span>
                      </a>
                  </li>
                  <li class="page-item">

                      <a href="#" class="page-link">01</a>
                  </li>
                  <li class="page-item active">
                      <a href="#" class="page-link">02</a>
                  </li>
                  <li class="page-item">
                      <a href="#" class="page-link">03</a>
                  </li>
                  <li class="page-item">
                      <a href="#" class="page-link">04</a>
                  </li>
                  <li class="page-item">
                      <a href="#" class="page-link">09</a>
                  </li>
                  <li class="page-item">
                      <a href="#" class="page-link" aria-label="Next">
                                      <span aria-hidden="true">
                                          <span class="lnr lnr-chevron-right"></span>
                                      </span>
                      </a>
                  </li>
              </ul>
          </nav>
      </div>

</section>



    @endsection