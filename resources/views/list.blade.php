
@extends('layouts.layout')
@section('title')
    Data List
@endsection

@section('content')
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>CORPUS CHRISTI CATHOLIC CHURCH</h2>
    <img src="images/body of christ.png">
   
  </div>

  
  

    <div class="col-md-8 container">
      <h3 class="mb-3"> DATA LIST</h3>
      <hr class="mb-4">
      @include('layouts.alerts')
     
       

        <div class="row">
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
			  	@foreach($lists as $list)
			    <tr>
			      <th scope="row">{{$list->id}} </th>
			      <td><a href="{{route('getprofile', ['firstName'=> $list->firstName, 'id'=> $list->id ])}} ">{{$list->firstName}}</a> </td>
			      <td><a href="{{route('getprofile', ['firstName'=> $list->firstName, 'id'=> $list->id])}}">{{$list->lastName}}</a> </td>
			      <td>{{$list->dob}}</td>
			      <td><a href="{{route('getedit', ['firstName'=> $list->id])}} ">Edit</a></td>
			    </tr>
			    
			    @endforeach
			  </tbody>
			</table>
			              
        </div> 
    
         <button class="btn ">{!! $lists->render() !!}</button> 
       
       
      
    </div>
  </div>
  @endsection

  
