@extends('frontend.master')
@section('content')
<!-- Slider Area Start -->
<div class="slider-area slider-style-three">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="slider-wrapper theme-default">
                    <!-- Slider Background  Image Start-->
                    <div id="slider" class="nivoSlider">

                        @foreach ($banners as $banner)
                            <a href="{{$banner->btn_link}}"> <img src="{{url($banner->banner_image)}}" data-thumb="{{url($banner->banner_image)}}" alt="" title="#slider-1-caption{{$banner->id}}"/></a>
                        @endforeach

                    </div>
                    <!-- Slider Background  Image Start-->

                    @foreach ($banners as $banner)
                    <div id="slider-1-caption{{$banner->id}}" class="nivo-html-caption nivo-caption">
                        <div class="text-content-wrapper">
                            <div class="text-content">
                                <h4 class="title2 wow bounceInLeft text-white mb-16" data-wow-duration="2s" data-wow-delay="0s">
                                    @if($banner->banner_heading != null)
                                        {{$banner->banner_heading}}
                                    @endif
                                </h4>
                                <h1 class="title1 wow bounceInRight text-white mb-16" data-wow-duration="2s" data-wow-delay="1s">@if($banner->banner_title != null){{$banner->banner_title}}@endif <br>@if($banner->banner_text != null){{$banner->banner_text}}@endif</h1>
                                <div class="banner-readmore wow bounceInUp mt-35" data-wow-duration="2s" data-wow-delay="2s">
                                    <a class="button slider-btn" href="@if($banner->btn_link != null){{$banner->btn_link}}@endif">@if($banner->btn_name != null){{$banner->btn_name}}@endif</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="col-md-4">
                 <!-- Single Banner Start -->
                <div class="single-banner zoom mb-20">
                    <?php $poster1 = App\Poster::orderBy('id','desc')->first(); ?>
                    @if($poster1 != null)
                    <a href="{{$poster1->link}}"><img src="{{url($poster1->image)}}" alt="slider-banner"></a>
                    @endif
                </div>
                <!-- Single Banner End -->

                <!-- Single Banner Start -->
                <div class="single-banner zoom">
                    <?php $poster2 = App\Poster::orderBy('id','desc')->skip(1)->first(); ?>
                    @if($poster2 != null)
                    <a href="{{$poster2->link}}"><img src="{{url($poster2->image)}}" alt="slider-banner"></a>
                    @endif
                </div>
                <!-- Single Banner End -->
            </div>
        </div>
    </div>
</div>
<!-- Slider Area End -->


<!-- Product Area Start -->
<div class="product-area pt-30">
    <div class="container">
        <div class="row">
            <!-- Single Product Start -->
            <div class="col-lg-3 col-sm-6">
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="product.html">
                            <img class="primary-img" src="{{url('/')}}/frontend_assets/img/products/1.jpg" alt="single-product">
                            <img class="secondary-img" src="{{url('/')}}/frontend_assets/img/products/2.jpg" alt="single-product">
                        </a>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4><a href="product.html">Products Name Here</a></h4>
                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                        <div class="pro-actions">
                            <div class="actions-secondary">
                                <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
            </div>
            <!-- Single Product End -->
            <!-- Single Product Start -->
            <div class="col-lg-3 col-sm-6">
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="product.html">
                            <img class="primary-img" src="{{url('/')}}/frontend_assets/img/products/3.jpg" alt="single-product">
                            <img class="secondary-img" src="{{url('/')}}/frontend_assets/img/products/4.jpg" alt="single-product">
                        </a>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4><a href="product.html">Products Name Here</a></h4>
                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                        <div class="pro-actions">
                            <div class="actions-secondary">
                                <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                    <span class="sticker-new">-30%</span>
                </div>
            </div>
            <!-- Single Product End -->
            <!-- Single Product Start -->
            <div class="col-lg-3 col-sm-6">
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="product.html">
                            <img class="primary-img" src="{{url('/')}}/frontend_assets/img/products/5.jpg" alt="single-product">
                            <img class="secondary-img" src="{{url('/')}}/frontend_assets/img/products/6.jpg" alt="single-product">
                        </a>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4><a href="product.html">Products Name Here</a></h4>
                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                        <div class="pro-actions">
                            <div class="actions-secondary">
                                <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                </div>
            </div>
            <!-- Single Product End -->
            <!-- Single Product Start -->
            <div class="col-lg-3 col-sm-6">
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="product.html">
                            <img class="primary-img" src="{{url('/')}}/frontend_assets/img/products/7.jpg" alt="single-product">
                            <img class="secondary-img" src="{{url('/')}}/frontend_assets/img/products/8.jpg" alt="single-product">
                        </a>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4><a href="product.html">Products Name Here</a></h4>
                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                        <div class="pro-actions">
                            <div class="actions-secondary">
                                <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                    <span class="sticker-new">-32%</span>
                </div>
            </div>
            <!-- Single Product End -->
        </div>
    </div>
