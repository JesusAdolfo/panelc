@extends('layout.main')
@section('title'){{'Editing | '. $post->title}}
@endsection
@section('content')
	@include('layout.partials.loggedmenu')
	<div class="row-fluid">
		<div class="container">
			<div class="jumbotron">
				<h1 class="text">
					Edit your post
				</h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="cold-md-2"></div>
		<div class="cold-md-8">
			{!! Form::open(['url'=>'admin/posts/'.$post->id.'/refresh', 'autocomplete'=> 'off']) !!}
			<fieldset>
				<input type="text" name="title" value="{{$post->title}}" class="form-control">
				<br>
				<textarea name="content" id="editor" cols="30" rows="10" class="form-control">
					{{$post->content}}
				</textarea>
				<br>
				<input type="text" name="tags" value="{{$post->tags}}" class="form-control">
				<br>
				<input type="text" name="photo" value="{{$post->photo}}" class="form-control">
				<br>
				<input type="submit" value="Update" class="btn btn-block btn-primary">
				<br>
			</fieldset>
			{!! Form::close() !!}
		</div>
		<div class="cold-md-2"></div>
	</div>
	<br><br>
	@include('layout.partials.footer')
@endsection
@section('js')
	<script>
		$('#editor').trumbowyg();
	</script>
@stop 