
@extends('layouts.layout')
@section('title')
   Birthday
@endsection

@section('content')
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>CORPUS CHRISTI CATHOLIC CHURCH</h2>
    <img src="images/body of christ.png">
   
  </div>



<div class="modal-body row">
  <div class="col-md-6">
    

        <div class="row col-sm">
        	<h3 class="mb-3"> Parishioners born today</h3>
      		<hr class="mb-4">
            <table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">First Name</th>
			      <th scope="col">Last Name</th>
			      <th scope="col">Birthday</th>
			      <th scope="col"></th>
			     
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($today as $today_birthday)
			    <tr>
			      <th scope="row">{{$today_birthday->id}} </th>
			      <td><a href="{{route('getprofile', ['firstName'=> $today_birthday->firstName, 'id'=> $today_birthday->id ])}} ">{{$today_birthday->firstName}}</a> </td>
			      <td><a href="{{route('getprofile', ['firstName'=> $today_birthday->firstName, 'id'=> $today_birthday->id])}}">{{$today_birthday->lastName}}</a> </td>
			      <td>{{$today_birthday->dob}}</td>
			      <td><a href="{{route('getedit', ['firstName'=> $today_birthday->id])}} ">Edit</a></td>
			     
			    </tr>
			    
			    @endforeach
			  </tbody>
			</table>
			              
        </div>
  </div>
  <div class="col-md-6">
    
    <div class="row col-sm">
        	 <h3 class="mb-3"> Parishioners born this month</h3>
      		<hr class="mb-4">
            <table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">First Name</th>
			      <th scope="col">Last Name</th>
			      <th scope="col">Birthday</th>
			      <th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($born_this_month as $birthday)
			    <tr>
			      <th scope="row">{{$birthday->id}} </th>
			      <td><a href="{{route('getprofile', ['firstName'=> $birthday->firstName, 'id'=> $birthday->id ])}} ">{{$birthday->firstName}}</a> </td>
			      <td><a href="{{route('getprofile', ['firstName'=> $birthday->firstName, 'id'=> $birthday->id])}}">{{$birthday->lastName}}</a> </td>
			      <td>{{$birthday->dob}}</td>
			      <td><a href="{{route('getedit', ['firstName'=> $birthday->id])}} ">Edit</a></td>
			     
			    </tr>
			    
			    @endforeach
			  </tbody>
			</table>
			              
        </div> 
  </div>
</div>
   
  </div>
  @endsection

  