</div>
<!-- Product Area End -->


<!-- Banner Start -->
<div class="upper-banner banner pb-60">
    <div class="container">
       <div class="row">
           <!-- Single Banner Start -->
           <div class="col-sm-4">
                <div class="single-banner zoom">
                    <?php $poster3 = App\Poster::orderBy('id','desc')->skip(2)->first(); ?>
                    @if($poster3 != null)
                    <a href="{{$poster3->link}}"><img src="{{url($poster3->image)}}" class="img-fluid" alt="slider-banner"></a>
                    @endif
                </div>
            </div>
           <!-- Single Banner End -->
            <!-- Single Banner Start -->
           <div class="col-sm-4">
                <div class="single-banner zoom">
                    <?php $poster4 = App\Poster::orderBy('id','desc')->skip(3)->first(); ?>
                    @if($poster4 != null)
                    <a href="{{$poster4->link}}"><img src="{{url($poster4->image)}}" alt="slider-banner"></a>
                    @endif
                </div>
            </div>
           <!-- Single Banner End -->
           <!-- Single Banner Start -->
           <div class="col-sm-4">
            <div class="single-banner zoom">
                <?php $poster5 = App\Poster::orderBy('id','desc')->skip(4)->first(); ?>
                @if($poster5 != null)
                <a href="{{$poster5->link}}"><img src="{{url($poster5->image)}}" alt="slider-banner"></a>
                @endif
            </div>
            </div>
        <!-- Single Banner End -->
       </div>
       <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Banner End -->


