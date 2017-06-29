<!-- Default bootstrap navbar -->
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
        <a class="navbar-brand" href="/">Laravel Blog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li{{ (Request::is('/'))?' class="active"':'' }}><a href="/">Home</a></li>
            <li{{ (Request::is('blog'))?' class="active"':'' }}><a href="/blog">Blog</a></li>
            <li{{ (Request::is('about'))?' class="active"':'' }}><a href="/about">About</a></li> 
            <li{{ (Request::is('contact'))?' class="active"':'' }}><a href="/contact">Contact</a></li>        
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ 'Hello '.Auth::user()->name.'!' }} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('posts.index') }}">Posts</a></li>
                    <li><a href="{{ route('categories.index') }}">Categories</a></li>
                    <li><a href="{{ route('tags.index') }}">Tags</a></li>
                    <li role="separator" class="divider"></li>
                    <li> <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
                </li>
            @else
                <a href="{{ route('login') }}" class="btn btn-default">Login</a>
            @endif
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- Default bootstrap navbar -->