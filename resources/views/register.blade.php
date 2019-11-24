
@extends('layouts.layout')
@section('title')
    Register
@endsection

@section('content')
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>CORPUS CHRISTI CATHOLIC CHURCH </h2>
    <img src="images/body of christ.png">
    <p class="lead">Please fill the form below.</p>
  </div>

  
  

    <div class="col-md-8 container">
      <h3 class="mb-3">Register</h3>
      <hr class="mb-4">
      @include('layouts.alerts')
      <form class="needs-validation" method="post" action="{{route('postregister')}}"> 
         @csrf
       

        <div class="row">
            

            <div class="col-md-6 mb-3">
              <label for="password">Username: </label>
              <input type="text" class="form-control" id="username" name="username" value="{{old('username')}}" placeholder="username" required>
            </div>

            <div class="col-md-6 mb-3">
              <label for="address">Token: </label>
              <input type="password" class="form-control" id="token" name="token" value="{{old('token')}}" placeholder="token" required="">
            </div>
              
           


        </div>
  
      
        <div class="row">

            <div class="col-md-6 mb-3">
              <label for="address">Password: </label>
            <input type="password" class="form-control" id="Password" name="password" value="" placeholder=" password"required>
          </div>
            <div class="col-md-6 mb-3">
              <label for="address">Confirm Password: </label>
            <input type="password" class="form-control" id="cpassword" name="cpassword" value="" placeholder="Confirm password"required>
            
            </div>
        </div>
      
        
    
        
        <hr class="mb-4">
        <div class="col-md-3 mb-3 container" >
          <button class="btn btn-primary btn-lg" type="submit">Register</button>
        </div>
       
      </form>
    </div>
  </div>
  @endsection

  
