<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MD Appointment</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="/css/all.css">
    </head>
    <body>

               <nav class="navbar navbar-inverse navbar-fixed-top">
                  <div class="container">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">MD Appointment</a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/timeline">Timeline</a></li>
                        <li><a href="/connections">Connections</a></li>
                      </ul>

                      <ul class="nav navbar-nav pull-right">
                        <li class="active"><a href="/register">Sign up</a></li>
                        <li><a href="/login">Sign in</a></li>
                        <li><a href="/logout">Logout</a></li>
                        <li><a href="/settings">Settings</a></li>
                      </ul>

                    </div><!--/.nav-collapse -->
                  </div>
                </nav>
                
            <div class="container">
                @yield('content')
            </div>


<!-- 
         <footer class="footer">
              <div class="container">
                <p class="text-muted">Place sticky footer content here.</p>
              </div>
            </footer> -->

            <script src="/js/all.js"></script>

            @include('partials.flash')
            @yield('javascripts')

    </body>
</html>
