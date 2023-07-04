
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Reservations </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="py-5">
        <div class="container">
            <div class="card">
            <div class="card-header">
                <h1>Reservations</h1>
            </div>
            <div class="card-body">
            <form method="POST" action="/reservations" class="row g-3">

            @csrf
            <div class="col-md-12">
            <label for="validationDefault01" class="form-label"> Date</label>
            <input type="Date" name="date" class="form-control" id="validationDefault01" value="Mark" required>
            </div>
            <div class="col-md-12">
            <label for="validationDefault02" class="form-label"> nom</label>
            <input type="text"  name="name" class="form-control" id="validationDefault02" value="Otto" required>
            </div>
            <div class="col-md-12">
            <label for="validationDefaultUsername" class="form-label">email</label>
            <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2">@</span>
                <input type="email" name="email" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
            </div>
            </div>
            <div class="col-md-12">
            <label for="validationDefault03" class="form-label">Nombre de personnes:</label>
            <input type="text" name="guests" class="form-control" id="validationDefault03" required>
            </div><br>
            <div class="col-md-12   ">
            <button class="btn btn-primary" type="submit">Réserver</button>
            </div>
            </form>
        </div>
        </div>
        </div>
    </div>

  
  
    </body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>







