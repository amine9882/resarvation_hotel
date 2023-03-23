<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Http\Traits\UploadPhotos ;


class CategoryController extends Controller{

    use UploadPhotos;
    public function index()
    {
        $category = category::all();
        return view('admin.category.index',compact('category'));
    }
    public function create()
    {
        return view('admin.category.add');
    }
    public function store(Request $request)
    {

        $file_name = $this->savePhotos($request->image , 'assets/uploads/category') ;

       Category::create([
        'name' => $request->name , 
        'slug' => $request->slug, 
        'description' => $request->description,
        'image' => $file_name,
        'status' => $request->status == TRUE ? '1':'0',
        'popular' => $request->popular == TRUE ? '1':'0',
       ]);

       return redirect()->route('dashboard')->with("status","category added Successfully");
       
    }

    public function edit($id)
    {
        $category = Category::find($id) ;

        if(!$category){
            return redirect()->back() ;
        }
        return view('admin.category.edit',compact('category'));

    }

    
    public function update(Request $request,$id)
    {
        $category = Category::find($id) ;
        $file_name = "";
        if($request -> hasFile('image'))
        {
            $path ='assets/uploads/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file_name = $this->savePhotos($request->image , 'assets/uploads/category');
        }
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->image = $file_name;
        $category->status = $request->input('status')== TRUE ?'1':'0';
        $category->popular = $request->input('popular')== TRUE ?'1':'0';
        $category->update();
         return redirect('categories')->with("status","category update Successfully");
        
    } 

    public function delete ($id)
    {
        $category = Category::find($id);
        if($category->image)
        {
            $path ='assets/uploads/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $category->delete();
        return redirect('categories')->with("status","category delete Successfully");
    }

}
