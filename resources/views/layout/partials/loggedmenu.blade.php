<nav class="navbar navbar-default inverse admin">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('adminsite')}}">Bleu Skyy Panel</a>
    </div>

    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{route('new')}}"><i class="fa fa-plus"></i> New Post</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->username}} <b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
          </li>      
      </ul>
      
      
    </div>
  </div>
</nav>