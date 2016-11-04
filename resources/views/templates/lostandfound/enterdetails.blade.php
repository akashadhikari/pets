@extends('templates.default')
	@include('templates.extras.navbar')
	@section('content')
	<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
				<h3>Share your pets detail in this website.</h3><hr/>
					<form action="" method="post">
          
                        <div class="form-group {{ $errors->has('description') ? ' has-error' : ''}}">
                           <label>Description</label>
                           <textarea name="description" class="form-control" rows="5"></textarea>
                        </div>

                         @if ($errors->has('description'))
                           <span class="help-block">{{$errors->first('description')}}</span>
                         @endif

                         <div class="form-group {{ $errors->has('image') ? ' has-error' : ''}}">
                             <label>Upload photo</label>
                             <input class="form-control" type="file" name="image" value=" {{ Request::old('image') ?: '' }}">
                        </div>
                         @if ($errors->has('image'))
               	 			    <span class="help-block">{{ $errors->first('image') }}</span>
               			 @endif
                       
                        <div class="col-md-5 pull-right">
                        	<input type="submit" name="submit" id="submit" value="Share" class="btn wow tada btn-embossed btn-primary btn-block">
                           <input type="hidden" name="_token" value="{{ Session::token() }}">
                        </div>
					</form>
				</div>
			</div>
		</div>
	@stop