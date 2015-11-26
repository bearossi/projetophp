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
    <h3>ÁREA RESTRITA!</h3>
     
</header>

<div id="content">
<nav>
	<ul>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/home">Home</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/index">Nossa história</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/vestibular">Vestibular</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/form">Formulário</a></li>
	</ul>
</nav>

<main>

<h2>Bem-vindo, <?php echo $this->session->userdata('username'); ?>!</h2>
<h3> O que você deseja?</h3>
<ul>
    <li><a href="<?php echo base_url() ?>index.php/vestibular/listar2">Listar inscritos</a></li>
    <li><a href="<?php echo base_url() ?>index.php/project/listar">Listar contatos</a></li>
    <li><a href="<?php echo base_url() ?>index.php/dep/listar3">Listar depoimentos</a></li>
    
</ul>

<p><button><a href="/index.php/aut/logout">Logout</a></button></p>
</main>


</div>
<footer>
&copy;2015 - Todos os direitos reservados. Desenvolvido por Beatriz Rossi & Rodolfo Cruz
</footer>

</div>
</body>

</html>

