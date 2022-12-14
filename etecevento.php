<?php
include_once 'conexao.php';
$cod_evento = filter_input(INPUT_GET, 'cod_evento', FILTER_SANITIZE_NUMBER_INT);
$result_evento = "SELECT * FROM eventos where cod_evento = $cod_evento order by data desc";
		$resultado_evento = mysqli_query($conn, $result_evento);



while($rows_evento = mysqli_fetch_assoc($resultado_evento)){ 
?>
<!DOCTYPE html>
<html lang="pt-br">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
   <title><?php echo $rows_evento['titulo']; ?></title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/iconetec.jpg" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/iconetec.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 


	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	

    <!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
					<img src="images/eteclogo.png" class="etecimg" height="120px" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">In??cio</a></li>
						<li class="nav-item"><a class="nav-link" href="historia.php">Hist??ria</a></li>
						<li class="nav-item dropdown ">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Cursos </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" id="dropdown-item" href="ensinomedio.php">Ensino M??dio </a>
								<a class="dropdown-item" href="ensinotec.php">Ensino T??cnico </a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="noticias.php">Not??cias</a></li>
						<li class="nav-item active"><a class="nav-link" href="eventos.php">Eventos</a></li>
						<li class="nav-item"><a class="nav-link" href="https://www.vestibulinhoetec.com.br/home/" target="_blank">Vestibulinho</a></li>
						<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown-b">Sobre</a>
						<div class="dropdown-menu" aria-labelledby="dropdown-b">
								<a class="dropdown-item" id="dropdown-item" href="equipeetec.php">Equipe de Trabalho </a>
								<a class="dropdown-item" href="calendarioetec.php">Calend??rio Escolar </a>
								<a class="dropdown-item" href="legisletec.php">Legisla????o </a>
								<a class="dropdown-item" href="apm.php">APM </a>
								<a class="dropdown-item" href="downloads.php">Downloads </a>
								<a class="dropdown-item" href="links.php">Links ??teis </a>
							</div>
					</li>
						<li class="nav-item"><a class="nav-link" href="contatoetec.php">Contato</a></li>
					</ul>
				</div>
active			</div>
		</nav>
	</header>
	<!-- End header -->

    <div id="overviews" class="section wb">
        <div class="container">
            <div class="row"> 

                <div class="col-lg-9 blog-post-single">
                    <div class="blog-item">
						<div class="image-blog">
							<img src="images/eventos/<?php echo $rows_evento['cod_evento']; echo "/"; echo $rows_evento['imagem']; ?>" alt="" class="img-fluid">
						</div>
						<div class="post-content">
		
							<div class="meta-info-blog">
								<span><i class="fa fa-calendar"></i> <a href="#"><?php echo date('d/m/Y', strtotime($rows_evento['data'])); ?></a> </span>
								<span><i class="fa fa-tag"></i>  <a href="#">Evento</a> </span>
							</div>
							<div class="blog-title">
								
							</div>
							<br>
							<div class="blog-desc">
								<p><?php echo $rows_evento['descricao']; ?></p>
								
							</div>							
						</div>
					</div>
					<?php } ?>
				
					
					<div class="blog-comments">
						
					</div>
					
					
                </div><!-- end col -->

				<div class="col-lg-3 col-12 right-single">
					<div class="widget-search">
						<div class="site-search-area">
							<form method="get" id="site-searchform" action="pesquisaetecevento.php">
								<div>
									<input class="input-text form-control" name="pesquisar" id="search-k" placeholder="Pesquise..." type="text">
									<button id="searchsubmit" value="Search" type="submit">
								</div>
							</form>
						</div>
					</div>
					
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

<div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-4">

                    <h3>??ltimos Eventos</h3>
                    <div class="before"></div>

                </div>
                   <hr>
            <hr class="invis"> 


            <div class="row">
            	
