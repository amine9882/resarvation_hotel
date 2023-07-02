
<html>
    <head>
        <title>collection</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    
     
<h1>collection</h1>
<section>
    <div class="container py-5">
      <div class="row justify-content-center">
        <h2>Rechercher par type d'hébergement </h2> 
        @foreach ($category as $item)
        <div class="col-md-8 col-lg-6 col-xl-4">
            
          <div class="card text-black">
            <i class="fab fa-apple fa-lg pt-3 pb-1 px-3"></i>
            <img src="{{asset('assets/uploads/category/'.$item->image)}}"
              class="card-img-top" alt="Apple Computer" />
            <div class="card-body">
              <div class="text-center">
                <h5 class="card-title">{{$item->name}}</h5>
                <p class="text-muted mb-4">{{$item->description}}</p>
               <a href="{{ url('view-category/'.$item->slug) }}">view</a>
                
              </div>
           
              
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</html>
{{-- <div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @foreach($category as $item)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{asset('assets/uploads/category/'.$item->image)}}"
                                        class="card-img-top" alt="Apple Computer" />
                                        <div class="text-center">
                                            <h5 class="card-title">{{$item->name}}</h5>
                                            <p class="text-muted mb-4">{{$item->description}}</p>
                                          </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div> --}}


