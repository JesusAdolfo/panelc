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
                <div>
                    <div class="col-md-6">
                        <blockquote>
                            Obtendrás entre $100 y $50 por cada respuesta que entregues. Si

                            contestas dentro de los primeros treinta minutos desde que recibiste

                            la pregunta, recibes $100. Si contestas después de treinta minutos

                            recibes $50.
                        </blockquote>
                    </div>


                    <div class="col-md-5">
                        <blockquote class="blockquote-reverse">
                            La mayoría de las veces, estas preguntas se harán vía SMS, con lo que

                            podrás contestar muy rápidamente (sólo respondiendo la letra de la alternativa que elijas)

                            y sin  interrumpir tus actividades cotidianas.
                        </blockquote>
                    </div>
                </div>

                <div>
                    <div class="col-md-6">
                        <blockquote>
                            Obtén recompensas cada vez que contestas una pequeña encuesta, tres

                            o cuatro veces al mes.
                        </blockquote>
                    </div>

                    <div class="col-md-5">
                        <blockquote class="blockquote-reverse">
                            Tu privacidad y la confidencialidad de tus respuestas están protegidas.
                        </blockquote>
                    </div>
                </div>





            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row-fluid">
            <div class="container">
                <div id="owl-demo">

                    <div class="item"><img src="{{ asset('css/imgs/foto1.png') }}" alt=""></div>
                    <div class="item"><img src="{{ asset('css/imgs/foto2.png') }}" alt=""></div>
                    <div class="item"><img src="{{ asset('css/imgs/foto3.png') }}" alt=""></div>
                    <div class="item"><img src="{{ asset('css/imgs/foto4.png') }}" alt=""></div>
                    <div class="item"><img src="{{ asset('css/imgs/foto5.png') }}" alt=""></div>
                    <div class="item"><img src="{{ asset('css/imgs/foto6.png') }}" alt=""></div>
                    <div class="item"><img src="{{ asset('css/imgs/foto7.png') }}" alt=""></div>

                </div>
            </div>
        </div>

    </div>
	<section id="posts">
		<div class="row-fluid">
			<div class="container">

                <div class="well">
                    <h2 class="text-center">
                        Resultados recientes
                    </h2>
                </div>

				<div>
					@foreach($posts as $p)
						<div class="col-md-6">
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
                        </div>
					@endforeach
				</div>

			</div>
		</div>



    </section>
	
	@include('layout.partials.footer')
@stop

