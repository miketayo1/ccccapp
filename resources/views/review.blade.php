
@extends('layouts.layout')
@section('title')
    Data Form
@endsection

@section('content')
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>CORPUS CHRISTI CATHOLIC CHURCH DATA FORM</h2>
    <img src="images/body of christ.png">
    <p class="lead"></p>
  </div>

  
    <div class="col-md-8 container">
      <h3 class="mb-3">Please check your details.</h3>
      <hr class="mb-4">
      @include('layouts.alerts')
  
      <form class="needs-validation" method="post" action="{{route('savedata')}}"> 
      	 @csrf
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name*: {{$firstname}}</label>
            <input type="hidden" class="form-control" id="firstName" name="firstName" placeholder="firstName" value="{{$firstname}}" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name* : {{$lastname}}</label>
     		<input type="hidden" class="form-control" id="lastName" name="lastName" placeholder="last name" value="{{$lastname}}" required>
            
          </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
              <label for="username">Email: {{$email}} </label>
              <input type="hidden" class="form-control" id="email" value="{{$email}}" name="email" placeholder="Email">
            </div>

            <div class="col-md-6 mb-3">
              <label for="address">Date of Birth *: {{$dob}}</label>
              <input type="hidden" class="form-control" id="dob" name="dob" value="{{$dob}}" placeholder="" required>
            </div>
        </div>

       

        <div class="mb-3">
          <label for="address">Home Address *: {{$address}}</label>
          <input type="hidden" class="form-control" id="address" name="address" value="{{$address}}" placeholder=" eg: no 12 Ijede St"required>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="zip">Marital Status: {{$status}}</label>
             <input type="hidden" class="form-control" id="address" name="status" value="{{$status}}" required> 
            </select>
            
            </div>
            

            <div class="col-md-6 mb-3">
              <label for="noc">No of Children:{{ $noc}} </label>
              <input type="hidden" class="form-control" id="noc" name="{{$noc}}" placeholder="No of Children">
            </div>
        </div>

        


     
          <div class=" mb-3 ">
            <label for="country">Gender: {{$gender}} </label>
            <input type="hidden" class="form-control" id="noc" name="gender" value="{{$gender}}" >
            
          </div>

          <div class=" mb-3">
            <label for="state">BCC Area: {{$bcc}}</label>
             <input type="hidden" class="form-control" id="noc" value="{{$bcc}}" name="bcc" placeholder="bcc">
          </div>
          
        
        <div class="mb-6">
              <label for="address">Phone No: {{$phone}} </label>
              <input type="hidden" class="form-control" id="phone" name="phone" value="{{$phone}}" placeholder="080...."required>
        </div>
        
    
        
        <hr class="mb-4">
        <div class="col-md-3 mb-3 container" >
        	<button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
    	</div>
      </form>
    </div>
  </div>
  @endsection

  
