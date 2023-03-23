{{-- @extends('layouts.front') --}}

@section('title')
    welcome to Shope
@endsection

@section('content')
     @include('layouts.inc.slider')
     @extends('layouts.app')

     <hr>
     
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                   
                 
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
       
                            </div>
                        @endif
    
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Claviers, souris </h2>
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



{{-- @section('scripts')
<script>
    $('.featured-carousel').owlCarousel(
        {
            loop:true,
            margin:10,
            nav:true,

            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        }
    )
</script>
    
@endsection --}}