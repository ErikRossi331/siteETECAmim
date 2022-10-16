<?php
include_once 'conexao.php';

$cod_curso = filter_input(INPUT_GET, 'cod_curso', FILTER_SANITIZE_NUMBER_INT);
$result_cursos = "SELECT * FROM cursos where cod_curso = $cod_curso";
$resultado_cursos = mysqli_query($conn, $result_cursos);

$result_cursos2 = "SELECT * FROM professores where curso like '%$cod_curso%' order by nome asc;";
$resultado_cursos2 = mysqli_query($conn, $result_cursos2); 

$result_cursos3 = "SELECT * FROM matriz where matrizcurso like '%$cod_curso%' AND periodo like '%1º%';"; 
$resultado_cursos3 = mysqli_query($conn, $result_cursos3); 

$result_cursos4 = "SELECT * FROM matriz where matrizcurso like '%$cod_curso%' AND periodo like '%2º%' and cod_disc not between 133 and 135;"; 
$resultado_cursos4 = mysqli_query($conn, $result_cursos4); 

$result_cursos5 = "SELECT * FROM matriz where matrizcurso like '%$cod_curso%' AND periodo like '%3º%' and cod_disc not between 131 and 133;"; 
$resultado_cursos5 = mysqli_query($conn, $result_cursos5); 

$result_cursos10 = "SELECT * FROM matriz where matrizcurso like '%$cod_curso%' AND periodo like '%4º%';"; 
$resultado_cursos10 = mysqli_query($conn, $result_cursos10); 

$result_cursos6 = "SELECT * FROM matriz where matrizcurso like '%$cod_curso%' AND periodo like '%1º%';"; 
$resultado_cursos6 = mysqli_query($conn, $result_cursos6); 
$row_cursos3 = mysqli_fetch_assoc($resultado_cursos6);


$result_cursos7 = "SELECT * FROM matriz where matrizcurso like '%$cod_curso%' AND periodo like '%2º%' and cod_disc between 133 and 135;"; 
$resultado_cursos7 = mysqli_query($conn, $result_cursos7); 
$row_cursos4 = mysqli_fetch_assoc($resultado_cursos7);

$result_cursos8 = "SELECT * FROM matriz where matrizcurso like '%$cod_curso%' AND periodo like '%3º%' and cod_disc between 131 and 133"; 
$resultado_cursos8 = mysqli_query($conn, $result_cursos8);
$row_cursos5 = mysqli_fetch_assoc($resultado_cursos8);


$result_cursos9= "SELECT * FROM matriz where matrizcurso like '%$cod_curso%' AND periodo like '%4º%';"; 
$resultado_cursos9 = mysqli_query($conn, $result_cursos9); 
$row_cursos6 = mysqli_fetch_assoc($resultado_cursos9);

$result_cursostodos = "SELECT * FROM cursos where cod_curso > 13 AND cod_curso <= 17 and cod_curso <> 12 and cod_curso <> 17 and cod_curso <> $cod_curso ORDER BY RAND() LIMIT 2 ;";
$resultado_cursostodos = mysqli_query($conn, $result_cursostodos);
$row_cursostodos = mysqli_fetch_assoc($resultado_cursostodos);

$result_cursostodos2 = "SELECT * FROM cursos where cod_curso <= 13 and cod_curso <> 12 and cod_curso <> 17 and cod_curso <> $cod_curso ORDER BY RAND() LIMIT 2;";
$resultado_cursostodos2 = mysqli_query($conn, $result_cursostodos2);
$row_cursostodos2 = mysqli_fetch_assoc($resultado_cursostodos2);

$result_cursostodos3 = "SELECT * FROM cursos where cod_curso > 17 and cod_curso <= 21 and cod_curso <> 12 and cod_curso <> 17 and cod_curso <> $cod_curso ORDER BY RAND() LIMIT 2;";
$resultado_cursostodos3 = mysqli_query($conn, $result_cursostodos3);
$row_cursostodos3 = mysqli_fetch_assoc($resultado_cursostodos3);

$result_cursostodos4 = "SELECT * FROM cursos where cod_curso > 21 and cod_curso <= 25 and cod_curso <> 12 and cod_curso <> 17 and cod_curso <> $cod_curso ORDER BY RAND() LIMIT 2;";
$resultado_cursostodos4 = mysqli_query($conn, $result_cursostodos4);
$row_cursostodos4 = mysqli_fetch_assoc($resultado_cursostodos4);

$result_cursostodos5 = "SELECT * FROM cursos where cod_curso > 25 and cod_curso <= 28 and cod_curso <> 12 and cod_curso <> 17 and cod_curso <> $cod_curso ORDER BY RAND() LIMIT 2;";
$resultado_cursostodos5 = mysqli_query($conn, $result_cursostodos5);
$row_cursostodos5 = mysqli_fetch_assoc($resultado_cursostodos5);

