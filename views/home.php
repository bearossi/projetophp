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
	<form action="/index.php/aut/login" method="POST" id="login">
		<label>Login: </label><input type="text" name="login">
		<label>Senha:</label><input type="password" name="senha">
		
		<input type="submit" value="Entrar">
		
	</form>
</header>

<div id="content">
<nav id="menu">
	<ul>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/home">Home</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/index">Nossa história</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/vestibular">Vestibular</a></li>
		<li><a href="https://projetoy-bearossii.c9.io/index.php/project/form">Formulário</a></li>
	</ul>
</nav>

<main>

<h2>Home</h2>

<p>O Centro Estadual de Educação Tecnológica Paula Souza (CEETEPS) é uma autarquia do governo do estado de São Paulo vinculada à Secretaria de 
Desenvolvimento Econômico, Ciência e Tecnologia que administra as Escolas Técnicas Estaduais (ETEC) e as Faculdades de Tecnologia (FATEC) do mesmo 
estado.</p>

<p>A sede do Centro Paula Souza está localizada no prédio que era utilizado por essa instituição até a transferência desta para a "Cidade 
Universitária".</p>

<form action="/index.php/dep/doPostDep" method="POST">
	<fieldset><legend>Depoimentos</legend>
	<label>Nome:</label><input type="text" name="nome"/>
	<label>Curso:</label>
		<select name="curso" id="curso">
		<option selected>Selecione seu curso</option>
		<option value="si">Sistemas para Internet</option>
		<option value="ads">Análise e Desenvolvimento de Sistemas</option>
		<option value="log">Logística</option>
		<option value="gp">Gestão Portuária</option>
	</select><br><br>
	<label>Deixe seu depoimento:</label><br>
	<textarea name="depoimento" rows="11" cols="50"></textarea>
	<input type="submit" value="Enviar"/>
	</fieldset>
</form>

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

</div>
</body>

</html>

