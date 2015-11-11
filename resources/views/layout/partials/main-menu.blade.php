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
          <img height="100" src="{{ asset('css/imgs/logo2.jpg') }}" alt="bleu skyy catetering">
            
        </a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="{{route('home')}}"> <strong>Home</strong> </a></li>
          <li><a href="{{route('about')}}"><strong>About</strong></a></li>
          <li><a href="#"><strong>Events</strong></a></li>
          <li><a id="logo" href="{{route('home')}}"><img height="250" src="{{ asset('css/imgs/logo.jpg') }}" alt=""></a></li>
          <li><a href="{{route('menus')}}"><strong>Menus</strong></a></li>
          <li><a href="{{route('contact')}}"><strong>Contact</strong></a></li>
          <li><a href="{{route('blog_alias')}}"><strong>Blog</strong></a></li>          
        </ul>
      </div>
    </div>
</nav>