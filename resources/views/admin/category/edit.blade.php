@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>edit category </h3>
    
    </div>
    <div class="card-body">
        @if($category)
           <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">name</label>
                        <input type="text" name="name" value="{{$category->name}}" class="form-control"> 
                      </div>
                      
                    <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">slug</label>
                        <input type="text" name="slug" value="{{$category->slug}}" class="form-control"> 
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <label for="floatingTextarea2">description</label><br>
                            <textarea class="form-control" name="description" id="floatingTextarea2" style="height: 100px">{{$category->description}}</textarea> 
                        </div>
                    </div> 
                   
                    
                    <div class="col-md-12 mb-3">
                        <label for="formFile" class="form-label">image</label>
                        <input class="form-control" name="image" type="file" id="formFile">
                        @if($category->image)
                         <img src="{{asset('assets/uploads/category/'.$category->image)}}" style="width: 100px;" alt="category-image">
                        @endif
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" {{$category->status}} type="checkbox" name="status"  id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                            status
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" {{$category->popular}} name="popular" id="flexCheckIndeterminate2">
                        <label class="form-check-label" for="flexCheckIndeterminate2">
                            popular
                        </label>
                    </div>
                    <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">update</button>
                    </div>   
                </div>
           </form>
        @endif
    </div>
</div>
    
@endsection