@extends('layouts.manage.manage')
@section('content')
	<div class="container-fluid pb-2" id="fluid">
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 rounded box-shadow bg-white pb-2 pt-2" id="cards">
			<a href="{{ route('manage.products.create') }}" class="btn btn-success" id="admin-button">New Product</a>
			<div class="card">
				<div class="card-header" style="text-align: center;">
					<h3><strong>{{ __('Manage Products') }}</strong></h3>
				</div>
				<div class="card-body" id="card-body">
					<table class="table table-striped">
						<thread>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Price</th>
								<th>Details</th>
								<th>Actions</th>
							</tr>
						</thread>
						<tbody>
							@foreach($products as $product)
								<tr>
									<td>
										{{ $product->id }}
									</td>
									<td>
										{{ $product->name }}	
									</td>
									<td>
										{{ $product->price}}
									</td>
									<td>
										{{ $product->details }}
									</td>
									<td>
										<a href="{{ route('manage.products.show', $product->id) }}"><i class="fas fa-eye"></i></a>
										<a href="{{ route('manage.products.edit', $product->id) }}"><i class="fas fa-edit" style="color:green; padding-left:10px"></i></a>
									</td>
								</tr>	
							@endforeach
							
						</tbody>
					</table>	
				</div>
			</div>
		</div>
	</div>
@endsection