<!-- New Products Start -->
<div class="new-products pb-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 order-2">
                <div class="side-product-list">
                    <div class="group-title">
                        <h2>Top Products</h2>
                    </div>
                    <!-- Deal Pro Activation Start -->
                    <div class="slider-right-content side-product-list-active owl-carousel">
                        <!-- Double Product Start -->
                        <div class="double-pro">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="pro-img">
                                    <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/1.jpg" alt="product-image"></a>
                                </div>
                                <div class="pro-content">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="product.html">Products Name Here</a></h4>
                                    <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                </div>
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="pro-img">
                                    <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/2.jpg" alt="product-image"></a>
                                </div>
                                <div class="pro-content">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="product.html">Products Name Here</a></h4>
                                    <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                </div>
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="pro-img">
                                    <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/3.jpg" alt="product-image"></a>
                                </div>
                                <div class="pro-content">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="product.html">Products Name Here</a></h4>
                                    <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                </div>
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="pro-img">
                                    <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/4.jpg" alt="product-image"></a>
                                </div>
                                <div class="pro-content">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="product.html">Products Name Here</a></h4>
                                    <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                </div>
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="pro-img">
                                    <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/5.jpg" alt="product-image"></a>
                                </div>
                                <div class="pro-content">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="product.html">Products Name Here</a></h4>
                                    <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                </div>
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Double Product End -->
                        <!-- Double Product Start -->
                        <div class="double-pro">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="pro-img">
                                    <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/6.jpg" alt="product-image"></a>
                                </div>
                                <div class="pro-content">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="product.html">Products Name Here</a></h4>
                                    <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                </div>
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="pro-img">
                                    <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/7.jpg" alt="product-image"></a>
                                </div>
                                <div class="pro-content">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="product.html">Products Name Here</a></h4>
                                    <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                </div>
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="pro-img">
                                    <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/8.jpg" alt="product-image"></a>
                                </div>
                                <div class="pro-content">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="product.html">Products Name Here</a></h4>
                                    <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                </div>
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="pro-img">
                                    <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/5.jpg" alt="product-image"></a>
                                </div>
                                <div class="pro-content">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="product.html">Products Name Here</a></h4>
                                    <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                </div>
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="pro-img">
                                    <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/4.jpg" alt="product-image"></a>
                                </div>
                                <div class="pro-content">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="product.html">Products Name Here</a></h4>
                                    <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                </div>
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Double Product End -->
                        <!-- Double Product Start -->
                        <div class="double-pro">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="pro-img">
                                    <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/1.jpg" alt="product-image"></a>
                                </div>
                                <div class="pro-content">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="product.html">Products Name Here</a></h4>
                                    <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                </div>
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="pro-img">
                                    <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/2.jpg" alt="product-image"></a>
                                </div>
                                <div class="pro-content">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="product.html">Products Name Here</a></h4>
                                    <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                </div>
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="pro-img">
                                    <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/3.jpg" alt="product-image"></a>
                                </div>
                                <div class="pro-content">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="product.html">Products Name Here</a></h4>
                                    <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                </div>
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="pro-img">
                                    <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/4.jpg" alt="product-image"></a>
                                </div>
                                <div class="pro-content">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="product.html">Products Name Here</a></h4>
                                    <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                </div>
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="pro-img">
                                    <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/5.jpg" alt="product-image"></a>
                                </div>
                                <div class="pro-content">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="product.html">Products Name Here</a></h4>
                                    <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                </div>
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Double Product End -->
                    </div>
                    <!-- Deal Pro Activation End -->
                </div>
            </div>
            <div class="col-xl-9 col-lg-8  order-lg-2">
                <!-- New Pro Content End -->
                <div class="new-pro-content">
                    <div class="pro-tab-title border-line">
                        <!-- Featured Product List Item Start -->
                        <ul class="nav product-list product-tab-list">
                            <li><a  class="active" data-toggle="tab" href="#new-arrival">New Arrivals</a></li>
                            <li><a data-toggle="tab" href="#toprated">Featured</a></li>
                            <li><a data-toggle="tab" href="#new-arrival">Top Rated</a></li>
                        </ul>
                        <!-- Featured Product List Item End -->
                    </div>
                    <div class="tab-content product-tab-content jump">
                        <div id="new-arrival" class="tab-pane active">
                            <!-- New Products Activation Start -->
                            <div class="new-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{url('/')}}/frontend_assets/img/products/1.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{url('/')}}/frontend_assets/img/products/2.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4><a href="product.html">Products Name Here</a></h4>
                                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        <div class="pro-actions">
                                            <div class="actions-secondary">
                                                <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{url('/')}}/frontend_assets/img/products/3.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{url('/')}}/frontend_assets/img/products/4.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4><a href="product.html">Products Name Here</a></h4>
                                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        <div class="pro-actions">
                                            <div class="actions-secondary">
                                                <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                    <span class="sticker-new">-30%</span>
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{url('/')}}/frontend_assets/img/products/5.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{url('/')}}/frontend_assets/img/products/6.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4><a href="product.html">Products Name Here</a></h4>
                                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        <div class="pro-actions">
                                            <div class="actions-secondary">
                                                <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{url('/')}}/frontend_assets/img/products/1.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{url('/')}}/frontend_assets/img/products/2.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4><a href="product.html">Products Name Here</a></h4>
                                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        <div class="pro-actions">
                                            <div class="actions-secondary">
                                                <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                    <span class="sticker-new">-30%</span>
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{url('/')}}/frontend_assets/img/products/2.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{url('/')}}/frontend_assets/img/products/3.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4><a href="product.html">Products Name Here</a></h4>
                                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        <div class="pro-actions">
                                            <div class="actions-secondary">
                                                <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{url('/')}}/frontend_assets/img/products/3.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{url('/')}}/frontend_assets/img/products/4.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4><a href="product.html">Products Name Here</a></h4>
                                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        <div class="pro-actions">
                                            <div class="actions-secondary">
                                                <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                    <span class="sticker-new">-30%</span>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- New Products Activation End -->
                        </div>
                        <!-- New Products End -->
                        <div id="toprated" class="tab-pane">
                            <!-- New Products Activation Start -->
                            <div class="new-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{url('/')}}/frontend_assets/img/products/4.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{url('/')}}/frontend_assets/img/products/3.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4><a href="product.html">Products Name Here</a></h4>
                                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        <div class="pro-actions">
                                            <div class="actions-secondary">
                                                <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{url('/')}}/frontend_assets/img/products/3.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{url('/')}}/frontend_assets/img/products/2.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4><a href="product.html">Products Name Here</a></h4>
                                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        <div class="pro-actions">
                                            <div class="actions-secondary">
                                                <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                    <span class="sticker-new">-30%</span>
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{url('/')}}/frontend_assets/img/products/1.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{url('/')}}/frontend_assets/img/products/2.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4><a href="product.html">Products Name Here</a></h4>
                                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        <div class="pro-actions">
                                            <div class="actions-secondary">
                                                <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{url('/')}}/frontend_assets/img/products/1.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{url('/')}}/frontend_assets/img/products/2.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4><a href="product.html">Products Name Here</a></h4>
                                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        <div class="pro-actions">
                                            <div class="actions-secondary">
                                                <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{url('/')}}/frontend_assets/img/products/2.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{url('/')}}/frontend_assets/img/products/3.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4><a href="product.html">Products Name Here</a></h4>
                                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        <div class="pro-actions">
                                            <div class="actions-secondary">
                                                <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="{{url('/')}}/frontend_assets/img/products/3.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{url('/')}}/frontend_assets/img/products/4.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4><a href="product.html">Products Name Here</a></h4>
                                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        <div class="pro-actions">
                                            <div class="actions-secondary">
                                                <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- New Products Activation End -->
                        </div>
                    </div>
                    <!-- Tab-Content End -->
                    <div class="single-banner zoom mt-30 mt-sm-10">
                    <a href="#"><img src="img/banner/tab-banner.jpg" alt="slider-banner"></a>
                </div>
                </div>
                <!-- New Pro Content End -->
            </div>
        </div>

    </div>
    <!-- Container End -->
