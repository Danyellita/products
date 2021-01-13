@extends('layouts.manage.manage')
@section('content')
	<div class="container-fluid pb-2" id="fluid">
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 rounded box-shadow bg-white pb-2 pt-2" id="cards">
			<a href="{{ route('manage.products.create') }}" class="btn btn-success" style="margin: 10px 0px 10px 0px;">New Product</a>
			<div class="card">
				<div class="card-header" style="text-align: center;">
					<h3><strong>{{ __('Manage Products') }}</strong></h3>
				</div>
				<div class="card-body">
					<table class="table table-striped">
						<thread>
							<tr>
								<th>ID</th>
								<th>District</th>
								<th>Category</th>
								<th>Composition</th>
								<th>Region</th>
								<th>Packing Quantity</th>
								<th>Weight</th>
								<th>Product Measurent</th>
								<th>Pharmacy</th>
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
										{{ $product->category->name}}
									</td>
									<td>
										{{ $product->composition }}
									</td>
									<td>
										{{ $product->region->name }}
									</td>
									<td>
										{{ $product->packing_quantity }}
									</td>
									<td>
										{{ $product->weight }}
									</td>
									<td>
										{{ $product->product_measurement }}
									</td>
									<td>
										{{ $product->pharmacy->name }}
									</td>
									<td>
										<a href="{{ route('manage.products.show', $product->id) }}"><i class="fas fa-eye"></i></a>
										<a href="{{ route('manage.products.edit', $product->id) }}"><i class="fas fa-edit" style="color:green; padding-left:10px"></i></a>
									</td>
								</tr>	
							@endforeach
							
						</tbody>
					</table>	
					{{ $products->links() }}	
				</div>
			</div>
		</div>
	</div>
@endsection