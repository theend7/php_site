@extends("layouts/glavni")
@section("centralniDeo")
<div class="container adminPanel">
<div id="showHideButtons">
  <button  class="btn btn-primary" onclick="myFunctionDest()">Destinations</button>
  <button class="btn btn-primary" onclick="myFunctionUsers()">Users</button>
  <button  class="btn btn-primary" onclick="myFunctionContact()">Contact</button>
  <button  class="btn btn-primary" onclick="myFunctionExperiance()">Experiances</button>
  <button  class="btn btn-primary" onclick="myFunctionActivity()">Activity</button>
</div>  

  <div id="tabelaAdmin">
  <h1 class="naslovAdmin">Destinations</h1>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="thTabele">ID</th>
          <th class="thTabele">Name</th>
          <th class="thTabele">AltPicture</th>
          <th class="thTabele">Price</th>
          <th class="thTabele">Edit</th>
          <th class="thTabele">Delete</th>
          
        </tr>
      </thead>
      <tbody id="printDestinations">
      @foreach($adminDestinations as $destination)
        <tr>
          <td>{{$destination->idProizvoda}}</td>
          <td>{{$destination->naziv}}</td>
          <td>{{$destination->alt}}</td>
          <td>{{$destination->cena}}</td>
          <td><a href="{{url('/admin/updateDestinations/destId/'.$destination->idProizvoda)}}" class="btn btn-primary">Edit</a></td>
          <td><input type="button" value="Delete"  data-id="{{$destination->idProizvoda}}" class="btn btn-danger deleteDestination"/></td>
        </tr>
      @endforeach
      </tbody>
    </table>
    <a href="{{url('/admin/insertDestinations')}}" class="btn btn-primary">Insert Destination</a>
    
    </div>

    <div id="tabelaAdminUsers">
    <h1 class="naslovAdmin">Users</h1>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="thTabele">Name</th>
          <th class="thTabele">Last Name</th>
          <th class="thTabele">Email</th>
          <th class="thTabele">Username</th>
          <th class="thTabele">Role</th>
          <th class="thTabele">Edit</th>
          <th class="thTabele">Delete</th>
          
          
        </tr>
      </thead>
      <tbody id="printUsers">
      @foreach($adminUsers as $user)
        <tr>
          <td>{{$user->ime}}</td>
          <td>{{$user->prezime}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->username}}</td>
          <td>{{$user->naziv}}</td>
          <td><a href="{{url('/admin/updateUsers/userId/'.$user->idKorisnik)}}" class="btn btn-primary">Edit</a></td>
          <td><input type="button" value="Delete"  data-id="{{$user->idKorisnik}}" class="btn btn-danger deleteUser"/></td>
        </tr>
      @endforeach
      </tbody>
    </table>
    
    
    </div>
    <div id="tabelaAdminContact">
    <h1 class="naslovAdmin">Contact</h1>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="thTabele">Name</th>
          <th class="thTabele">Last Name</th>
          <th class="thTabele">Question</th>
          <th class="thTabele">Email</th>
          <th class="thTabele">Date</th>
          <th class="thTabele">Operations</th>

       
          
          
        </tr>
      </thead>
      <tbody id="printQuestions">
      @foreach($adminQuestions as $question)
        <tr>
          <td>{{$question->imeKorisnika}}</td>
          <td>{{$question->prezimeKorisnika}}</td>
          <td>{{$question->pitanje}}</td>
          <td>{{$question->emailKorisnika}}</td>
          <td>{{$question->datum}}</td>
          <td><input type="button" value="Delete"  data-id="{{$question->idKontakt}}" class="btn btn-danger deleteQuestion"/></td>
        </tr>
      @endforeach
      </tbody>
    </table>
    
    
    </div>
    <div id="tabelaAdminExperiances">
    <h1 class="naslovAdmin">Experiances</h1>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="thTabele">Name</th>
          <th class="thTabele">Email</th>
          <th class="thTabele">Experiance</th>
          <th class="thTabele">Destination</th>
          <th class="thTabele">Date</th>
          <th class="thTabele">Operations</th>

       
          
          
        </tr>
      </thead>
      <tbody id="printExperiances">
      @foreach($experiances as $exp)
        <tr>
          <td>{{$exp->ime}}</td>
          <td>{{$exp->email}}</td>
          <td>{{$exp->tekstIskustva}}</td>
          <td>{{$exp->naziv}}</td>
          <td>{{$exp->datum}}</td>
          <td><input type="button" value="Delete"  data-id="{{$exp->idIskustva}}" class="btn btn-danger deleteExperiance"/></td>
        </tr>
      @endforeach
      </tbody>
    </table>
    
    
    </div>
    <div id="tabelaAdminActivity">
    <h1 class="naslovAdmin">Activity</h1>
    <label>Filter By Date:&nbsp;</label><input type="date" name="dateOfActivity" id="dateOfActivity"/>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="thTabele">Name</th>
          <th class="thTabele">Last Name</th>
          <th class="thTabele">Activity</th>
          <th class="thTabele">Date</th>
          <th class="thTabele">Operations</th>

       
          
          
        </tr>
      </thead>
      <tbody id="printActivity">
      @foreach($activity as $act)
        <tr>
          <td>{{$act->ime}}</td>
          <td>{{$act->prezime}}</td>
          <td>{{$act->nazivAktivnosti}}</td>
          <td>{{$act->datum}} {{$act->vreme}}</td>
          <td><input type="button" value="Delete"  data-id="{{$act->idAktivnost}}" class="btn btn-danger deleteActivity"/></td>
        </tr>
      @endforeach
      </tbody>
    </table>
    
    
    </div>
</div>
@endsection