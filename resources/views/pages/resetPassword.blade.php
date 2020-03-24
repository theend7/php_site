@extends("layouts/glavni")
@section("centralniDeo")
<br/>
<div class="form-gap">
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">New password</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
                       
                  <form action="{{ url("/doResetPass")}}" method="POST" class="form" onSubmit="return newPasswordCheck();">
                      <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                      @foreach($idUserEmail as $user)
                        <input type="hidden" name="idUser" id="idUser" value="{{$user->idKorisnik}}" />
                      @endforeach
                      <div class="form-group">
                        
                        
                          <input type="password" name="newPass"  id="newPass" placeholder="new password" class="form-control"/>
                          <p id="errNewPass"></p>
      
                      </div>
                      <div class="form-group">
                        <input  type="submit" name="changePass" class="btn btn-lg btn-primary btn-block" value="Reset Password">
                      </div>
                    </form>
                    <p style="color:red">
                      @if(session()->has('message'))
                      {{ session('message') }}
                      @endif
                      </p>
                      <p style="color:red"> @isset($errors)
                        @foreach($errors->all() as $error)
                                {{ $error }}
                        @endforeach
                        @endisset</p>
    
                  </div>
                </div>
              </div>
            </div>
        </div>
        </div>
            </div>
        </div>
       
@endsection