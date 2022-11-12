<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/xton/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Oct 2022 11:57:36 GMT -->
<head>

<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="{{url('frontend/assets/css/bootstrap.min.css')}}">
<!-- <link rel="stylesheet" href="{{url('frontend/assets/css/animate.min.css')}}"> -->
<link rel="stylesheet" href="{{url('frontend/assets/css/boxicons.min.css')}}">
<!-- <link rel="stylesheet" href="{{url('frontend/assets/css/flaticon.css')}}"> -->
<link rel="stylesheet" href="{{url('frontend/assets/css/magnific-popup.min.css')}}">
<link rel="stylesheet" href="{{url('frontend/assets/css/nice-select.min.css')}}">
<link rel="stylesheet" href="{{url('frontend/assets/css/slick.min.css')}}">
<link rel="stylesheet" href="{{url('frontend/assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{url('frontend/assets/css/meanmenu.min.css')}}">
<link rel="stylesheet" href="{{url('frontend/assets/css/rangeSlider.min.css')}}">
<link rel="stylesheet" href="{{url('frontend/assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('frontend/assets/css/dark.css')}}">
<link rel="stylesheet" href="{{url('frontend/assets/css/responsive.css')}}">
<title>Fashion World</title>
<link rel="icon" type="image/png" href="{{url('frontend/assets/img/favicon.png')}}">
<style>
    .s_rslt:hover {
        background-color: black;
        height: 27px;
    }
</style>
</head>

<body>
    <!--header area start-->
    @include("layout.frontend.top_header")
    <!--header area end-->


    <!--navbar area start-->
    @include("layout.frontend.navbar_area")
    <!--navbar area end-->


    <!--stickynavbar area start-->
     @include("layout.frontend.stickynavbar")
    <!--stickynavbar area end-->


    <!--search overlay area start-->
    @include("layout.frontend.search_overlay")
    <!--search overlay area end-->


    <!--home section four area start-->
    @yield('main_content')
    <!--home section four area end-->

    <!--footer area start-->
    @include("layout.frontend.footer_area")
    <!--footer area end-->
    <!-- JS
============================================ -->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

<!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
<script src="{{url('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{url('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{url('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{url('frontend/assets/js/magnific-popup.min.js')}}"></script>
<script src="{{url('frontend/assets/js/parallax.min.js')}}"></script>
<script src="{{url('frontend/assets/js/rangeSlider.min.js')}}"></script>
<script src="{{url('frontend/assets/js/nice-select.min.js')}}"></script>
<script src="{{url('frontend/assets/js/meanmenu.min.js')}}"></script>
<script src="{{url('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{url('frontend/assets/js/slick.min.js')}}"></script>
<script src="{{url('frontend/assets/js/sticky-sidebar.min.js')}}"></script>
<script src="{{url('frontend/assets/js/wow.min.js')}}"></script>
<script src="{{url('frontend/assets/js/form-validator.min.js')}}"></script>
<script src="{{url('frontend/assets/js/contact-form-script.js')}}"></script>
<script src="{{url('frontend/assets/js/ajaxchimp.min.js')}}"></script>
<script src="{{url('frontend/assets/js/main.js')}}"></script>
<script>
    $(function(){

    });
    $('#search').on('keyup', function(){
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "search_suggest",       
            type: "get",
            data: {
                name: $(this).val()                
            },
            success: function( response ) {
                console.log(response.length);
                $('#s_s_rslt').html('');
                if(response.length > 0){
                    for(var i = 0; i<response.length; i++){
                    $('#s_s_rslt').append(`
                        <a class="col-12 s_rslt" href="`+response[i].slug+`">
                                <div style="width:100%;" class="s_rslt_drop">`+response[i].name+`</div>
                        </a> `);
                    }  
                }else{
                $('#s_s_rslt').append(`
                    <a class="col-12 s_rslt">
                            No related data is found!
                    </a> `);
                } 
            }   
        });
    });
</script>

</body>

</html>