@extends('layout.frontend.master')
@section('main_content')
<style>
.faq-area {
    padding-top: 60px;
}

.faq-accordion-tab .tabs li {
    margin-left: 10px;
    margin-right: 10px;
    margin-bottom: 30px;
}
.faq-accordion-tab .tabs li img{
    height:115px;
    width: 200px;
}
</style>
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Our Client</h2>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Our Client</li>
            </ul>
        </div>
    </div>
</div>

<section class="faq-area">
    <div class="container">
        <div class="tab faq-accordion-tab">
            <ul class="tabs d-flex flex-wrap justify-content-center">
                @foreach($client as $val)
                    <li><img src="{{url('img/'.$val->img)}}" alt="image"></li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
@endsection