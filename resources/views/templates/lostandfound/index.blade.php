@extends('templates.default')
	@include('templates.extras.navbar')
	@section('content')

	<div class="container" style="margin-top:25px;">
		<div class="row">
			<div class="col-lg-3 pull-right">
				<a class="btn wow tada btn-embossed btn-primary btn-block" href="{{ route('templates.lostandfound.enterdetails')}}">Lost yours?</a>
			</div>
		</div>
	</div>


	@stop