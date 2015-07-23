
    <div class="container-fluid">


        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand image</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{Request::path() == '/' || Request::path() == 'home' ?  'active' : ''}}"><a href="{{ url('/home') }}"><i class="glyphicon glyphicon-home" aria-hidden="true"></i> Home</a> <span class="sr-only">(current)</span></li>
                <li class="{{Request::path() == '#' ?  'active' : ''}}"><a href="{{ url('#') }}"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Produkty <span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle {{Request::path() == 'tags' ?  'active' : ''}}" data-toggle="dropdown" role="button" aria-expanded="false"><i class="glyphicon glyphicon-cog" aria-hidden="true"></i> Zarzadzanie produktami <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="{{Request::path() == 'tags/create' ?  'active' : ''}}">{!! HTML::link(action('TagController@create'), 'Produkty') !!}</li>
                        <li class="{{Request::path() == 'parameters/create' ?  'active' : ''}}">{!! HTML::link(action('ParameterController@create'), 'Parametry') !!}</li>
                        <li class="{{Request::path() == 'options/create' ?  'active' : ''}}">{!! HTML::link(action('OptionController@create'), 'Opcje') !!}</li>
                        <li class="divider"></li>
                        <li class="{{Request::path() == 'x' ?  'active' : ''}}">{!! HTML::link('#', 'xx') !!}</li>
                    </ul>
                </li>
            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown {{Request::path() == 'auth/register' || Request::path() == 'auth/login' ? 'active' : ''}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                        @if (Auth::check()) {{ Auth::user()->name }} @else Member @endif<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        @if(Auth::check())
                            <li><a href="{{ url('/auth/logout') }}"><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i> Sign Out</a></li>
                        @else
                            <li><a href="{{ url('/auth/login') }}"><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i>  Sign in</a></li>
                            <li><a href="{{ url('/auth/register') }}"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i> Register</a></li>
                        @endif
                    </ul>
                </li>
            </ul>


        </div>
    </div>