</div>
<!-- New Products End -->


<!-- Company Policy Start -->
<div class="company-policy pb-60">
    <div class="container">
        <div class="row">
            <!-- Single Policy Start -->
            <div class="col-lg-3 col-sm-6">
                <div class="single-policy">
                    <div class="icone-img">
                        <img src="{{url('/')}}/frontend_assets/img/icon/1.png" alt="">
                    </div>
                    <div class="policy-desc">
                        <h3>Free Delivery</h3>
                        <p>Free shipping on all order</p>
                    </div>
                </div>
            </div>
            <!-- Single Policy End -->
            <!-- Single Policy Start -->
            <div class="col-lg-3 col-sm-6">
                <div class="single-policy">
                    <div class="icone-img">
                        <img src="{{url('/')}}/frontend_assets/img/icon/2.png" alt="">
                    </div>
                    <div class="policy-desc">
                        <h3>Online Support 24/7</h3>
                        <p>Support online 24 hours</p>
                    </div>
                </div>
            </div>
            <!-- Single Policy End -->
            <!-- Single Policy Start -->
            <div class="col-lg-3 col-sm-6">
                <div class="single-policy">
                    <div class="icone-img">
                        <img src="{{url('/')}}/frontend_assets/img/icon/3.png" alt="">
                    </div>
                    <div class="policy-desc">
                        <h3>Money Return</h3>
                        <p>Back guarantee under 7 days</p>
                    </div>
                </div>
            </div>
            <!-- Single Policy End -->
            <!-- Single Policy Start -->
            <div class="col-lg-3 col-sm-6">
                <div class="single-policy">
                    <div class="icone-img">
                        <img src="{{url('/')}}/frontend_assets/img/icon/4.png" alt="">
                    </div>
                      <div class="policy-desc">
                        <h3>Member Discount</h3>
                        <p>Onevery order over $30.00</p>
                    </div>
                </div>
            </div>
            <!-- Single Policy End -->
        </div>
    </div>
