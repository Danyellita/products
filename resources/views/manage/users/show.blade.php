@extends('layouts.manage.manage')
@section('content')
	<div class="container-fluid pb-2" id="fluid">
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 rounded box-shadow bg-white pb-2 pt-2" id="cards">
			<a href="{{ route('manage.users.index') }}" class="btn btn-success" style="margin: 10px 0px 10px 0px;">Back</a>
			<div class="card">
				@if (session()->has('status'))
					<center><a class="btn btn-{{ session()->get('status')['type'] }}" style="opacity: 30%; text-align: center; font-size:20px;"> {{ session()->get('status')['message'] }}</a></center>
				@endif
				<div class="card-body">
					<h4 style="text-align: center;">
						User Name: {{ $user->name }}
					</h4>
					<p>
						User Email: {{ $user->email }}<br>
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection