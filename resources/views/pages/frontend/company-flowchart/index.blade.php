@extends('layout.frontend.master')
@section('main_content')
<style>
    .company-flowchart img{
     height: 667px;
     width: 1000px;
    }
</style>
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Company Flowchart</h2>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Company Flowchart</li>
            </ul>
        </div>
    </div>
</div>

<section class="categories-banner-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="company-flowchart">
                    <img src="{{url('frontend/assets/img/categories/organogram.png')}}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection