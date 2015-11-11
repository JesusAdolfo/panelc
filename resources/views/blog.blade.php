@extends('layout.main')
@section('title'){{  ' Blog | Bleu Sky Catering'}}@endsection
@section('content')
	@include('layout.partials.main-menu')

	<header id="header_blog">
		<div class="blur">
			<div id="title">
				<h1>Blog</h1>
			</div>
			<div id="subtitle">
				<h2><i class="fa fa-newspaper-o"></i></h2> 
				<h4>
					<br>
					What's new?
				</h4>
			</div>
		</div>
	</header>
	
	<section id="posts">
		<div class="row-fluid">
			<div class="container">
				<div class="col-md-2"></div>
				<div class="col-md-8">
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
				<div class="col-md-2"></div>
				<div class="col-md-12" align="center">
					{!! str_replace('/?', '?', $posts->render()) !!}
				</div>
			</div>
		</div>
	</section>

	@include('layout.partials.footer')
@stop