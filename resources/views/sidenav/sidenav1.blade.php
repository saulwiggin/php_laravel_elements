@section('sidenav1')
<div id="wrapper" class='toggled'>
  <nav style='margin-left: -58px;height:50px;'class="navbar navbar-default navbar-static-top">
      <div class="container">
          <div class="navbar-header">

              <!-- Collapsed Hamburger -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>

              <!-- Branding Image -->
              <a class="navbar-brand" href="https://www.myelements.me" style='margin-top:5px;color:white'>
                  {{ config('app.name', 'Nell Natural Elements') }}
              </a>

          </div>

          <div class="collapse navbar-collapse" id="app-navbar-collapse" style='background-color: black;margin-left: -40px;'>
              <!-- Left Side Of Navbar -->
              <ul class="nav navbar-nav">
                  &nbsp;
              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right" style='margin-left:-600px;font-size:18px;'>
                  <!-- Authentication Links -->
                  @if (Auth::guest())
                      <li><a style='color:white;font-size:20px;position:relative;top:5px;left:-100px;'href="{{ url('/login') }}">Login</a></li>
                      <li><a style='color:white;font-size:20px;position:relative;top:5px;left:-100px;'href="{{ url('/register') }}">Register</a></li>
                  @else
                      <li class="dropdown">
                          <a href="#" style='color:white;font-size:20px;position:relative;top:5px;left:-100px;'class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu" role="menu">
                              <li>
                                  <a href="{{ url('/logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          </ul>
                      </li>
                  @endif
              </ul>
          </div>
      </div>
  </nav>

        <!-- /.navbar-top-links -->
        <!-- Sidebar -->
        <div class='sidenav'id="sidebar-wrapper" style='font-size:12px;'>
            <ul class="sidebar-nav" id='slide-out'>
                 <li>
                   <div class="user-view">
                      <div class="background">
                        <img style='margin:10px;'width=180 class="circle" src="{{asset('/img/Nell_Logo_Stamp_Reversed.png')}}">
                      </div>
                      <a href="#!user"></a>
                      <a href="#!name"><span class="white-text name"></span></a>
                      <a href="#!email"><span class="white-text email"></span></a>
                  </div>
                </li>
                <li>
                    <a style='color:white;'href=""> Home </a>
                </li>
                <li>
                    <a style='color:white;'href="">Questionaires</a>
                </li>
                <li>
                    <a style='color:white;'href="">Products</a>
                </li>
                <!-- <li class="no-padding">
                <ul class="collapsible collapsible-accordion" style='border-top:0;border-right:0;border-left:0;'>
                  <li>
                    <a class="collapsible-header" style='border-bottom:0; background-color:0;padding:0;margin-top:14px;'>Analogues  <span class="caret"></span></a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="">Dashboard</a></li>
                        <li><a href="">Configuration</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </li> -->
                 <li>
                    <a style='color:white;'href="">DNA Test Order</a>
                </li>
                <li>
                    <a style='color:white;'href="">Devices Connected</a>
                </li>
               <li>
                    <a style='color:white;'href="">Order History</a>
                </li>
                 <li>
                  <a style='color:white;'href="">Settings</a>
                </li>
<!--                 <li>
                  <a style='margin-bottom:40px;'href="">Report</a>
                </li>
                     <li>
                    <a href=""><span class="fa fa-envelope-open"></span>Timed Alert</a>
                </li>    -->
                <!-- li class="no-padding" style='margin-bottom:70px;'>
                <ul class="collapsible collapsible-accordion" style='border-top:0;border-right:0;border-left:0;'>
                  <li>
                    <a class="collapsible-header" style='border-bottom:0; background-color:0;padding:0;margin-top:14px; margin-bottom:20px;'>Critical Alarms<span class="caret"></span></a>
                    <div class="collapsible-body"style='padding:5px;'>
                      <ul>

                      </ul>
                    </div>
                  </li>
                </ul>
              </li> -->
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
@show
