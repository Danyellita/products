@extends('layouts.manage.manage')
@section('content')
	<div class="container-fluid pb-2" id="fluid">
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 rounded box-shadow bg-white pb-2 pt-2" id="cards">

			<a href="{{ route('manage.products.index') }}" class="btn btn-success" style="margin: 10px 0px 10px 0px;">Back</a>
			<div class="card">
				<form method="POST" action="{{ route('manage.products.store') }}" enctype="multipart/form-data" >
					@csrf 
					<div class="card-header" style="text-align: center;">
						<h3><strong>{{ __('Add Product') }}</strong></h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-6">
								<input type="text" class="form-control" name="name" placeholder="Product Name" style="margin:5px;">
							</div>
							<div class="col-6">
								<input type="text" class="form-control" name="composition" placeholder="Composition" style="margin:5px;">
							</div>
							
						</div>
						<div class="row">
							<div class="col-4">
								<label style="margin-left: 4px;">Select a category</label>
								<select name="category_id">
									@foreach($categories as $category)
										<option value="{{ $category->id }}">{{ $category->name }}</option>
									@endforeach
								</select>
							</div>
							<div class="col-4">
							<label style="margin-left: 4px;">Select the region</label>
								<select name="region_id">
									@foreach($regions as $region)
										<option value="{{ $region->id }}">{{ $region->name }}</option>
									@endforeach
								</select>
							</div>
							<div class="col-4">
								<label style="margin-left: 4px;">Select the pharmacy</label>
								<select name="pharmacy_id">
									@foreach($pharmacies as $pharmacy)
										<option value="{{ $pharmacy->id }}">{{ $pharmacy->name }}</option>
									@endforeach
									
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-4">
								<input type="text" class="form-control" name="packing_quantity" placeholder="Packing_quantity" style="margin:5px;">
							</div>
							<div class="col-4">
								<input type="text" class="form-control" name="weight" placeholder="Weight" style="margin:5px;">
							</div>
							<div class="col-4">
								<input type="text" class="form-control" name="product_measurement" placeholder="Product_measurement" style="margin:5px;">
							</div>

						</div>
						<div class="row">
							<div class="col-4">	
								<input type="text" class="form-control" name="purchases[][quantity]" placeholder="Quantity" style="margin:5px;">
							</div>
							<div class="col-4">
								<input type="text" class="form-control" name="purchases[][quantity]" placeholder="Quantity" style="margin: 5px;">
							</div>
							<div class="col col-4">
								<input type="file" class="myfrm form-control"  name="picture" style="margin: 5px;">
							</div>
						</div>
						
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