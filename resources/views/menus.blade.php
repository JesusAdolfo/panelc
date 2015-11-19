@extends('layout.main')
@section('title'){{  ' FAQ | Panel Ciudadano'}}@endsection
@section('content')
  @include('layout.partials.main-menu')



  <header id="header_menu">
    <div class="blur">
      <div id="title">
        <h1>FAQ </h1>
      </div>
      <div id="subtitle">
        <h2><i class="fa fa-book fa-question-circle"></i></h2>
        <h4>
          <br>Preguntas Frecuentes
        </h4>
      </div>
    </div>
  </header>
  
     {{--<div class="container">--}}
       {{--<div class="well text-center">--}}
        {{--<h4>Minimum order 10 persons. Service and delivery fee may apply</h4>--}}
      {{--</div>--}}
     {{--</div>--}}
  

  <div class="row-fluid">
    <div class="container">
      <div class="center jumbotron">
        <ul class="nav nav-tabs">



          <li class="active in"><a href="#miembros" data-toggle="tab" aria-expanded="false">Miembros del Panel</a></li>
          <li class=""><a href="#encuestas" data-toggle="tab" aria-expanded="false">Encuestas</a></li>
          <li class=""><a href="#recompensas" data-toggle="tab" aria-expanded="false">Recompensas</a></li>
          <li class=""><a href="#privacidad" data-toggle="tab" aria-expanded="false">Privacidad</a></li>

          


        </ul>


        {{-- Contenido --}}
        <div id="myTabContent" class="tab-content">

          <div class="tab-pane fade text-center active in" id="miembros">
            <p>
              <h2>Panelistas / Miembros del Panel</h2>
              <br/><br/>
              <h3>¿Qué tengo que hacer como miembro de Panel Ciudadano?</h3>
              <p class="text-justify">Los panelistas / miembros del panel reciben encuestas vía mensaje de texto (SMS) a sus teléfonos celulares. En su gran mayoría, las encuestas son 2 o 3 preguntas con alternativas de selección múltiple, y tú eliges la alternativa de tu preferencia. Lo hicimos por SMS para que sea lo más fácil y cómodo para ustedes. Una encuesta promedio no demora más de 30 segundos en ser contestada.</p>

              <br/><br/>

              <h3>¿Qué diferencia puedo hacer al unirme a Panel Ciudadano?</h3>

              <p class="text-justify"> Te estas uniendo a una exclusiva comunidad de opinión! Tus respuestas son usadas para tomar decisiones críticas tanto en materia de políticas públicas como en empresas privadas. En Panel Ciudadano tu opinión tiene impacto en decisiones que afectan a muchas personas como tú.</p>
              <br/><br/>
              <h3>¿Pueden unirse mis amigos y familia?</h3>

              <p class="text-justify">              Los hogares que recibieron la invitación a participar en Panel Ciudadano, fueron seleccionados en un estudio estadístico realizado por especialistas de la Universidad del Desarrollo. Los mayores de 18 años que residen en ese hogar son bienvenidos a ser miembros de nuestro panel. Amigos y familiares que no residen en el hogar, no podrán unirse al panel en esta primera etapa.
              </p>
              </p>
          </div>



          <div class="tab-pane fade text-center" id="encuestas">
            
            <h2>Encuestas</h2>
              <br/><br/>

              <h3>¿Sobre qué temas tratan las encuestas?</h3>
              <p class="text-justify">Nuestras encuestas cubren todo tipo de temas. Por eso nuestro panel es tan interesante! Temas de contingencia nacional o local, políticas del gobierno, nuevos servicios o productos que salieron al mercado, deportes, cultura, salud, etc.</p><br/><br/>

              <h3>¿Cómo se responde?</h3>
              <p class="text-justify">Las preguntas vienen con alternativas múltiples y  usted debe responder ÚNICAMENTE  la alternativa elegida. Recuerde que no existen respuestas incorrectas, sólo necesitamos tu opinión.
                  *Si recibe una “pregunta abierta”, es decir, una pregunta sin alternativas de respuesta, le señalaremos específicamente como responder.
              </p><br/><br/>

              <h3>¿Cuántas encuestas me enviarán? </h3>
              <p class="text-justify">No existe un número fijo de encuestas, pero en promedio son de 2 a 3 preguntas a la semana. Lo que significa menos de un minuto de tu tiempo!
              </p><br/><br/>

              <h3>¿Puedo contestar de otra forma que no sea mensaje de texto (SMS)?</h3>
              <p class="text-justify">La ventaja que entregan los mensajes de texto (SMS), es que cualquier celular puede enviar y recibirlos. No se necesita tener Smartphone, conexión a internet o algún tipo de plan especial para poder interactuar con ellos. Y como queremos que todo hogar seleccionado pueda participar, hemos elegido este medio de comunicación. En esta primera etapa este será el único canal de participación.
                  *Les avisaremos cuando incluyamos nuevos canales de participación.
              </p><br/><br/>

              <h3>¿Mis mensajes de texto (SMS) tienen algún costo para mí?</h3>
              <p class="text-justify">Por ningún motivo! Trabajamos con un sistema especial de mensajería que absorbe el costo de sus mensajes de respuesta.</p>

          </div>





          <div class="tab-pane fade text-center" id="recompensas">
            <h2>Recompensas</h2>
              <br/><br/>

              <h3>              ¿Cómo gano dinero con mis respuestas?
              </h3>

              <p class="text-justify">              Cada respuesta que nos envías se traduce en dinero. Si contestas dentro de los primeros 30 minutos desde que recibiste la pregunta, recibes $100. Si contestas después de 30 minutos recibes $50.
              </p><br/><br/>

              <h3>              ¿Cómo recibiré las recompensas?
              </h3>

              <p class="text-justify">              Una vez al mes, el dinero  que hayas recaudado con tus respuestas, será depositado en tu cuenta corriente o cuenta vista.
              </p><br/><br/>


          </div>
          <div class="tab-pane fade text-center" id="privacidad">
              <h2>Privacidad</h2>

              <br/><br/>

              <h3>¿Qué tipo de información guardan sobre mí?</h3>

              <p class="text-justify">              Si te unes a nuestro panel, te preguntaremos tu nombre, dirección, información de contacto, y algunos datos demográficos como edad y nivel educacional. Luego nuestro sistema guardará las respuestas a las encuestas que contestas.
              </p><br/><br/>

              <h3>              ¿Cómo mantienes mi información personal y respuestas en confidencialidad?
              </h3>

              <p class="text-justify">Nosotros protegemos la identidad de todos los miembros de nuestro panel. La información que entregamos a nuestros clientes es anónima, y nunca enviaremos información personal. Agrupamos todas las respuestas y se presentan en un reporte estadístico. Es decir, trabajamos con información agregada, no individual.
                  Por ejemplo: <br/>
                  <p class="text-center">
                    <img class="img-responsive img-thumbnail" src="{{ asset('css/imgs/grafica1.png') }}" alt=""/>
                  </p>
                  Entre los que votaron por Matías Del Río, el 65% son mujeres.

                  <br/><br/>
              <p class="text-center">
                  <img class="img-responsive img-thumbnail" src="{{ asset('css/imgs/grafica2.png') }}" alt=""/>
              </p>
              La seguridad y privacidad de la información de los panelistas es clave para nuestro éxito y credibilidad.

              </p><br/><br/>

              <h3>              ¿Recolectan información sobre mi familia? ¿Sobre mis hijos?
              </h3>

              <p class="text-justify">              Recolectamos información sobre los miembros del panel. Todo mayor de 18 años que reside en un hogar seleccionado puede unirse, pero no recolectaremos información de quienes no quieren participar ni de los residentes menores de edad.
              </p>

              <br/><br/>

              <h3>POLÍTICA DE PRIVACIDAD</h3>
              <p class="text-justify">              La Facultad de Gobierno de la Universidad del Desarrollo adhiere a lo establecido en la ley Orgánica N° 17.374 del Ministerio de Economía que, en el Artículo 29, determina lo siguiente: “El Instituto Nacional de Estadísticas, los organismos fiscales, semifiscales y empresas del Estado, y cada uno de sus respectivos funcionarios, no podrán divulgar los hechos que se refieren a personas o entidades determinadas de que hayan tomado conocimiento en el desempeño de sus actividades. El estricto mantenimiento de estas reservas constituye el “SECRETO ESTADISTICO”. Su infracción por cualquier persona sujeta a esta obligación, hará incurrir en el delito previsto por el artículo 247 del Código Penal
              </p>


          </div>


          

          

        </div>
      </div>
    </div>
  </div>
  @include('layout.partials.footer')
@stop