{{-- @extends('layouts.front') --}}

@section('title')
    welcome to Shope
@endsection

@section('content')
     @include('layouts.inc.slider')
     @extends('layouts.app')

     <hr>
     
     <section style="background-color: #eee;">
        <div class="container py-5">
          <div class="row justify-content-center">
            <h2>Rechercher par type d'hébergement </h2> 
            @foreach ($featured_products as $prod)
            <div class="col-md-8 col-lg-6 col-xl-4">
              <div class="card text-black">
                <i class="fab fa-apple fa-lg pt-3 pb-1 px-3"></i>
                <img src="{{asset('assets/uploads/product/'.$prod->image)}}"
                  class="card-img-top" alt="Apple Computer" />
                <div class="card-body">
                  <div class="text-center">
                    <h5 class="card-title">{{$prod->name}}</h5>
                    <p class="text-muted mb-4">{{$prod->description}}</p>
                  </div>
                  <div>
                    <div class="d-flex justify-content-between">
                      <span>Nomber de chemner</span><span>{{$prod->qty}}</span>
                    </div>
                    <div class="d-flex justify-content-between">
                      <span>Prix</span><span>{{$prod->selling_price}}€</span>
                    </div>
                    
                  </div>
                  <div class="d-flex justify-content-between total font-weight-bold mt-4">
                    <span>Total</span><span>$7,197.00</span>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
   
@endsection

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

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