@extends('layouts.manage.manage')
@section('content')
	<div class="container-fluid pb-2" id="fluid">
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 rounded box-shadow bg-white pb-2 pt-2" id="cards">
			<a href="{{ route('manage.products.index') }}" class="btn btn-success"  id="admin-button">Back</a>
			<div class="card">
				<form method="POST" action="{{ route('manage.products.store') }}" enctype="multipart/form-data" >
					@csrf 
					<div class="card-header" style="text-align: center;">
						<h3><strong>{{ __('Add Product') }}</strong></h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-6">
								<input type="text" class="form-control" name="name" id="input" placeholder="Product Name">
								@if($errors->has('name'))
									<p class="errors" style="color: #FFB6C1; margin-top: 2px;  margin-left: 5px; padding:5px;">{{ $errors->first('name') }}</p>
			    				@endif
							</div>
							<div class="col-6">
								<input type="text" class="form-control" name="price" id="input" placeholder="Price">
								@if($errors->has('price'))
									<p style="color: #FFB6C1; margin-top: 2px;  margin-left: 5px; padding:5px;">{{ $errors->first('price') }}</p>
			    				@endif
							</div>
						</div>
						<div class="row">
							<div class="col col-3">
								<input ttype="text" class="form-control"  name="details" id="input" placeholder="Details">
							</div>
							<div class="col col-3">
								<input type="file" class="myfrm form-control"  name="image"  id="input">
							</div>
							<div class="col col-3" style="margin-left: 5px;">
								<select name="type" id="#" class="form-control" style="margin-top: 5px;">
									<option selected>Choose...</option>
				                    @foreach(\App\Enums\CategoryType::getInstances() as $enum)
				                        <option value="{{ $enum->value }}"> {{ $enum->description }}</option>
				                    @endforeach
			                    </select>
		                	</div>
		                </div>
						<div style="margin-left: 5px;">{{ __('*all fields must be completed') }}</div>
					</div>
					<div class="card-footer">
						<center>
							<input type="submit" class="btn btn-success" id="save" value="Save">
						</center>
					</div>
				</form>		
			</div>
		</div>
	</div>
@endsection