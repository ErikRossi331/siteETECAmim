<?php
include_once 'conexao.php';
$result_cursos = "SELECT * FROM cursos where cod_curso > 13 AND cod_curso <= 17 and cod_curso <> 12 and cod_curso <> 17 ORDER BY RAND() LIMIT 2 ;";
$resultado_cursos = mysqli_query($conn, $result_cursos);
$row_cursos = mysqli_fetch_assoc($resultado_cursos);

$result_cursoss = "SELECT * FROM cursos where cod_curso <= 13 and cod_curso <> 12 and cod_curso <> 17 ORDER BY RAND() LIMIT 2;";
$resultado_cursoss = mysqli_query($conn, $result_cursoss);
$row_cursos2 = mysqli_fetch_assoc($resultado_cursoss);

$result_cursos3 = "SELECT * FROM cursos where cod_curso > 17 and cod_curso <= 21 and cod_curso <> 12 and cod_curso <> 17 ORDER BY RAND() LIMIT 2;";
$resultado_cursos3 = mysqli_query($conn, $result_cursos3);
$row_cursos3 = mysqli_fetch_assoc($resultado_cursos3);

$result_cursos4 = "SELECT * FROM cursos where cod_curso > 21 and cod_curso <= 25 and cod_curso <> 12 and cod_curso <> 17 ORDER BY RAND() LIMIT 2;";
$resultado_cursos4 = mysqli_query($conn, $result_cursos4);
$row_cursos4 = mysqli_fetch_assoc($resultado_cursos4);

$result_cursos5 = "SELECT * FROM cursos where cod_curso > 25 and cod_curso <= 28 and cod_curso <> 12 and cod_curso <> 17 ORDER BY RAND() LIMIT 2;";
$resultado_cursos5 = mysqli_query($conn, $result_cursos5);
$row_cursos5 = mysqli_fetch_assoc($resultado_cursos5);

$result_cursos6 = "SELECT * FROM cursos where cod_curso > 28 and cod_curso <> 12 and cod_curso <> 17 ORDER BY RAND() LIMIT 2;";
$resultado_cursos6 = mysqli_query($conn, $result_cursos6);
$row_cursos6 = mysqli_fetch_assoc($resultado_cursos6);

$noticias = "SELECT * FROM noticias order by data desc limit 3;";
$resultado_noticia = mysqli_query($conn, $noticias);

$eventos = "SELECT * FROM eventos order by data desc limit 3;";
$resultado_evento = mysqli_query($conn, $eventos);

$avisos = "SELECT * FROM avisos order by cod_banner desc limit 1;";
$resultado_aviso = mysqli_query($conn, $avisos);
$row_avisos = mysqli_fetch_assoc($resultado_aviso);


?>

<!DOCTYPE html>
<html lang="pt-br">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>ETEC Amim Jundi - Osvaldo Cruz</title>  
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

	<!-- Modal -->

    <!-- LOADER -->
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
		<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbars">
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
						<li class="nav-item active"><a class="nav-link" href="index.php">Início</a></li>
						<li class="nav-item"><a class="nav-link" href="historia.php">História</a></li>
						<li class="nav-item dropdown">
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
	<script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
</script>

<div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
		<a class="modal-content" href="<?php echo $row_avisos['link'] ?>">
      <img src="images/banner/<?php echo $row_avisos['nome'] ?>">
</a>
    </div>
  </div>
