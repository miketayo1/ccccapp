
@extends('layouts.layout')
@section('title')
    Search Results
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
      <h3 class="mb-3"> Your search result for {{Request:: input('query')}}</h3>
      <hr class="mb-5">
      @include('layouts.alerts')       

        <div class="row">

            
            <!-- Contents starts here -->
            @if($members->count() > 0)

                

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
                      @foreach($members as $member)
                      <tbody>
                     
                        <tr>
                          <th scope="row">{{$member->id}} </th>
                          <td><a href="{{route('getprofile', ['firstName'=> $member->firstName, 'id'=> $member->id ])}} ">{{$member->firstName}}</a> </td>
                          <td><a href="{{route('getprofile', ['firstName'=> $member->firstName, 'id'=> $member->id])}}">{{$member->lastName}}</a> </td>
                          <td>{{$member->dob}}</td>
                          <td><a href="{{route('getedit', ['firstName'=> $member->id])}} ">Edit</a></td>
                        </tr>
                       
                      </tbody>
                      @endforeach
                    </table>
                 
                                  
        </div> 
                    <!-- @include('search.partials')  -->
               
            @else
                <h5>The member you are looking for does not exist!!!</h5>
            @endif
            <button class="btn ">{!! $members->render() !!}</button> 

        
        
           
    </div>
  </div>
  @endsection

  
