@extends('frontend.master')

@section('content')

<!-- Breadcrumb Start -->
<div class="breadcrumb-area ptb-60 ptb-sm-30">
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="about.html">About</a></li>
            </ul>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Breadcrumb End -->

<!-- About Main Area Start -->
<div class="about-main-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <div class="about-img">
                    <img class="img" src="{{url($about->image)}}" alt="about-us">
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="about-content">
                    <h3>Why We are?</h3>
                    {!! $about->reason !!}
                    {{-- <p>Mellentesque faucibus dapibus dapibus. Morbi aliquam aliquet neque. Donec placerat dapibus sollicitudin. Morbi arcu nisi, mattis ullamcorper in, dapibus ac nunc. Cras bibendum mauris et sapien nibh feugiat. scelerisque accumsan nibh gravida. Quisque aliquet justo elementum lectus ultrices bibendum.</p> <br>
                    <p>dapibus ac nunc. Cras bibendum mauris et sapien feugiat. scelerisque accumsan nibh gravida. Quisque aliquet justo elementum lectus ultrices bibendum.</p>
                    <ul class="mt-20 about-content-list">
                        <li><a href="#">Amazing wordpress theme</a></li>
                        <li><a href="#">HTML &amp; CSS3 build with bootstrap</a></li>
                        <li><a href="#">Powerfull admin panel</a></li>
                        <li><a href="#">Icon well organized &amp; SEO optimized friendy</a></li>
                        <li><a href="#">Iconncredible design</a></li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Main Area End -->

<!-- Our Mission Start -->
<div class="about-bottom pt-50 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="ht-single-about pb-sm-40">
                    <h3>OUR EXPERIENCES</h3>
                    {!! $about->experiance !!}
                    {{-- <h5>fusce fringilla porttitor iaculi sed quam libero, adipiscing sed erat id praesent eu nis.</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi malesuada vestibulum. Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu, pellentesque at sodales sit amet, Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu, pellentesque at sodales sit amet,</p>
                    <p>Donec ornare mattis suscipit. Praesent fermentum accumsan vulputate. Sed velit nulla, sagittis non erat id, dictum vestibulum ligula. Maecenas sed enim sem.</p> --}}
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="ht-single-about">
                    <h3>OUR WORKS</h3>
                    {!! $about->works !!}
                    {{-- <div class="ht-about-work">
                        <span>1</span>
                        <div class="ht-work-text">
                            <h5><a href="#">LOREM IPSUM DOLOR SIT AMET</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi</p>
                        </div>
                    </div>
                    <div class="ht-about-work">
                        <span>2</span>
                        <div class="ht-work-text">
                            <h5><a href="#">DONEC FERMENTUM EROS</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi</p>
                        </div>
                    </div>
                    <div class="ht-about-work">
                        <span>3</span>
                        <div class="ht-work-text">
                            <h5><a href="#">LOREM IPSUM DOLOR SIT AMET</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Mission End -->

<!-- Brand Logo Start -->
{{-- <div class="brand-area pb-60">
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
</div> --}}
<!-- Brand Logo End -->

@endsection
