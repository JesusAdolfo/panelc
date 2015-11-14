<nav class="navbar navbar-default" id="navi">
      <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img width="300" src="{{ asset('css/imgs/udd-universidad.gif') }}" alt="Panel Ciudadano">
            
        </a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="{{route('home')}}"> <strong>Home</strong> </a></li>
          <li><a href="{{route('about')}}"><strong>Acerca</strong></a></li>
          <li><a id="logo" href="{{route('home')}}"><img src="{{ asset('css/imgs/udd-universidad.gif') }}" alt=""></a></li>
          {{--<li><a href="{{route('menus')}}"><strong>Menus</strong></a></li>--}}
          <li><a href="{{route('contact')}}"><strong>FAQ</strong></a></li>
          <li><a href="{{route('blog_alias')}}"><strong>Resultados</strong></a></li>
        </ul>
      </div>
    </div>
</nav>