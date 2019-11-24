
@extends('layouts.layout')
@section('title')
    Member Profile
@endsection

@section('content')
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>CORPUS CHRISTI CATHOLIC CHURCH</h2>
    <img src="{{ URL::to('images/body of christ.png') }}">
    <p class="lead"></p>
  </div>

  
    <div class="col-md-8 container">
      <h3 class="mb-3">{{$member->firstName}} {{$member->lastName}}'s Profile.</h3>
      <hr class="mb-4">
      @include('layouts.alerts')
  
      
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name: {{$member->firstName}}</label>
           
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name: {{$member->lastName}}</label>
         
          </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
              <label for="username">Email: {{$member->email}} </label>
              
            </div>

            <div class="col-md-6 mb-3">
              <label for="address">Date of Birth: {{$member->dob}}</label>
              
            </div>
        </div>

       

        <div class="mb-3">
          <label for="address">Home Address: {{$member->address}}</label>
          
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="zip">Marital Status: {{$member->status}}</label>
             
            </select>
            
            </div>
            

            <div class="col-md-6 mb-3">
              <label for="noc">No of Children: {{$member->noc}} </label>
              
            </div>
        </div>

        


     
          <div class=" mb-3 ">
            <label for="country">Gender: {{$member->gender}} </label>
            
          </div>

          <div class=" mb-3">
            <label for="state">BCC Area: {{$member->bcc}}</label>
             
          </div>
          
        
        <div class="mb-6">
              <label for="address">Phone No: {{$member->phone}} </label>
              
        </div>
                
        <hr class="mb-4">
        <div class="col-md-3 mb-3 container" >
        	<!-- <button class="btn btn-primary btn-lg btn-block" type="submit">Print</button> -->
    	</div>
     
    </div>
  </div>
  @endsection

  
