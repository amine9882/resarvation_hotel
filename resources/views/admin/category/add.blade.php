@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Ajoute </h3>
    
    </div>
    <div class="card-body">
           <form action="{{ route('category.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">nom</label>
                        <input type="text" name="name" class="form-control"> 
                      </div>
                      
                    <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">type</label>
                        <input type="text" name="slug" class="form-control"> 
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <label for="floatingTextarea2">description</label><br>
                            <textarea class="form-control" name="description"  id="floatingTextarea2" style="height: 100px"></textarea> 
                        </div>
                    </div> 
                   
                    <div class="col-md-12 mb-3">
                        <label for="formFile" class="form-label">photos</label>
                        <input class="form-control" name="image" type="file" id="formFile">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="status"  id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                            status
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="popular"  id="flexCheckIndeterminate2">
                        <label class="form-check-label" for="flexCheckIndeterminate2">
                            popular
                        </label>
                    </div>
                    <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Ajoute</button>
                    </div>   
                </div>
           </form>
    </div>
</div>
    
@endsection