$result_cursostodos6 = "SELECT * FROM cursos where cod_curso > 28 and cod_curso <> 12 and cod_curso <> 17 and cod_curso <> $cod_curso ORDER BY RAND() LIMIT 2;";
$resultado_cursostodos6 = mysqli_query($conn, $result_cursostodos6);
$row_cursostodos6 = mysqli_fetch_assoc($resultado_cursostodos6);
?>




<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Site Metas -->  
     
    <?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){ ?>

   <title><?php echo $rows_cursos['nome']; ?></title>  
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
	<style type="text/css">
		
		.all-title-box2{

	background: rgba(0, 0, 0, .30) url(images/cursos/<?php echo $rows_cursos['cod_curso']; echo "/"; echo $rows_cursos['banner']; ?>)no-repeat;
	background-blend-mode: darken;
	-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-position: center;
    min-height: 450px;
box-shadow: 0 0 50px 0 rgba(0,0,0,.2);
        z-index: 10;

}

   



	</style>
	
	<!-- End header -->
	
	<div class="all-title-box2">
		
		<div class="container text-center">
			<h1> <?php echo $rows_cursos['nome']; ?></h1>
			<div class="course-meta-bot3">

							<ul>
								<li><i class="fa fa-mortar-board" aria-hidden="true"></i> <?php echo $rows_cursos['tipo']; ?></li>
								<li><i class="fa fa-book" aria-hidden="true"></i> <?php echo $rows_cursos['eixo2']; ?></li>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $rows_cursos['duracao']; ?></li>
								<li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $rows_cursos['periodo']; ?></li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 40 Vagas</li>
								

							</ul>
							 </div>

						</div>		
									
										</div>
		</div>

	</div>


    <div id="overviews" class="section wb">

        <div class="container">

            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Sobre o Curso</h3>

                    <p class="lead"><?php echo $rows_cursos['descricao']; ?></p>
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row">
                                		

                                    

                             
                </div>

</div>

<div id="overviews" class="section wb">
    	   	<section class="section lb page-section">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Mercado de Trabalho</h3>
                    <p class="lead"><?php echo $rows_cursos['mercado']; ?></p>
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row">

            	</div>
            </div>
        </section>


        <div id="overviews" class="section wb">

        <div class="container">

            <div class="section-title row text-center">

                <div class="col-md-8 offset-md-2">

                    <h3>Corpo Docente</h3>

                    <p class="lead">Confira todos os professores que ministram aulas neste curso</p>

                    <br>
   
                    <p class="lead">

  <a class="btn-ol btn btn-danger" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    <i class="fa fa-mortar-board"></i> Professores do <?php echo $rows_cursos['nome']; ?>

  </a>

  <div class="collapse" id="collapseExample">
  	
  	<?php 
$i = 0;
  	while($rows_cursos2 = $resultado_cursos2->fetch_assoc()) {

$current_id = 'id-' . $i;
$i++;

  	 ?>
  	<div id="accordion">
    <div class="card">

        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#<?=$current_id?>" aria-expanded="false">
             <?php
    	echo $rows_cursos2['nome'];
    
?>

        </button>
        


    </div>

    <div id="<?=$current_id?>" class="collapse" aria-labelledby="" data-parent="#accordionExample">
    	<table>
                                        <tr>
                                            <td><strong>Titulação:</strong></td>
                                            <td> <?php echo $rows_cursos2['titulacao']; ?></td>
                                        </tr>
                                        <tr>
                                        	 <td><strong>Área de Conhecimento:</strong></td>
                                            <td><?php echo $rows_cursos2['area']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>E-mail:</strong></td>
                                            <td></td>
                                        </tr>
                                    </table>
      <div class="card-body">
        

</div>

</div>

</div>

<?php } ?>
</div>



      
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row">

            	</div>
            </div>

            <div id="overviews" class="section wb">
    	   	<section class="section lb page-section">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Matriz Curricular</h3>
                    <p class="lead">

  <a class="btn-ol btn btn-danger" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
    <i class="fa fa-calendar-plus-o"></i>  <?php echo $row_cursos3['periodo']; ?>

  </a>

  <div class="collapse" id="collapseExample2">
<br>
<p class="btn-2" type="button" data-toggle="collapse" data-target="" aria-expanded="false">
	Disciplinas
	</p>
<p class="btn-3" type="button" data-toggle="collapse" data-target="" aria-expanded="false">
	Carga Horária
	</p>
  	<?php 
$i = 0;
  	while($rows_cursos3 = $resultado_cursos3->fetch_assoc()) {

$current_id = 'id-' . $i;
$i++;

  	 ?>
 
  	<div id="accordion">

    <div class="card">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="" aria-expanded="false">

             <?php
    	echo $rows_cursos3['disciplina'];
    
?>
</button>

<button class="btn btn-link btn-5" type="button" data-toggle="collapse" data-target="" aria-expanded="false">

             <?php
    	echo $rows_cursos3['cargahora'];
    
?>


<?php } ?>

        
   </button>


    </div>



</div>

</div>
  <br>
  <a class="btn-ol btn btn-danger" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
    <i class="fa fa-calendar-plus-o"></i>  <?php echo $row_cursos4['periodo']; ?>

  </a>

  <div class="collapse" id="collapseExample3">
<br>
<p class="btn-2" type="button" data-toggle="collapse" data-target="" aria-expanded="false">
	Disciplinas
	</p>
<p class="btn-3" type="button" data-toggle="collapse" data-target="" aria-expanded="false">
	Carga Horária
	</p>
  	<?php 
$i = 0;
  	while($rows_cursos4 = $resultado_cursos4->fetch_assoc()) {

$current_id = 'id-' . $i;
$i++;

  	 ?>
 
  	<div id="accordion">

    <div class="card">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="" aria-expanded="false">

             <?php
    	echo $rows_cursos4['disciplina'];
    
?>
</button>

<button class="btn btn-link btn-5" type="button" data-toggle="collapse" data-target="" aria-expanded="false">

             <?php
    	echo $rows_cursos4['cargahora'];
    
?>


<?php } ?>

        </button>
        </div>
    </div>
</div>

<br><br>
  <a class="btn-ol btn btn-danger" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
    <i class="fa fa-calendar-plus-o"></i>  <?php echo $row_cursos5['periodo']; ?>

  </a>

  <div class="collapse" id="collapseExample4">
<br>
<p class="btn-2" type="button" data-toggle="collapse" data-target="#<?=$current_id?>" aria-expanded="false">
	Disciplinas
	</p>
<p class="btn-3" type="button" data-toggle="collapse" data-target="#<?=$current_id?>" aria-expanded="false">
	Carga Horária
	</p>
  	<?php 
$i = 0;
  	while($rows_cursos5 = $resultado_cursos5->fetch_assoc()) {

$current_id = 'id-' . $i;
$i++;

  	 ?>
 
  	<div id="accordion">

    <div class="card">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?=$current_id?>" aria-expanded="false">

             <?php
    	echo $rows_cursos5['disciplina'];
    
?>
</button>

<button class="btn btn-link btn-5" type="button" data-toggle="collapse" data-target="#<?=$current_id?>" aria-expanded="false">

             <?php
    	echo $rows_cursos5['cargahora'];
    
?>


<?php } ?>

        </button>
        </div>
    </div>
</div>
<br><br>
  <a class="btn-ol btn btn-danger" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
    <i class="fa fa-calendar-plus-o"></i>  <?php echo $row_cursos6['periodo']; ?>

  </a>

  <div class="collapse" id="collapseExample5">
<br>
<p class="btn-2" type="button" data-toggle="collapse" data-target="" aria-expanded="false">
    Disciplinas
    </p>
<p class="btn-3" type="button" data-toggle="collapse" data-target="" aria-expanded="false">
    Carga Horária
    </p>
    <?php 
$i = 0;
    while($rows_cursos6 = $resultado_cursos10->fetch_assoc()) {

$current_id = 'id-' . $i;
$i++;

     ?>
 
    <div id="accordion">

    <div class="card">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="" aria-expanded="false">

             <?php
        echo $rows_cursos6['disciplina'];
    
?>
</button>

<button class="btn btn-link btn-5" type="button" data-toggle="collapse" data-target="" aria-expanded="false">

             <?php
        echo $rows_cursos6['cargahora'];
    
?>


<?php } ?>
</button>
</div>
</div>
</div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row">

            	</div>
            </div>
        </section>

        <div id="overviews" class="section wb">
        	
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <div class="col-lg-12 col-md-12 col-12">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i class="fa fa-mortar-board"></i></font></div>
						<h3>Coordenador do Curso</h3>
						<div class="tr-pa"></div>
						<p><?php echo $rows_cursos['coordenador']; ?></p>
					</div>
				</div>
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row">
            </div>
        </div>
   
        <?php } ?>

<section class="section lb page-section">
        <div class="container">
             <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Confira outros cursos oferecidos:</h3>
                </div>
            </div><!-- end title -->
<div class="row">
                <div class="col-lg-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">

                                <div class="row">
                                        <?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursostodos)){ ?>
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
                        <?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursostodos2)){ ?>
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
                                        <?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursostodos3)){ ?>
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
<?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursostodos4)){ ?>
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
                                    <?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursostodos5)){ ?>
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
                                        <?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursostodos6)){ ?>
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