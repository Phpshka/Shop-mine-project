@extends('layouts.app')
@section('dashboard')


    <section class="blog-banner-area" id="blog">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>Shop Single</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop Single</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>


<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="owl-carousel owl-theme s_Product_carousel owl-loaded owl-drag">

                    <!-- <div class="single-prd-item">
                        <img class="img-fluid" src="img/category/s-p1.jpg" alt="">
                    </div>
                    <div class="single-prd-item">
                        <img class="img-fluid" src="img/category/s-p1.jpg" alt="">
                    </div> -->
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-690px, 0px, 0px); transition: all 0s ease 0s; width: 1725px;">
                            <div class="owl-item cloned" style="width: 345px;">
                                <div class="single-prd-item">
                                    <img class="img-fluid" src="{{$item->images->first()['url']}}" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3> {{$item->name}}</h3>
                    <h2> {{$item->price}} KZT</h2>
                    <ul class="list">
                        <li><a class="active" href="#"><span>Category</span>{{$item->category->name}}</a></li>
                        <li><a href="#"><span>Brand</span>{{$item->brand->name}}</a></li>
                        <li><a href="#"><span>Gender</span>{{($item->gender == 1) ? 'male' : 'female'}}</a></li>
                        <li><a href="#"><span>Count</span>{{($item->count)}}</a></li>
                        <li><a href="#"><span>Sizes</span>
                                @foreach($item->sizes as $size)
                                    {{$size->size_id . " "}}
                                @endforeach
                            </a></li>
                    </ul>
                    <p>{{$item->description}}</p>
                    <div class="product_count">
                        <label for="qty">Quantity:</label>
                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="ti-angle-left"></i></button>
                        <input type="text" name="qty" id="sst" size="2" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="ti-angle-right"></i></button>
                        <a class="button primary-btn" href="#">Add to Cart</a>
                    </div>
                    <div class="card_area d-flex align-items-center">
                        <a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
                        <a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection