@extends('templates.default')
	@include('templates.extras.navbar')
	@section('content')
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
				<h3>How can buyers contact you?</h3><hr/>
					<form action="" method="post">
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : ''}}">
                           <label>Your email</label>
                           <input class="form-control" type="text" name="email" placeholder="something@example.com">
                        </div>

                         @if ($errors->has('email'))
                           <span class="help-block">{{$errors->first('email')}}</span>
                         @endif

                        <div class="form-group {{ $errors->has('phone') ? ' has-error' : ''}}">
                           <label>Phone</label>
                           <input class="form-control" type="text" name="phone" placeholder="Cell number or phone number">
                        </div>

                         @if ($errors->has('phone'))
                           <span class="help-block">{{$errors->first('phone')}}</span>
                         @endif


                        <div class="form-group {{ $errors->has('address') ? ' has-error' : ''}}">
                           <label>Address</label>
                           <input class="form-control" type="text" placeholder="Full address" name="address">
                        </div>
                        @if ($errors->has('address'))
                           <span class="help-block">{{$errors->first('address')}}</span>
                         @endif

                        <div class="col-md-5 pull-right">
                        	<input type="submit" name="submit" id="submit" value="Submit" class="btn wow tada btn-embossed btn-primary btn-block">
                           <input type="hidden" name="_token" value="{{ Session::token() }}">
                        </div>
					</form>
				</div>
			</div>
		</div>
	@stop