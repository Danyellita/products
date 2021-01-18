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
							<div class="col-md-5 col-lg-5 col-xs-12 col-sm-12">
								<input type="text" class="form-control" name="name" id="input" placeholder="Product Name">
								@if($errors->has('name'))
									<p class="errors" style="color: #FFB6C1; margin-top: 2px;  margin-left: 5px; padding:5px;">{{ $errors->first('name') }}</p>
			    				@endif
							</div>
							<div class="col-md-5 col-lg-5 col-xs-12 col-sm-12">
								<input type="text" class="form-control" name="price" id="input" placeholder="Price">
								@if($errors->has('price'))
									<p style="color: #FFB6C1; margin-top: 2px;  margin-left: 5px; padding:5px;">{{ $errors->first('price') }}</p>
			    				@endif
							</div>
						</div>
						<div class="row">
							<div class="col-md-5 col-lg-5 col-xs-12 col-sm-12">
								<input ttype="text" class="form-control"  name="details" id="input" placeholder="Details">
								@if($errors->has('details'))
									<p style="color: #FFB6C1; margin-top: 2px;  margin-left: 5px; padding:5px;">{{ $errors->first('details') }}</p>
			    				@endif
							</div>
							<div class="col-md-5 col-lg-5 col-xs-12 col-sm-12">
								<input type="file" class="myfrm form-control"  name="image"  id="input">
								@if($errors->has('image'))
									<p style="color: #FFB6C1; margin-top: 2px;  margin-left: 5px; padding:5px;">{{ $errors->first('image') }}</p>
			    				@endif
							</div>
							<div class="col" style="margin-left: 5px;">
								<select name="type" id="select" class="form-control" style="margin-top: 5px;">
									<option selected>Choose Type...</option>
				                    @foreach(\App\Enums\CategoryType::getInstances() as $enum)
				                        <option value="{{ $enum->value }}"> {{ $enum->description }}</option>
				                    @endforeach
			                    </select>
			                    <label style="color: #FFB6C1;">*required</label>
			                </div>
		                </div>
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