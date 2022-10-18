@extends('layout.backends.home')
@section('page')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Topbar</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Topbar</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{url('topbar/1')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row"> 
                                    <div class="form-group col-4">
                                        <label for="">Existing Logo</label>
                                        <div>
                                            <img src="{{asset('img/'.$topbar->front_logo)}}" alt="" sizes="" srcset="" height="32px" width="100px"> 
                                        </div>

                                        <div>
                                            <label for="">Logo</label>
                                            <input type="file" name="fileLogo" class="form-control-file">
                                        </div>
                                    </div>


                                    <div class="form-group col-4">
                                        <label for="">Existing White Logo</label>
                                        <div>
                                            <img src="{{asset('img/'.$topbar->front_white_logo)}}" alt="" sizes="" srcset="" height="32px" width="100px"> 
                                        </div>

                                        <div>
                                            <label for="">White Logo</label>
                                            <input type="file" name="fileWhiteLogo" class="form-control-file">
                                        </div>
                                    </div>


                                    <div class="form-group col-6">
                                        <label>Title <span class="text-danger">*</span></label>
                                        <input type="text" name="txtTitle" class="form-control" value="{{$topbar->title}}">
                                    </div>


                                    <div class="form-group col-6">
                                        <label>Phone <span class="text-danger">*</span></label>
                                        <input type="text" name="txtPhone" class="form-control" value="{{$topbar->phone}}">
                                    </div>


                                    <div class="form-group col-6">
                                        <label>Account</label>
                                        <input type="text" name="txtAccount" class="form-control" value="{{$topbar->account}}">
                                    </div>


                                    <div class="form-group col-6">
                                        <label>Login</label>
                                        <input type="text" name="txtLogin" class="form-control" value="{{$topbar->login}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection