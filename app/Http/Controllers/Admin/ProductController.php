<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Traits\UploadPhotos ;
class ProductController extends Controller
{
    use UploadPhotos;
 public function index()
 {
    $products = Product::with('Category')->get();
    return view('admin.product.index',compact('products'));
 }
 public function create()
    {
       
        $category= Category::all();
        return view('admin.product.add',compact('category'));
    }
 public function store(Request $request)
    {

        $file_name = $this->savePhotos($request->image , 'assets/uploads/product') ;

        product::create([
        'cate_id' => $request->cate_id, 
        'name' => $request->name, 
        'description' => $request->description, 
        'original_price' => $request->original_price,
        'selling_price' => $request->selling_price,
        'image' => $file_name,
        'qty' => $request->qty,
        'tax'=> $request->tax,
        'status' => $request->status == TRUE ? '1':'0',
        'trending' => $request->popular == TRUE ? '1':'0',
       ]);

       return redirect()->route('dashboard')->with("status","products added Successfully");
       
    } 
    public function edit($id)
    {
        $product = Product::find($id) ;

        if(!$product){
            return redirect()->back() ;
        }
        return view('admin.product.edit',compact('product'));

    }

    
    public function update(Request $request,$id)
    {
        $product = Product::find($id);

        if($request -> hasFile('image'))
        {
            $path ='assets/uploads/product/'.$product->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file_name = $this->savePhotos($request->image , 'assets/uploads/product');
        }
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->original_price = $request->input('selling_price');
        $product->image = $file_name;
        $product->qty = $request->input('qty');
        $product->tax = $request->input('tax');
        $product->status = $request->input('status')== TRUE ?'1':'0';
        $product->trending = $request->input('trending')== TRUE ?'1':'0';
        $product->update();
         return redirect('products')->with("status","product update Successfully");
        
    }   

    public function delete ($id)
    {
        $product = Product::find($id);
        if($product->image)
        {
            $path ='assets/uploads/product/'.$product->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $product->delete();
        return redirect('products')->with("status","products delete Successfully");
    }
}
