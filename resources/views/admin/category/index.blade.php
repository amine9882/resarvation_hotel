@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>category page</h3>
        <div class="float-right">
            <a href="{{route('category.create')}}" class="btn btn-info" >add category</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>slug</th>
                    <th>description</th>
                    <th>prix</th>
                    <th>image</th>
                    <th>action</th>

                </tr>
            </thead>
            <tbody>
               
                    @foreach ($category as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->slug}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->prix}}</td>
                            <td><img class="cate-image" src="{{ asset('assets/uploads/category/'.$item->image) }}"></td>
                            <td>
                                <a href="{{url ('category/edit', $item->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{url ('category/delete', $item->id)}}" class="btn btn-danger">delete</a>
                            </td>
                        </tr>
                    @endforeach
                    
                
            </tbody>
        </table>
    </div>
</div>



    
@endsection