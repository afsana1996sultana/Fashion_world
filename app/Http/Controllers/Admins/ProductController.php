<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Childcategory;
use App\Models\Brand;
use App\Models\Status;
use App\Models\Unit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function showSubCat(Request $request){      

        $subcat = Subcategory::where('category',$request->id)->get();

        $html="<option selected><-----Choose Sub-Category----></option>";

        foreach($subcat as $val){
            $html .='<option value='.$val->id.'>' .$val->sub_c_name. '</option>';
        }
        return $html;

    }

    public function showChildCat(Request $request){      

        $childcat = Childcategory::where('sub_category',$request->id)->get();

        $html="<option selected><-----Choose Child-Category----></option>";

        foreach($childcat as $val){
            $html .='<option value='.$val->id.'>' .$val->child_c_name. '</option>';
        }
        return $html;

    }

    public function index()
    {
        $categories=Category::all();
        $subcategories=Subcategory::all();
        $childcategories=Childcategory::all();
        $brand=Brand::all();
        $status=Status::all();
        $unit=Unit::all();

        $product =DB::table('products')
             ->join('categories','categories.id', '=', 'products.category')
             ->join('subcategories','subcategories.id', '=', 'products.sub_category')
             ->join('childcategories','childcategories.id', '=', 'products.child_category')
             ->join('brands','brands.id', '=', 'products.brand')
             ->join('statuses','statuses.id', '=', 'products.status')
             ->join('units','units.id', '=', 'products.unit')
             ->select('products.*','categories.c_name','subcategories.sub_c_name','childcategories.child_c_name','brands.name','statuses.s_name', 'units.unit_name')
             ->get();

            return view("pages.backends.product.index",["product"=>$product, "categories"=>$categories, "subcategories"=>$subcategories, "childcategories"=>$childcategories, "brand"=>$brand, "status"=>$status, "unit"=>$unit]);
        
    }

    
    public function create()
    {
        $product=Product::all();
        $categories=Category::all();
        $subcategories=Subcategory::all();
        $childcategories=Childcategory::all();
        $brand=Brand::all();
        $status=Status::all();
        $unit=Unit::all();
       
        return view("pages.backends.product.create",["product"=>$product, "categories"=>$categories, "subcategories"=>$subcategories, "childcategories"=>$childcategories, "brand"=>$brand, "status"=>$status, "unit"=>$unit]);
    }


    public function store(Request $request){
        $product=new Product;
        $product->p_name=$request->txtName;
        $product->slug=$request->txtSlug;
        $product->model_no=$request->txtModelNo;
        $product->category=$request->txtCategory;
        $product->sub_category=$request->txtSubcategory;
        $product->child_category=$request->txtChildcategory;
        $product->brand=$request->txtBrand;
        $product->purchase_scane=$request->txtPurchaseScane;
        $product->unit=$request->txtUnit;
        $product->price=$request->txtPrice;
        $product->offer_price=$request->txtOfferPrice;
        $product->stock_quantity=$request->txtStockQuantity;
        $product->short_description=$request->txtShortDescription;
        $product->long_description=$request->txtLongDescription;
        $product->tag=$request->txtTag;
        $product->tax=$request->txtTax;
        $product->warranty=$request->txtWarranty;
        $product->seo_title=$request->txtSeoTitle;
        $product->seo_description=$request->txtSeoDescription;
        $product->status=$request->txtStatus;
        $product->deleted_at=$request->txtDeleted_at;

        if(isset($request->file_img)){
            $imgName = time().(rand(100,1000)).'.'.$request->file_img->extension();
            $product->img=$imgName;
            $product->update();
            $request->file_img->move(public_path('img'),$imgName);
        }


        if(isset($request->file_bannerimg)){
            $imgName = time().(rand(100,1000)).'.'.$request->file_bannerimg->extension();
            $product->banner_img=$bannerimgName;
            $product->update();
            $request->file_bannerimg->move(public_path('img'),$bannerimgName);
        }

        $product->save();
        //dd($product);        
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
        $product=Product::find($id);
        $categories=Category::all();
        $subcategories=Subcategory::all();
        $childcategories=Childcategory::all();
        $brand=Brand::all();
        $status=Status::all();
        $unit=Unit::all();    
        return view("pages.backends.product.edit",["product"=>$product, "categories"=>$categories, "subcategories"=>$subcategories, "childcategories"=>$childcategories, "brand"=>$brand, "status"=>$status, "unit"=>$unit]);
		
	}


    public function update(Request $request,$id){
        $product = Product::find($id);

        if(isset($request->txtName)){
        $product->p_name=$request->txtName;
        }

        if(isset($request->txtSlug)){
        $product->slug=$request->txtSlug;
        }

        if(isset($request->txtModelNo)){
        $product->model_no=$request->txtModelNo;
        }

        if(isset($request->txtCategory)){
        $product->category=$request->txtCategory;
        } 

        if(isset($request->txtSubcategory)){
        $product->sub_category=$request->txtSubcategory;
        } 

        if(isset($request->txtChildcategory)){
        $product->child_category=$request->txtChildcategory;
        } 

        if(isset($request->txtBrand)){
        $product->brand=$request->txtBrand;
        } 

        if(isset($request->txtPurchaseScane)){
        $product->purchase_scane=$request->txtPurchaseScane;
        } 

        if(isset($request->txtUnit)){
        $product->unit=$request->txtUnit;
        } 

        if(isset($request->txtPrice)){
        $product->price=$request->txtPrice;
        } 

        if(isset($request->txtOfferPrice)){
        $product->offer_price=$request->txtOfferPrice;
        } 

        if(isset($request->txtStockQuantity)){
        $product->stock_quantity=$request->txtStockQuantity;
        } 

        if(isset($request->txtShortDescription)){
        $product->short_description=$request->txtShortDescription;
        } 

        if(isset($request->txtLongDescription)){
        $product->long_description=$request->txtLongDescription;
        } 

        if(isset($request->txtTag)){
        $product->tag=$request->txtTag;
        } 

        if(isset($request->txtTax)){
        $product->tax=$request->txtTax;
        } 

        if(isset($request->txtWarranty)){
        $product->warranty=$request->txtWarranty;
        } 

        if(isset($request->txtSeoTitle)){
        $product->seo_title=$request->txtSeoTitle;
        } 

        if(isset($request->txtSeoDescription)){
        $product->seo_description=$request->txtSeoDescription;
        } 

        if(isset($request->txtStatus)){
        $product->status=$request->txtStatus;
        }

        if(isset($request->file_img)){
            $imgName = time().(rand(100,1000)).'.'.$request->file_img->extension();
            $product->img=$imgName;
            $request->file_img->move(public_path('img'),$imgName);
        }
        
        if(isset($request->file_bannerimg)){
            $imgName = time().(rand(100,1000)).'.'.$request->file_bannerimg->extension();
            $product->banner_img=$bannerimgName;
            $request->file_bannerimg->move(public_path('img'),$bannerimgName);
        }

        $product->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $productid=$request->input('d_product');
		$product= Product::find($productid);
		$product->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
