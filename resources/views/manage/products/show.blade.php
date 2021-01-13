@extends('layouts.manage.manage')
@section('content')
	<div class="container-fluid pb-2" id="fluid">
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 rounded box-shadow bg-white pb-2 pt-2" id="cards">
			<a href="{{ route('manage.products.index') }}" class="btn btn-primary" style="margin: 10px 0px 10px 0px;">Back</a>
			<div class="card">
				<div class="card-header">
					<h4 style="text-align: center;">
						{{ __('Product:') }} {{ $product->name }}
					</h4>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-6">
							<img src="{{ asset('storage/img')}}/{{ $product->picture }}" style="width: 300px; height: 300px; padding: 0px 0px 10px 0px">
						</div>
					</div>
					<div class="row">
							@foreach($images as $image)
								<div class="col-2">
					         		<img src="{{ asset('storage/img')}}/{{ $image }}" style="width: 70px; height: 70px; margin: 5px 5px 5px 5px">
								</div>
					         @endforeach
							
					</div>

					<table class="table table-hover">
				        <tbody>
				          	<tr scope="row">
				            	<th scope="row">{{ __('Slug') }}</th>
				            	<td>{{ $product->slug }}</td>
				          	</tr>
				          	<tr scope="row">
				          		<th scope="row">{{ __('Category') }}</th>
				            	<td>{{ $product->category->name }}</td>
				         	</tr>
				          	<tr scope="row">
				            	<th scope="row">{{ __('Product composition') }}</th>
				            	<td>{{ $product->composition }}</td>
				          	</tr>
				          	<tr scope="row">
				            	<th scope="row">{{ __('Region') }}</th>
				            	<td>{{ $product->region->name }}</td>
				          	</tr>
				          	<tr scope="row">
				            	<th scope="row">{{ __('Packing_quantity') }}</th>
				            	<td>{{ $product->packing_quantity }}</td>
				          	</tr>
				          	<tr scope="row">
				            	<th scope="row">{{ __('Weight') }}</th>
				            	<td>{{ $product->weight }}</td>
				          	</tr>
				        	<tr scope="row">
			           			 <th scope="row">{{ __('Product_measurement') }}</th>
			            		<td>{{ $product->product_measurement }}</td>
				       		</tr>
				       		<tr scope="row">
			           			 <th scope="row">{{ __('Pharmacy') }}</th>
			            		<td>{{ $product->pharmacy->name }}</td>
				       		</tr>
				       	</tbody>
			      	</table>
					@foreach($similars as $similar)
						<center><h4><strong>{{ __('Similar Products') }}</strong></h4></center>
	           		 	<tr>
	            			<td>{{ $similar->name}}</td>
	            			<td>
	            				<img src="{{ asset('storage/similarproducts')}}/{{ $similar->image }}" style="width: 70px; height: 70px; margin: 5px 5px 5px 5px">
	            			</td>
	            		</tr>
					@endforeach
			    </div>
			</div>
		</div>
	</div>
@endsection