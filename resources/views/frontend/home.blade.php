@section('title')
    welcome to Shope
@endsection

@section('content')
     @include('layouts.inc.slider')
     @extends('layouts.app')

     <hr>
     
    
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2> Rechercher par type d'hébergement </h2>
                {{-- <div class="owl-carousel featured-carousel owl-theme element1"> --}}
                    @foreach ($featured_products as $prod)
                        <div class="col-md-3 mt-3">
                            <div style="height: 600px" class="card">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" height="200px" class="card-img-top" alt="product">
                                <div class="card-body">
                                  <h5 class="card-title">{{$prod->name}}</h5>
                                  <p class="card-text">{{$prod->description}}</p>
                                  <span class="float-start">{{$prod->selling_price}}DZ</span>
                                  <span class="float-end"><s>{{$prod->original_price}}DZ</s></span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                {{-- </div> --}}
               
            </div>
        </div>
    </div>
@endsection
