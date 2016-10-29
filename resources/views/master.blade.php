
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>CIPC</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/cover.css')}}" rel="stylesheet">
    <link href="{{ asset('css/admitere.css')}}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"><a href="/blog/public/">CIPC</a></h3>
              <nav>
                <ul class="nav masthead-nav">
                  
                  @if (Session::has('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'))
                  <li class="active"><a href="/blog/public/">Acasă</a></li>
                  <li><a href="/blog/public/admitere">Admitere</a></li>
                  <li><a href="/blog/public/insert">Insert</a></li>
                  <li><a href="/blog/public/show">Show</a></li>
                  <li><a href="/blog/public/getPDF">PDF</a></li>
                  <li><a href="http://rgho.st/6ckGS49Mv">BD</a></li>
                    <li><a href="/blog/public/logout">Logout</a></li>
                 
                  
                  @else
                  <li class="active"><a href="/blog/public/">Acasă</a></li>
                  <li><a href="/blog/public/login">Login</a></li>
                  <li><a href="/blog/public/register">Register</a></li>
                  
                  @endif
                </ul>
              </nav>
            </div>
          </div>

          @yield('content')

          <div class="mastfoot">
            <div class="inner">
              <p>Colegiul " Iulia Hașdeu " 2016</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>
  </body>
</html>
