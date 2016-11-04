@extends('templates.default')
	@include('templates.extras.navbar')
	@section('content')
	
	@foreach( $petsrecord as $petrecord )
	<div class="row">
		<div class="col-lg-8 pull-right" style="margin-top:25px;">
			<div class="col-lg-5 pull-left">
				<p>Petstype: {{$petrecord->getPetsType()}}</p>
				<p>Breed: {{$petrecord->getBreedType()}}</p>
				<p class="lead">Description:<br/> {{$petrecord->getDescription()}}</p>

				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" class="btn btn-embossed btn-info">Contact Owner</a>

			</div>
			<div class="col-md-4 pull-right">
				<img src="{{URL::asset('public/uploads')."/".$petrecord->getImage()}}" class="img-responsive image-wrap">
			</div>
        </div> 

    </div>
	@endforeach
   <div class="row">
        <div class="col-lg-12">{!! $petsrecord->render() !!}</div>
    </div>


	@stop