<?php
include_once 'conexao.php';
	$valor_pesquisar = $_GET['pesquisar'];
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
   <title>Resultados da pesquisa de notícias com: <?php echo $valor_pesquisar ?></title>  
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
						<li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
						<li class="nav-item"><a class="nav-link" href="historia.php">História</a></li>
						<li class="nav-item dropdown ">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Cursos </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" id="dropdown-item" href="ensinomedio.php">Ensino Médio </a>
								<a class="dropdown-item" href="ensinotec.php">Ensino Técnico </a>
							</div>
						</li>
						<li class="nav-item active"><a class="nav-link" href="noticias.php">Notícias</a></li>
						<li class="nav-item"><a class="nav-link" href="eventos.php">Eventos</a></li>
						<li class="nav-item"><a class="nav-link" href="https://www.vestibulinhoetec.com.br/home/" target="_blank">Vestibulinho</a></li>
						<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown-b">Sobre</a>
						<div class="dropdown-menu" aria-labelledby="dropdown-b">
								<a class="dropdown-item" id="dropdown-item" href="equipeetec.php">Equipe de Trabalho </a>
								<a class="dropdown-item" href="calendarioetec.php">Calendário Escolar </a>
								<a class="dropdown-item" href="legisletec.php">Legislação </a>
								<a class="dropdown-item" href="apm.php">APM </a>
								<a class="dropdown-item" href="downloads.php">Downloads </a>
								<a class="dropdown-item" href="links.php">Links Úteis </a>
							</div>
					</li>
						<li class="nav-item"><a class="nav-link" href="contatoetec.php">Contato</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-4">

                    <h3>Últimas Notícias</h3>

                    <div class="before"></div>

                </div>
                   <hr>
            <hr class="invis"> 
<div class="col-lg-3 col-12 right-single">
					<div class="widget-search">
						<div class="site-search-area">
							<form method="get" id="site-searchform" action="pesquisaetec.php">
								<div>
									<input class="input-text form-control" name="pesquisar" id="search-k" placeholder="Pesquise..." type="text">
									<button id="searchsubmit" value="Enviar" type="submit">
								</div>
							</form>
						</div>
					</div>
    </div>

            <div class="row">
            	
<div class="row" id="noticia"> 

	<?php
	$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 6;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
	$result_noticia = "SELECT * FROM noticias WHERE titulo LIKE '%$valor_pesquisar%' order by data desc LIMIT $inicio, $qnt_result_pg";
		$resultado_noticia = mysqli_query($conn, $result_noticia);
		while($rows_noticia = mysqli_fetch_array($resultado_noticia)){ ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-item2">
						<div class="image-blog">
								<a href="etecnoticia.php?cod_noticia=<?php echo $rows_noticia['cod_noticia']; ?>"><img class="img-fluid imgpers2 img-responsive" src="images/noticias/<?php echo $rows_noticia['cod_noticia']; echo "/"; echo $rows_noticia['imagem']; ?>" alt="#" /> </a>
						</div>
						<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#noticia"><?php echo date('d/m/Y', strtotime($rows_noticia['data'])); ?></a> </span>
                            <span><i class="fa fa-tag"></i>  <a href="#noticia">NOTÍCIA</a> </span>
						</div>
						<div class="blog-title">
							<h2><a href="etecnoticia.php?cod_noticia=<?php echo $rows_noticia['cod_noticia']; ?>"><?php echo $rows_noticia['titulo']; ?></a></h2>
						</div>

						<div class="blog-desc">
							<p><?php echo (strlen($rows_noticia['descricao']) > 88 ? substr($rows_noticia['descricao'], 0, 88)."..." : $rows_noticia['descricao']) . "</h3>";?></p>
						</div>
						<div class="blog-button">
							
						</div>
					</div>

                </div><!-- end col -->

			 <?php  } ?>
			 
</div>
               
</div>
<br><br>
<?php

		//Paginção - Somar a quantidade de usuários
		$result_pg = "SELECT COUNT(cod_noticia) AS num_result FROM noticias where titulo LIKE '%$valor_pesquisar%' order by data desc";
		$resultado_pg = mysqli_query($conn, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
		$max_links = 2;
		echo "
<nav aria-label='Page navigation example'>
  <ul class='pagination center'>"?>
<li class='page-item'><a class='page-link' href='pesquisaetec.php?pagina=<?php echo 1 ?>&pesquisar=<?php echo $valor_pesquisar; ?>'><span aria-hidden='true'>Primeira</span></a>
<?php
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){ ?>
				<li class='page-item'><a class='page-link' href='pesquisaetec.php?pagina=<?php echo $pag_ant; ?>&pesquisar=<?php echo $valor_pesquisar; ?>'><?php echo $pag_ant ?></a></li>
				<?php
			}
		}
			
		echo "<li class='page-item'><a class='page-link'>$pagina</a></li>";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){ ?>
			<li class='page-item'><a class='page-link' href='pesquisaetec.php?pagina=<?php echo $pag_dep; ?>&pesquisar=<?php echo $valor_pesquisar; ?>'><?php echo $pag_dep ?></a></li>

			<?php } 
		}
			?>	
<li class='page-item'><a class='page-link' href='pesquisaetec.php?pagina=<?php echo $quantidade_pg; ?>&pesquisar=<?php echo $valor_pesquisar; ?>'><span aria-hidden='true'>Última</span></a>
		

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
                            <h3>Índices</h3>
                        </div>
                        <ul class="footer-links">
                        	<li><a href="index.php">Início</a></li>
                        	<li><a href="historia.php"> História </a></li>
                        	<li><a href="noticias.php"> Notícias </a></li>
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
                        	<li><a href="calendarioetec.php">Calendário Escolar</a></li>
                        	<li><a href="legisletec.php">Legislação</a></li>
                        	<li><a href="apm.php">APM</a></li>
                        	<li><a href="downloads.php">Downloads</a></li>
                        	<li><a href="links.php">Links Úteis</a></li>
                        

                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-lg-2 col-md-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Ensino</h3>
                        </div>
                        <ul class="footer-links">
                        	<li><a href="ensinomedio.php"> Ensino Médio </a></li>
                        	<li><a href="ensinotec.php"> Ensino Técnico </a></li>
                        	<li><a href="https://www.vestibulinhoetec.com.br/home/" target="_blank"> Vestibulinho </a></li>
                       

                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-3 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contato</h3>
                        </div>

                        <ul class="footer-links">
                        	<li><i class="fa fa-map-marker"></i>R. Japão, 724 - Centro<br> <i class="none"></i>CEP: 17700-000<br> <i class="none"></i>Osvaldo Cruz/SP</li> 
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