@extends('layout.frontend.master')
@section('main_content')
<style>
.customer-service-area {
    padding-top: 50px;
    padding-bottom: 20px;
}

.customer-service-content{

}
</style>
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Service</h2>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Service</li>
            </ul>
        </div>
    </div>
</div>

<section class="customer-service-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="customer-service-content">
                    <h3><i class='bx bx-sync'></i>Sourcing/Marketing</h3>
                    <p>Experienced sourcing teams are constantly on the look out for new products. These teams of young. talented and experienced professionals are sourcing for specialized factories with vertical set up for All possible Products.</p>
                    <p>Raw materials for production are also sourced locally and internationally from countries such as China, Hong Kong, & Taiwan.</p>
                    <p>It is insured that raw materials for production are sourced from Oekotex certified factories.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="single-categories-box">
                    <img src="{{url('frontend/assets/img/categories/mission2.webp')}}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="customer-service-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="single-categories-box">
                    <img src="{{url('frontend/assets/img/categories/mission2.webp')}}" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="customer-service-content">
                    <h3><i class='bx bx-sync'></i>Development</h3>
                    <p>In-house development teams are precisely focused on new product developments using local imported materials. The development teams keep themselves updated with new and current fashion trends.</p>
                    <p>Besides this we are also developing samples and products as per customer’s requirement and specification.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="customer-service-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="customer-service-content">
                    <h3><i class='bx bx-sync'></i>Merchandising</h3>
                    <p>Each customer is also provided with selected and separate production team (quality controllers). These teams along with the merchandising team performs quality check on the merchandise during production.</p>
                    <p>Workmanship and other standards such as rubbing test, shrinkage test, color fastness are constantly checked and recorded and analyzed.</p>
                    <p>Immediate corrective measures are taken if any deviations are found.</p>
                    <p>Testings are done strictly with certified test laboratory, such as, SGS, BV, Hohenstein, Tuv and any other testing lab as required by the customer.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="single-categories-box">
                    <img src="{{url('frontend/assets/img/categories/mission2.webp')}}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection