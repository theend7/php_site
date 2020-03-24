@extends("layouts/glavni")
@section("centralniDeo")
	<div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row shop_box-top"> 
			<h1 id="destSnowing"><span class="snowBigB">&nbsp;C</span>ommendation<span class="snowBigB">&nbsp;A</span>nd<span class="snowBigB">&nbsp;C</span>ritique</h1>
			<div id="output"></div>
			<div id="ispisSearch">
		@foreach($oneDestination as $one)
			
				<div id="oneDestPrint" class="col-md-3 shop_box"><a href="#"> 
						<a href="#" class="destinationPhoto" data-id="{{$one->idProizvoda}}"><img src="{{$one->slika}}" class="img-responsive" alt="{{$one->alt}}"/></a>
							<span class="new-box">
								<span class="new-label">New</span>
							</span>
						<span class="sale-box">
							<span class="sale-label">Sale!</span>
						</span>
						<div class="shop_desc">
							<h3><a href="#">{{$one->naziv}}</a></h3>
								<span class="fa fa-star" aria-hidden="true"></span>
								<span class="fa fa-star" aria-hidden="true"></span>
								<span class="fa fa-star" aria-hidden="true"></span>
								<span class="fa fa-star" aria-hidden="true"></span>
								<span class="fa fa-star" aria-hidden="true"></span>
								<span class="actual">${{$one->cena}}</span><br>
								<ul class="buttons">
									<div class="clear"> </div>
								</ul>
						</div>
					</a>
				</div>
				@endforeach
                </div>
                <div class="col-md-6">
                    @if(session()->has('user'))
                    <form action="{{url("/sendExperience")}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            @foreach($oneDestination as $oneId)
            <input type="hidden" name="idDestAuth" value="{{$oneId->idProizvoda}}"/>
            @endforeach
            <div class="form-group">
                <label for="inputAddress">Name</label>
                @if(session()->has('user'))
                <input type="text" class="form-control" id="nameOfUser" name="nameOfUser" value="{{ session('user')[0]->ime }}"/>		
				@endif
            </div>
            <div class="form-group">
                <label for="inputAddress">Email Address</label>
                @if(session()->has('user'))
                    <input type="text" class="form-control" id="emailOfUser" name="emailOfUser" value="{{session('user')[0]->email}}"/>
                @endif
            </div>
            <div class="form-group">
            <textarea name="experience" id="experience" class="form-control"   rows="5" cols="25" placeholder="Your commendation or critique about this destination"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary form-control">Send</button>
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

                    
                    <!-- IF SESSION DO NOT EXISTS -->
                    @else
                    <div class="col-md-6">
                    <p id="noAuthUser">You must be logged in to send us your impressions about this destination!!!</p><br/>
                    <a href="{{url('/login')}}" class="btn btn-primary">Login</a>
                    @endif
                    </div>
                    

      

    </div>
             
            </div>
   
	
</div>
</div>
</div>
@endsection
