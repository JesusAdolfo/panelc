@extends('layout.main')
@section('title'){{'Panel Ciudadano'}}
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

    <section id="main-slider">
        <div id="owl-demo2" class="owl-carousel owl-theme">

            <div class="item" id="first-slide">
                <div class="textoverlay"><h1>Tu opinión construye tu mundo</h1><div align="center">
                        <a href="{{route('about')}}" class="btn btn-web btn-lg">Leer más... </a>
                    </div></div>
            </div>
            <div class="item" id="second-slide">
                <div class="textoverlay"><h1>Influye en temas que nos afectan a todos</h1></div>
            </div>
            <div class="item" id="third-slide">
                <div class="textoverlay"><h1 style="margin-top: -50px;">Hazte escuchar. <br/> Simple y rápido. <br/> Recibe premios.</h1></div>
            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <div class="row marketing">
                <div class="col-md-12 features">

                    <div class="col-md-4 text-center">
                        <div>
                            <h3>Rápido</h3>
                            <br/>
                            <i class="fa fa-3x fa-fighter-jet"></i>

                            <br/>
                            <p><br/>
                                No existe un número fijo de encuestas, pero en promedio son de 2 a 3 preguntas a la

                                semana. Lo que significa menos de un minuto de tu tiempo!
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div>
                            <h3>Gratis</h3>
                            <br/>
                            <i class="fa fa-3x fa-smile-o"></i>

                            <p><br/>
                                Trabajamos con un sistema especial de mensajería que absorbe el costo de sus

                                mensajes de respuesta.
                            </p>
                            <br/>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div>
                            <h3>Recompensas</h3>
                            <br/>
                            <i class="fa fa-3x fa-money"></i>

                            <p class="text-center"><br/>Una vez al mes, el dinero  que hayas recaudado con tus respuestas, será depositado en tu cuenta

                                corriente o cuenta vista.</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
	<section id="posts">
		<div class="row-fluid">
			<div class="container">
				<div class="col-md-4">

					<div class="jumbotron">
                        <h3> Sobre nosotros</h3>
                        <div class="text-justify">

                            <h6>                            <strong>Panel Ciudadano</strong> de la Facultad de Gobierno UDD, es una comunidad exclusiva que representa al país con sus opiniones. Empresas, ONG’s, Fundaciones, Servicios Públicos, investigadores  y autoridades de todas las áreas de la sociedad necesitan saber la opinión de los ciudadanos y entender sus preferencias. Tu hogar ha sido seleccionado para ser parte de esta comunidad e influenciar directamente tu mundo. Además obtendrás recompensas sólo por compartir tu opinión y preferencias.
                            </h6>

                        </div>

                        <br/>
                        <div align="center">
                            <a href="{{route('about')}}" class="btn btn-info center">Leer más...</a>
                        </div>
                    </div>




					<legend>Contacto</legend>
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
								              'placeholder'=>'Nombre')) !!}
								</div>
							</div>
							<br>
							<div class="form-group">
								<div class="col-lg-12">
									{!! Form::text('email', null, 
								        array('required', 
								              'class'=>'form-control', 
								              'placeholder'=>'E-mail')) !!}
								</div>
							</div>
							<br>
							<div class="form-group">
								<div class="col-lg-12">
									{!! Form::textarea('message', null, 
								        array('required', 
								              'class'=>'form-control', 
								              'placeholder'=>'Mensaje')) !!}
									<span class="help-block"></span>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-12 text-center">
									<button type="submit" class="btn btn-primary"> Enviar <i class="fa fa-paper-plane"></i></button>
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
							<h5 class="text-info">Temas relacionados:</h5>
							<?php
								$tags = explode(',', $p->tags);
							?>
							@foreach($tags as $t)
								<a href="index.php/tag/{{$t}}"><label class="label label-primary">{{$t}}</label></a>
							@endforeach
						</div>
						<br>
						<div align="center">
							<a href="index.php/articles/{{$p->slug}}" class="btn btn-info">Leer artículo...</a>
						</div>
						
					    </br>
					@endforeach
				</div>
				<div class="col-md-4">
                    <div class="jumbotron">
                        <h3>Hazte miembro </h3>
                        <div class="text-justify">

                            <h6>
                                Si tu vivienda ha sido seleccionada para participar en este panel de

                                opinión, recibirás una carta de invitación. Una vez que des tu

                                consentimiento para participar, uno de nuestros investigadores te llamará

                                o visitará en tu casa para que completemos tu perfil.
                            </h6>
                        </div>
                    </div>





				</div>

					
			</div>
		</div>



    </section>
	
	@include('layout.partials.footer')
@stop

