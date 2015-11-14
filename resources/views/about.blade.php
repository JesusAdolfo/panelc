
@extends('layout.main')
@section('title'){{  ' About | Bleu Sky Catering'}}@endsection
@section('content')
	@include('layout.partials.main-menu')

	<header id="header_about">
		<div class="blur">
			<div id="title">
				<h1>Sobre nosotros</h1>
			</div>
			<div id="subtitle">
				<h2><i class="fa fa-university"></i></h2>
				<h4>
					<br>
					Conocenos
				</h4>
			</div>
		</div>
	</header>
	
	<div class="row-fluid">
		<div class="container">
			<div class="jumbotron">
                <h2>Acerca de Panel Ciudadano</h2>
                <p class="text-justify">
                    Panel Ciudadano de la Facultad de Gobierno UDD, es una comunidad exclusiva que representa al país con sus opiniones. Empresas, ONG’s, Fundaciones, Servicios Públicos, investigadores  y autoridades de todas las áreas de la sociedad necesitan saber la opinión de los ciudadanos y entender sus preferencias. Tu hogar ha sido seleccionado para ser parte de esta comunidad e influenciar directamente tu mundo. Además obtendrás recompensas sólo por compartir tu opinión y preferencias.
                <h2>
                    Facultad de Gobierno Universidad del Desarrollo
                </h2>
                <p class="text-justify">

                    Nuestra misión es comprender e influenciar el proceso de generación,  gestión y aplicación de políticas públicas, a través del estudio e investigación en ciencia política y áreas relevantes, y formar profesionales del mejor nivel con habilidades de liderazgo e innovación en el ámbito público.

                </p>
            </div>
		</div>

        <div class="clearfix"></div>
        <div id="steps" class="col-md-12 jumbotron">
            <h1 class="text-center">¿Cómo funciona?</h1>
            <div class="col-lg-3 col-md-6">
                <div class="circle">
                    <h2>1</h2>
                    <h2> Recibe <br/> las preguntas <br/></h2>
                    <span class="fa fa-5x fa-mobile-phone"></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="circle">
                    <h2>2</h2>
                    <h2>Responde <br/> la encuesta!</h2>

                    <i class="fa fa-4x fa-paper-plane"></i>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="circle">
                    <h2>3</h2>
                    <h3>Contesta rapido, <br/> dobla tu ganancia</h3>
                    <span class="fa fa-5x fa-clock-o"></span>
                </div>


            </div>
            <div class="col-lg-3 col-md-6">
                <div class="circle">
                    <h2>4</h2>
                    <h2>Recibe <br/> tu premio!</h2>
                    <span class="fa fa-4x fa-money"></span>

                </div>
            </div>


        </div>
        <div class="clearfix"></div>

        <div class="container">
            <div>
                        <div class="col-md-6">
                            <blockquote>
                                Obtendrás entre $100 y $50 por cada respuesta que entregues. Si

                                contestas dentro de los primeros treinta minutos desde que recibiste

                                la pregunta, recibes $100. Si contestas después de treinta minutos

                                recibes $50.
                            </blockquote>
                        </div>


                        <div class="col-md-6">
                            <blockquote class="blockquote-reverse">
                                La mayoría de las veces, estas preguntas se harán vía SMS, con lo que

                                podrás contestar muy rápidamente (sólo respondiendo la letra de la alternativa que elijas)

                                y sin  interrumpir tus actividades cotidianas.
                            </blockquote>
                        </div>

                        <div class="col-md-6">
                            <blockquote>
                                Obtén recompensas cada vez que contestas una pequeña encuesta, tres

                                    o cuatro veces al mes.
                            </blockquote>
                        </div>

                        <div class="col-md-6">
                            <blockquote class="blockquote-reverse">
                                Tu privacidad y la confidencialidad de tus respuestas están protegidas.
                            </blockquote>
                        </div>





            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row-fluid">
			<div class="container">
				<div id="owl-demo">
          
				  <div class="item"><img src="{{ asset('css/imgs/foto1.jpg') }}" alt="Owl Image"></div>
				  <div class="item"><img src="{{ asset('css/imgs/foto2.jpg') }}" alt="Owl Image"></div>
				  <div class="item"><img src="{{ asset('css/imgs/foto3.jpg') }}" alt="Owl Image"></div>
				  <div class="item"><img src="{{ asset('css/imgs/foto4.jpg') }}" alt="Owl Image"></div>
				  <div class="item"><img src="{{ asset('css/imgs/foto1.jpg') }}" alt="Owl Image"></div>
				  <div class="item"><img src="{{ asset('css/imgs/foto2.jpg') }}" alt="Owl Image"></div>
		 
				</div>
			</div>
		</div>
		
	</div>

	@include('layout.partials.footer')
@stop