</div>

	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/ETEC-Inst.jpg'); background-attachment: fixed;">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<p class="lead"></p>
									
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			</div>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>A Instituição</h3>
                    <p class="lead">"Formando profissionais competentes para o trabalho e para a vida."</p>
                </div>
            </div><!-- end title -->
        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Perfil</h2>
                        <p>	O Centro Paula Souza é uma autarquia do Governo do Estado de São Paulo, vinculada à Secretaria de Desenvolvimento Econômico, Ciência, Tecnologia e Inovação (SDECTI). A instituição administra 218 Escolas Técnicas Estaduais (Etecs) e 65 Faculdades de Tecnologia (Fatecs), reunindo mais de 283 mil alunos em cursos técnicos de nível médio e superiores tecnológicos, em mais de 300 municípios. </p>

                        <p> As Etecs atendem 212 mil estudantes nos Ensinos Técnico, Médio e Técnico Integrado ao Médio, com 135 cursos técnicos para os setores industrial, agropecuário e de serviços, incluindo habilitações na modalidade semipresencial, Educação de Jovens e Adultos (EJA) e especialização técnica. </p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/cps.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/etechis.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Nossa História</h2>
                        <p>Fundada em 1962 como Ginásio Artesanal, foi transformada em Ginásio Industrial em 1972, oferecendo os cursos de Marcenaria, Mecânica e Desenho Técnico em Mecânica. Em 1980 o Ginásio Industrial foi fechado e teve suas atividades paralisadas por dez anos, até 20 de agosto de 1990, quando foi refundado como Escola Técnica Estadual de 2º Grau de Osvaldo Cruz, pertencendo à Divisão de Supervisão e Apoio às Escolas Técnicas Estaduais - DISAETE, da Secretaria...</p>

                        <a href="historia.php" class="hover-btn-new orange"><span>Saiba Mais</span></a>

                    </div><!-- end messagebox -->
                </div><!-- end col -->

				
            </div><!-- end row -->
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Confira o Vídeo Institucional da ETEC Amim Jundi:</h2>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                      <iframe width="100%" height="315" src="https://www.youtube.com/embed/q2pa0WSXAG8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
        </div><!-- end container -->
    </div><!-- end section -->

    <section class="section lb page-section">
		<div class="container">
			 <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>O Ensino</h3>
                    <p class="lead">Confira aqui alguns cursos oferecidos!</p>
                </div>
            </div><!-- end title -->

			<div class="row">
                <div class="col-lg-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">

                                <div class="row">
                                		<?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){ ?>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

									   <div class="full blog_img_popular">
												<div class="image-blog2">
                                           <a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>"><img class="img-fluid imgpers img-responsive" src="images/cursos/<?php echo $rows_cursos['cod_curso']; echo "/"; echo $rows_cursos['imagem_capa']; ?>" alt="#" /> </a>
                                      </div>
             

										  <h4><a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>" class="yel"><?php echo $rows_cursos['nome']; ?></a></h4>
										  <p class="yel2">
<?php
										 echo (strlen($rows_cursos['descricao']) > 110 ? substr($rows_cursos['descricao'], 0, 110)."..." : $rows_cursos['descricao']) . "</h3>";?>
</p>
										  	
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
                                    <?php } ?>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
						<?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursoss)){ ?>
                                        <div class="full blog_img_popular">
                                        
						<div class="image-blog2">
                                          <a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>"><img class="img-fluid imgpers img-responsive" src="images/cursos/<?php echo $rows_cursos['cod_curso']; echo "/"; echo $rows_cursos['imagem_capa']; ?>" alt="#" /> </a>
                                      </div>
										  <h4><a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>" class="yel"><?php echo $rows_cursos['nome']; ?></a></h4>

										  <p class="yel2"><?php echo (strlen($rows_cursos['descricao']) > 102 ? substr($rows_cursos['descricao'], 0, 102)."..." : $rows_cursos['descricao']) . "</h3>";?></p>
										  <div class="course-meta-bot2">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $rows_cursos['duracao']; ?></li>
								<li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $rows_cursos['periodo']; ?></li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 40 Vagas</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> <?php echo $rows_cursos['eixo']; ?></li>

							</ul>
						</div>
						     <?php } ?>

										</div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                    	<?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos3)){ ?>
									   <div class="full blog_img_popular">
									   		   	<div class="image-blog2">

                                          <a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>"><img class="img-fluid imgpers img-responsive" src="images/cursos/<?php echo $rows_cursos['cod_curso']; echo "/"; echo $rows_cursos['imagem_capa']; ?>" alt="#" /> </a>
											</div>
										   <h4><a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>" class="yel"><?php echo $rows_cursos['nome']; ?></a></h4>
										   <p class="yel2"><?php echo (strlen($rows_cursos['descricao']) > 110 ? substr($rows_cursos['descricao'], 0, 110)."..." : $rows_cursos['descricao']) . "</h3>";?></p>
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
                                    <hr><?php } ?>	
                                    <div class="col-lg-6 col-md-6 col-sm-12">
