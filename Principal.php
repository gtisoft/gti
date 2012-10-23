<!DOCTYPE HTML>
<html>

<head>
  <title>sistema de gestion de envio de solicitudes</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="vista/template/css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="vista/template/js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">SISTEMA<span class="logo_colour">&nbspgestion de envio de solicitudes </span></a></h1>
          
        </div>
      </div>
      <nav>
        <div id="menu_container" align="right">
          <ul class="sf-menu" id="nav">
            <li><a href="index.html">Inicio</a></li>
            <!--<li><a href="examples.html">Tipos Solicitud</a></li>-->
            <!--<li><a href="page.html">A Page</a></li>->
            <!--<li><a href="another_page.html">Another Page</a></li>-->
            <li><a href="#">tipo solicitud</a>
              <ul>
                <li><a href="administracion.php?item=3">solicitud de viaje</a></li>
                <li><a href="#">solicitud de acceso</a>
                  <ul>
                    <li><a href="administracion.php?item=2">acceso a servidor</a></li>
                    <li><a href="administracion.php?item=4">acceso a gestion reportes</a></li>
                    <!--<li><a href="#">Sub Drop Down Three</a></li>-->
                    <!--<li><a href="#">Sub Drop Down Four</a></li>-->
                    <!--<li><a href="#">Sub Drop Down Five</a></li>-->
                  </ul>
                </li>
                <!--<li><a href="#">Drop Down Three</a></li>-->
                <!--<li><a href="#">Drop Down Four</a></li>-->
                <!--<li><a href="#">Drop Down Five</a></li>-->
              </ul>
            </li>
			<li><a href="nuvoUsuario.html">Estado Solicitus </a></li>
            <li><a href="nuvoUsuario.html">Reportes</a></li>
            
            <!--<li><a href="contact.php">Contact Us</a></li>-->
          </ul>
        </div>
      </nav>
    </header>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>DATOS</h3>
          
          <h5>septiembre, 2012</h5>
          <p>el sistema de gestion de envio de solicitudes es desarrollado por el team GTISOFT<br /></p>
        </div>
        <div class="sidebar">
          <h3>Useful Links</h3>
          <ul>
            <li><a href="#">reporte solicitudes</a></li>X	
            <!--<li><a href="#"></a></li>
            <li><a href="#">And Another</a></li>
            <li><a href="#">Last One</a></li>-->
          </ul>
        </div>
      </div>
      <div class="content">
        <img style="float: left; vertical-align: middle; margin: 0 10px 0 0;" src="vista/template/imagen/home.png" alt="home" /><h1 style="margin: 15px 0 0 0;">Bienvenido al sistema de gestion de envio de solicitudes</h1>
        <p>Lo sentimos pero esta pagina se encuentra en construccion</p>
        
        
        
      </div>
    </div>
    <footer>
      <p>Copyright GTISOFT</p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="vista/template/js/jquery.js"></script>
  <script type="text/javascript" src="vista/template/js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="vista/template/js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
