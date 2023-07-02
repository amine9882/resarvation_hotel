<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> les chamber </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="alert alert-primary" role="alert">
        type/{{$category->name}}
      </div>
    
    <div class="py-5">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
        
                    <div class="col-4">
                        <div class="card " style="width: 18rem;">
                            <img src="{{asset('assets/uploads/product/'.$product->image)}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <h5 class="card-text">{{ $product->slug }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text"> nomber de chamber  : {{ $product->qty }}</p>
                                <p class="card-text">prix: {{ $product->selling_price }} €</p>

                                <a href="{{ url('view-prod/'.$category->slug.'/'.$product->name)}}" class="btn btn-primary">Go somewhere</a>
                                <a href="{{ url('products-show', ['categorySlug' => $category->slug, 'productSlug' => $product->slug]) }}">{{ $product->name }}</a>
                            </div>
                        </div>
                    </div>
            
                @endforeach

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>