</div>
<!-- Company Policy End -->


<!-- Best Products Start -->
<div class="best-seller-product pb-40">
    <div class="container">
        <div class="group-title">
            <h2>Best Seller Products</h2>
        </div>
        <!-- Best Product Activation Start -->
        <div class="best-seller-pro-active  owl-carousel slider-right-content">
            <!-- Double Product Start -->
            <div class="double-pro">
                <!-- Single Product Start -->
                <div class="single-product">
                    <div class="pro-img">
                        <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/1.jpg" alt="product-image"></a>
                    </div>
                    <div class="pro-content">
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4><a href="product.html">Products Name Here</a></h4>
                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                    </div>
                </div>
                <!-- Single Product End -->
                <!-- Single Product Start -->
                <div class="single-product">
                    <div class="pro-img">
                        <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/2.jpg" alt="product-image"></a>
                    </div>
                    <div class="pro-content">
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4><a href="product.html">Products Name Here</a></h4>
                        <p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p>
                    </div>
                </div>
                <!-- Single Product End -->
            </div>
            <!-- Double Product End -->
            <!-- Double Product Start -->
            <div class="double-pro">
                <!-- Single Product Start -->
                <div class="single-product">
                    <div class="pro-img">
                        <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/3.jpg" alt="product-image"></a>
                    </div>
                    <div class="pro-content">
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4><a href="product.html">Products Name Here</a></h4>
                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                    </div>
                </div>
                <!-- Single Product End -->
                <!-- Single Product Start -->
                <div class="single-product">
                    <div class="pro-img">
                        <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/4.jpg" alt="product-image"></a>
                    </div>
                    <div class="pro-content">
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4><a href="product.html">Products Name Here</a></h4>
                        <p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p>
                    </div>
                </div>
                <!-- Single Product End -->
            </div>
            <!-- Double Product End -->
            <!-- Double Product Start -->
            <div class="double-pro">
                <!-- Single Product Start -->
                <div class="single-product">
                    <div class="pro-img">
                        <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/5.jpg" alt="product-image"></a>
                    </div>
                    <div class="pro-content">
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4><a href="product.html">Products Name Here</a></h4>
                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                    </div>
                </div>
                <!-- Single Product End -->
                <!-- Single Product Start -->
                <div class="single-product">
                    <div class="pro-img">
                        <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/6.jpg" alt="product-image"></a>
                    </div>
                    <div class="pro-content">
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4><a href="product.html">Products Name Here</a></h4>
                        <p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p>
                    </div>
                </div>
                <!-- Single Product End -->
            </div>
            <!-- Double Product End -->
            <!-- Double Product Start -->
            <div class="double-pro">
                <!-- Single Product Start -->
                <div class="single-product">
                    <div class="pro-img">
                        <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/7.jpg" alt="product-image"></a>
                    </div>
                    <div class="pro-content">
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4><a href="product.html">Products Name Here</a></h4>
                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                    </div>
                </div>
                <!-- Single Product End -->
                <!-- Single Product Start -->
                <div class="single-product">
                    <div class="pro-img">
                        <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/8.jpg" alt="product-image"></a>
                    </div>
                    <div class="pro-content">
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4><a href="product.html">Products Name Here</a></h4>
                        <p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p>
                    </div>
                </div>
                <!-- Single Product End -->
            </div>
            <!-- Double Product End -->
            <!-- Double Product Start -->
            <div class="double-pro">
                <!-- Single Product Start -->
                <div class="single-product">
                    <div class="pro-img">
                        <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/5.jpg" alt="product-image"></a>
                    </div>
                    <div class="pro-content">
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4><a href="product.html">Products Name Here</a></h4>
                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                    </div>
                </div>
                <!-- Single Product End -->
                <!-- Single Product Start -->
                <div class="single-product">
                    <div class="pro-img">
                        <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/6.jpg" alt="product-image"></a>
                    </div>
                    <div class="pro-content">
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4><a href="product.html">Products Name Here</a></h4>
                        <p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p>
                    </div>
                </div>
                <!-- Single Product End -->
            </div>
            <!-- Double Product End -->
            <!-- Double Product Start -->
            <div class="double-pro">
                <!-- Single Product Start -->
                <div class="single-product">
                    <div class="pro-img">
                        <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/7.jpg" alt="product-image"></a>
                    </div>
                    <div class="pro-content">
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4><a href="product.html">Products Name Here</a></h4>
                        <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                    </div>
                </div>
                <!-- Single Product End -->
                <!-- Single Product Start -->
                <div class="single-product">
                    <div class="pro-img">
                        <a href="product.html"><img class="img" src="{{url('/')}}/frontend_assets/img/products/8.jpg" alt="product-image"></a>
                    </div>
                    <div class="pro-content">
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4><a href="product.html">Products Name Here</a></h4>
                        <p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p>
                    </div>
                </div>
                <!-- Single Product End -->
            </div>
            <!-- Double Product End -->
        </div>
        <!-- Best Product Activation End -->
    </div>
    <!-- Container End -->
