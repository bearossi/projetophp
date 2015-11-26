<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/estilo.css" />
	<title>Home</title>
</head>

<body>
<div id="container">
<header>
	<img src="<?php echo base_url(); ?>static/img/logo-fatec.png"></img>
</header>

<div id="content">
<nav>
	<ul>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/home">Home</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/index">Nossa história</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/vestibular">Vestibular</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/form">Formulário</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/listar"></a>Listar</a></li>
	</ul>
</nav>

<main>

<h2>VOCÊ NÃO ESTÁ AUTORIZADO!</h2>
<h3> Faça o login!</h3>

<form action="https://projetoy-bearossii.c9.io/index.php/Aut/login" method="POST">
            <input type="text" name="login" value="biarudy"/>
            <input type="password" name="senha" value"1234"/>
            <input type="submit" value="Acessar"/>
</form> 
</main>


</div>
<footer>
&copy;2015 - Todos os direitos reservados. Desenvolvido por Beatriz Rossi & Rodolfo Cruz
</footer>

</div>
</body>

</html>