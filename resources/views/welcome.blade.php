
@extends('layouts.layout')
@section('title')
    Data Form
@endsection

@section('content')
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>CORPUS CHRISTI CATHOLIC CHURCH</h2>
    <img src="images/body of christ.png">
    <p class="lead">Please fill the form below.</p>
  </div>

  

    <div class="col-md-8 container">
      <h3 class="mb-3">Parishioners Data Form</h3>
      <hr class="mb-4">
      @include('layouts.alerts')
  
      <form class="needs-validation" method="post" action="{{route('review')}}"> 
         @csrf
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name*</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" value="{{old('firstName')}}" required>
            <div class="invalid-feedback">
            Please enter your Home address.
          </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name*</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last name" value="{{old('lastName')}}" required>
            
          </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
              <label for="username">Email </label>
             
                <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="abc@xyz.com">
            
              <div class="invalid-feedback">
              Please provide a valid email
            </div>
            </div>

            <div class="col-md-6 mb-3">
              <label for="address">Date of Birth *</label>
              <input type="date" class="form-control" id="dob" name="dob" value="{{old('dob')}}" placeholder="" required>
            </div>
        </div>

       

        <div class="mb-3">
          <label for="address">Home Address *</label>
          <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}" placeholder=" eg: no 12 Ijede St"required>
          <div class="invalid-feedback">
            Please enter your Home address.
          </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="zip">Marital Status*:</label>
             <select class="custom-select d-block w-100" id="state" name="status"required>
              <option value="{{old('status')}}">Select</option>
              <option>Married</option>
              <option>Single</option>  
            </select>
            
            </div>
            

            <div class="col-md-6 mb-3">
              <label for="address">No. of Children: </label>
              <input type="text" class="form-control" id="noc" name="noc" value="{{old('noc')}}" placeholder="No of Children">
            </div>
        </div>

        


        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Gender: </label>
            <select class="custom-select d-block w-100" id="gender" name="gender"required>
              <option value="{{old('gender')}}">Select</option>
              <option>Male</option>
              <option>Female</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">BCC Area:</label>
            <select class="custom-select d-block w-100" id="bcc" name="bcc">
              <option value="{{old('bcc')}}">Select</option>
              <option>A</option>
              <option>B</option>
              <option>C</option>
              <option>D</option>
              <option>E</option>
              <option>F</option>
              <option>G</option>
              <option>H</option>
              <option>I</option>
              <option>J</option>
            </select>
            <div class="invalid-feedback">
              Please provide a bcc area.
            </div>
          </div>
          <div class="col-md-3 mb-3">
              <label for="address">Phone No: </label>
              <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}" placeholder="080....">
            </div>
        </div>
        
    
        
        <hr class="mb-4">
        <div class="col-md-3 mb-3 container" >
        <button class="btn btn-primary btn-lg" type="submit">Review</button>
        </div>
       
      </form>
    </div>
  </div>
  @endsection

  
