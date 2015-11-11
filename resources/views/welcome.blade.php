@extends('layout.main')
@section('title'){{'Bleu Sky Cathering~'}}
@endsection
@section('content')
	@include('layout.partials.main-menu')
	@if(\Session::has('alert'))
				<div class="row-fluid">
					<div class="container">
						<br>
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<div class="alert alert-dismissible alert-success">
						  <button type="button" class="close" data-dismiss="alert">×</button>
						  <strong>{{Session::get('alert')}}</strong>
						</div>
						</div>
						<div class="col-md-4"></div>
					</div>
				</div>
			@endif
	<header>
		<div class="blur">
			<div id="title">
				<h1>Bleu Skyy Catering</h1>
			</div>
			<div id="subtitle">
				<h4>Cooking with passion</h4>
			</div>
			<div align="center">
				<a onclick="$('#posts').animatescroll();" class="btn btn-web btn-lg">Discover <i class="fa fa-cloud"></i></a>
			</div>
		</div>
	</header>
	<section id="posts">
		<div class="row-fluid">
			<div class="container">
				<div class="col-md-4">

					<div class="jumbotron">
						<h3>Chef John Simon</h3>
						<div class="text-justify">
							John Simon, has been in the restaurant business since 1990. After winning numerous awards and being the executive chef at some of the best restaurants in NJ & NYC he has opened up Bleu Skyy Catering in NYC.
						</div>
					</div>

					<div id="owl-demo2" class="owl-carousel owl-theme">
 
					  <div class="item"><img src="{{ asset('css/imgs/bella9.jpg') }}" class="img-responsive img-thumbnail" alt=""></div>
					  <div class="item"><img src="{{ asset('css/imgs/bella10.jpg') }}" class="img-responsive img-thumbnail" alt=""></div>
					  <div class="item"><img src="{{ asset('css/imgs/bella11.jpg') }}" class="img-responsive img-thumbnail" alt="	"></div>
					 
					</div>
					

					<legend>Contact Form</legend>
					<ul>
					    @foreach($errors->all() as $error)
					        <li>{{ $error }}</li>
					    @endforeach	
					</ul>
					{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}
						<fieldset>
							<div class="form-group">
								<div class="col-lg-12">
									{!! Form::text('name', null, 
								        array('required', 
								              'class'=>'form-control', 
								              'placeholder'=>'Your name')) !!}
								</div>
							</div>
							<br>
							<div class="form-group">
								<div class="col-lg-12">
									{!! Form::text('email', null, 
								        array('required', 
								              'class'=>'form-control', 
								              'placeholder'=>'Your e-mail address')) !!}
								</div>
							</div>
							<br>
							<div class="form-group">
								<div class="col-lg-12">
									{!! Form::textarea('message', null, 
								        array('required', 
								              'class'=>'form-control', 
								              'placeholder'=>'Your message')) !!}
									<span class="help-block">Don't forget to leave your contact information and all the details about your upcoming event.</span>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-12 text-center">
									<button type="submit" class="btn btn-primary">Submit <i class="fa fa-paper-plane"></i></button>
									<br>
									<br>
								</div>
							</div>
						</fieldset>
					{!! Form::close() !!}
				</div>

				<div class="col-md-4">

					@foreach($posts as $p)
						<h3 class="text-center">{{$p->title}}</h3>
						<div align="center">
							<img src="{{$p->photo}}" class="img-responsive img-thumbnail" alt="{{$p->title}}" >
						</div>
						</br>
						<h5 class="text-justify">
							{!! substr($p->content, 0, 100). '...' !!}
						</h5>

						<div align="center">
							<h5 class="text-info">Related topics:</h5>
							<?php
								$tags = explode(',', $p->tags);
							?>
							@foreach($tags as $t)
								<a href="tag/{{$t}}"><label class="label label-primary">{{$t}}</label></a>
							@endforeach
						</div>
						<br>
						<div align="center">
							<a href="articles/{{$p->slug}}" class="btn btn-info">Read article...</a>
						</div>
						
					    </br>
					@endforeach
				</div>
				<div class="col-md-4  jumbotron">
					<h3>Reviews</h3>
					<div class="text-justify">
					Star-Ledger <br>(Newark, NJ)<br><br>
					July 4, 1999<br><br>
					Author: Cody Kendall, Edition: FINAL, Section: SPOTLIGHT, Page: 11, Article Text:<br><br>
					The food produced by executive chef John Simon offers a mixture of classic and New Age Italian, geared to snackers inclined toward pizza as well as big spenders looking for a hefty steak or veal chop.<br><br>
					The menu is dazzling without being overwhelming. You can rely on finding such standards as fried calamari ($8), bruschetta ($4.50) or osso bucco ($19), but then there are the surprises.<br><br>
					One is the delightfully sweet sfogi in saor ($8.50), a Venetian specialty - sautéed flounder topped with caramelized onions and golden raisins - such an unusual, exciting combination. Red wine vinegar introduces another note to this piece, while pine nuts add texture. Taken together, it's an unfamiliar taste, but quite compelling.</div>
					<br><br>
					<div align="center">
						<a href="{{route('about')}}" class="btn btn-info center">Keep reading</a>
					</div>
				
				
				
				{{-- <img src="{{ asset('css/imgs/logo.png') }}" alt=""> --}}


			

				</div>

					
			</div>
		</div>
	</section>
	
	@include('layout.partials.footer')
@stop

