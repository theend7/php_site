@extends("layouts/glavni")
@section("centralniDeo")
	<div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row shop_box-top"> 
			<h1 id="destSnowing"><span class="snowBigB">b</span>est <span class="snowBigB">&nbsp;d</span>estinations <span class="snowBigB">&nbsp;f</span>or <span class="snowBigB">&nbsp;s</span>nowing</h1>
			<div id="sortSearch">
			<form action="/destinationsFind" method="get">
				<input type="search" id="search" name="search" placeholder="Search Destinations" />
				<input type="submit" value="Search" id="searchButton" class="btn btn-warning" name="searchButton"/>
			</form>
			</div>
			<div id="output"></div>
			<div id="ispisSearch">
			
			@foreach($destinations as $destination)
				<div id="proba" class="col-md-3 shop_box"><a href="#"> 
				<form action="/oneDestination" method="get">
				<input type="hidden" value="{{$destination->idProizvoda}}" name="idOneDest"/>
				<button type="submit" title="Select destination"><img src="{{$destination->slika}}" class="img-responsive" alt="{{$destination->alt}}"/></button>
				</form>
					
							<span class="new-box">
								<span class="new-label">New</span>
							</span>
						<span class="sale-box">
							<span class="sale-label">Sale!</span>
						</span>
						<div class="shop_desc">
							<h3><a href="#">{{$destination->naziv}}</a></h3>
								<span class="fa fa-star" aria-hidden="true"></span>
								<span class="fa fa-star" aria-hidden="true"></span>
								<span class="fa fa-star" aria-hidden="true"></span>
								<span class="fa fa-star" aria-hidden="true"></span>
								<span class="fa fa-star" aria-hidden="true"></span>
								<span class="actual">${{$destination->cena}}</span><br>
								<ul class="buttons">
									<div class="clear"></div>
								</ul>
						</div>
					</a>
				</div>
				@endforeach
				</div>
			</div>
			<span id="navigationPos">{{$destinations->links()}}</span>
</div>
</div>
</div>
@endsection
