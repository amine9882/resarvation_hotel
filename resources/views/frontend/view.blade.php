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
        type/{{$product->name}}
    </div>
    <div class="py-3">
        <div class="container">
            <div class="row">

                <div class="col-md-4 border-end">
                    <img src= "{{asset('assets/uploads/product/'.$product->image)}}" class="w-100" />
                </div>

                <div class="col-md-8">
                    <h4>
                        {{ $product->name }}
                        
                    </h4>
                    <p> {{ $product->description }} </p>
                    
                    <h4 class="mb-1"> 
                    prix: {{$product->selling_price}} €
                        
                    </h4>
                   
                    <div class="col-md-3">

                        <a  href=" {{ url ('/reservations/create') }} " class="btn btn-danger mt-3">reserve</a>

                        {{-- <button type="button" class="btn btn-danger mt-3">reserve</button> --}}
                    </div>
                    
                   
               </div>

            </div>

  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>


