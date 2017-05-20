<?php

	// SETTINGS FOR HOMEPAGE

		// head element
		$pageTitle = "Tucano Tecnologia";
		$metaDescription = "Somos uma empresa especializada na criação de websites responsivos, otimização de performance e gestão de conteúdo.";
		$metaKeywords = "websites,sites,criação de websites,criação de sites,programação de sites,web design,web development,design de sites,design de websites,site de e-commerce,criação de loja online,site para loja online,design de loja online";

		// display specific content
		$pageName = "home";

	// Include DOCTYPE, opening HTML tag, HEAD element, opening BODY and MAIN-WRAPPER tags, HEADER element, opening SECTIONS-WRAPPER tag
	include("inc/header.php");

?>


<!-- HOMEPAGE HTML : BEGIN -->
<!-- Services -->
<section id="services">
	<h1>O que fazemos</h1>
	<ul class="services-list">
		<li>
			<h2>Criação de sites</h2>
			<img src="img/responsive-web-design.svg" alt="Ilustração de um desktop, um tablet e um telefone celular" />
			<p>Construção de websites a partir de uma ideia ou tema de sua escolha. Este é ponto de partida para que seu projeto pessoal, portfólio profissional ou empresa tenha uma presença online.</p>
			<p>Saiba mais sobre o serviço de <a class="text-link">Criação de sites</a>.</p>
		</li>
		<li>
			<h2>Otimização de performance</h2>
			<img src="img/website-optimization.svg" alt="Ilustração de uma página web, um globo e uma engrenagem" />
			<p>Alteração do código do site com o objetivo de reduzir o tempo de carregamento das páginas. Quanto mais rápida a navegação do usuário, maior a probabilidade de engajamento e conversão.</p>
			<p>Conheça melhor o trabalho de <a class="text-link">Otimização de performance</a> das páginas de um site.</p>
		</li>
		<li>
			<h2>Gestão de conteúdo</h2>
			<img src="img/content-management.svg" alt="Ilustração de uma página web, com seu conteúdo pintado em diferentes cores" />
			<p>Modificações no conteúdo e layout do site, para que esteja sempre atualizado com a realidade de seu negócio. Atualmente o website é a interface de relacionamento mais utilizada pelo consumidor.</p>
			<p>Veja quais são os serviços de <a class="text-link">Gestão de conteúdo</a> que podemos te oferecer.</p>
		</li>
	</ul>
</section>

<!-- Portfolio -->
<section id="portfolio">
	<h1>Portfólio</h1>
	<h2>Trabalhos recentes</h2>

	<!-- Portfolio carousel -->
	<div class="portfolio-carousel">
		<div class="portfolio-thumb">
			<a class="anchor-block" href="http://www.aldien.com.br" target="_blank" title="Ir para o site">
				<img src="img/aldien-site.jpg" alt="Captura de tela do site da Aldien" />
				<div class="thumb-caption">Aldien</div>
			</a>
		</div>
		<div class="portfolio-thumb">
			<a class="anchor-block" href="http://www.peixariasantaclaramorumbi.com.br" target="_blank" title="Ir para o site">
				<img src="img/peixaria-morumbi-site.jpg" alt="Captura de tela do site da Peixaria Santa Clara Morumbi" />
				<div class="thumb-caption">Peixaria Santa Clara Morumbi</div>
			</a>
		</div>
		<div class="portfolio-thumb">
			<a class="anchor-block" href="http://www.cervejaqui.com.br" target="_blank" title="Ir para o site">
				<img src="img/cervejaqui-site.jpg" alt="Captura de tela do site da CervejAqui" />
				<div class="thumb-caption">CervejAqui</div>
			</a>
		</div>
	</div>
</section>

<!-- Testimonials -->
<section id="testimonials">
	<h1>Depoimentos</h1>

	<!-- Testimonials carousel -->
	<div class="testimonials-carousel">
		<div class="testimonials-thumb">
			<div class="clearfix">
				<aside class="client-left float-left">
					<img src="img/marco-peixaria.jpg" alt="Foto do cliente Marco Moraes, proprietário da Peixaria Santa Clara Morumbi" />
				</aside>
				<aside class="client-right float-right">
					<div class="client">
						<p class="name">Marco Moraes</p>
						<p class="company">Peixaria Santa Clara Morumbi</p>
					</div>
				</aside>
			</div>
			<div class="testimonial-bubble">
				<div class="bubble-top"></div>
				<p class="testimonial">"Contratamos os serviços e ficamos extremamente satisfeitos. Todo o processo foi conduzido com bastante profissionalismo e o resultado superou nossas expectativas."</p>
			</div>
		</div>
		<div class="testimonials-thumb">
			<div class="clearfix">
				<aside class="client-left float-left">
					<img src="img/felipe-aldien.jpg" alt="Foto do cliente Felipe Diniz, proprietário da Aldien" />
				</aside>
				<aside class="client-right float-right">
					<div class="client">
						<p class="name">Felipe Diniz</p>
						<p class="company">Aldien</p>
					</div>
				</aside>
			</div>
			<div class="testimonial-bubble">
				<div class="bubble-top"></div>
				<p class="testimonial">"Precisávamos montar um e-commerce e a Tucano conseguiu nos entregar uma solução completa, rápida e adequada ao porte de nossa empresa."</p>
			</div>
		</div>
	</div>
</section>
<!-- HOMEPAGE HTML : END -->


<!-- Include closing SECTIONS-WRAPPER and MAIN-WRAPPER tags, FOOTER element, JS CALLS, closing BODY and HTML tags -->
<?php
	include("inc/footer.php");
?>