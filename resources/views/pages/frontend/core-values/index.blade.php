@extends('layout.frontend.master')
@section('main_content')
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Core Values</h2>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Core Values</li>
            </ul>
        </div>
    </div>
</div>

<section class="categories-banner-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12" style="background-color: #EFEFEF;">
                <div>
                    <img src="{{url('frontend/assets/img/categories/value.webp')}}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection