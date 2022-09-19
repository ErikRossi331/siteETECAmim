<?php
include_once 'conexao.php';
$result_cursos = "SELECT * FROM cursos where eixo = 'Ambiente e Saúde' and cod_curso = 12 order by nome asc ;";
$resultado_cursos = mysqli_query($conn, $result_cursos);

$result_cursos1 = "SELECT * FROM cursos where eixo = 'Ambiente e Saúde' and cod_curso <> 12 order by nome asc ;";
$resultado_cursos1 = mysqli_query($conn, $result_cursos1);

$result_cursos25 = "SELECT * FROM cursos where eixo = 'Gestão e Negócios' and cod_curso = 17 order by nome asc;";
$resultado_cursos25 = mysqli_query($conn, $result_cursos25);

$result_cursos2 = "SELECT * FROM cursos where eixo = 'Gestão e Negócios' and cod_curso = 24 order by nome asc;";
$resultado_cursos2 = mysqli_query($conn, $result_cursos2);

$result_cursos26 = "SELECT * FROM cursos where eixo = 'Gestão e Negócios' and cod_curso <> 24 and cod_curso <> 17 order by nome asc;";
$resultado_cursos26 = mysqli_query($conn, $result_cursos26);

$result_cursos3 = "SELECT * FROM cursos where eixo = 'Informação e Comunicação' order by nome asc;";
$resultado_cursos3 = mysqli_query($conn, $result_cursos3);

$result_cursos4 = "SELECT * FROM cursos where eixo = 'Produção Industrial' order by nome asc;";
$resultado_cursos4 = mysqli_query($conn, $result_cursos4);

$result_cursos5 = "SELECT * FROM cursos where eixo = 'Segurança' order by nome asc;";
$resultado_cursos5 = mysqli_query($conn, $result_cursos5);


?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
   <title>ETEC Amim Jundi - Ensino Técnico</title>  
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
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Cursos </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" id="dropdown-item" href="ensinomedio.php">Ensino Médio </a>
								<a class="dropdown-item" href="ensinotec.php">Ensino Técnico </a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="noticias.php">Notícias</a></li>
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
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Ensino Técnico<span class="m_1">Vem pra ETEC!</span></h1>
		</div>

	</div>
    <div id="overviews" class="section wb">

        <div class="container">

            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Ambiente e Saúde</h3>
                    <p class="lead">Trabalhar com a saúde é uma arte... A arte de compartilhar vida!</p>
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row">
                                		<?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){ ?>

                                    

                                  <div class="col-lg-6 col-md-6 col-sm-12">
                                  	<div class="borda">
									   <div class="full blog_img_popular">
												<div class="image-blog2">
                                           <a href="eteccursoenfermagem.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>"><img class="img-fluid imgpers img-responsive" src="images/cursos/<?php echo $rows_cursos['cod_curso']; echo "/"; echo $rows_cursos['imagem_capa']; ?>" alt="#" /> </a>
                                      </div>
             

										  <h4><font size="4"><a href="eteccursoenfermagem.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>" class="yel"><?php echo $rows_cursos['nome']; ?></a></h4></font>
										  <p class="yel2"><font size="4">
<?php
										 echo (strlen($rows_cursos['descricao']) > 82 ? substr($rows_cursos['descricao'], 0, 82)."..." : $rows_cursos['descricao']) . "</h3>";?>
</p></font>
										  	
										  <div class="course-meta-bot2">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $rows_cursos['duracao']; ?></li>
								<li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $rows_cursos['periodo']; ?></li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 40 Vagas</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> <?php echo $rows_cursos['eixo']; ?></li>

							</ul>
							 </div>

						</div>		
									
										</div>
										<hr>
</div>
                                   
                                    		  
                                    <?php } ?>





                                    <?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos1)){ ?>

                                    

                                  <div class="col-lg-6 col-md-6 col-sm-12">
                                  	<div class="borda">
									   <div class="full blog_img_popular">
												<div class="image-blog2">
                                           <a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>"><img class="img-fluid imgpers img-responsive" src="images/cursos/<?php echo $rows_cursos['cod_curso']; echo "/"; echo $rows_cursos['imagem_capa']; ?>" alt="#" /> </a>
                                      </div>
             

										  <h4><font size="4"><a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>" class="yel"><?php echo $rows_cursos['nome']; ?></a></h4></font>
										  <p class="yel2"><font size="4">
<?php
										 echo (strlen($rows_cursos['descricao']) > 82 ? substr($rows_cursos['descricao'], 0, 82)."..." : $rows_cursos['descricao']) . "</h3>";?>
</p></font>
										  	
										  <div class="course-meta-bot2">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $rows_cursos['duracao']; ?></li>
								<li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $rows_cursos['periodo']; ?></li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 40 Vagas</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> <?php echo $rows_cursos['eixo']; ?></li>

							</ul>
							 </div>

						</div>		
									
										</div>
										<hr>
</div>
<?php } ?>

                </div>
            </div>

  
    <div id="overviews" class="section wb">
    	   	<section class="section lb page-section">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Gestão e Negócios</h3>
                    <p class="lead">A excelência na Gestão é aquela inspirada pelo engajamento e guiada pelo conhecimento.</p>
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row">
                                		<?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos2)){ ?>

                                    

                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                  	<div class="borda">
									   <div class="full blog_img_popular">
												<div class="image-blog2">
                                           <a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>"><img class="img-fluid imgpers img-responsive" src="images/cursos/<?php echo $rows_cursos['cod_curso']; echo "/"; echo $rows_cursos['imagem_capa']; ?>" alt="#" /> </a>
                                      </div>
             

										  <h4><font size="4"><a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>" class="yel"><?php echo $rows_cursos['nome']; ?></a></h4></font>
										  <p class="yel2"><font size="4">
<?php
										 echo (strlen($rows_cursos['descricao']) > 82 ? substr($rows_cursos['descricao'], 0, 82)."..." : $rows_cursos['descricao']) . "</h3>";?>
</p></font>
										  	
										  <div class="course-meta-bot2">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $rows_cursos['duracao']; ?></li>
								<li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $rows_cursos['periodo']; ?></li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 40 Vagas</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> <?php echo $rows_cursos['eixo']; ?></li>

							</ul>
							 </div>

						</div>		
									
										</div>
										<hr>
</div>
                                   
                                    		  
                                    <?php } ?>



               
            

            <?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos25)){ ?>

                                    

                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                  	<div class="borda">
									   <div class="full blog_img_popular">
												<div class="image-blog2">
                                           <a href="eteccursocontabilidade.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>"><img class="img-fluid imgpers img-responsive" src="images/cursos/<?php echo $rows_cursos['cod_curso']; echo "/"; echo $rows_cursos['imagem_capa']; ?>" alt="#" /> </a>
                                      </div>
             

										  <h4><font size="4"><a href="eteccursocontabilidade.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>" class="yel"><?php echo $rows_cursos['nome']; ?></a></h4></font>
										  <p class="yel2"><font size="4">
<?php
										 echo (strlen($rows_cursos['descricao']) > 82 ? substr($rows_cursos['descricao'], 0, 82)."..." : $rows_cursos['descricao']) . "</h3>";?>
</p></font>
										  	
										  <div class="course-meta-bot2">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $rows_cursos['duracao']; ?></li>
								<li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $rows_cursos['periodo']; ?></li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 40 Vagas</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> <?php echo $rows_cursos['eixo']; ?></li>

							</ul>
							 </div>

						</div>		
									
										</div>
										<hr>
</div>
                                   
                                    		  
                                    <?php } ?>

                                    

              

               <?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos26)){ ?>

                                    

                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                  	<div class="borda">
									   <div class="full blog_img_popular">
												<div class="image-blog2">
                                           <a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>"><img class="img-fluid imgpers img-responsive" src="images/cursos/<?php echo $rows_cursos['cod_curso']; echo "/"; echo $rows_cursos['imagem_capa']; ?>" alt="#" /> </a>
                                      </div>
             

										  <h4><font size="4"><a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>" class="yel"><?php echo $rows_cursos['nome']; ?></a></h4></font>
										  <p class="yel2"><font size="4">
<?php
										 echo (strlen($rows_cursos['descricao']) > 82 ? substr($rows_cursos['descricao'], 0, 82)."..." : $rows_cursos['descricao']) . "</h3>";?>
</p></font>
										  	
										  <div class="course-meta-bot2">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $rows_cursos['duracao']; ?></li>
								<li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $rows_cursos['periodo']; ?></li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 40 Vagas</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> <?php echo $rows_cursos['eixo']; ?></li>

							</ul>
							 </div>

						</div>		
									
										</div>
										<hr>
</div>
                                   
                                    		  
                                    <?php } ?>

                                    

                </div>
            </div>
            </div>

