<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>About The Store</h3>
                    <div class="about-the-store">
                        <p>One of the most popular on the web is shopping.</p>
                        <ul class="footer-contact-info">
                        <li><i class='bx bx-map'></i> <a href="#" target="_blank">Wonder Street, USA, New York</a></li>
                        <li><i class='bx bx-phone-call'></i> <a href="tel:+01321654214">+01 321 654 214</a></li>
                        <li><i class='bx bx-envelope'></i> <a href=""><span class="__cf_email__" data-cfemail="aec6cbc2c2c1eed6dac1c080cdc1c3">[email&#160;protected]</span></a></li>
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
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget pl-4">
                    <h3>Quick Links</h3>
                    <ul class="quick-links">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="products-left-sidebar.html">Shop Now!</a></li>
                        <li><a href="products-left-sidebar-2.html">Woman's</a></li>
                        <li><a href="faqs.html">FAQ's</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="customer-service.html">Customer Services</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Newsletter</h3>
                    <div class="footer-newsletter-box">
                        <p>To get the latest news and latest updates from us.</p>
                        <form class="newsletter-form" id="ajaxnewsletter">
                            @csrf
                            <label>Your E-mail Address:</label>
                            <input type="email" name="txtEmail" id="txtEmail" class="input-newsletter" placeholder="Enter your email" required>
                            <button id="snd_newsletter">Subscribe</button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <p>© All Copyright 2022 by <a href="http://sysconsolutionbd.com/" target="_blank">SYSCON Solution Ltd.</a></p>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <ul class="payment-types">
                        <li><a href="#" target="_blank"><img src="{{url('frontend/assets/img/payment/visa.png')}}" alt="image"></a></li>
                        <li><a href="#" target="_blank"><img src="{{url('frontend/assets/img/payment/mastercard.png')}}" alt="image"></a></li>
                        <li><a href="#" target="_blank"><img src="{{url('frontend/assets/img/payment/mastercard2.png')}}" alt="image"></a></li>
                        <li><a href="#" target="_blank"><img src="{{url('frontend/assets/img/payment/visa2.png')}}" alt="image"></a></li>
                        <li><a href="#" target="_blank"><img src="{{url('frontend/assets/img/payment/expresscard.png')}}" alt="image"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
       
    $("#snd_newsletter").click(function(){

      $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $('#snd_newsletter').html('Please Wait...');
      $("#snd_newsletter"). attr("disabled", true);

      $.ajax({
        url: "newsletter_store",       
        type: "POST",
        data: $('#ajaxnewsletter').serialize(),
        success: function( response ) {
          $('#snd_newsletter').html('Submit');
          $("#snd_newsletter"). attr("disabled", false);
         
          $("#txtEmail").val('');
          alert('You are Successfully Signup in our Newsletter');
        }
       });
    });
    
</script>