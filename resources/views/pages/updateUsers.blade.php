@extends("layouts/glavni")
@section("centralniDeo")
<form action="{{url('/admin/updateUser/update')}}" method="POST" name="forma" id="login-form">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
 @foreach($displayUserId as $user)
 <fieldset class="input">
 <p id="login-form-username">
     
     <input  type="hidden"   value="{{$user->idKorisnik}}" readonly="readonly" name="id" class="inputbox"/>
   </p>
   <p id="login-form-username">
     <label>Name</label>
     <input  type="text" value="{{$user->ime}}" name="name" class="inputbox"/>
   </p>
   <p id="login-form-password">
     <label>Last Name</label>
     <input  type="text" value="{{$user->prezime}}" name="lastName" class="inputbox"/>
   </p>
   <p id="login-form-password">
     <label>Email</label>
     <input  type="text" value="{{$user->email}}" name="email" class="inputbox"/>
   </p>
   <p id="login-form-password">
     <label>Username</label>
     <input  type="text" value="{{$user->username}}" name="username" class="inputbox"/>
   </p> <br/>
   <p id="login-form-password">
     <label>idUloga</label>
     <input  type="text" value="{{$user->idUloga}}" name="idUloga" class="inputbox"/>
   </p> <br/>
   <p style="color:red"> @isset($errors)
        @foreach($errors->all() as $error)
                {{ $error }}
        @endforeach
    @endisset</p>

       <input type="submit" name="update" class="button" value="Update"><div class="clear"></div><br/>
       <a href="{{url('/admin')}}"  name="back" class="btn btn-primary black">Back to admin page</a>
 </fieldset>


 
 @endforeach


</form>
@endsection