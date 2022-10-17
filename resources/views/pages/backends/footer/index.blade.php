@extends('layout.backends.home')
@section('page')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Footer</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Footer</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{url('footer/1')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row"> 
                                    <div class="form-group col-4">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input type="email" name="txtFooteremail" class="form-control" value="{{$footer->f_email}}">
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Phone <span class="text-danger">*</span></label>
                                        <input type="text" name="txtFooterPhone" class="form-control" value="{{$footer->f_phone}}">
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Address <span class="text-danger">*</span></label>
                                        <input type="text" name="txtFooterAddress" class="form-control" value="{{$footer->f_address}}">
                                    </div>

                                    <div class="form-group col-4">
                                        <label for="">Existing Avatar</label>
                                        <div>
                                            <img src="{{asset('img/'.$footer->visa_img)}}" alt="" sizes="" srcset="" height="60px" width="100px"> 
                                        </div>

                                        <div>
                                            <label for="">Visa Card Image</label>
                                            <input type="file" name="filevisaImg" class="form-control-file">
                                        </div>
                                    </div>


                                    <div class="form-group col-4">
                                        <label for="">Existing Avatar</label>
                                        <div>
                                            <img src="{{asset('img/'.$footer->mastercard_img)}}" alt="" sizes="" srcset="" height="60px" width="100px"> 
                                        </div>

                                        <div>
                                            <label for="">Mastercard Image</label>
                                            <input type="file" name="filemastercardImg" class="form-control-file">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group col-4">
                                        <label for="">Existing Avatar</label>
                                        <div>
                                            <img src="{{asset('img/'.$footer->visa2_img)}}" alt="" sizes="" srcset="" height="60px" width="100px"> 
                                        </div>

                                        <div>
                                            <label for="">Visa Card-2 Image</label>
                                            <input type="file" name="filevisa2Img" class="form-control-file">
                                        </div>
                                    </div>
                                    
                                   
                                    <div class="form-group col-4">
                                        <label for="">Existing Avatar</label>
                                        <div>
                                            <img src="{{asset('img/'.$footer->mastercard2_img)}}" alt="" sizes="" srcset="" height="60px" width="100px"> 
                                        </div>

                                        <div>
                                            <label for="">Mastercard-2 Image</label>
                                            <input type="file" name="filemastercard2Img" class="form-control-file">
                                        </div>
                                    </div>
                                    
                                
                                    <div class="form-group col-4">
                                        <label for="">Existing Avatar</label>
                                        <div>
                                            <img src="{{asset('img/'.$footer->expresscard_img)}}" alt="" sizes="" srcset="" height="60px" width="200px"> 
                                        </div>

                                        <div>
                                            <label for="">Expresscard Image</label>
                                            <input type="file" name="fileexpresscard" class="form-control-file">
                                        </div>
                                    </div>

                                    <div class="form-group col-6">
                                        <label>Copyright <span class="text-danger">*</span></label>
                                        <input type="text" name="txtfootercopyright" class="form-control" value="{{$footer->f_copyright}}">
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