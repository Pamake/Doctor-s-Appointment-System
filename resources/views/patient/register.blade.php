@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="panel-heading">Register</div>
			<div class="panel-body">
				<form class="form-horizontal" method= "POST" action="{{ route('registerPatient') }}">
					{{ csrf_field() }}


					<div class="form-group">
						<label for= "name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input name="name" type="text" class="form-control" id="name" placeholder="Name" value="{{old('name')}}" required autofocus>
						</div>
					</div>


					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input name="email" type="email" class="form-control" id="email" value="{{old('email')}}" required autofocus>
							@if ($errors->has('email'))
								<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
							@endif
						</div>
					</div>




					<div class="form-group{{ $errors->has('mobileNo') ? ' has-error' : '' }}">
						<label for="mobile" class="col-sm-2 control-label">Mobile number</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="mobileNo" id="mobileNo" placeholder="Mobile" value="{{old('mobileNo')}}" required autofocus>
								@if ($errors->has('mobileNo'))
									<span class="help-block">
									<strong>{{ $errors->first('mobileNo') }}</strong>
									</span>
								@endif
						</div>
					</div>


					{{--<div class="form-group">--}}
					{{--<label for="address" class="col-sm-2 control-label">Address</label>--}}
					{{--<div class="col-sm-10">--}}
					{{--<input type="text" class="form-control" id="address" placeholder="address" required>--}}
					{{--</div>--}}
					{{--</div>--}}


					<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
						<label for="password" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="password" name="password" class="form-control" id="password"  required>
							@if ($errors->has('password'))
								<span class="help-block">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
							@endif
						</div>
					</div>


					<div class="form-group">
						<label for="password-confirm" class="col-sm-2 control-label">Confirm Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="password-confirm" name="password_confirmation"  required>
						</div>
					</div>



					<div class="form-group">
						<label for="dob" class="col-sm-2 control-label">Date of Birth</label>
							<div class="col-sm-3">
								<input type='date' name="date_of_birth" class="form-control">
							</div>
					</div>



					{{--<div class="form-group">--}}
					{{--<label for="gender" class="col-sm-2 control-label">Choose Gender</label>--}}
					{{--<div class="col-sm-3">--}}
					{{--<select class="form-control">--}}
					{{--<option>Male</option>--}}
					{{--<option>Female</option>--}}
					{{--<option>Other</option>--}}
					{{--</select>--}}
					{{--</div>--}}
					{{--</div>--}}




					<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-success">Submit</button>
					</div>
					</div>

					{{--<div class="form-group">--}}
						{{--<div class="col-md-6 col-md-offset-4">--}}
							{{--<button type="submit" class="btn btn-primary">--}}
								{{--Register--}}
							{{--</button>--}}
						{{--</div>--}}
					{{--</div>--}}


				</form>

			</div>
		</div>
	</div>
@endsection

{{-- @section('script')
	<script type="text/javascript">
		$(document).ready(function(){
		    $(function () {
		        $('#datetimepicker1').datepicker();
		    });
		}
	</script>
@endsection --}}
