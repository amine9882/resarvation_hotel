@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>type d'hebergement </h3>
        <div class="float-right">
            <a href="{{route('Product.create')}}" class="btn btn-info" >Ajoute l'hebergement</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>type</th>
                    <th>nom</th>
                    <th>description</th>
                    <th>photo</th>
                    <th>prix original</th>
                    <th>prix promo</th>
                    <th>nomber de chember</th>
                    <th>tax</th>
                    <th>action</th>

                </tr>
            </thead>
            <tbody>
               
                    @foreach ($products as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->Category->name}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->description}}</td>
                            <td><img class="cate-image" src="{{ asset('assets/uploads/product/'.$item->image) }}"></td>
                            <td>{{$item->original_price}}</td>
                            <td>{{$item->selling_price}}</td>
                            <td>{{$item->qty}}</td>
                            <td>{{$item->tax}}</td>
                            <td>
                                <a href="{{url ('product/edit', $item->id)}}" class="btn btn-primary">Modifie</a>
                                <a href="{{url ('product/delete', $item->id)}}" class="btn btn-danger">Supprimé</a>
                            </td>
                        </tr>
                    @endforeach
                    
                
            </tbody>
        </table>
    </div>
</div>



    
@endsection