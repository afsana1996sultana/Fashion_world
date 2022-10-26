@extends('layout.backends.home')
@section("css")
<link rel="stylesheet" href="{{url('backends/assets/modules/summernote/summernote-bs4.css')}}">
@endsection

@section('page')
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Edit Products</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
              <div class="breadcrumb-item">Edit Products</div>
            </div>
		</div>
        <div class="section-body">
            <a href="{{url('products')}}" class="btn btn-primary"><i class="fas fa-list"></i> Products</a>
            <div class="row mt-4">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="{{url('products/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')                        
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>Thumbnail Image Preview</label>
                                    <div>
                                        <img id="preview-img" src="{{asset('img/'.$product->img)}}" alt="" sizes="" srcset="" height="120px" width="160px"> 
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label>Thumnail Image <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control-file"  name="file_img" onchange="previewThumnailImage(event)">
                                </div>

                                <div class="form-group col-12">
                                    <label>Current Product Image</label>
                                    <div>
                                    <img src="{{asset('img/'.$product->banner_img)}}" alt="" sizes="" srcset="" height="120px" width="160px"> 
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label>Product Image <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control-file"  name="file_bannerimg">
                                </div>

                                <div class="form-group col-12">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <input type="text" id="txtName" class="form-control"  name="txtName" value="{{$product->p_name}}">
                                </div>

                                <div class="form-group col-12">
                                    <label>Slug <span class="text-danger">*</span></label>
                                    <input type="text" id="txtSlug" class="form-control"  name="txtSlug" value="{{$product->slug}}">
                                </div>

                                <div class="form-group col-12">
                                    <label>Model No: <span class="text-danger">*</span></label>
                                    <input type="text" id="txtModelNo" class="form-control"  name="txtModelNo" value="{{$product->model_no}}">
                                </div>

                                <div class="form-group col-12">
                                    <label>Category <span class="text-danger">*</span></label>
                                    <select id="txtCategory" class="form-control" name="txtCategory">
                                        <option selected><-----Choose Category----></option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ ( $category->id == $product->category) ? 'selected' : '' }}>
                                            {{ $category->c_name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <script>
                                    $('#txtCategory').change(function(){                            

                                        $.ajax({
                                        type:'GET',
                                        url:"{{route('for-sub-cat')}}",
                                        data: {id:$(this).val(),},
                                        success:function(response){
                                        $('#txtSubcategory').html(response);
                                        }
                                        });

                                    })
                                </script>

                                <div class="form-group col-12">
                                    <label>Sub Category <span class="text-danger">*</span></label>
                                    <select id="txtSubcategory" class="form-control" name="txtSubcategory">
                                        <option selected><-----Choose Category----></option>
                                        @foreach ($subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}" {{ ( $subcategory->id == $product->sub_category) ? 'selected' : '' }}>
                                            {{ $subcategory->sub_c_name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <script>
                                    $('#txtSubcategory').change(function(){                            

                                        $.ajax({
                                        type:'GET',
                                        url:"{{route('for-child-cat')}}",
                                        data: {id:$(this).val(),},
                                        success:function(response){
                                        $('#txtChildcategory').html(response);
                                        }
                                        });

                                    })
                                </script>

                                <div class="form-group col-12">
                                    <label>Child Category <span class="text-danger">*</span></label>
                                    <select id="txtChildcategory" class="form-control" name="txtChildcategory">
                                        <option selected><-----Choose Category----></option>
                                        @foreach ($childcategories as $childcategory)
                                        <option value="{{ $childcategory->id }}" {{ ( $childcategory->id == $product->child_category) ? 'selected' : '' }}>
                                            {{ $childcategory->child_c_name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <label>Brand <span class="text-danger">*</span></label>
                                    <select id="txtBrand" class="form-control" name="txtBrand">
                                        <option selected><-----Choose Category----></option>
                                        @foreach ($brand as $val)
                                        <option value="{{ $val->id }}" {{ ( $val->id == $product->brand) ? 'selected' : '' }}>
                                            {{ $val->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <label>Purchase Scaner</label>
                                    <select name="txtPurchaseScane" id="txtPurchaseScane" class="form-control">
                                        <option value="1" {{$product->purchase_scane==1 ? "selected" : ""}}>Barcode</option>
                                        <option value="2" {{$product->purchase_scane==2 ?  "selected" : ""}}>Serial No</option>
                                        <option value="3" {{$product->purchase_scane==3 ?  "selected" : ""}} >IMI No</option>
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <label>Unit <span class="text-danger">*</span></label>
                                    <select id="txtUnit" class="form-control" name="txtUnit">
                                        <option selected><-----Choose Category----></option>
                                        @foreach ($unit as $val)
                                        <option value="{{ $val->id }}" {{ ( $val->id == $product->unit) ? 'selected' : '' }}>
                                            {{ $val->unit_name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <label>Price <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="txtPrice" value="{{$product->price}}">
                                </div>

                                <div class="form-group col-12">
                                    <label>Offer Price</label>
                                    <input type="text" class="form-control" name="txtOfferPrice" value="{{$product->offer_price}}">
                                </div>

                                <div class="form-group col-12">
                                    <label>Stock Quantity <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="txtStockQuantity" value="{{$product->stock_quantity}}">
                                </div>

                                <div class="form-group col-12">
                                    <label>Short Description <span class="text-danger">*</span></label>
                                    <textarea name="txtShortDescription" id="" cols="30" rows="10" class="form-control text-area-5">{{$product->short_description}}</textarea>
                                </div>

                                <div class="form-group col-12">
                                    <label>Long Description <span class="text-danger">*</span></label>
                                    <textarea name="txtLongDescription" id="txtLongDescription" class="summernote">{{$product->long_description}}</textarea>
                                </div>

                                <div class="form-group col-12">
                                    <label>Tags</label>
                                    <input type="text" class="form-control" name="txtTag" value="{{$product->tag}}">
                                </div>


                                <div class="form-group col-12">
                                    <label>Tax <span class="text-danger">*</span></label>
                                    <select name="txtTax" id="txtTax" class="form-control">
                                        <option value="1" {{$product->tax==1 ? "selected" : ""}}>Yes</option>
                                        <option value="0" {{$product->tax==0 ? "selected" : ""}}>No</option>
                                    </select>
                                </div>


                                <div class="form-group col-12">
                                    <label>Warranty Available ?  <span class="text-danger">*</span></label>
                                    <select name="txtWarranty" id="txtWarranty" class="form-control">
                                        <option value="1" {{$product->warranty==1 ? "selected" : ""}}>Yes</option>
                                        <option value="0" {{$product->warranty==0 ? "selected" : ""}}>No</option>
                                    </select>
                                </div>
                                
                                <div class="form-group col-12">
                                    <label class="col-form-label">Status</label>
                                    <select id="txtStatus" class="form-control" name="txtStatus" required>
                                        @foreach ($status as $val)
                                        <option value="{{ $val->id }}" {{ ( $val->id == $product->status) ? 'selected' : '' }}>
                                            {{ $val->s_name }}
                                        </option>
                                        @endforeach
                                    </select>  
                                </div>

                                <div class="form-group col-12">
                                    <label>SEO Title</label>
                                    <input type="text" class="form-control" name="txtSeoTitle" id="txtSeoTitle" value="{{$product->seo_title}}">
                                </div>

                                <div class="form-group col-12">
                                    <label>SEO Description</label>
                                    <textarea name="txtSeoDescription" id="txtSeoDescription" cols="30" rows="10" class="form-control text-area-5">{{$product->seo_description}}</textarea>
                                </div>
                            </div>

                            <div class="row pt-4">
                                <div class="col-12">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@section('js')
<script src="{{url('backends/assets/modules/summernote/summernote-bs4.js')}}"></script>
<script>
$(document).ready(function () {
    $('.summernote').summernote();
});

function previewThumnailImage(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('preview-img');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
};
</script>
@endsection
@endsection