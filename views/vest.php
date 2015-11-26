<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/estilo.css" />
	<title>Vestibular 2016</title>
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

<h2>VESTIBULAR 2016</h2>
	<h3>Inscreva-se!!</h3>
	<form action="/index.php/vestibular/doPostVestibular" method="POST">
		<label>Nome: </label><input type="text" name="nome" id="nome">
		<label>RG: </label></label><input type="text" name="rg" id="rg"><br><br>
		<label>Escolha sua unidade: </label>
	<select name="unidade" id="unidade">
		<option selected>--Selecione--</option>
		<option value="santos">Santos</option>
		<option value="praiagrande">Praia Grande</option>
		<option value="taquaritinga">Taquaritinga</option>
		<option value="barueri">Barueri</option>
	</select><br><br>
		<label>Escolha seu curso:</label>
	<select name="curso" id="curso">
		<option selected>--Selecione--</option>
		<option value="si">Sistemas para Internet</option>
		<option value="ads">Análise e Desenvolvimento de Sistemas</option>
		<option value="log">Logística</option>
		<option value="gp">Gestão Portuária</option>
	</select> 
		
	<input type="submit" value="Enviar" onclick="teste2()">	
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
