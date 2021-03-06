<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{action('PagesController@home')}}">Learning Laravel</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <ul class="nav navbar-nav navbar-right">
                <li><a href="{{action('PagesController@home')}}">Home</a></li>
                <li><a href="{{action('PagesController@about')}}">About</a></li>
                <li><a href="{{action('TicketsController@index')}}">Tickets</a></li>
                <li><a href="{{action('TicketsController@create')}}">Contact</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Member <span class="caret"></span></a>
              <ul class="dropdown-menu">
                @if(Auth::check())
                <li><a href="users/logout">Logout</a>
                @else
                <li><a href="{{action('Auth\AuthController@getRegister')}}">Register</a></li>
                <li><a href="{{action('Auth\AuthController@getLogin')}}">Login</a></li>
                @endif
              </ul>
            </li>
        </ul>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
