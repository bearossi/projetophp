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


<h1 id="lis"> Lista de Usuários </h1>

<?php
 foreach($usuarios as $u){
     echo "<h3>". "Nome: " .$u->nome. "<h3>";
     echo "<h3>" . "Telefone: " . $u->tel. "<h3>";
     echo "<h3>" . "Email: " . $u->email. "<h3>";    
     echo "<h3>" . "Eu sou: " .$u->eusou. "<h3>"; 
     echo "<h3>" . "Mensagem: " .$u->msg."<h3><br><br>";
 	
 }
?>


</body>

</html>








