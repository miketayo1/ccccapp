
@extends('layouts.layout')
@section('title')
    Edit Form
@endsection

@section('content')
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>CORPUS CHRISTI CATHOLIC CHURCH</h2>
    <img src="{{ URL::to('images/body of christ.png') }}">
   
  </div>

  

    <div class="col-md-8 container">
      <h3 class="mb-3">Update {{$edit_data->firstName}}  {{$edit_data->lastName}}'s' details</h3>
      <hr class="mb-4">
      @include('layouts.alerts')
  
      <form class="needs-validation" method="post" action="{{route('update', ['id'=> $edit_data->id])}} "> 
         @csrf
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name*</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="firstName" value="{{$edit_data->firstName}}" required>
            <div class="invalid-feedback">
            Please enter your Home address.
          </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name*</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="last name" value="{{$edit_data->lastName}}" required>
            
          </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
              <label for="username">Email </label>
             
                <input type="text" class="form-control" id="email" name="email" value="{{$edit_data->email}}" placeholder="abc@xyz.com">
            
              <div class="invalid-feedback">
              Please provide a valid email
            </div>
            </div>

            <div class="col-md-6 mb-3">
              <label for="address">Date of Birth *</label>
              <input type="date" class="form-control" id="dob" name="dob" value="{{$edit_data->dob}}" placeholder="" required>
            </div>
        </div>

       

        <div class="mb-3">
          <label for="address">Home Address *</label>
          <input type="text" class="form-control" id="address" name="address" value="{{$edit_data->address}}" placeholder=" eg: no 12 Ijede St"required>
          <div class="invalid-feedback">
            Please enter your Home address.
          </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="zip">Marital Status*:</label>
             <select class="custom-select d-block w-100" id="state" name="status"required>
              <option value="{{$edit_data->status}}">Select</option>
              <option>Married</option>
              <option>Single</option>  
            </select>
            
            </div>
            

            <div class="col-md-6 mb-3">
              <label for="address">No. of Children: </label>
              <input type="text" class="form-control" id="noc" name="noc" value="{{$edit_data->noc}}" placeholder="No of Children">
            </div>
        </div>

        


        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Gender: </label>
            <select class="custom-select d-block w-100" id="gender" name="gender"required>
              <option value="{{$edit_data->gender}}">Select</option>
              <option>Male</option>
              <option>Female</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">BCC Area:</label>
            <select class="custom-select d-block w-100" id="bcc" name="bcc">
              <option value="{{$edit_data->bcc}}">Select</option>
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
              <input type="text" class="form-control" id="phone" name="phone" value="{{$edit_data->phone}}" placeholder="080....">
            </div>
        </div>
        
    
        
        <hr class="mb-4">
        <div class="col-md-3 mb-3 container" >
        <button class="btn btn-primary btn-lg" type="submit">Update</button>
        </div>
       
      </form>
    </div>
  </div>
  @endsection

  
