@extends("layouts/glavni")
@section("centralniDeo")

<form action="{{url("/admin/updateDestination/doUpdate")}}" method="POST" name="forma" id="login-form" enctype="multipart/form-data">
@foreach($displayDestinationId as $destination)
							<input type="hidden" name="_token" value="{{csrf_token()}}"/>
						  <fieldset class="input">
                          <p id="login-form-username">
						      <input  type="hidden" value="{{$destination->idProizvoda}}" name="id" class="inputbox"/>
						    </p>
							<p id="login-form-username">
						      <label>Current Picture</label>
						      <input  type="text" value="{{$destination->slika}}" name="picture" readonly="readonly" class="inputbox" />
							  <p style="color:red"> 
                        		{{ $errors->first('picture') }}</p>
						    </p>
						    <p id="login-form-username">
						      <label>New Picture(Optional, not required)</label>
						      <input type="file" name="newPicture" class="inputbox"/>
							  <p style="color:red"> 
                        		{{ $errors->first('newPicture') }}</p>
						    </p>
						    <p id="login-form-password">
						      <label>Alt</label>
						      <input  type="text" value="{{$destination->alt}}" name="alt" class="inputbox"/>
							  <p style="color:red"> 
                        		{{ $errors->first('alt') }}</p>
                            </p>
                            <p id="login-form-password">
						      <label>Name</label>
						      <input  type="text" value="{{$destination->naziv}}" name="name" class="inputbox"/>
							  <p style="color:red"> 
                        		{{ $errors->first('name') }}</p>
                            </p>
                            <p id="login-form-password">
						      <label>Price</label>
						      <input  type="text" value="{{$destination->cena}}" name="price" class="inputbox"/>
							  <p style="color:red"> 
                        		{{ $errors->first('price') }}</p>
						    </p> <br/>
							<p id="login-form-username">
                                <input type="submit" name="update" class="button" value="Update"><div class="clear"></div><br/>
                                <a href="{{url('/admin')}}"  name="back" class="btn btn-primary black">Back to admin page</a>
						  </fieldset>
						  @endforeach
						 </form>
@endsection
 
