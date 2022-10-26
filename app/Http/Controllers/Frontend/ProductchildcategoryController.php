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


        $data['ChildcategoryId'] = Childcategory::where('slug',$request->slug)
        ->join('users','users.id', '=', 'comments.user_id')
        ->select('id','child_c_name','sub_category')->first();



        $data['ProductData'] = Products::where('products.slug',$request->slug)
        ->join('categories','categories.id', '=', 'products.category')
        ->join('brands','brands.id', '=', 'products.brand')
        ->select('categories.c_name', 'brands.name', 'products.*')
        ->first();
        // return $SubcategoryId->id;

        $data['comments'] = Comment::where("blog_id",$blogId->id)
        ->where('reply_id',NULL)
        ->join('users','users.id', '=', 'comments.user_id')
        ->select('users.name', 'comments.*')
        ->orderBy('id','DESC')
        ->get();

        $data['ProductData'] = Product::where('child_category',$data['ChildcategoryId']->id)
        ->paginate(18);

        return view('pages.frontend.product_child_category.index', $data);
    }
}
