<!doctype html>
<htm llang="en">
  <head>
    <!-- Required meta tags -->
     <eta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <ink  rel="styleheet" href="{{ asset('css/dashboard.css') }}">
    <link  rel="stylesheet" href="{{ asset('css/authentication.css') }}">

     <title>agricultu
  r
e</title>
  </head>
  <body>

  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-4">Login Form</h2>
        @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
        <div class="card my-3 ">

          <form class="card-body cardbody-color " method="POST" action="{{ route('logins') }}">
            @csrf

            <div class="text-center">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTD1s6Dy_6q1KxynkPAZXEaOu5YIa2xaL90VWv0Xni-auEdFjw7fEiL9OLPBAOV0izmBl8&usqp=CAU" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="Username" name="email" aria-describedby="emailHelp"
                placeholder="Email or User Name ">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" name="password" placeholder="password">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
              Registered? <a href="#" class="text-dark fw-bold"> Create an
                Account</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

 
 </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    
  </body>
</html>