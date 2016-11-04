@extends('templates.default')
	@include('templates.extras.navbar')
	@section('content')
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
				 <h3>Enter details of your pet</h3><hr/>
					<form method="post" enctype="multipart/form-data">
						<div class="form-group {{ $errors->has('petstype') ? ' has-error' : ''}}">
                            <label>Pets type</label>
                               <select class="form-control" name="petstype" value="{{ Request::old('petstype') ?: '' }}">
                               		<option>Select your pet type</option>
	                                <option value="Dog">Dog</option>
	                                <option value="Cat">Cat</option>
	                                <option value="Rabbit">Rabbit</option>
	                                <option value="Others">Others</option>
                              </select>
						</div>
						 @if ($errors->has('petstype'))
               	 			<span class="help-block">{{"Select the pets type you want to sell."}}</span>
               			 @endif

						<div class="form-group {{ $errors->has('breedtype') ? ' has-error' : ''}}">
							<label for="inputText">Breed type</label>
                            <input class="form-control" type="text" name="breedtype" placeholder="Breed type eg: German shephard" value="{{ Request::old('breedtype') ?: '' }}">
						</div>
					       	@if ($errors->has('breedtype'))
               	 			<span class="help-block">{{$errors->first('breedtype')}}</span>
               			 @endif

						<div class="form-group{{ $errors->has('age') ? ' has-error' : ''}}">
							<label for="inputText">Age</label>
                            <input class="form-control" type="text" name="age" placeholder="Your pet's age" value="{{ Request::old('age') ?: '' }}">
						</div>
						 @if ($errors->has('age'))
               	 			<span class="help-block">{{ $errors->first('age') }}</span>
               			 @endif
						<div class="form-group {{ $errors->has('description') ? ' has-error' : ''}}">
                           <label>Description</label>
                           <textarea class="form-control" rows="5" name="description" placeholder="Well, some words are always good." value="{{ Request::old('description') ?: '' }}"></textarea>
                        </div>
                         @if ($errors->has('description'))
               	 			<span class="help-block">{{ $errors->first('description') }}</span>
               			 @endif

                        <div class="form-group {{ $errors->has('description') ? ' has-error' : ''}}">
                             <label>Upload photo</label>
                             <input class="form-control" type="file" name="image" {{ Request::old('image') ?: '' }}>
                        </div>
                         @if ($errors->has('image'))
               	 			    <span class="help-block">{{ $errors->first('image') }}</span>
               			     @endif

                        <div class="col-md-5 pull-right">
                        	<button type="submit" name="submit" id="submit" class="btn wow tada btn-embossed btn-primary btn-block">Submit</button>
                        	<input type="hidden" name="_token" value="{{ Session::token() }}">
                        </div>
					</form>
				</div>
			</div>
		</div>
	@stop