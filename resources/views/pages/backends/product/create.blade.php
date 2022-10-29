@extends('layout.backends.home')
@section("css")
<link rel="stylesheet" href="{{url('backends/assets/modules/summernote/summernote-bs4.css')}}">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
@endsection

@section('page')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Create Product</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Create Product</div>
            </div>
        </div>

        <div class="section-body">
            <a href="{{url('products')}}" class="btn btn-primary"><i class="fas fa-list"></i> Products</a>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Thumbnail Image Preview</label>
                                        <div>
                                            <img id="preview-img" class="admin-img" src="{{url('backends/assets/img/preview.png')}}" alt="" height="120px" width="120px">
                                        </div>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Thumnail Image <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control-file"  name="file_img" onchange="previewThumnailImage(event)">
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Product Image <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control-file"  name="file_bannerimg">
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" id="txtName" class="form-control"  name="txtName" required>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Slug <span class="text-danger">*</span></label>
                                        <input type="text" id="txtSlug" class="form-control"  name="txtSlug" required>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Model No: <span class="text-danger">*</span></label>
                                        <input type="text" id="txtModelNo" class="form-control"  name="txtModelNo" required>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Category <span class="text-danger">*</span></label>
                                        <select id="txtCategory" class="form-control" name="txtCategory" required>
                                            <option selected><-----Choose Category----></option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->c_name }}</option>
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
                                        <label>Sub Category</label>
                                        <select id="txtSubcategory" class="form-control" name="txtSubcategory" required>
                                            <option selected><-----Choose Sub-Category----></option>
                                            @foreach ($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}">{{ $subcategory->sub_c_name }}</option>
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
                                        <label>Child Category</label>
                                        <select id="txtChildcategory" class="form-control" name="txtChildcategory">
                                            <option selected><-----Choose Child-Category----></option>
                                            @foreach ($childcategories as $childcategory)
                                            <option value="{{ $childcategory->id }}">{{ $childcategory->child_c_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Brand <span class="text-danger">*</span></label>
                                        <select id="txtBrand" class="form-control" name="txtBrand">
                                            <option selected><-----Choose Brands----></option>
                                            @foreach ($brand as $val)
                                            <option value="{{ $val->id }}">{{ $val->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Purchase Scaner</label>
                                        <select name="txtPurchaseScane" id="txtPurchaseScane" class="form-control">
                                            <option value="">Select Scaner</option>
                                            <option value="1">Barcode</option>
                                            <option value="2">Serial No</option>
                                            <option value="3">IMI No</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Unit</label>
                                        <select id="txtUnit" class="form-control" name="txtUnit" required>
                                            <option selected><-----Select Unit----></option>
                                            @foreach ($unit as $val)
                                            <option value="{{ $val->id }}">{{ $val->unit_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Price <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="txtPrice" required>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Offer Price</label>
                                        <input type="text" class="form-control" name="txtOfferPrice">
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Stock Quantity <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" name="txtStockQuantity" required>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Short Description <span class="text-danger">*</span></label>
                                        <textarea name="txtShortDescription" id="" cols="30" rows="10" class="form-control text-area-5"></textarea>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Long Description <span class="text-danger">*</span></label>
                                        <textarea name="txtLongDescription" id="txtLongDescription" class="summernote"></textarea>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Tags</label>
                                        <input type="text" class="form-control" name="txtTag">
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Tax<span class="text-danger">*</span></label>
                                        <select name="txtTax" id="txtTax" class="form-control">
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Warranty Available ?  <span class="text-danger">*</span></label>
                                        <select name="txtWarranty" id="txtWarranty" class="form-control">
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Status <span class="text-danger">*</span></label>
                                        <select id="txtStatus" class="form-control" name="txtStatus" required>
                                            <option selected><-----Select Status----></option>
                                            @foreach ($status as $val)
                                            <option value="{{ $val->id }}">{{ $val->s_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>SEO Title</label>
                                        <input type="text" class="form-control" name="txtSeoTitle" id="txtSeoTitle" required>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>SEO Description</label>
                                        <textarea name="txtSeoDescription" id="txtSeoDescription" cols="30" rows="10" class="form-control text-area-5"></textarea>
                                    </div>
                                </div>
  
                                <div class="row pt-4">
                                    <div class="col-12">
                                        <button class="btn btn-primary">Save</button>
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
<script>
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