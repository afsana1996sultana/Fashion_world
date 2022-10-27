@extends('layout.frontend.master')
@section('main_content')
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Our Team</h2>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Our Team</li>
            </ul>
        </div>
    </div>
</div>

<section class="products-area pb-70">
    <div class="container">
        <div class="section-title pt-4">
            <h2>Our Team</h2>
        </div>

        <div class="row">
        @foreach($team as $val)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="{{url('img/'.$val->img)}}" class="main-image" alt="image">
                            <img src="{{url('img/'.$val->img)}}" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="{{ $val->facebook_url }}">
                                            <i class='bx bxl-facebook'></i>
                                            <span class="tooltip-label">Facebook</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="compare-btn">
                                        <a href="{{ $val->twitter_url }}">
                                            <i class='bx bxl-twitter'></i>
                                            <span class="tooltip-label">Twitter</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="compare-btn">
                                        <a href="{{ $val->instagram_url }}">
                                            <i class='bx bxl-instagram'></i>
                                            <span class="tooltip-label">Instagram</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="compare-btn">
                                        <a href="{{ $val->linkedin_url }}">
                                            <i class='bx bxl-linkedin'></i>
                                            <span class="tooltip-label">Linkedin</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <h3>{{ $val->name }}</h3>
                        <h6 style="text-align: center;">{{ $val->designation }}</h6>
                    </div>
                </div>
            </div>
        @endforeach
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
@endsection