<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="<?php echo base_url(); ?>static/js/script.js"></script>
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/estilo.css" />
	<title>Formulário</title>
	
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
	</ul>
</nav>

<main>

<h2>Contato:</h2>

<p>Que tal nos informar seus dados? Dessa forma entraremos em contato com você o mais breve!</p>

<h3>Formulário</h3>

<h3>Dados de usuario:</h3>
<form action="/index.php/project/doPost" method="POST">
    <legend>Informações Pessoais</legend>
	<label>Nome: </label><input type="text" name="nome" id="nome">
	<label>E-mail:</label><input type="email" name="email" id="email">
	<label>Telefone</label><input type="text" name="tel" id="tel"><br><br>

	<label>Eu sou: </label>
	<select name="eusou" id="eusou">
		<option selected>--Selecione--</option>
		<option value="PROFESSOR">Professor</option>
		<option value="ALUNO">Aluno</option>
		<option value="FUNCIONARIO">Funcionário</option>
		<option value="VISITANTE">Visitante</option>
	</select><br><br>
	
	
	<label>Mensagem: </label><br>
	<textarea name="msg" id="msg" rows="10" cols="50"></textarea><br><br>
	
	<input type="submit" value="Enviar" onclick="teste()">
	</fieldset>
    
</form>

<br><br><br>


<p>Obrigado por fazer parte da nossa história!</p>
</main>

<aside>

<h3>Vestibular 2016</h3>
<p>Inscrições do Processo Seletivo

De 07/10 até às 15h do dia 11/11/2015 - Inscrições do Processo Seletivo no site www.vestibularfatec.com.br</p>
<a href="#">Leia Mais</a>

<h3>Maratona de Programação</h3>
<p>Mostre seus conhecimentos na Maratona de Programação 2015. Não perca tempo e inscreva-se!</p>
<a href="#">Leia Mais</a>


</aside>
</div>

<footer>
&copy;2015 - Todos os direitos reservados. Desenvolvido por Beatriz Rossi & Rodolfo Cruz
</footer>




</body>
</html>
