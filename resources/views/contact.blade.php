@extends('layout.main')
@section('title'){{  ' Contacto | Panel Ciudadano'}}@endsection
@section('content')
@include('layout.partials.main-menu')


<div class="row-fluid">
    <br/>
	<div class="container">
		<div class="jumbotron text-center">
            <p>
                Si tienes cualquier duda, comentario o sugerencia, escríbenos a panel@udd.cl o por medio de nuestro formulario de contacto
            </p>

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
        <div class="col-md-6 text-right"><iframe src="https://www.google.com/maps/d/embed?mid=zN8xmfo0Ry2E.kE6uaJ4j3xCc&z=15" width="100%" height="480"></iframe>
            <a href="http://gobierno.udd.cl/">http://gobierno.udd.cl/</a>
        </div>



    </div>
</div>
<br><br>
@include('layout.partials.footer')
@stop