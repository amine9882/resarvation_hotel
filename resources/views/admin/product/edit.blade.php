@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>edit Products </h3>
    
    </div>
    <div class="card-body">
           <form action="{{ Route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option value="" >{{ $product->Category->name}}</option>
                          </select>
                      </div>
                    <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">name</label>
                        <input type="text" name="name" value="{{$product->name}}" class="form-control"> 
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" name="description" placeholder="description" id="floatingTextarea2" style="height: 100px">{{$product->description}}</textarea>
                            <label for="floatingTextarea2">description</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        
                            <label for="floatingTextarea2">original_price</label>
                            <input  class="form-control" value="{{$product->original_price}}" type="number" name="original_price">
                        
                    </div> 

                    <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">selling_price</label>
                        <input type="number" name="selling_price" value="{{$product->selling_price}}" class="form-control"> 
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="formFile" class="form-label">image</label>
                        <input class="form-control" name="image" type="file" id="formFile">
                        @if($product->image)
                         <img src="{{asset('assets/uploads/product/'.$product->image)}}" style="width: 100px;" alt="category-image">
                        @endif
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">qty</label>
                        <input type="number" name="qty" value="{{$product->qty}}" class="form-control"> 
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">tax</label>
                        <input type="number" name="tax" value="{{$product->tax}}" class="form-control"> 
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="status" {{$product->status == "1" ? 'checked' : ''}} id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                            status
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="trending" {{$product->trending == "1" ? 'checked' : ''}} id="flexCheckIndeterminate2">
                        <label class="form-check-label" for="flexCheckIndeterminate2">
                            trending
                        </label>
                    </div>
                    <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">update</button>
                    </div>   
                </div>
           </form>
    </div>
</div>
    
@endsection