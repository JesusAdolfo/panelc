@extends('layout.main')
@section('title'){{$post->title. ' | Bleu Sky Catering'}}@endsection
@section('content')
@include('layout.partials.main-menu')
	<div class="row-fluid">
		<div class="container">
			<div class="col-md-2"></div>
			<div class="col-md-8" align="center">
				<br>
				<h2>{{$post->title}}</h2>
				<br>
				<img src="{{$post->photo}}" title="{{$post->title}}" class="img-responsive">
				<br>
				
				<hr>
				<div align="justify">
					{!! $post->content !!}
				</div>
				<hr>
				<div class="fb-comments" data-href="http://localhost/blog/blog/public/articles/{{$post->slug}}" data-width="100%" data-numposts="10" data-colorscheme="light"></div>
				<a href="{{route('home')}}" class="btn btn-primary"><i class="fa fa-chevron-left"></i> Regresar </a>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<br>
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=141142819393048";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	@include('layout.partials.footer')
@stop