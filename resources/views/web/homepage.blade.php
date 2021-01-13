@extends('layouts.web.web')
@section('content')
	<div class="container" style="padding: 30px;">
		@foreach($products as product)
			{{-- {{ $product->name }} --}}
			{{-- <div class="w3-card-4 w3-dark-grey" style="width:50%">

			    <div class="w3-container w3-center">
			      <h3>Friend Request</h3>
			      <img src="img_avatar3.png" alt="Avatar" style="width:80%">
			      <h5>John Doe</h5>

			      <div class="w3-section">
			        <button class="w3-button w3-green">Accept</button>
			        <button class="w3-button w3-red">Decline</button>
			      </div>
			    </div>

			  </div>
			 --}}
		@endforeach
		
	</div>
	
@endsection