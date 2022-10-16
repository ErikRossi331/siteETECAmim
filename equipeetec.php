<?php
include_once 'conexao.php';

$diretor = "SELECT * FROM equipe where cargo like '%diretoretec%';";
$consulta_diretor = mysqli_query($conn, $diretor);

$coordenacao = "SELECT * FROM equipe where cargo like '%Coordenação Pedagógica%';";
$consulta_coordenação = mysqli_query($conn, $coordenacao);

$administra = "SELECT * FROM equipe where cargo like '%equipe administrativa%';";
$consulta_administra = mysqli_query($conn, $administra);

$bolsa = "SELECT * FROM equipe where cargo like '%bolsa%';";
$consulta_bolsa = mysqli_query($conn, $bolsa);

$coordenador = "SELECT * FROM equipe where cargo like '%coordenador%';";
$consulta_coordenador = mysqli_query($conn, $coordenador);

$limpeza = "SELECT * FROM equipe where cargo like '%limpeza%';";
$consulta_limpeza = mysqli_query($conn, $limpeza);

$seguranca = "SELECT * FROM equipe where cargo like '%seguranca%';";
$consulta_seguranca = mysqli_query($conn, $seguranca);

$result_cursos2 = "SELECT * FROM professores order by nome asc;";
$resultado_cursos2 = mysqli_query($conn, $result_cursos2); 

$estagiarios = "SELECT * FROM equipe where cargo like '%estagiario%';";
$consulta_estagiario = mysqli_query($conn, $estagiarios);

?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
   <title>ETEC Amim Jundi - Equipe  de Trabalho</title>  
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
						<li class="nav-item"><a class="nav-link" href="noticias.php">Notícias</a></li>
						<li class="nav-item"><a class="nav-link" href="eventos.php">Eventos</a></li>
						<li class="nav-item"><a class="nav-link" href="https://www.vestibulinhoetec.com.br/home/" target="_blank">Vestibulinho</a></li>
						<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle " href="#" id="dropdown-b">Sobre</a>
						<div class="dropdown-menu" aria-labelledby="dropdown-b">
								<a class="dropdown-item active" id="dropdown-item" href="equipeetec.php">Equipe de Trabalho </a>
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
                <div class="col-md-6">

                    <h3 class="left">Equipe de Trabalho</h3>

                </div>
                   <hr>
            <hr class="invis"> 

</div>
            
            	
<div class="card12">
                    <p class="lead">

  <a class="" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
   <h6 class="sas"> Diretor da Unidade <i class="fa fa-caret-down"></i></h6> </a>

  <div class="collapse" id="collapseExample2">
<br>
  	<?php 
$i = 0;
  	while($rows_diretor = $consulta_diretor->fetch_assoc()) {

$current_id = 'id-' . $i;
$i++;

  	 ?>
 
  	<div id="accordion">

    <div class="card2">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="" aria-expanded="false">
<p class="ss2">
             <?php
    	echo $rows_diretor['nome'];
    


?>
</p>

<?php echo $rows_diretor['descricao']; ?>

</button>

<p>


<?php } ?>

        


    </div>



</div>
</div>
</div>
</p>
<br>
<div class="card12">
                    <p class="lead">

  <a class="" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
   <h6 class="sas"> Coordenação Pedagógica <i class="fa fa-caret-down"></i></h6> </a>

  <div class="collapse" id="collapseExample3">
<br>
  	<?php 
$i = 0;
  	while($rows_diretor = $consulta_coordenação->fetch_assoc()) {

$current_id = 'id-' . $i;
$i++;

  	 ?>
 
  	<div id="accordion">

    <div class="card2">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="" aria-expanded="false">
<p class="ss2">
             <?php
    	echo $rows_diretor['nome'];
    


?>
</p>
<?php echo $rows_diretor['descricao']; ?>
</button>
<p>



<?php } ?>

        


    </div>



</div>
</div>
</div>
</p>


</div>

</div>
<p></p>
	<br>
<div class="card12">
                    <p class="lead">

  <a class="" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
   <h6 class="sas"> Equipe Administrativa <i class="fa fa-caret-down"></i></h6> </a>

  <div class="collapse" id="collapseExample4">
<br>
  	<?php 
$i = 0;
  	while($rows_diretor = $consulta_administra->fetch_assoc()) {

$current_id = 'id-' . $i;
$i++;

  	 ?>
 
  	<div id="accordion">

    <div class="card2">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="" aria-expanded="false">
<p class="ss2">
             <?php
    	echo $rows_diretor['nome'];
    


?>
</p>

<?php echo $rows_diretor['descricao']; ?>

</button>
<p>





        


    </div>



</div>
<?php } ?>
</div>
</p>
</div>

<p></p>
	<br>
<div class="card12">
                    <p class="lead">

  <a class="" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
   <h6 class="sas"> Programa Bolsa do Povo Educação Centro Paula Souza  <i class="fa fa-caret-down"></i></h6> </a>

  <div class="collapse" id="collapseExample5">
