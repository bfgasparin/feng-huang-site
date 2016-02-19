<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Feng Huang</title>

    <!-- Fonts -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>  -->

    <!-- Styles -->
    
    <!-- temp bootstrap -->
<!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="http://www.atlasestateagents.co.uk/css/tether.min.css">
 -->    <!-- end temp bootstrap -->

    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">

</head>
<body id="app-layout">

    <!-- Navbar
    ================================================== -->
    <nav class="navbar navbar-full navbar-dark bg-primary">
      <div class="container"> 
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
          &#9776;
        </button>
        <div class="collapse nav-inline navbar-toggleable-xs" id="navbar-header">
          <a class="navbar-brand hidden hidden-xs-down" href="/#">
              <img src="{{asset('images/logo.png')}}" alt="Instituto Feing Huang" style="width: 4rem;">
          </a>
          <a class="navbar-brand hidden hidden-lg-down p-t-1" href="/#"><h1>{{ trans('core.institute') }}</h1></a>
          <ul class="nav navbar-nav pull-xs-right h6 p-t-2">
            <li class="nav-item">
              <a class="nav-link active" href="#">{{ trans('menu.home') }}<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">{{ trans('menu.the-master') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">{{ trans('menu.modalities') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">{{ trans('menu.news') }}</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">{{ trans('menu.contact') }}</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> <!-- /navbar -->

    
    @yield('content')
  

    <footer class="text-muted bg-faded main-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-5 col-xs-12 main-footer-item">
                <strong>{{ trans('core.follow-institute', ['institute' => trans('core.institute')]) }}:</strong>
                <ul class="social-icons">
                  <li>
                    <a href="http://twitter.com/share?url=http://www.institutobfh.com.br/index.php/wudang/&text=Wudang+Kung+Fu+">
                      <span>Twitter</span>
                    </a>
                  </li>
                  <li>
                    <a href="http://www.facebook.com/sharer.php?u=http://www.institutobfh.com.br/index.php/wudang/">
                      <span>Facebook</span>
                    </a>
                  </li>
                  <li>
                    <a href="https://plus.google.com/share?url=http://www.institutobfh.com.br/index.php/wudang/">
                      <span>Google+</span>
                    </a>
                  </li> 
                  <li>
                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.institutobfh.com.br/index.php/wudang/">
                      <span>LinkedIn</span>
                    </a>
                  </li>
                  <li>
                    <a href="http://www.tumblr.com/share/link?url=www.institutobfh.com.br/index.php/wudang/&name=Wudang%20Kung%20Fu">
                      <span>Tumblr</span>
                    </a>
                  </li> 
                </ul>
          </div>  
          <div class="col-lg-3 main-footer-item">
            <address>
              <strong>{{ trans('core.telephones') }}</strong><br>
               <p><span class="fa fa-mobile fa-lg"></span>
               <abbr title="{{ trans('core.telephone-cellphone') }}">{{ trans('core.telephone-cel-abbr') }}:</abbr> <a href="tel:1130693939"> (11) 99999-9999 </a>
               </p><p>
               <span class="fa fa-phone fa-lg"></span><abbr title="{{ trans('core.telephone-commercial') }}">{{ trans('core.telephone-com-abbr') }}:</abbr> <a href="tel:1130693939">(11) 3333-3333 </a>
               </p><p>
               <span class="fa fa-phone fa-lg"></span><abbr title="{{ trans('core.telephone-commercial') }}">{{ trans('core.telephone-com-abbr') }}:</abbr> <a href="tel:1130693939">(15) 3333-3333 </a>
               </p>
            </address>
          </div>
          <div class="col-lg-3 main-footer-item"> 
            <address>
             <strong>{{ trans('core.email') }}</strong><br>
             <span class="fa fa-envelope fa-lg"></span><a href="mailto:#">institutobfh@gmail.com</a>
            </address>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <p class="pull-xs-right">
              <a href="#">Back to top</a>
            </p>
          </div> 
        </div>
      </div>
    </footer>

    <!-- JavaScripts -->
    <script src="{{ elixir('js/app.js') }}"></script>
    <!-- temp bootstrap 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    <!-- end temp bootstrap -->
</body>
</html>
