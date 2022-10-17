<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Crosslink</title>
  <!-- <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('style.css')}}">
<style>
    .html body{
        height: 100%;
        background-repeat: no-repeat;    /*background-image: linear-gradient(rgb(12, 97, 33),rgb(104, 145, 162));*/
        background:black;
        position: relative;
    }
    .card{
        position: absolute;
        top: 150px;
        left: 50%;
        transform: translateX(-50%);
        min-width: 650px;
        margin: 0 auto;
        border: 1px solid black;
        background: rgba(48, 46, 45, 1);
        min-height: 150px;
        padding: 20px;
        z-index: 9999;
    }
    .card-header{
        color: white;
        font-size: 20px;
        font-weight: bold;
    }
    .card-body{
        padding-top: 20px;
        
    }

    .card-body button.btn-custom {
        border-radius: 2px;
        /* margin-top: 8px; */
        background:#FDE428;
        border-color: rgba(48, 46, 45, 1);
        color: white;
    }
    .card-body button.btn-custom:hover{
        -webkit-transition: all 500ms ease;
        -moz-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
        transition: all 500ms ease;
        background: rgba(48, 46, 45, 1);
        border-color: #FDE428;
    }
    .text-md-end{
        color: white;
        font-size: 18px;
        font-weight: bold;
        width: 157px;
        padding-top: 5px;
    }

    .form-control{
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
    }
</style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4" style="margin-left: 12px;">
                                <button type="submit" class="btn btn-default btn-block btn-custom">Send Password Reset Link</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="particles-js"></div>
<!-- partial -->
<!-- <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'></script> -->
<script src='https://code.jquery.com/jquery-1.11.1.min.js'></script>
<script src="{{asset('script.js')}}"></script>
</body>
</html>
