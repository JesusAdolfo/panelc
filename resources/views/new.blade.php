@extends('layout.main')
@section('title'){{'New Post | '. \Auth::user()->name}}
@endsection
@section('content')
	@include('layout.partials.loggedmenu')
	<div class="row-fluid">
		<div class="container">
			<div class="jumbotron">
				<h1 class="text">
					Create your post
				</h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="cold-md-2"></div>
		<div class="cold-md-8">
			{!! Form::open(['url'=>'admin/posts/new', 'autocomplete'=> 'off']) !!}
			<fieldset>
				<input type="text" name="title" placeholder="Insert post title" class="form-control">
				<br>
				<textarea name="content" id="editor" placeholder="Write your content here" cols="30" rows="10" class="form-control">
				</textarea>
				<br>
				<input type="text" name="tags" placeholder="Write tags separated by commas" class="form-control">
				<br>
				<input type="text" name="photo" placeholder="Insert post image" class="form-control">
				<br>
				<input type="submit" value="Save Post" class="btn btn-block btn-primary">
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