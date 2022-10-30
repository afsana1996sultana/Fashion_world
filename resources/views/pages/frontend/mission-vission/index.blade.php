@extends('layout.frontend.master')
@section('main_content')
<style>
.customer-service-area {
    padding-top: 60px;
    padding-bottom: 60px;
}

.customer-service-content{
    padding-left: 60px;
    padding-top: 17px;
}
</style>
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Mission & Vission</h2>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Mission & Vission</li>
            </ul>
        </div>
    </div>
</div>

<section class="customer-service-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="single-categories-box">
                    <img src="{{url('frontend/assets/img/categories/mission2.webp')}}" alt="image">
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="customer-service-content">
                    <h3><i class='bx bx-sync'></i>Mission</h3>
                    <ul>
                        <li>Complimentary ground shipping within 1 to 7 business days</li>
                        <li>In-store collection available within 1 to 7 business days</li>
                        <li>Next-day and Express delivery options also available</li>
                        <li>Purchases are delivered in an orange box tied with a Bolduc ribbon, with the exception of certain items</li>
                        <li>See the delivery FAQs for details on shipping methods, costs and delivery times</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="customer-service-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="single-categories-box">
                    <img src="{{url('frontend/assets/img/categories/vission-1.webp')}}" alt="image">
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="customer-service-content">
                    <h3><i class='bx bx-sync'></i>Vission</h3>
                    <ul>
                        <li>Complimentary ground shipping within 1 to 7 business days</li>
                        <li>In-store collection available within 1 to 7 business days</li>
                        <li>Next-day and Express delivery options also available</li>
                        <li>Purchases are delivered in an orange box tied with a Bolduc ribbon, with the exception of certain items</li>
                        <li>See the delivery FAQs for details on shipping methods, costs and delivery times</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection