@extends('layouts.web.web')
@section('content')
	<div class="container" style="padding: 30px;">
		 {{ __('FILTER:') }}
			 <select class="form-control" name="type" id="category_type" style="width: 200px; margin-left: 10px;">
		    	<option value="">Toate</option>
					@foreach(\App\Enums\CategoryType::getInstances() as $enum)
				    	<option name="type" id="category_type" value="{{ $enum->key }}" @if(request()->type == $enum->key) selected @endif> {{ $enum->description }}</option>            
					@endforeach
			</select>
		
			{{-- @foreach($categories as $category)
			{{ $category->name }}
			@endforeach --}}
			<hr>
		<div id="divWithTable">
		<ul class="cards">
			@foreach($products as $product)
				<li class="cards_item">
					<div class="card">
						<div class="rob" style="margin-left: 150px;">
							<div class="flag">
								<i class="fas fa-paw"  style="padding-bottom: 5px;"></i>
							</div>
						</div>
				        <center><h4 class="card_title" style="color: black; padding-top: 30px;">{{ $product->name }}</h4></center>
				      	<div class="card_image">
				      		@if($product->image)
		  						<img src="{{ asset('storage/img')}}/{{ $product->image }}" style="width: 100px; height: 100px; padding: 10px 10px 10px 10px">
		  					@else
		  						<img src="{{ asset('img/1.png')}}" style="max-width: 100%; height: 200px; padding: 10px 10px 10px 20px">
		  					@endif 
		  				</div>
				        <div class="card_content">
				          <p class="card_text">Demo of pixel perfect pure CSS simple responsive <br>card grid layout...Details</p>
				          <ul>
				          	<li class="list"><a href="#" style="padding: 20px;">Byt</a></li><li class="list"><a href="#">Add to Cart</a></li>
					    </ul>
				        </div>
				    </div>
				</li>
			@endforeach
		</ul></div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous">
</script>
<script>
	$('select#category_type').on('change', function() {
	window.location.href = location.protocol + '//' + location.host + location.pathname + "?type=" + this.value;
});

</script>



@endsection