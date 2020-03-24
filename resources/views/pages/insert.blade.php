@extends("layouts/glavni")
@section("centralniDeo")
				<form action="{{url("/admin/insertDestinations/doInsert")}}" method="POST" name="forma" id="login-form" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}"/>
					<fieldset class="input">
						<p id="login-form-username">
							<label>Picture</label>
							<input type="file" name="picture" class="inputbox"/>
							<p style="color:red"> 
                        		{{ $errors->first('picture') }}</p>
						</p>
						<p id="login-form-password">
							<label >Alt</label>
							<input  type="text" name="alt" class="inputbox"/>
							<p style="color:red"> 
                        		{{ $errors->first('alt') }}</p>
						</p>
						<p id="login-form-password">
							<label >Name</label>
							<input  type="text" name="name" class="inputbox"/>
							<p style="color:red"> 
                        		{{ $errors->first('name') }}</p>
						</p>
						<p id="login-form-password">
							<label >Price</label>
							<input  type="text" name="price" class="inputbox"/>
							<p style="color:red"> 
                        		{{ $errors->first('price') }}</p>
						</p>
						<p id="login-form-username">
						<label >Category</label>
						<select id="categoryDropDown" name="destCategory" class="form-control">
						@foreach($category as $cat)
							<option value="{{ $cat->idKategorija }}">
								{{ $cat->nazivKategorije }}
							</option>
						@endforeach
						</select>
						</p>
						
						<br/>
						<input type="submit" name="insert" class="button" value="Insert"><div class="clear"></div><br/>
						<a href="{{url('/admin')}}"  name="back" class="btn btn-primary black">Back to admin page</a><div class="clear"></div>
					</fieldset>
				</form>
				<p style="color:red">
                      @if(session()->has('message'))
                      {{ session('message') }}
                      @endif
                      </p>
                    
@endsection