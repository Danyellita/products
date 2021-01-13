@extends('layouts.manage.manage')
@section('content')
	<div class="container-fluid pb-2" id="fluid">
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 rounded box-shadow bg-white pb-2 pt-2" id="cards">
			<a href="{{ route('manage.users.index') }}" class="btn btn-success" style="margin: 10px 0px 10px 0px;">Back</a>
			<div class="card">
				<form method="POST" action="{{ route('manage.users.update', [$user->id]) }}">
			   		{{method_field('PUT')}}
			  		@csrf
			  		<div class="card-header">
			  			<h4 style="text-align: center;">
							{{ __('Edir User') }}
						</h4>
			  		</div>
					<div class="card-body">
						<div class="row">
							<div class="col-4">
								<input class="form-control" type="text" name="name" value="{{ $user->name }}">
							</div>
							<div class="col-4">
								<input class="form-control" type="text" name="email" value="{{ $user->email }}">
							</div>
							<div class="col-4">
								<input class="form-control" type="password" name="password" value="{{ $user->password }}">
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