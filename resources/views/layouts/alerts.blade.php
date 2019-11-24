@if(Session::has('error'))
	<div class="alert alert-danger" role="alert">
		{{Session::get('error')}}
	</div>

@endif

@if(Session::has('info'))
	<div class="alert alert-success" role="alert">
		{{Session::get('info')}}
	</div>

@endif