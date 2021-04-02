@extends('layouts.app')
@section('dashboard')
    <section class="blog-banner-area" id="category">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>Shop Category</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop Category</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="section-margin--small mb-5">
        <div class="container">
            <form method="POST" action="{{url('/item/search')}}">

            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="sidebar-filter">
                        <div class="top-filter-head">Product Filters</div>
                        <div class="common-filter">
                            <div class="head">Brands</div>
                                <ul>
                                    @foreach($brands as $brand)
                                    <li class="filter-list">
                                        <input class="pixel-radio" value="{{$brand->id}}" type="radio" id="apple" name="brand">
                                        <label for="apple">{{$brand->name}}</label>
                                    </li>
                                    @endforeach
                                </ul>
                        </div>
                        <div class="common-filter">
                            <div class="head">Gender</div>
                                <ul>
                                    <li class="filter-list">
                                        <input class="pixel-radio" type="radio" id="black" name="gender" value="1"><label for="black">Men<span>(29)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" value="2" id="black" name="gender"><label for="black">Women<span>(29)</span></label></li>

                                </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <!-- Start Filter Bar -->
                    <div class="filter-bar d-flex flex-wrap align-items-center">
                        <div class="sorting">
                            <input placeholder="start" name="start">

                        </div>
                        <div class="sorting mr-auto">
                            <input placeholder="end" name="end">
                        </div>
                        <div>
                            <div class="input-group filter-bar-search">
                                    @csrf
                                    <input type="text" name="key" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Filter Bar -->
                    <!-- Start Best Seller -->
                    <section class="lattest-product-area pb-40 category-list">
                        <div class="row ">
                            @if(count($items)==0)
                                <p > No result match</p>
                            @else
                            @foreach($items as $item)
                            <div class="col-md-6 col-lg-4">
                                <div class="card text-center card-product">
                                    <div class="card-product__img">
                                        <img class="card-img" src="{{$item->images->first()->url}}" alt="">
                                        <ul class="card-product__imgOverlay">
                                            <li><button><i class="ti-search"></i></button></li>
                                            <li><button><i class="ti-shopping-cart"></i></button></li>
                                            <li><button><i class="ti-heart"></i></button></li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <p>{{$item->brand->name}}</p>
                                        <h4 class="card-product__title"><a href="{{route('itemDetails', ['id'=>$item->id])}}">{{$item->name}}</a></h4>
                                        <p class="card-product__price">{{$item->price}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                                @endif

                        </div>
                    </section>
                    <!-- End Best Seller -->
                </div>
            </div>
            </form>

        </div>
    </section>

@endsection