<?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos4)){ ?>
                                        <div class="full blog_img_popular">
                                        		   			<div class="image-blog2">
                                         <a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>"><img class="img-fluid imgpers img-responsive" src="images/cursos/<?php echo $rows_cursos['cod_curso']; echo "/"; echo $rows_cursos['imagem_capa']; ?>" alt="#" /> </a>
                                      </div>
										 <h4><a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>" class="yel"><?php echo $rows_cursos['nome']; ?></a></h4>
										   <p class="yel2"><?php echo (strlen($rows_cursos['descricao']) > 110 ? substr($rows_cursos['descricao'], 0, 110)."..." : $rows_cursos['descricao']) . "</h3>";?></p>
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
                                </div>
                            </div><?php } ?>	
                             <div class="carousel-item">
                                <div class="row">
                                	<?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos5)){ ?>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
									   <div class="full blog_img_popular">
									   		   	<div class="image-blog2">

                                           <a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>"><img class="img-fluid imgpers img-responsive" src="images/cursos/<?php echo $rows_cursos['cod_curso']; echo "/"; echo $rows_cursos['imagem_capa']; ?>" alt="#" /> </a>
											</div>
										   <h4><a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>" class="yel"><?php echo $rows_cursos['nome']; ?></a></h4>
										   <p class="yel2"><?php echo (strlen($rows_cursos['descricao']) > 110 ? substr($rows_cursos['descricao'], 0, 110)."..." : $rows_cursos['descricao']) . "</h3>";?></p>
										  	<div class="course-meta-bot2">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $rows_cursos['duracao']; ?></li>
								<li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $rows_cursos['periodo']; ?></li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 40 Vagas</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> <?php echo $rows_cursos['eixo']; ?></li>
							</ul>
						</div>					
										</div>
                                    </div><?php } ?>	
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                    	<?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos6)){ ?>
                                        <div class="full blog_img_popular">
                                        		   			<div class="image-blog2">
                                          <a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>"><img class="img-fluid imgpers img-responsive" src="images/cursos/<?php echo $rows_cursos['cod_curso']; echo "/"; echo $rows_cursos['imagem_capa']; ?>" alt="#" /> </a>
                                      </div>
										  <h4><a href="eteccurso.php?cod_curso=<?php echo $rows_cursos['cod_curso']; ?>" class="yel"><?php echo $rows_cursos['nome']; ?></a></h4>
										  <p class="yel2"><?php echo (strlen($rows_cursos['descricao']) > 110 ? substr($rows_cursos['descricao'], 0, 110)."..." : $rows_cursos['descricao']) . "</h3>";?></p>
										  	<div class="course-meta-bot2">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $rows_cursos['duracao']; ?></li>
								<li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $rows_cursos['periodo']; ?></li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 40 Vagas</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> <?php echo $rows_cursos['eixo']; ?></li>
							</ul>
						</div>					
										</div><?php } ?>	
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Left and right controls -->
                      <a class="new-effect carousel-control-prev" href="#demo" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

            </div>			  
           </div>
        </div>
	<!-- end section -->
	<!-- section -->

	<div class="section cl">

		<div class="container">
			<div class="row text-left stat-wrap">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
				<p><font size="6">+ de </font><font class="stat_count">1000</font></p>
					<h3>Alunos Matriculados</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
					<p class="stat_count">21</p>
					<h3>Cursos Disponíveis</h3>
				</div><!-- end col -->
				



				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
					<p class="stat_count">32</p>
					<h3>Anos no Ensino Técnico</h3>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->



    <div id="plan" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Últimas Notícias e Eventos</h3>
      
      <div class="row" id="noticia"> 
      	<?php while($rows_noticia = mysqli_fetch_assoc($resultado_noticia)){ ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
								<a href="etecnoticia.php?cod_noticia=<?php echo $rows_noticia['cod_noticia']; ?>"><img class="img-fluid imgpers2 img-responsive" src="images/noticias/<?php echo $rows_noticia['cod_noticia']; echo "/"; echo $rows_noticia['imagem']; ?>" alt="#" /> </a>
						</div>
						<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#noticia"><?php echo date('d/m/Y', strtotime($rows_noticia['data'])); ?></a> </span>
                            <span><i class="fa fa-tag"></i>  <a href="#noticia">Notícia</a> </span>
						</div>
						<div class="blog-title">
							<h2><a href="etecnoticia.php?cod_noticia=<?php echo $rows_noticia['cod_noticia']; ?>"><?php echo $rows_noticia['titulo']; ?></a></h2>
						</div>
						<div class="blog-desc">
							<p><?php echo (strlen($rows_noticia['descricao']) > 90 ? substr($rows_noticia['descricao'], 0, 90)."..." : $rows_noticia['descricao']) . "</h3>";?></p>
						</div>
						<div class="blog-button">
							
						</div>
					</div>

                </div><!-- end col -->
			 <?php  } ?>
				</div>
<hr>
               
            <div class="row" id="eventos">
            <?php while($rows_evento = mysqli_fetch_assoc($resultado_evento)){ ?> 
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
							<a href="etecevento.php?cod_evento=<?php echo $rows_evento['cod_evento']; ?>"><img class="img-fluid imgpers2 img-responsive" src="images/eventos/<?php echo $rows_evento['cod_evento']; echo "/"; echo $rows_evento['imagem']; ?>" alt="#" /> </a>
						</div>
						<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#eventos"><?php echo date('d/m/Y', strtotime($rows_evento['data'])); ?></a> </span>
                            <span><i class="fa fa-tag"></i>  <a href="#eventos">Evento</a> </span>
						</div>

						<div class="blog-title">
							<h2><a href="etecevento.php?cod_evento=<?php echo $rows_evento['cod_evento']; ?>"><?php echo $rows_evento['titulo']; ?></a></h2>
						</div>
						<div class="blog-desc">
							<p><?php echo (strlen($rows_evento['descricao']) > 90 ? substr($rows_evento['descricao'], 0, 90)."..." : $rows_evento['descricao']) . "</h3>";?></p>
						</div>
						<div class="blog-button">
						
						</div>
					</div>
                </div><!-- end col -->
            <?php } ?>

</div>
        </div><!-- end container -->

    </div><!-- end section -->





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
    <script src="js/navbar.js"></script>
	<script src="js/timeline.min.js"></script>
	<script src="js/modal.js"></script>

</body>
</html>