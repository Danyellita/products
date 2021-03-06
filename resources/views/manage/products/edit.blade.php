@extends('layouts.manage.manage')
@section('content')
	<div class="container-fluid pb-2" id="fluid">
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 rounded box-shadow bg-white pb-2 pt-2" id="cards">
				<a href="{{ route('manage.products.index') }}" class="btn btn-primary" id="admin-button">Back</a>
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
						            <td><input type="text" class="form-control" name="name" style="width: 50%;" value="{{$product->name}}">
							            @if($errors->has('name'))
											<p style="color: #FFB6C1; margin-top: 2px;  margin-left: 5px; padding:5px;">{{ $errors->first('name') }}</p>
					    				@endif
					    			</td>
						        </tr>
						        <tr scope="row">
						            <th scope="row">{{ __('Price') }}</th>
						            <td><input type="text" class="form-control" name="price" style="width: 50%;" value="{{ $product->price }}">
						            	 @if($errors->has('price'))
											<p style="color: #FFB6C1; margin-top: 2px;  margin-left: 5px; padding:5px;">{{ $errors->first('price') }}</p>
					    				@endif
					    			</td>
						        </tr>
						        <tr scope="row">
						            <th scope="row">{{ __('Details') }}</th>
						            <td><input type="text" class="form-control" name="details"style="width: 50%;" value="{{ $product->details }}"></td>
						        </tr>
						        
						        <tr scope="row">
						         	<th scope="row">Update the photo</th>
						         	<td><input type="file" name="image" class="form-control" style="width: 50%;"></td>
						         </tr>
						         
						    </tbody>
						</table>
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
			
		