<div class="row" id="evento"> 
	<?php
		$result_evento2 = "SELECT * FROM eventos where cod_evento <> $cod_evento order by data desc limit 6";
		$resultado_evento2 = mysqli_query($conn, $result_evento2);
 while($rows_evento = mysqli_fetch_assoc($resultado_evento2)){ ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item2">
						<div class="image-blog">
								<a href="etecevento.php?cod_evento=<?php echo $rows_evento['cod_evento']; ?>"><img class="img-fluid imgpers2 img-responsive" src="images/eventos/<?php echo $rows_evento['cod_evento']; echo "/"; echo $rows_evento['imagem']; ?>" alt="#" /> </a>
						</div>
						<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#evento"><?php echo date('d/m/Y', strtotime($rows_evento['data'])); ?></a> </span>
                            <span><i class="fa fa-tag"></i>  <a href="#evento">Evento</a> </span>
						</div>
						<div class="blog-title">
							<h2><a href="etecevento.php?cod_evento=<?php echo $rows_evento['cod_evento']; ?>"><?php echo $rows_evento['titulo']; ?></a></h2>
						</div>
						<div class="blog-desc">
							<p><?php echo (strlen($rows_evento['descricao']) > 88 ? substr($rows_evento['descricao'], 0, 88)."..." : $rows_evento['descricao']) . "</h3>";?></p>
						</div>
						<div class="blog-button">
							
						</div>
					</div>

                </div><!-- end col -->

			 <?php  } ?>
</div>
<div class="message-box2 center">
               <a href="eventos.php" class="hover-btn-new orange"><span>Ler mais</span></a>
           </div>
</div>
</div>
</div>

           
 <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
					<img src="images/eteclogo3.png" class="etecimg" height="110px" alt="" />
					<img src="images/logo-cps.png" class="etecimg" height="61px" alt="" />
					<img src="images/brasaosp.png" class="etecimg" height="65px" alt="" />
                        </div>
                        
						<div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="https://www.facebook.com/AmimJundi" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/etecamimjundi/" target="_blank"><i class="fa fa-instagram"></i></a></li>
							</ul><!-- end links -->
						</div>						
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-2 col-md-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>??ndices</h3>
                        </div>
                        <ul class="footer-links">
                        	<li><a href="index.php">In??cio</a></li>
                        	<li><a href="historia.php"> Hist??ria </a></li>
                        	<li><a href="noticias.php"> Not??cias </a></li>
                        	<li><a href="eventos.php"> Eventos </a></li>
                        	<li><a href="contatoetec.php"> Contato </a></li>

                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-lg-2 col-md-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Sobre</h3>
                        </div>
                        <ul class="footer-links">
                        	<li><a href="equipeetec.php">Equipe de Trabalho</a></li>
                        	<li><a href="calendarioetec.php">Calend??rio Escolar</a></li>
                        	<li><a href="legisletec.php">Legisla????o</a></li>
                        	<li><a href="apm.php">APM</a></li>
                        	<li><a href="downloads.php">Downloads</a></li>
                        	<li><a href="links.php">Links ??teis</a></li>
                        

                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-lg-2 col-md-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Ensino</h3>
                        </div>
                        <ul class="footer-links">
                        	<li><a href="ensinomedio.php"> Ensino M??dio </a></li>
                        	<li><a href="ensinotec.php"> Ensino T??cnico </a></li>
                        	<li><a href="https://www.vestibulinhoetec.com.br/home/" target="_blank"> Vestibulinho </a></li>
                       

                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-3 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contato</h3>
                        </div>

                        <ul class="footer-links">
                        	<li><i class="fa fa-map-marker"></i>R. Jap??o, 724 - Centro<br> <i class="none"></i>CEP: 17700-000<br> <i class="none"></i>Osvaldo Cruz/SP</li> 
                          <li><i class="fa fa-phone"></i>(18) 3528-3982
                          <br><i class="none"></i>(18) 3528-4760</li>
                            <li class="email2"><i class="fa fa-envelope"></i>e027.secretaria@etec.sp.gov.br</li></font>

                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">Todos os Direitos Reservados. &copy; 2022 <a href="#"><b><font color="black">ETEC Amim Jundi</font></b></a>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>