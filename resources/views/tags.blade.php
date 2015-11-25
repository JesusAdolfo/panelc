@extends('layout.main')
@section('title'){{'Temas Relacionados | Panel Ciudadano'}}@endsection
@section('content')
@include('layout.partials.main-menu')	
<div class="row-fluid" id="tag">
	<div class="blur">
		<div id="tag_search">
			<div class="col-md-12">
				<h1 class="text-center">Entradas relacionadas con  <br> '{{$tag}}' <br><i class="fa fa-tags"></i></h1>
			</div>
		</div>

	</div>
</div>


<div class="container">
	<div class="col-md-2"></div>
		<div class="col-md-8">
			@foreach($posts as $p)
			<div class="row">
				<div class=""><h3>{{$p->title}}</h3></div>
				<div class="text-justify">{!! substr($p->content, 0, 400). '...' !!}</div>
			</div>
			<?php
			$tags = explode(',', $p->tags);
			?>
			@foreach($tags as $t)
			 <a href="{{$t}}"><label class="label label-primary">{{$t}}</label></a>
			@endforeach
			<br><br>
			<div align="center">
				<a href="{{ URL::to('articles',$p->slug) }}" class="btn btn-info">Leer más...</a>
			</div>
			<br>
			<legend></legend>
			@endforeach
		</div>
		<div class="col-md-2"></div>
		<div class="col-md-12" align="center">
			<?php echo $posts->render(); ?>
		</div>
</div>
	<br><br>
	@include('layout.partials.footer')
@stop