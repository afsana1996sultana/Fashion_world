@extends('layout.frontend.master')
@section('main_content')
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Contact Us</h2>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>

<section class="contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="contact-info">
                    <h3>Here to Help</h3>
                    <p>Have a question? You may find an answer in our <a href="{{url('/faqs')}}">FAQs</a>. But you can also contact us.</p>
                    <ul class="contact-list">
                        @foreach ($footer as $val)
                            <li><i class='bx bx-map'></i> <span>{{ $val->f_address }}</span></li>
                            <li><i class='bx bx-phone-call'></i> <a href="tel:{{ $val->f_phone }}">{{ $val->f_phone }}</a></li>
                            <li><i class='bx bx-envelope'></i> <a href="mailto:{{ $val->f_email }}"><span>{{ $val->f_email }}</span></a></li>
                        @endforeach
                    </ul>

                    <h3>Opening Hours:</h3>
                    <ul class="opening-hours">
                        <li><span>Saturday:</span> 9AM - 6PM</li>
                        <li><span>Sunday:</span> 9AM - 6PM</li>
                        <li><span>Monday:</span> 9AM - 6PM</li>
                        <li><span>Tuesday:</span> 9AM - 6PM</li>
                        <li><span>Wednesday:</span> 9AM - 6PM</li>
                        <li><span>Thursday:</span> 9AM - 6PM</li>
                        <li><span>Friday:</span> Closed</li>
                    </ul>

                    <h3>Follow Us:</h3>
                    <ul class="social">
                        @foreach ($sociallink as $val)
                            <li><a href="{{ $val->slug }}" target="_blank"><i class='{{ $val->icon }}'></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="contact-form">
                    <h3>Drop Us A Line</h3>
                    <p>We're happy to answer your any kind's of questions. Just send us a message in the form below with any questions you may have.</p>
                    <form class="contactForm" id="ajaxmsg">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label>Name <span>*</span></label>
                                    <input type="text" name="txtName" id="txtName" class="form-control" required data-error="Please enter your name" placeholder="Your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label>Email <span>*</span></label>
                                    <input type="email" name="txtEmail" id="txtEmail" class="form-control" required data-error="Please enter your email" placeholder="Your email address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Phone Number <span>*</span></label>
                                    <input type="text" name="txtPhone" id="txtPhone" class="form-control" required data-error="Please enter your phone number" placeholder="Your phone number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Your Message <span>*</span></label>
                                    <textarea name="txtMessage" id="txtMessage" cols="30" rows="5" required data-error="Please enter your message" class="form-control" placeholder="Write your message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button id="snd_msg" class="default-btn">Send Message</button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14593.733793209936!2d90.38355310781252!3d23.874243900000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c43bb8667045%3A0x5b590c64dc118a40!2sFashion%20World!5e0!3m2!1sen!2sbd!4v1667105362387!5m2!1sen!2sbd" width="1340" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

$("#snd_msg").click(function(){

  $('#snd_msg').html('Please Wait...');
  $("#snd_msg"). attr("disabled", true);

  $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: "message_store",       
    type: "POST",
    data: {
        txtName: $('#txtName').val(),
        txtEmail: $('#txtEmail').val(),
        txtPhone: $('#txtPhone').val(),
        txtMessage: $('#txtMessage').val(),
    },
    success: function( response ) {
      $('#snd_msg').html('Submit');
      $("#snd_msg"). attr("disabled", false);
    
      $('#txtName').val('');
      $('#txtEmail').val('');
      $('#txtPhone').val('');
      $('#txtMessage').val('');

      alert('Your Message has been submitted successfully');
    }
   });
});
    
</script>
@endsection