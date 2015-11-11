
@extends('layout.main')
@section('title'){{  ' About | Bleu Sky Catering'}}@endsection
@section('content')
	@include('layout.partials.main-menu')

	<header id="header_about">
		<div class="blur">
			<div id="title">
				<h1>About Us</h1>
			</div>
			<div id="subtitle">
				<h2><i class="fa fa-heart-o"></i></h2> 
				<h4>
					<br>
					Get to know us
				</h4>
			</div>
		</div>
	</header>
	
	<div class="row-fluid">
		<div class="container">
			<h2>Our Story</h2>
			<p class="text-justify jumbotron">
				Bleu Skyy Catering is a full service off premise and drop off caterer specializing in local ingredients as well as organic fruits & vegetables, steroid free meats & wild or line caught fish. Owned by Chef John Simon who has been in the restaurant business since 1990. After winning numerous awards and being the executive chef at some of the best restaurants in NJ & NYC he has opened up Bleu Skyy Catering in NYC. His passion for food and healthy way of cooking has separated himself from the rest. At Bleu Skyy Catering you can be certain that the attention to detail is unparalleled. 
			<h2>
				Reviews
			</h2>
			<p class="text-justify jumbotron">
				Star-Ledger, The (Newark, NJ)<br><br>
				July 4, 1999<br><br>
				Author: Cody Kendall, Edition: FINAL, Section: SPOTLIGHT, Page: 11, Article Text:<br><br>
				The food produced by executive chef John Simon offers a mixture of classic and New Age Italian, geared to snackers inclined toward pizza as well as big spenders looking for a hefty steak or veal chop.<br><br>
				The menu is dazzling without being overwhelming. You can rely on finding such standards as fried calamari ($8), bruschetta ($4.50) or osso bucco ($19), but then there are the surprises.<br><br>
				One is the delightfully sweet sfogi in saor ($8.50), a Venetian specialty - sautéed flounder topped with caramelized onions and golden raisins - such an unusual, exciting combination. Red wine vinegar introduces another note to this piece, while pine nuts add texture. Taken together, it's an unfamiliar taste, but quite compelling.

				
				
				
				{{-- <img src="{{ asset('css/imgs/logo.png') }}" alt=""> --}}


			</p>
		</div>
		<div class="row-fluid">
			<div class="container">
				<div id="owl-demo">
          
				  <div class="item"><img src="{{ asset('css/imgs/comida1.JPG') }}" alt="Owl Image"></div>
				  <div class="item"><img src="{{ asset('css/imgs/comida2.JPG') }}" alt="Owl Image"></div>
				  <div class="item"><img src="{{ asset('css/imgs/comida3.JPG') }}" alt="Owl Image"></div>
				  <div class="item"><img src="{{ asset('css/imgs/comida4.JPG') }}" alt="Owl Image"></div>
				  <div class="item"><img src="{{ asset('css/imgs/comida5.JPG') }}" alt="Owl Image"></div>
				  <div class="item"><img src="{{ asset('css/imgs/comida6.jpg') }}" alt="Owl Image"></div>
		 
				</div>
			</div>
		</div>
		
	</div>

	@include('layout.partials.footer')
@stop