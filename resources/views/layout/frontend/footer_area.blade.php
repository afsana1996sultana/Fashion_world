<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>About The Store</h3>
                    <div class="about-the-store">
                        <p>One of the most popular on the web is shopping.</p>
                        <ul class="footer-contact-info">
                        @foreach ($footer as $val)
                            <li><i class='bx bx-map'></i> <a href="#" target="_blank">{{ $val->f_address }}</a></li>
                            <li><i class='bx bx-phone-call'></i> <a href="{{ $val->f_phone }}">{{ $val->f_phone }}</a></li>
                            <li><i class='bx bx-envelope'></i> <a href="mailto:fashionworld@gmail.com"><span>{{ $val->f_email }}</span></a></li>
                        @endforeach
                        </ul>
                    </div>
                    <ul class="social-link">
                        @foreach ($sociallink as $val)
                            <li><a href="{{ $val->slug }}" class="d-block" target="_blank"><i class='{{ $val->icon }}'></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget"style="padding-left:25px;">
                    <h3>Quick Links</h3>
                    <ul class="quick-links">
                    @foreach ($quicklink as $val)
                        <li><a href="{{ $val->slug }}">{{ $val->name }}</a></li>
                    @endforeach
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
                @foreach ($footer as $val)
                <div class="col-lg-6 col-md-6">
                    <p>{{ $val->f_copyright }} <a href="http://sysconsolutionbd.com/" target="_blank">SYSCON Solution Ltd.</a></p>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <ul class="payment-types">
                        <li><a href="" target="_blank"><img src="{{ asset('img/' . $val->visa_img) }}" alt="image"></a></li>
                        <li><a href="" target="_blank"><img src="{{ asset('img/' . $val->mastercard_img) }}" alt="image"></a></li>
                        <li><a href="" target="_blank"><img src="{{ asset('img/' . $val->visa2_img) }}" alt="image"></a></li>
                        <li><a href="" target="_blank"><img src="{{ asset('img/' . $val->mastercard2_img) }}" alt="image"></a></li>
                        <li><a href="" target="_blank"><img src="{{ asset('img/' . $val->expresscard_img) }}" alt="image"></a></li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
       
    $("#snd_newsletter").click(function(){

    //   $.ajaxSetup({
    //     headers: {
    //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    //   });

      $('#snd_newsletter').html('Please Wait...');
      $("#snd_newsletter"). attr("disabled", true);

      $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "newsletter_store",       
        type: "POST",
        data: {
            txtEmail: $('#txtEmail').val(),
        },
        success: function( response ) {
          $('#snd_newsletter').html('Submit');
          $("#snd_newsletter"). attr("disabled", false);
        
          $('#txtEmail').val('');

          alert('You are Successfully Signup in our Newsletter');
        }
       });
    });
    
</script>