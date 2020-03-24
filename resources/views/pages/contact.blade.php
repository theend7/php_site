@extends("layouts/glavni")
@section("centralniDeo")
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact<small id="fellFree">Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
 
        <div class="col-md-12">
            <div class="well well-sm">
                <form action="{{ url("/contact") }}" method="POST" onSubmit="">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" />
                            <p id="errName" style="color:red;">{{$errors->first('name')}}</p>
                        </div>
                        <div class="form-group">
                            <label for="lastName">
                                Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter last name"/>
                            <p id="errLastName" style="color:red;">{{$errors->first('lastName')}}</p>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter email"  />
                            <p id="errEmail" style="color:red;">{{$errors->first('email')}}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Enter question</label>
                            <textarea name="message" id="message" class="form-control"   rows="9" cols="25" 
                                placeholder="Enter here question"></textarea>
                                <p style="color:red;">{{$errors->first('message')}}</p>
                        </div>
                    </div>
                    
                  
                    <div class="col-md-12">
                        <input type="submit" name="ubaciVest" class="btn btn-primary pull-right" id="btnContactUs">
                            </input>
                    </div>
                </div>
                <p style="color:red">@if(session()->has('message'))
							{{ session('message') }}
							@endif</p> 
                </form>
            </div>
        </div>
    
        <div class="col-md-4">
        
            <section class="blog-cat mt-5 pb-5">
            
   
         <div class="fullbar-item w-100 cursor-pointer" onclick="location.href='#'">
    <div class="container">
        <div class="row py-3 py-md-5 align-items-center border-top">
            <div class="col-md-10 vestiMargin">
                <h3 class="feed-item-heading m-0 font-weight-800">
                    <a href="#" class="text-black" href="#"></a>
                </h3>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
</div>
</section>
        </div>
    </div>
</div>
@endsection