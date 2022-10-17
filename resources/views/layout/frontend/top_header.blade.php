<div class="top-header">
    <div class="container">
        <div class="row align-items-center">
        @foreach ($topbar as $val)
            <div class="col-lg-6 col-md-12">
                <ul class="header-contact-info">
                    <li>{{ $val->title }}</li>
                    <li>Call: <a href="tel:+01321654214">{{ $val->phone }}</a></li>
                </ul>
            </div>
            
            <div class="col-lg-6 col-md-12">
                <ul class="header-top-menu">
                    <li><a href=""><i class='bx bxs-user'></i> {{ $val->account }}</a></li>
                    <li><a href=""><i class='bx bx-log-in'></i> {{ $val->login }}</a></li>
                </ul>
            </div>
        @endforeach
        </div>
    </div>
</div>