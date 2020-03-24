@extends("layouts/glavni")
@section("centralniDeo")
<div class="main">
      <div class="shop_top">
	            <div class="container">
                <div class="register-top-grid">
                    <form action="{{ url("/register") }}" method="POST" onSubmit="">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <label>Name: </label><br/>
                    <input type="text" id="ime" name="name"/><br/><br/>
                    <p id="errIme" style="color:red">{{ $errors->first('name') }}</p>
                    <label>Last Name: </label><br/>
                    <input type="text" id="prezime" name="lastName"/><br/><br/>
                    <p id="errPrezime" style="color:red">{{ $errors->first('lastName') }}</p>
                    <label>E-mail: </label><br/>
                    <input type="text" id="email" name="email"/><br/><br/>
                    <p id="errEmail" style="color:red">{{ $errors->first('email') }}</p>
                    <label>Username: </label><br/>
                    <input type="text" id="username" placeholder="example: korisnik98" name="user"/><br/><br/>
                    <p id="errUser" style="color:red">{{ $errors->first('user') }}</p>
                    <label>Password: </label><br/>
                    <input type="password" id="password" placeholder="example: korisnik123" name="password"/><br/><br/>
                    <p id="errPass" style="color:red">{{ $errors->first('password') }}</p>
                    <input type="submit" class="btn btn-primary mb-2" name="dugme" id="dugmeReg" value="Register"/>
                    </form>
                   <p style="color:red">@if(session()->has('message'))
							{{ session('message') }}
							@endif</p> 
                </div>
        
              
                <div class="clear"> </div>
              
			
		</div>
    </div>
</div>
@endsection