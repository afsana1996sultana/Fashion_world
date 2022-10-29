@extends('layout.frontend.master')
@section('main_content')
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>About Us</h2>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>

<section class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            @foreach($about as $val)
                <div class="col-lg-6 col-md-12">
                    <div class="about-image">
                        <img src="{{url('img/'.$val->img1)}}" class="shadow" alt="image">
                        <img src="{{url('img/'.$val->img2)}}" class="shadow" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="about-content">
                        <span class="sub-title">{{ $val->title }}</span>
                        <h2>{{ $val->heading1 }}</h2>
                        <h6>{{ $val->heading2 }}</h6>
                        <p>{!! $val->detail !!}</p>
                        <div class="features-text">
                            <h5><i class='bx bx-planet'></i>{{ $val->other_heading }}</h5>
                            <p>{!! $val->other_detail !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="about-inner-area">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about-text">
                        <h3>Story</h3>
                        <p>One of the most popular on the web is shopping.</p>
                        <ul class="features-list">
                            @foreach($story as $val)
                                <li><i class='bx bx-check'></i> {{ $val->story_name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about-text">
                        <h3>Values</h3>
                        <p>The best of both worlds. Store and web.</p>
                        <ul class="features-list">
                            @foreach($value as $val)
                                <li><i class='bx bx-check'></i> {{ $val->value_name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                    <div class="about-text">
                        <h3>Promise</h3>
                        <p>Rediscover a great shopping tradition</p>
                        <ul class="features-list">
                            @foreach($promise as $val)
                                <li><i class='bx bx-check'></i> {{ $val->promise_name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="offer-area bg-image1 ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="offer-content">
                    <span class="sub-title">Limited Time Offer!</span>
                    <h2>-40% OFF</h2>
                    <p>Get The Best Deals Now</p>
                    <a href="{{url('/women')}}" class="default-btn">Discover Now</a>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="partner-area ptb-70">
    <div class="container">
        <div class="section-title">
            <h2>Our Partners</h2>
        </div>

        <div class="partner-slides owl-carousel owl-theme">
            @foreach($partner as $val)
                <div class="partner-item">
                    <a href=""><img src="{{url('img/'.$val->partner_logo)}}" alt="image"></a>
                </div>
            @endforeach
        </div>
    </div>
</div>

<section class="testimonials-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Testimonials</span>
            <h2>What Clients Says About Us</h2>
        </div>

        <div class="testimonials-slides owl-carousel owl-theme">
            @foreach($testimonial as $val)
            <div class="single-testimonials-item">
                <p>{!! $val->detail !!}</p>
                <div class="info">
                    <img src="{{url('img/'.$val->img)}}" class="shadow rounded-circle" alt="image">
                    <h3>{{ $val->name }}</h3>
                    <span>{{ $val->designation }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection