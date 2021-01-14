@extends('layouts.manage.manage')
@section('content')
	<div class="container-fluid pb-2" id="fluid">
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 rounded box-shadow bg-white pb-2 pt-2" id="cards">
			<a href="{{ route('manage.products.index') }}" class="btn btn-primary"id="admin-button">Back</a>
			<div class="card">
				<div class="card-header">
					<h4 style="text-align: center;">
						{{ __('Product:') }} {{ $product->name }}
					</h4>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col">
							@if($product->image)
		  						<img src="{{ asset('storage/img')}}/{{ $product->image }}" class="responsive" width="600" height="400">
		  					@else
		  						<img src="{{ asset('img/1.png')}}" class="not_image">
		  					@endif 
						</div>
					</div>
					<h3><strong>{{ __('Details About the Product') }}</strong></h3>
					<table class="table table-hover">
				        <tbody>
				          	<tr scope="row">
				            	<th scope="row">{{ __('Slug') }}</th>
				            	<td>{{ $product->slug }}</td>
				          	</tr>
				          	<tr scope="row">
				          		<th scope="row">{{ __('Details') }}</th>
				            	<td>{{ $product->details }}</td>
				         	</tr>
				          	<tr scope="row">
				            	<th scope="row">{{ __('Price') }}</th>
				            	<td>{{ $product->price }}</td>
				          	</tr>
				        </tbody>
			      	</table>
				</div>
			</div>
		</div>
	</div>
@endsection