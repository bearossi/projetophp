<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/estilo.css" />
	<title>Listar</title>
</head>

<body>
<header>
		<img src="<?php echo base_url(); ?>static/img/logo-fatec.png"></img>
</header>
	<ul>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/home">Home</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/index">Nossa história</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/vestibular">Vestibular</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/form">Formulário</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/aut/restrito">Area Restrita</a></li>
	</ul>


<h1 id="lis"> Lista de Depoimentos </h1>

<?php
 foreach($dep as $d){
     echo "<h3>Nome: " . $d->nome. "</h3>";
     echo "<h3>Curso: " . $d->curso. "</h3>";
     echo "<h3>Depoimento: " .$d->depoimento. "</h3><br><br>"; 

 	
 }
?>


</body>

</html>








