@extends('layout.main')
@section('title'){{  ' Contact | Bleu Sky Catering'}}@endsection
@section('content')
@include('layout.partials.main-menu')

<header id="header_contact">
	<div class="blur">
		<div id="title">
			<h1>Contact us</h1>
		</div>
		<div id="subtitle">
			<h2><i class="fa fa-envelope"></i></i></h2> 
			<h4>
				<br>
				Leave a message 
			</h4>
		</div>
	</div>
</header>

<div class="row-fluid">
	<div class="container">
		<h2>
			{{-- Contact  --}}
		</h2>
		<div class="jumbotron">
			<h2>Bleu Skyy Catering Info</h2>
			<p>Don't hesitate to reach us through any of the following means:</p>
			<br><br>
			<div class="text-center">
				<p>
					<strong> Phone Number</strong><br>
					1 (862) 223-2384
					<br><br>
					<strong>Address</strong><br>
					112 116th Street <br>
					New York, NY <br>
					United States <br>
				</p>
			</div>
			<br><br>
			<div class="text-center">
				<div class="col-lg-6">
					<p class="mail"><i class="fa fa-envelope"></i> order@bleuskyycatering.com <br></p>
				</div>
				<div class="col-lg-6">
					<p class="mail"><i class="fa fa-envelope"></i> john.simon@bleuskyycatering.com <br></p>
				</div>
			</div>
			<br><br>
			<div class="text-center">
				<h5 class="">
					<a href="https://www.facebook.com/bleuskyycatering" target="_blank"><i class="fa fa-facebook-official fa-3x"></i></a>
					<a href="https://twitter.com/BleuSkyyCaterer" target="_blank"><i class="fa fa-twitter fa-3x"></i></a>
				</h5>
			</div>	
			
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
					<label class="col-lg-2 control-label" for="inputName">Your Name</label>
					<div class="col-lg-10">
						{!! Form::text('name', null, 
					        array('required', 
					              'class'=>'form-control', 
					              'placeholder'=>'Your name')) !!}
					</div>
				</div>
				<br>
				<div class="form-group">
					<label for="inputEmail" class="col-lg-2 control-label">Your email</label>
					<div class="col-lg-10">
						{!! Form::text('email', null, 
					        array('required', 
					              'class'=>'form-control', 
					              'placeholder'=>'Your e-mail address')) !!}
					</div>
				</div>
				<br>
				<div class="form-group">
					<label for="textArea" class="col-lg-2 control-label">Message</label>
					<div class="col-lg-10">
						{!! Form::textarea('message', null, 
					        array('required', 
					              'class'=>'form-control', 
					              'placeholder'=>'Your message')) !!}
						<span class="help-block">Don't forget to leave your contact information and all the details about your upcoming event.</span>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-lg-10 col-lg-offset-2">
						{{-- <button type="reset" class="btn btn-default">Cancel</button> --}}
						<button type="submit" class="btn btn-primary">Submit <i class="fa fa-paper-plane"></i></button>
					</div>
				</div>
			</fieldset>
		{!! Form::close() !!}
		

	</div>
</div>
<br><br>
@include('layout.partials.footer')
@stop