<div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Informação e Comunicação</h3>
                    <p class="lead">A tecnologia move o mundo...</p>
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row">
                                		<?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos3)){ ?>

                                    

                                  <div class="col-lg-6 col-md-6 col-sm-12">
                                  	<div class="borda">
									   <div class="full blog_img_popular">
												<div class="image-blog2">
                                           <a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>"><img class="img-fluid imgpers img-responsive" src="images/cursos/<?php echo $rows_cursos['cod_curso']; echo "/"; echo $rows_cursos['imagem_capa']; ?>" alt="#" /> </a>
                                      </div>
             

										  <h4><font size="4"><a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>" class="yel"><?php echo $rows_cursos['nome']; ?></a></h4></font>
										  <p class="yel2"><font size="4">
<?php
										 echo (strlen($rows_cursos['descricao']) > 82 ? substr($rows_cursos['descricao'], 0, 82)."..." : $rows_cursos['descricao']) . "</h3>";?>
</p></font>
										  	
										  <div class="course-meta-bot2">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $rows_cursos['duracao']; ?></li>
								<li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $rows_cursos['periodo']; ?></li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 40 Vagas</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> <?php echo $rows_cursos['eixo']; ?></li>

							</ul>
							 </div>

						</div>		
									
										</div>
										<hr>
</div>
                                   
                                    		  
                                    <?php } ?>

                </div>
            </div>



        <div id="overviews" class="section wb">
    	   	<section class="section lb page-section">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Produção Industrial</h3>
                    <p class="lead">Na natureza nada se cria, nada se perde, tudo se transforma.</p>
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row">
                                		<?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos4)){ ?>

                                    

                                  <div class="col-lg-6 col-md-6 col-sm-12">
                                  	<div class="borda">
									   <div class="full blog_img_popular">
												<div class="image-blog2">
                                           <a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>"><img class="img-fluid imgpers img-responsive" src="images/cursos/<?php echo $rows_cursos['cod_curso']; echo "/"; echo $rows_cursos['imagem_capa']; ?>" alt="#" /> </a>
                                      </div>
             

										  <h4><font size="4"><a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>" class="yel"><?php echo $rows_cursos['nome']; ?></a></h4></font>
										  <p class="yel2"><font size="4">
<?php
										 echo (strlen($rows_cursos['descricao']) > 82 ? substr($rows_cursos['descricao'], 0, 82)."..." : $rows_cursos['descricao']) . "</h3>";?>
</p></font>
										  	
										  <div class="course-meta-bot2">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $rows_cursos['duracao']; ?></li>
								<li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $rows_cursos['periodo']; ?></li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 40 Vagas</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> <?php echo $rows_cursos['eixo']; ?></li>

							</ul>
							 </div>

						</div>		
									
										</div>
										<hr>
</div>
                                   
                                    		  
                                    <?php } ?>

                </div>
            </div>

        </div>


    
        <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Segurança</h3>
                    <p class="lead">Viva com segurança. Trabalhe com confiança.</p>
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row">
                                		<?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos5)){ ?>

                                    

                                  <div class="col-lg-6 col-md-6 col-sm-12">
                                  	<div class="borda">
									   <div class="full blog_img_popular">
												<div class="image-blog2">
                                           <a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>"><img class="img-fluid imgpers img-responsive" src="images/cursos/<?php echo $rows_cursos['cod_curso']; echo "/"; echo $rows_cursos['imagem_capa']; ?>" alt="#" /> </a>
                                      </div>
             

										  <h4><font size="4"><a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>" class="yel"><?php echo $rows_cursos['nome']; ?></a></h4></font>
										  <p class="yel2"><font size="4">
<?php
										 echo (strlen($rows_cursos['descricao']) > 82 ? substr($rows_cursos['descricao'], 0, 82)."..." : $rows_cursos['descricao']) . "</h3>";?>
</p></font>
										  	
										  <div class="course-meta-bot2">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $rows_cursos['duracao']; ?></li>
								<li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $rows_cursos['periodo']; ?></li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 40 Vagas</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> <?php echo $rows_cursos['eixo']; ?></li>

							</ul>
							 </div>

						</div>		
									
										</div>
										<hr>
</div>
                                   
                                    		  
                                    <?php } ?>

                </div>

</div>
<br><br>
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
                        	<li><a href="contato.php"> Contato </a></li>

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