@extends('layout.main')
@section('title'){{  ' Contacto | Panel Ciudadano'}}@endsection
@section('content')
@include('layout.partials.main-menu')

<header id="header_contact">
	<div class="blur">
		<div id="title">
			<h1>Contacto</h1>
		</div>
		<div id="subtitle">
			<h2><i class="fa fa-envelope"></i></h2>
			<h4>
				<br>
				Dejanos un mensaje
			</h4>
		</div>
	</div>
</header>

<div class="row-fluid">
	<div class="container">
		<div class="jumbotron text-center">
            <a href="gobierno.udd.cl"><h2>Página web de la Universidad de Desarrollo</h2></a>

		</div>

        <div class="col-md-6">
            <legend>Contacto</legend>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}
            <fieldset>
                <div class="form-group">
                    <label class="col-lg-3 control-label" for="inputName">Nombre</label>
                    <div class="col-lg-9">
                        {!! Form::text('name', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Escribe tu nombre aqui')) !!}
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-3 control-label">Tu Email</label>
                    <div class="col-lg-9">
                        {!! Form::text('email', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Escribe tu direccion de correo aqui')) !!}
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="textArea" class="col-lg-3 control-label">Mensaje</label>
                    <div class="col-lg-9">
                        {!! Form::textarea('message', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Escribe tu mensaje aqui')) !!}
                        <span class="help-block">Envia todos los datos necesarios para contestar tu inquietud!</span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-12 text-right">
                        {{-- <button type="reset" class="btn btn-default">Cancel</button> --}}
                        <button type="submit" class="btn btn-primary">Enviar <i class="fa fa-paper-plane"></i></button>
                    </div>
                </div>
            </fieldset>
            {!! Form::close() !!}
        </div>
        <div class="col-md-6"><iframe src="https://www.google.com/maps/d/embed?mid=zN8xmfo0Ry2E.kE6uaJ4j3xCc&z=15" width="100%" height="480"></iframe></div>



    </div>
</div>
<br><br>
@include('layout.partials.footer')
@stop