</div>
<!-- Best Product End -->

<!-- Blog Page Start -->
<div class="blog-area pb-60">
    <div class="container">
        <div class="group-title">
            <h2>From The Blog</h2>
        </div>
         <!-- Popular Categorie Activation Start -->
         <div class="blog-active owl-carousel">
            <!-- Single Blog Start -->
            <div class="single-blog">
                <div class="blog-img">
                    <a href="blog-details.html"><img src="{{url('/')}}/frontend_assets/img/blog/1.jpg" alt="blog-image"></a>
                </div>
                <div class="blog-content">
                        <h4 class="blog-title"><a href="blog-details.html">Lorem ipsum dolor sit amet, consectl adip elit, sed do eiusmod tempor</a></h4>
                    <div class="blog-meta">
                        <ul>
                            <li><span>By: </span> <a href="#">Jantrik,</a></li>
                            <li><span>On: </span> <a href="#">05 Nov, 2018</a></li>
                        </ul>
                    </div>
                    <div class="readmore">
                        <a href="blog-details.html">Read More.....</a>
                    </div>
                </div>
            </div>
            <!-- Single Blog End -->
            <!-- Single Blog Start -->
            <div class="single-blog">
                <div class="blog-img">
                    <a href="blog-details.html"><img src="{{url('/')}}/frontend_assets/img/blog/2.jpg" alt="blog-image"></a>
                </div>
                <div class="blog-content">
                        <h4 class="blog-title"><a href="blog-details.html">Lorem ipsum dolor sit amet, consectl adip elit, sed do eiusmod tempor</a></h4>
                    <div class="blog-meta">
                        <ul>
                            <li><span>By </span> <a href="#">Jantrik, </a></li>
                            <li><span>On </span> <a href="#">05 Nov, 2018</a></li>
                        </ul>
                    </div>
                    <div class="readmore">
                        <a href="blog-details.html">Read More.....</a>
                    </div>
                </div>
            </div>
            <!-- Single Blog End -->
            <!-- Single Blog Start -->
            <div class="single-blog">
                <div class="blog-img">
                    <a href="blog-details.html"><img src="{{url('/')}}/frontend_assets/img/blog/3.jpg" alt="blog-image"></a>
                </div>
                <div class="blog-content">
                        <h4 class="blog-title"><a href="blog-details.html">Lorem ipsum dolor sit amet, consectl adip elit, sed do eiusmod tempor</a></h4>
                    <div class="blog-meta">
                        <ul>
                            <li><span>By </span> <a href="#">Jantrik, </a></li>
                            <li><span>On </span> <a href="#">05 Nov, 2018</a></li>
                        </ul>
                    </div>
                    <div class="readmore">
                        <a href="blog-details.html">Read More.....</a>
                    </div>
                </div>
            </div>
            <!-- Single Blog End -->
            <!-- Single Blog Start -->
            <div class="single-blog">
                <div class="blog-img">
                    <a href="blog-details.html"><img src="{{url('/')}}/frontend_assets/img/blog/1.jpg" alt="blog-image"></a>
                </div>
                <div class="blog-content">
                        <h4 class="blog-title"><a href="blog-details.html">Lorem ipsum dolor sit amet, consectl adip elit, sed do eiusmod tempor</a></h4>
                    <div class="blog-meta">
                        <ul>
                            <li><span>By </span> <a href="#">Jantrik, </a></li>
                            <li><span>On </span> <a href="#">05 Nov, 2018</a></li>
                        </ul>
                    </div>
                    <div class="readmore">
                        <a href="blog-details.html">Read More.....</a>
                    </div>
                </div>
            </div>
            <!-- Single Blog End -->
            <!-- Single Blog Start -->
            <div class="single-blog">
                <div class="blog-img">
                    <a href="blog-details.html"><img src="{{url('/')}}/frontend_assets/img/blog/2.jpg" alt="blog-image"></a>
                </div>
                <div class="blog-content">
                        <h4 class="blog-title"><a href="blog-details.html">Lorem ipsum dolor sit amet, consectl adip elit, sed do eiusmod tempor</a></h4>
                    <div class="blog-meta">
                        <ul>
                            <li><span>By </span> <a href="#">Jantrik, </a></li>
                            <li><span>On </span> <a href="#">05 Nov, 2018</a></li>
                        </ul>
                    </div>
                    <div class="readmore">
                        <a href="blog-details.html">Read More.....</a>
                    </div>
                </div>
            </div>
            <!-- Single Blog End -->
            <!-- Single Blog Start -->
            <div class="single-blog">
                <div class="blog-img">
                    <a href="blog-details.html"><img src="{{url('/')}}/frontend_assets/img/blog/3.jpg" alt="blog-image"></a>
                </div>
                <div class="blog-content">
                        <h4 class="blog-title"><a href="blog-details.html">Lorem ipsum dolor sit amet, consectl adip elit, sed do eiusmod tempor</a></h4>
                    <div class="blog-meta">
                        <ul>
                            <li><span>By </span> <a href="#">Jantrik, </a></li>
                            <li><span>On </span> <a href="#">05 Nov, 2018</a></li>
                        </ul>
                    </div>
                    <div class="readmore">
                        <a href="blog-details.html">Read More.....</a>
                    </div>
                </div>
            </div>
            <!-- Single Blog End -->
         </div>
         <!-- Popular Categorie Activation End -->
    </div>
    <!-- Container End -->