<br>
  	<?php 
$i = 0;
  	while($rows_diretor = $consulta_bolsa->fetch_assoc()) {

$current_id = 'id-' . $i;
$i++;

  	 ?>
 
  	<div id="accordion">

    <div class="card2">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="" aria-expanded="false">
<p class="ss2">
             <?php
    	echo $rows_diretor['nome'];
    


?>
</p>

<?php echo $rows_diretor['descricao']; ?>

</button>
<p>





        


    </div>



</div>
<?php } ?>
</div>
</p>
</div>
<p></p>
<br>
<div class="card12">
                    <p class="lead">

  <a class="" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample">
   <h6 class="sas"> Coordenadores de Curso <i class="fa fa-caret-down"></i></h6> </a>

  <div class="collapse" id="collapseExample6">
<br>
  	<?php 
$i = 0;
  	while($rows_diretor = $consulta_coordenador->fetch_assoc()) {

$current_id = 'id-' . $i;
$i++;

  	 ?>
 
  	<div id="accordion">

    <div class="card2">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="" aria-expanded="false">
<p class="ss2">
             <?php
    	echo $rows_diretor['nome'];
    


?>
</p>

<?php echo $rows_diretor['descricao'] . "<br>"; ?>
<?php echo $rows_diretor['curso2'] . "<br>"; ?>
<?php echo $rows_diretor['curso3']; ?>

</button>
<p>





        


    </div>



</div>
<?php } ?>
</div>
</p>
</div>
<p></p>
	<br>
<div class="card12">
                    <p class="lead">

  <a class="" data-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample">
   <h6 class="sas"> Equipe de Limpeza (Terceirizados) <i class="fa fa-caret-down"></i></h6> </a>

  <div class="collapse" id="collapseExample7">
<br>
  	<?php 
$i = 0;
  	while($rows_diretor = $consulta_limpeza->fetch_assoc()) {

$current_id = 'id-' . $i;
$i++;

  	 ?>
 
  	<div id="accordion">

    <div class="card2">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="" aria-expanded="false">
<p class="ss2">
             <?php
    	echo $rows_diretor['nome'];
    


?>
</p>

<?php echo $rows_diretor['descricao']; ?>

</button>
<p>





        


    </div>



</div>
<?php } ?>
</div>

</div>
<p></p>
	<br>
<div class="card12">
                    <p class="lead">

  <a class="" data-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample">
   <h6 class="sas"> Equipe de Segurança (Terceirizados) <i class="fa fa-caret-down"></i></h6> </a>

  <div class="collapse" id="collapseExample8">
<br>
  	<?php 
$i = 0;
  	while($rows_diretor = $consulta_seguranca->fetch_assoc()) {

$current_id = 'id-' . $i;
$i++;

  	 ?>
 
  	<div id="accordion">

    <div class="card2">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="" aria-expanded="false">
<p class="ss2">
             <?php
    	echo $rows_diretor['nome'];
    


?>
</p>

<?php echo $rows_diretor['descricao']; ?>

</button>
<p>





        


    </div>



</div>
<?php } ?>
</div>

</div>
<p></p>
	<br>
<div class="card12">
                    <p class="lead">

<a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
     <h6 class="sas"> Equipe de Docentes <i class="fa fa-caret-down"></i></h6> </a>
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
                                          
                                            <th class="op">Titulação:</td>
                                            <td class="op"> <?php echo $rows_cursos2['titulacao']; ?></td>
                                        </tr>
                                        <tr>
                                        	 <th class="op">Área de Conhecimento:</td>
                                            <td class="op"><?php echo $rows_cursos2['area']; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="op">E-mail:</td>
                                            <td class="op"><?php echo $rows_cursos2['email']; ?></td>
                                        </tr>
                                    </table>
      <div class="card-body">
        

</div>

</div>

</div>

<?php } ?>
</div>



      
                </div>

<p></p>
	<br>
<div class="card12">
                    <p class="lead">

  <a class="" data-toggle="collapse" href="#collapseExample9" role="button" aria-expanded="false" aria-controls="collapseExample">
   <h6 class="sas"> Equipe de Estagiários <i class="fa fa-caret-down"></i></h6> </a>

  <div class="collapse" id="collapseExample9">
<br>
  	<?php 
$i = 0;
  	while($rows_diretor = $consulta_estagiario->fetch_assoc()) {

$current_id = 'id-' . $i;
$i++;

  	 ?>
 
  	<div id="accordion">

    <div class="card2">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="" aria-expanded="false">
<p class="ss2">
             <?php
    	echo $rows_diretor['nome'];
    


?>
</p>

<?php echo $rows_diretor['descricao']; ?>

</button>
<p>





        


    </div>



</div>
<?php } ?>
</div>

</div>            </div><!-- end title -->
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