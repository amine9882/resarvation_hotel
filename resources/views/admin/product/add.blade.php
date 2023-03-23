@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>add Products </h3>
    
    </div>
    <div class="card-body">
           <form action="{{ Route('Product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="cate_id" aria-label="Default select example">
                            <option value="" >select a category</option>
                            @foreach ($category as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                            
                          </select>
                      </div>
                    <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">name</label>
                        <input type="text" name="name" class="form-control"> 
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" name="description" placeholder="description" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">description</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        
                            <label for="floatingTextarea2">original_price</label>
                            <input  class="form-control" type="number" name="original_price">
                        
                    </div> 

                    <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">selling_price</label>
                        <input type="number" name="selling_price" class="form-control"> 
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="formFile" class="form-label">image</label>
                        <input class="form-control" name="image" type="file" id="formFile">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">qty</label>
                        <input type="number" name="qty" class="form-control"> 
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">tax</label>
                        <input type="number" name="tax" class="form-control"> 
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="status"  id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                            status
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="trending"  id="flexCheckIndeterminate1">
                        <label class="form-check-label" for="flexCheckIndeterminate1">
                            trending
                        </label>
                    </div>
                    <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">add</button>
                    </div>   
                </div>
           </form>
    </div>
</div>
    
@endsection