</div>
<!-- Blog Page End -->


<!-- Brand Logo Start -->
<div class="brand-area pb-60">
    <div class="container">
        <!-- Brand Banner Start -->
        <div class="brand-banner owl-carousel">
            <div class="single-brand">
                <a href="#"><img class="img" src="{{url('/')}}/frontend_assets/img/brand/1.png" alt="brand-image"></a>
            </div>
            <div class="single-brand">
                <a href="#"><img src="{{url('/')}}/frontend_assets/img/brand/2.png" alt="brand-image"></a>
            </div>
            <div class="single-brand">
                <a href="#"><img src="{{url('/')}}/frontend_assets/img/brand/3.png" alt="brand-image"></a>
            </div>
            <div class="single-brand">
                <a href="#"><img src="{{url('/')}}/frontend_assets/img/brand/4.png" alt="brand-image"></a>
            </div>
            <div class="single-brand">
                <a href="#"><img src="{{url('/')}}/frontend_assets/img/brand/5.png" alt="brand-image"></a>
            </div>
            <div class="single-brand">
                <a href="#"><img class="img" src="{{url('/')}}/frontend_assets/img/brand/1.png" alt="brand-image"></a>
            </div>
            <div class="single-brand">
                <a href="#"><img src="{{url('/')}}/frontend_assets/img/brand/2.png" alt="brand-image"></a>
            </div>
            <div class="single-brand">
                <a href="#"><img src="{{url('/')}}/frontend_assets/img/brand/3.png" alt="brand-image"></a>
            </div>
            <div class="single-brand">
                <a href="#"><img src="{{url('/')}}/frontend_assets/img/brand/4.png" alt="brand-image"></a>
            </div>
            <div class="single-brand">
                <a href="#"><img src="{{url('/')}}/frontend_assets/img/brand/5.png" alt="brand-image"></a>
            </div>
        </div>
        <!-- Brand Banner End -->
    </div>
</div>
<!-- Brand Logo End -->
@endsection
