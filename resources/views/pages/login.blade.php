@extends("layouts/glavni")

@section("centralniDeo")
@if(!session()->has('user'))
<div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="col-md-6">
				 <div class="login-page">
					<h4 class="title">New Customers</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
					<div class="button1">
					   <a href="{{ url("/register") }}"><input type="submit" name="Submit" value="Create an Account"></a>
					 </div>
					 <div class="clear"></div>
				  </div>
				</div>
				<div class="col-md-6">
				 <div class="login-title">
	           		<h4 class="title">Registered Customers</h4>
					<div id="loginbox" class="loginbox">
						<form action="{{ url("/login") }}" method="POST" name="forma" id="login-form" onSubmit="">
						<input type="hidden" name="_token" value="{{csrf_token()}}"/>
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label for="modlgn_username">Email</label>
						      <input id="email" type="text" name="email" class="inputbox" size="18"/>
							  <p id="errEmail" style="color:red;">{{$errors->first('email')}}</p>
						    </p>
						    <p id="login-form-password">
						      <label for="modlgn_passwd">Password</label>
						      <input id="password" type="password" name="password" class="inputbox" size="18"/>
							  <p id="errPass" style="color:red;">{{$errors->first('password')}}</p>
						    </p> <br/>
						    <div class="remember">
							    <p id="login-form-remember">
							      <label for="modlgn_remember"><a href="{{url('/forgetPassword')}}">Forget Your Password ? </a></label>
							   </p>
							    <input type="submit" name="login" class="button" value="Login"><div class="clear"></div>
							 </div>
						  </fieldset>
						  <p style="color:red">
						  @if(session()->has('message'))
							{{ session('message') }}
							@endif
							</p>
						 </form>
					
					</div>
			      </div>
				 <div class="clear"></div>
			  </div>
			</div>
		  </div>
	  </div>
	  @endif
@endsection