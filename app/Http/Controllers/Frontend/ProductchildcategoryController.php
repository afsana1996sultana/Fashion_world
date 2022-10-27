<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Childcategory;
use App\Models\Subcategory;

class ProductchildcategoryController extends Controller
{
    public function product_child_category(Request $request){

    $data['ChildcategoryId'] = Childcategory::where('slug',$request->slug)->select('id','child_c_name')->first();

        // return $request;

        // $data['ChildcategoryId'] = Childcategory::where('slug',$request->slug)
        // ->join('subcategories','subcategories.id', '=', 'childcategories.sub_category')
        // ->select('subcategories.sub_c_name','childcategories.*')
        // ->first();
        
        $data['ProductData'] = Product::where('child_category',$data['ChildcategoryId']->id)
        ->paginate(18);

        return view('pages.frontend.product_child_category.index', $data);
    }
}
