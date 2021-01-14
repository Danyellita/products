@extends('layouts.web.web')
@section('content')
	<div class="container" id="products">
		<div class="row">
			<div class="col col-2">
				<h4 style="margin-left: 10px;"> {{ __('FILTER:') }}</h4>
			</div>
			<div class="col col-10">
				<select class="form-control" name="type" id="category_type" onfocus='this.size=10;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
		    	<option value="">All</option>
					@foreach(\App\Enums\CategoryType::getInstances() as $enum)
				    	<option value="{{ $enum->key }}" @if(request()->type == $enum->key) selected @endif> {{ $enum->description }}</option>            
					@endforeach
			</select>
			</div>
		</div>
		<hr>
		<ul class="cards">
			@foreach($products as $product)
				<li class="cards_item">
					<div class="card">
						<div class="rob">
							<div class="flag">
								<i class="fas fa-paw"  style="padding-bottom: 5px;"></i>
							</div>
						</div>
				        <center><h4 class="card_title" style="color: black; padding-top: 30px;">{{ $product->name }}</h4></center>
				      	<div class="card_image">
				      		@if($product->image)
		  						<img src="{{ asset('storage/img')}}/{{ $product->image }}" class="photo" width="230" height="200">
		  					@else
		  						<img src="{{ asset('img/1.png')}}" class="not_image">
		  					@endif 
		  				</div>
				        <div class="card_content">
				          	<p class="card_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit <br>sed do eiusmod...<span style="color:green">Details</span></p>
				          	<ul class="button">
				          		<li class="list"><a href="#" style="padding: 20px;">Byt</a></li><li class="list"><a href="#">Add to Cart</a></li>
					    	</ul>
				        </div>
				    </div>
				</li>
			@endforeach
		</ul>
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