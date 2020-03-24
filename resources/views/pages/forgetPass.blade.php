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
                  <h2 class="text-center">Enter your username</h2>
                  <p>Enter your username here</p>
                  <div class="panel-body">
    
                  <form action="{{ url("/resetPassword") }}" method="post" class="form">
                      <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="username" name="username" placeholder="enter your username" class="form-control"  type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="changePass" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                      </div>
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
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
        </div>
        </div>
            </div>
        </div>
       
@endsection