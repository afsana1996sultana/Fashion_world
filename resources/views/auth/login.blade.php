<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Crosslink</title>
  <!-- <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'> -->
  <link rel="stylesheet" href="{{asset('style.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div id="login-box">
		<div class="logo">
			<img src="" class="img img-responsive img-circle center-block"/>
			<h1 class="logo-caption"><span class="tweak">Fashion</span>House</h1>
		</div><!-- /.logo -->
        <form method="POST" action="{{ route('login') }}">
          @csrf
            <div class="controls">
                <input type="email" class="form-control @error('email') is-invalid @enderror radius-30 ps-5" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus/><br>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" class="form-control @error('password') is-invalid @enderror radius-30 ps-5" name="password" id="password" placeholder="Password" required autocomplete="current-password" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button type="submit" class="btn btn-default btn-block btn-custom">Login</button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a> 
                @endif                      
            </div>
        </form>
	</div>
</div>
<div id="particles-js"></div>
<!-- partial -->
<!-- <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'></script> -->
<script src='https://code.jquery.com/jquery-1.11.1.min.js'></script>
<script src="{{asset('script.js')}}"></script>
</body>
</html>
