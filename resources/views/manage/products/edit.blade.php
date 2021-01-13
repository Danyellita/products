@extends('layouts.manage.manage')
@section('content')
	<div class="container-fluid pb-2" id="fluid">
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 rounded box-shadow bg-white pb-2 pt-2" id="cards">
				<a href="{{ route('manage.products.index') }}" class="btn btn-primary" style="margin: 10px 0px 10px 0px;">Back</a>
			<div class="card">
				<form method="POST" action="{{ route('manage.products.update', [$product->id]) }}" enctype="multipart/form-data">
				   {{method_field('PUT')}}
				   	@csrf
				   	<div class="card-header">
				   		<h4 style="text-align: center;">Edit form</h4>
				   	</div>
				  	<div class="card-body">
				  		<table class="table table-hover">
						    <tbody>
						        <tr scope="row">
						            <th scope="row">{{ __('Name product') }}</th>
						            <td><input type="text" class="form-control" name="name" style="width: 50%;" value="{{$product->name}}"></td>
						        </tr>
						        <tr scope="row">
						            <th scope="row">{{ __('Category') }}</th>
						            <td><input type="text" class="form-control" name="category_id" id="num1" style="width: 50%;" value="{{ $product->category_id }}"></td>
						        </tr>
						        <tr scope="row">
						            <th scope="row">{{ __('Product composition') }}</th>
						            <td><input type="text" class="form-control" name="composition" id="num2" style="width: 50%;" value="{{ $product->composition }}"></td>
						        </tr>
						        <tr scope="row">
						            <th scope="row">{{ __('Region') }}</th>
						            <td><input type="text" class="form-control" name="region_id" id="num3" style="width: 50%;" value="{{ $product->region_id }}"></td>
						        </tr>
						        <tr scope="row">
						            <th scope="row">{{ __('Packing_quantity') }}</th>
						            <td><input type="text" class="form-control" name="packing_quantity" id="num6" style="width: 50%;" value="{{ $product->packing_quantity }}"></td>
						        </tr>
						        <tr scope="row">
						            <th scope="row">{{ __('Weight') }}</th>
						            <td><input type="text" class="form-control"  name="weight" id="num4" style="width: 50%;" value="{{ $product->weight }}"></td>
						          </tr>
						        <tr scope="row">
					            	<th scope="row">{{ __('Product_measurement') }}</th>
					            	<td><input type="text" class="form-control"  name="product_measurement" id="num5" style="width: 50%;" value="{{ $product->product_measurement }}"></td>
						        </tr>
						        <tr scope="row">
						         	<th scope="row">Update the photo</th>
						         	<td><input type="file" name="picture" class="form-control"></td>
						         </tr>
						         <tr scope="row">
						         	<th scope="row">Add new images</th>
						         	<td><input type="file" name="image[]" class="form-control" multiple></td>
						         </tr>
						    </tbody>
						</table>
					</div>
					<div class="card-footer">
						<center>
							<input type="submit" class="btn btn-success" value="Save" style="margin: 10px; width: 100px;">
						</center>
					</div>
				</form>
			</div>
		</div>
	</div>
	
@endsection
			
		
