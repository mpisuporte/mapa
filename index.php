<?php
	include("dados.php");	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#" title="Home" alt="Home">Home</a></li>
				<li><a href="#" title="Receitas" alt="Receitas">Receitas</a></li>
				<li><a href="#" title="Redes Sociais" alt="Redes Sociais">Redes Sociais</a></li>
				<li><a href="#" title="Fale Conosco" alt="Fale Conosco">Fale Conosco</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Um cardápio feito com muito amor e os melhores ingredientes da cidade só a gente tem! </h1>
                    </header>
                    <p> Comer bem é investir em saúde para a vida toda. </p>                 
                </div>
            </article>
        </div>
		<section class="main_marmitas">
			<header class="main_marmitas_header">
				<h1>Confira nosso cardápio</h1>
				<p>Faça seu pedido!</p>
			</header>
			<?php
				foreach($marmitas as $key => $value){
			?>
			<article>
				<a href="detalhes.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 80);?>...</p>
				<p>P = R$<?=$value['p'];?></p>
				<p>M = R$<?=$value['m'];?></p>
				<p>G = R$<?=$value['g'];?></p>
			</article>
			<?php
				}
			?>
			
		</section>
		<!--suport -->
        <article class="main_suport">
            <div class="main_suport_content">
                <header>
                    <nav>
			<ul>
				<li><a href="#" title="Home" alt="Home">Home</a></li>
				<li><a href="#" title="Receitas" alt="Receitas">Receitas</a></li>
				<li><a href="#" title="Redes Sociais" alt="Redes Sociais">Redes Sociais</a></li>
				<li><a href="#" title="Fale Conosco" alt="Fale Conosco">Fale Conosco</a></li>
			</ul>
                </header>
                
            </div>
        </article>
        <!--3ª dobra-->
	</main>

	<footer>
	<p>Pedro Perissato - RA:21016054-5 - MAPA BACK END I  -  UNICESUMAR:2022</p>
	</footer>
</body>
</html>