<!DOCTYPE html>
<html>
<head>
<title>Snowing - Home</title>
<meta name="description" content="Best snowing experiance with us"/>
<meta name="keywords" content="best,snowing,experiance,with,us"/>
<meta name="author" content="Darko Vulicevic"/>
<meta name="robots" content="index,follow"/>
<meta charset="UTF-8">
<link href="{{ asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<link href="{{ asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="{{ asset('/favicon.ico')}}" type="image/x-icon">
<link rel="icon" href="{{ asset('images//favicon.ico')}}" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<!--<script src="js/jquery.easydropdown.js"></script>-->
<!--start slider -->
<link rel="stylesheet" href="{{asset('css/fwslider.css')}}" media="all">
<link rel="stylesheet" href="{{asset('css/styleAutor.css')}}">

</head>
<body>
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="logo"/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="{{asset('images/nav.png')}}" alt="nav" /></a>
						    <ul class="nav" id="nav">
					@foreach($navigation as $nav)
							@if($nav->naziv == "login" || $nav->naziv== "logout")
							@continue
							
							@endif
							
						@if(session()->has('user'))
							@if(session('user')[0]->idUloga == 1)
								<li><a href="{{url("$nav->href")}}">{{$nav->naziv}}</a></li>
								@endif
								
								@if(session('user')[0]->idUloga != 1)
								@if($nav->naziv == "admin") @continue

								@else
									<li><a href="{{url("$nav->href")}}">{{$nav->naziv}}</a></li>
								@endif
							@endif
						@endif
						
						@if(!session()->has('user'))
							@if($nav->naziv == "admin") @continue

								@else
								<li><a href="{{url("$nav->href")}}">{{$nav->naziv}}</a></li>
							@endif
						
						@endif
						
					@endforeach
												
								<div class="clear"></div>
							</ul>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">		
				<p style="color:#1aff1a;">@if(session()->has('user'))
							{{ session('user')[0]->ime }}
							@endif</p>
				    <ul class="icon1 sub-icon1 profile_img">
					@foreach($navigation as $nav)
					@if((session()->has('user')) && ($nav->naziv =="logout"))

					<li><a class="active-icon c1" title="{{$nav->naziv}}" href="{{$nav->href}}"></a>
					@endif
					@if((!session()->has('user')) && ($nav->naziv =="login"))
					<li><a class="active-icon c1" title="{{$nav->naziv}}" href="{{$nav->href}}"></a>
					@endif
					@endforeach
				   </ul>
				   <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	</div>
	