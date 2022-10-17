<div class="navbar-area">
    <div class="xton-responsive-nav">
        <div class="container">
            <div class="xton-responsive-menu">
                <div class="logo">
                    <a href="{{url('/')}}">
                    <img src="{{url('frontend/assets/img/logo-1.png')}}" class="main-logo" alt="logo">
                    <img src="{{url('frontend/assets/img/white-logo-1.png')}}" class="white-logo" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="xton-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{url('frontend/assets/img/logo-1.png')}}" class="main-logo" alt="logo">
                    <img src="{{url('frontend/assets/img/white-logo-1.png')}}" class="white-logo" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{url('/home')}}" class="nav-link active">Home</a></li>

                        <li class="nav-item"><a href="{{url('/about-us')}}" class="nav-link">About Us<i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="" class="nav-link">Our Team</a></li>
                                <li class="nav-item"><a href="" class="nav-link">Mission & Vission</a></li>
                                <li class="nav-item"><a href="" class="nav-link">Core Values</a></li>
                                <li class="nav-item"><a href="" class="nav-link">Company Flowchart</a></li>
                            </ul>
                        </li>

                        @foreach ($categories as $val)
                            <?php
                            $Subcategory = App\Models\Subcategory::where('category', $val->id)->get();
                            ?>
                            <li class="nav-item megamenu"><a href="#" class="nav-link">{{ $val->c_name }} 
                                <i class='@if(sizeof($Subcategory) >= 1) bx bx-chevron-down @endif'></i></a>
                                @if(sizeof($Subcategory) >= 1)
                                <ul class="@if(sizeof($Subcategory) >= 1) dropdown-menu @endif">
                                    <li class="nav-item">
                                        <div class="container">
                                            <div class="row">
                                                @foreach($Subcategory as $subData)
                                                <?php
                                                    $childcategory = App\Models\Childcategory::where('sub_category', $subData->id)->get();
                                                ?>
                                                    <div class="col">
                                                        <h6 class="submenu-title">{{$subData->sub_c_name}}</h6>
                                                        @if(sizeof($childcategory) >= 1)
                                                        <ul class="megamenu-submenu">
                                                            @foreach($childcategory as $chData)
                                                            <li><a href="">{{$chData->child_c_name}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif
                                                @endforeach
                                                <div class="col">
                                                    <ul class="megamenu-submenu">
                                                        <li>
                                                            <div class="aside-trending-products">
                                                                <img src="{{url('frontend/assets/img/categories/img2.jpg')}}" alt="image">
                                                                <div class="category">
                                                                <h4>Popular Products</h4>
                                                                </div>
                                                                <a href="#" class="link-btn"></a>
                                                            </div>

                                                            <div class="aside-trending-products">
                                                                <img src="{{url('frontend/assets/img/categories/img1.jpg')}}" alt="image">
                                                                <div class="category">
                                                                <h4>Top Trending</h4>
                                                                </div>
                                                                <a href="#" class="link-btn"></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>

                    <div class="others-option">
                        <div class="option-item">
                            <div class="search-btn-box">
                                <i class="search-btn bx bx-search-alt"></i>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="burger-menu" data-bs-toggle="modal" data-bs-target="#sidebarModal">
                                <span class="top-bar"></span>
                                <span class="middle-bar"></span>
                                <span class="bottom-bar"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>


<div class="modal right fade sidebarModal" id="sidebarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i></span>
            </button>

            <div class="modal-body">
                <div class="sidebar-about-content">
                    <h3>About The Store</h3>
                    <div class="about-the-store">
                        <p>One of the most popular on the web is shopping. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul class="sidebar-contact-info">
                            <li><i class='bx bx-map'></i> <a href="#" target="_blank">Wonder Street, USA, New York</a></li>
                            <li><i class='bx bx-phone-call'></i> <a href="tel:+01321654214">+01 321 654 214</a></li>
                            <li><i class='bx bx-envelope'></i></li>
                        </ul>
                    </div>

                    <ul class="social-link">
                        <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                        <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                        <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-pinterest-alt'></i></a></li>
                    </ul>
                </div>

                <div class="sidebar-new-in-store">
                    <h3>New In Store</h3>
                    <ul class="products-list">
                        <li>
                            <a href="#"><img src="{{url('frontend/assets/img/products/img1.jpg')}}" alt="image"></a>
                        </li>

                        <li>
                            <a href="#"><img src="{{url('frontend/assets/img/products/img2.jpg')}}" alt="image"></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{url('frontend/assets/img/products/img3.jpg')}}" alt="image"></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{url('frontend/assets/img/products/img4.jpg')}}" alt="image"></a>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="shop-now-btn">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
