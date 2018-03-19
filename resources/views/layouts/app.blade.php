
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ricardo Martins
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="" />
  <meta name="description" content="" />
  <meta name="keywords" content=""/>
  <meta name="robots" content="index, follow" />


  <!-- Open Graph -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="" />
  <meta name="twitter:creator" content="" />
  <meta property="og:url" content="" />
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:image" content="" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('favicon.png')}}">

  <!-- CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/pushy.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/geral.css')}}">

  <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="selectivizr.js"></script>
    <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
  <![endif]-->

</head>
<body>
  <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!--CONTEÚDO-->
  <header id="menu-global"><!--menu principal-->
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="box-logo">
            <figure>
              <img src="assets/img/logo-ricardo.png" alt="logo-do-anderson">
            </figure>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col col-md-6">
          <div class="box-itens-menu">
            <ul class="menu-de-navegacao">
              <li><a href="/" >Home</a></li>
              <li><a href="sobre" class="active">Sobre</a></li>
              <li><a href="contato">Contato</a></li>
              <li><a href="#">Currículo</a></li>
            </ul>
          </div>
        </div>
        <div class="col col-md-6">
          <div class="box-social-media">
            <ul class="social-media">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"><i class="fab fa-behance"></i></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header><!--Fim menu principal-->

  <!-- Pushy Menu -->
<nav class="pushy pushy-left">
    <div class="pushy-content">
        <ul>
          <li class="pushy-link"><a href="/">Home</a></li>
          <li class="pushy-link"><a href="sobre">Sobre</a></li>
          <li class="pushy-link"><a href="contato">Contato</a></li>
          <li class="pushy-link"><a href="contato">Contato</a></li>
        </ul>
    </div>
</nav>

<!-- Site Overlay -->
<div class="site-overlay"></div>

<!-- Your Content -->
<div id="container">
    <!-- Menu Button -->
    <button class="menu-btn">&#9776; Menu</button>
</div>

<!--Conteúdo-->

  <!-- Conteudo do site -->
  @yield('content')
  <!-- ./ Conteudo do site-->
  <footer id="footer"><!--Rodapé-->
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12 col-sm-12 col-lg-12">
          <div class="box-social-media">
            <ul class="social-media-rodape">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"><i class="fab fa-behance"></i></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-md-12 col-sm-12 col-lg-12">
          <div class="box-copy">
            <p>Copyright <strong>Ricardo Martins</strong> © 2018 | Desenvolvido por Devux - Soluções Web</p>
          </div>
        </div>
      </div>
    </div>
  </footer>




<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/fontawesome-all.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/pushy.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>


<script>
    new WOW().init();
</script>

<script>
  $('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
  })
</script>


</body>
</html>
