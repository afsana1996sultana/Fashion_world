@extends('layout.frontend.master')
@section('main_content')

<div class="home-slides owl-carousel owl-theme">
    <div class="main-banner banner-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-banner-content text-center">
                        <span class="sub-title">Limited Time Offer!</span>
                        <h1 style="color: #F53F85;">Winter-Spring!</h1>
                        <p>Take 20% Off ‘Sale Must-Haves'</p>
                        <div class="btn-box">
                            <a href="" class="default-btn">Shop Women's</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-banner banner-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-banner-content">
                        <span class="sub-title">Exclusive Offer!</span>
                        <h1>Spring-Show!</h1>
                        <p>Leap year offer ‘Sale Must-Haves'</p>
                        <div class="btn-box">
                            <a href="" class="default-btn">Shop Women's</a>
                            <a href="" class="optional-btn">Shop Kid's</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-banner banner-bg3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-banner-content">
                        <span class="sub-title">Buy Now From Fashion World!</span>
                        <h1>New Season Canvas</h1>
                        <p>Take 20% Off ‘Sale Must-Haves'</p>
                        <div class="btn-box">
                            <a href="" class="default-btn">Shop Women's</a>
                            <a href="" class="optional-btn">Shop Men's</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="categories-banner-area pt-100 pb-70">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-categories-box">
                    <img src="{{url('frontend/assets/img/categories/img1.jpg')}}" alt="image">
                    <div class="content text-white">
                        <span>Don’t Miss Today</span>
                        <h3>50% OFF</h3>
                        <a href="products-right-sidebar.html" class="default-btn">Discover Now</a>
                    </div>
                    <a href="products-right-sidebar.html" class="link-btn"></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-categories-box">
                    <img src="{{url('frontend/assets/img/categories/img2.jpg')}}" alt="image">
                    <div class="content">
                        <span>New Collection</span>
                        <h3>Need Now</h3>
                        <a href="products-right-sidebar.html" class="default-btn">Discover Now</a>
                    </div>
                    <a href="products-right-sidebar.html" class="link-btn"></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-categories-box">
                    <img src="{{url('frontend/assets/img/categories/img3.jpg')}}" alt="image">
                    <div class="content">
                        <span>Your Looks</span>
                        <h3>Must Haves</h3>
                        <a href="products-right-sidebar.html" class="default-btn">Discover Now</a>
                    </div>
                    <a href="products-right-sidebar.html" class="link-btn"></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-categories-box">
                    <img src="{{url('frontend/assets/img/categories/img4.jpg')}}" alt="image">
                    <div class="content text-white">
                        <span>Take 20% OFF</span>
                        <h3>Winter Spring!</h3>
                        <a href="products-right-sidebar.html" class="default-btn">Discover Now</a>
                    </div>
                    <a href="products-right-sidebar.html" class="link-btn"></a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="products-area pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">See Our Collection</span>
            <h2>Recent Products</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="{{url('frontend/assets/img/products/img1.jpg')}}" class="main-image" alt="image">
                            <img src="{{url('frontend/assets/img/products/img-hover1.jpg')}}" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="compare-btn">
                                        <a href="#">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
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
                        <h3><a href="products-type-1.html">Long Sleeve Leopard T-Shirt</a></h3>
                        <div class="price">
                            <span class="old-price">$321</span>
                            <span class="new-price">$250</span>
                        </div>

                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="{{url('frontend/assets/img/products/img2.jpg')}}" class="main-image" alt="image">
                            <img src="{{url('frontend/assets/img/products/img-hover2.jpg')}}" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="compare-btn">
                                        <a href="#">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
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
                        <div class="sale-tag">Sale!</div>
                    </div>

                    <div class="products-content">
                        <h3><a href="products-type-1.html">Causal V-Neck Soft Raglan</a></h3>
                        <div class="price">
                            <span class="old-price">$210</span>
                            <span class="new-price">$200</span>
                        </div>
                        
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="{{url('frontend/assets/img/products/img3.jpg')}}" class="main-image" alt="image">
                            <img src="{{url('frontend/assets/img/products/img-hover3.jpg')}}" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="compare-btn">
                                        <a href="#">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
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
                        <h3><a href="products-type-1.html">Hanes Men's Pullover</a></h3>
                        <div class="price">
                            <span class="old-price">$210</span>
                            <span class="new-price">$200</span>
                        </div>

                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                            <a href="products-type-1.html">
                                <img src="{{url('frontend/assets/img/products/img4.jpg')}}" class="main-image" alt="image">
                                <img src="{{url('frontend/assets/img/products/img-hover4.jpg')}}" class="hover-image" alt="image">
                            </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="compare-btn">
                                        <a href="#">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
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
                        <h3><a href="products-type-1.html">Gildan Men's Crew T-Shirt</a></h3>
                        <div class="price">
                            <span class="new-price">$150</span>
                        </div>

                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="{{url('frontend/assets/img/products/img5.jpg')}}" class="main-image" alt="image">
                            <img src="{{url('frontend/assets/img/products/img-hover5.jpg')}}" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="compare-btn">
                                        <a href="#">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
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
                        <h3><a href="products-type-1.html">Yidarton Women's Comfy</a></h3>
                        <div class="price">
                            <span class="new-price">$240</span>
                        </div>

                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="{{url('frontend/assets/img/products/img6.jpg')}}" class="main-image" alt="image">
                            <img src="{{url('frontend/assets/img/products/img-hover6.jpg')}}" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="compare-btn">
                                        <a href="#">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
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
                        <div class="new-tag">New!</div>
                    </div>

                    <div class="products-content">
                        <h3><a href="products-type-1.html">Womens Tops Color</a></h3>
                        <div class="price">
                            <span class="old-price">$150</span>
                            <span class="new-price">$100</span>
                        </div>

                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
