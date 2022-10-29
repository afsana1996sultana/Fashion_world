@extends('layout.backends.home')
@section("css")
<link rel="stylesheet" href="{{url('backends/assets/modules/summernote/summernote-bs4.css')}}">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
@endsection
@section('page')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>About</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item">About</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{url('about/1')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row"> 
                                    <div class="form-group col-6">
                                        <label for="">Existing Image-1</label>
                                        <div>
                                            <img src="{{asset('img/'.$about->img1)}}" alt="" sizes="" srcset="" height="400px" width="300px"> 
                                        </div>

                                        <div>
                                            <label for="">Image-1</label>
                                            <input type="file" name="fileimg1" class="form-control-file">
                                        </div>
                                    </div>


                                    <div class="form-group col-6">
                                        <label for="">Existing Image-2</label>
                                        <div>
                                            <img src="{{asset('img/'.$about->img2)}}" alt="" sizes="" srcset="" height="400px" width="300px"> 
                                        </div>

                                        <div>
                                            <label for="">Image-2</label>
                                            <input type="file" name="fileimg2" class="form-control-file">
                                        </div>
                                    </div>


                                    <div class="form-group col-6">
                                        <label>Title <span class="text-danger">*</span></label>
                                        <input type="text" name="txtTitle" class="form-control" value="{{$about->title}}">
                                    </div>


                                    <div class="form-group col-6">
                                        <label>Header-1 <span class="text-danger">*</span></label>
                                        <input type="text" name="txtHeading1" class="form-control" value="{{$about->heading1}}">
                                    </div>


                                    <div class="form-group col-6">
                                        <label>Header-2</label>
                                        <input type="text" name="txtHeading2" class="form-control" value="{{$about->heading2}}">
                                    </div>


                                    <div class="form-group col-6">
                                        <label>Other Header</label>
                                        <input type="text" name="txtOtherHeading" class="form-control" value="{{$about->other_heading}}">
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Tab-1</label>
                                        <input type="text" name="txtTab1" class="form-control" value="{{$about->tab1}}">
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Tab-2</label>
                                        <input type="text" name="txtTab2" class="form-control" value="{{$about->tab2}}">
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Tab-3</label>
                                        <input type="text" name="txtTab3" class="form-control" value="{{$about->tab3}}">
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Details <span class="text-danger">*</span></label>
                                        <textarea name="txtDetail" class="summernote">{{$about->detail}}</textarea>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Other Details <span class="text-danger">*</span></label>
                                        <textarea name="txtOtherDetail" class="summernote">{{$about->other_detail}}</textarea>
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
@section('js')
<script src="{{url('backends/assets/modules/summernote/summernote-bs4.js')}}"></script>
@endsection
@endsection