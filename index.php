<?php

	// SETTINGS FOR HOMEPAGE

		// head element
		$pageTitle = "Tucano Tecnologia | Criação e otimização de sites";
		$metaDescription = "Somos uma empresa especializada na criação de websites responsivos, otimização de performance e gestão de conteúdo.";
		$metaKeywords = "site,website,criar site,fazer site,fazer um site,criação de sites,desenvolvimento de sites,como criar um site,site responsivo,site barato,otimização de sites,layout site,web design,desenvolvedor web,agência de design,agência web,design de sites,e-commerce,ecomerce,site de e-commerce,como montar um e-commerce,criação de loja online,site para loja online,criar site de vendas";

		// display specific content
		$pageName = "home";

	// Include DOCTYPE, opening HTML tag, HEAD element, opening BODY and MAIN-WRAPPER tags, HEADER element, opening SECTIONS-WRAPPER tag
	include("inc/header.php");

?>


<!-- HOMEPAGE HTML : BEGIN -->

<!-- Index SVGs -->
<svg xmlns="http://www.w3.org/2000/svg" class="svg-defs" title="index svgs">
	<symbol id="globe-white" viewbox="0 0 48 48">
		<path  fill="#ECEFF1" d="M24,2C11.85,2,2,11.85,2,24s9.85,22,22,22c12.15,0,22-9.85,22-22S36.15,2,24,2 M18.064,4.896
	c-0.431,0.451-0.842,0.954-1.237,1.496c-0.037,0.051-0.074,0.102-0.111,0.152c-0.793,1.113-1.508,2.396-2.127,3.832
	c-0.034,0.078-0.064,0.158-0.097,0.237c-0.036,0.087-0.065,0.181-0.101,0.269c-1.236-0.603-2.339-1.324-3.309-2.131
	C13.104,7.033,15.465,5.703,18.064,4.896 M9.637,10.109c1.183,1.012,2.54,1.908,4.065,2.639c-0.027,0.082-0.055,0.164-0.082,0.246
	c-0.48,1.521-0.865,3.15-1.138,4.873c-0.034,0.217-0.061,0.438-0.092,0.658c-0.092,0.655-0.167,1.32-0.226,1.998
	c-0.022,0.252-0.046,0.502-0.063,0.758c-0.038,0.564-0.047,1.144-0.064,1.719H4.042C4.288,17.996,6.379,13.484,9.637,10.109
	 M4.042,25h7.996c0.017,0.576,0.026,1.155,0.064,1.719c0.017,0.256,0.041,0.506,0.063,0.758c0.059,0.678,0.134,1.344,0.226,1.998
	c0.031,0.221,0.058,0.441,0.092,0.659c0.273,1.722,0.657,3.352,1.138,4.872c0.027,0.083,0.055,0.165,0.082,0.247
	c-1.525,0.729-2.882,1.626-4.065,2.639C6.379,34.516,4.288,30.004,4.042,25 M11.083,39.248c0.97-0.806,2.073-1.528,3.309-2.131
	c0.036,0.088,0.065,0.184,0.101,0.27c0.033,0.078,0.063,0.159,0.097,0.236c0.619,1.436,1.334,2.719,2.127,3.832
	c0.037,0.052,0.074,0.102,0.111,0.152c0.395,0.542,0.806,1.046,1.237,1.496C15.465,42.297,13.104,40.966,11.083,39.248 M23,43.899
	c-2.778-0.552-5.215-3.382-6.849-7.536c2.066-0.766,4.389-1.219,6.849-1.32V43.899z M23,33.045
	c-2.684,0.104-5.224,0.598-7.496,1.441c-0.86-2.785-1.394-6.015-1.48-9.486H23V33.045z M23,23h-8.976
	c0.086-3.472,0.62-6.701,1.48-9.486c2.272,0.844,4.812,1.338,7.496,1.442V23z M23,12.957c-2.46-0.102-4.783-0.555-6.849-1.32
	C17.785,7.482,20.222,4.652,23,4.101V12.957z M43.959,23h-7.996c-0.018-0.575-0.025-1.154-0.063-1.719
	c-0.019-0.256-0.041-0.506-0.063-0.758c-0.059-0.678-0.134-1.343-0.226-1.998c-0.031-0.22-0.058-0.441-0.093-0.658
	c-0.272-1.723-0.657-3.353-1.137-4.873c-0.027-0.082-0.056-0.164-0.082-0.246c1.524-0.73,2.881-1.627,4.063-2.639
	C41.621,13.484,43.711,17.996,43.959,23 M36.918,8.752c-0.97,0.807-2.074,1.528-3.31,2.131c-0.035-0.088-0.063-0.182-0.101-0.269
	c-0.033-0.079-0.063-0.159-0.097-0.237c-0.618-1.436-1.335-2.719-2.128-3.832c-0.036-0.051-0.072-0.102-0.109-0.152
	c-0.396-0.542-0.807-1.045-1.237-1.496C32.534,5.703,34.896,7.033,36.918,8.752 M25,4.101c2.777,0.552,5.215,3.382,6.848,7.536
	c-2.065,0.766-4.389,1.219-6.848,1.32V4.101z M25,14.956c2.684-0.104,5.225-0.599,7.496-1.442c0.859,2.785,1.395,6.015,1.48,9.486
	H25V14.956z M25,25h8.977c-0.086,3.472-0.621,6.701-1.48,9.486c-2.271-0.844-4.813-1.338-7.496-1.441V25z M25,43.899v-8.856
	c2.459,0.102,4.782,0.555,6.848,1.32C30.215,40.518,27.777,43.348,25,43.899 M29.937,43.104c0.431-0.45,0.841-0.954,1.237-1.496
	c0.037-0.051,0.073-0.101,0.109-0.152c0.793-1.113,1.51-2.396,2.128-3.832c0.033-0.077,0.063-0.158,0.097-0.236
	c0.037-0.086,0.065-0.182,0.101-0.27c1.235,0.603,2.34,1.325,3.31,2.131C34.896,40.966,32.534,42.297,29.937,43.104 M38.362,37.892
	c-1.183-1.013-2.539-1.909-4.063-2.639c0.026-0.082,0.055-0.164,0.082-0.247c0.479-1.521,0.864-3.15,1.137-4.872
	c0.035-0.218,0.062-0.438,0.093-0.659c0.092-0.654,0.167-1.32,0.226-1.998c0.022-0.252,0.045-0.502,0.063-0.758
	c0.038-0.563,0.046-1.143,0.063-1.719h7.996C43.711,30.004,41.621,34.516,38.362,37.892"/>
	</symbol>
	<symbol id="magnifier-white" viewbox="0 0 48 48">
		<path  fill="#ECEFF1" d="M45.707,44.294l-10.599-10.6C38.14,30.328,40,25.887,40,21c0-10.493-8.506-19-19-19C10.507,2,2,10.507,2,21
	c0,10.494,8.507,19,19,19c4.887,0,9.328-1.859,12.694-4.892l10.599,10.599C44.474,45.889,44.724,46,45,46c0.553,0,1-0.447,1-1
	C46,44.725,45.889,44.475,45.707,44.294 M21,38.001c-9.389,0-17-7.612-17-17.001S11.611,4,21,4s17,7.611,17,17
	S30.389,38.001,21,38.001"/>
	</symbol>
	<symbol id="globe-teal" viewbox="0 0 48 48">
		<path  fill="#009688" d="M24,2C11.85,2,2,11.85,2,24s9.85,22,22,22c12.15,0,22-9.85,22-22S36.15,2,24,2 M18.064,4.896
	c-0.431,0.451-0.842,0.954-1.237,1.496c-0.037,0.051-0.074,0.102-0.111,0.152c-0.793,1.113-1.508,2.396-2.127,3.832
	c-0.034,0.078-0.064,0.158-0.097,0.237c-0.036,0.087-0.065,0.181-0.101,0.269c-1.236-0.603-2.339-1.324-3.309-2.131
	C13.104,7.033,15.465,5.703,18.064,4.896 M9.637,10.109c1.183,1.012,2.54,1.908,4.065,2.639c-0.027,0.082-0.055,0.164-0.082,0.246
	c-0.48,1.521-0.865,3.15-1.138,4.873c-0.034,0.217-0.061,0.438-0.092,0.658c-0.092,0.655-0.167,1.32-0.226,1.998
	c-0.022,0.252-0.046,0.502-0.063,0.758c-0.038,0.564-0.047,1.144-0.064,1.719H4.042C4.288,17.996,6.379,13.484,9.637,10.109
	 M4.042,25h7.996c0.017,0.576,0.026,1.155,0.064,1.719c0.017,0.256,0.041,0.506,0.063,0.758c0.059,0.678,0.134,1.344,0.226,1.998
	c0.031,0.221,0.058,0.441,0.092,0.659c0.273,1.722,0.657,3.352,1.138,4.872c0.027,0.083,0.055,0.165,0.082,0.247
	c-1.525,0.729-2.882,1.626-4.065,2.639C6.379,34.516,4.288,30.004,4.042,25 M11.083,39.248c0.97-0.806,2.073-1.528,3.309-2.131
	c0.036,0.088,0.065,0.184,0.101,0.27c0.033,0.078,0.063,0.159,0.097,0.236c0.619,1.436,1.334,2.719,2.127,3.832
	c0.037,0.052,0.074,0.102,0.111,0.152c0.395,0.542,0.806,1.046,1.237,1.496C15.465,42.297,13.104,40.966,11.083,39.248 M23,43.899
	c-2.778-0.552-5.215-3.382-6.849-7.536c2.066-0.766,4.389-1.219,6.849-1.32V43.899z M23,33.045
	c-2.684,0.104-5.224,0.598-7.496,1.441c-0.86-2.785-1.394-6.015-1.48-9.486H23V33.045z M23,23h-8.976
	c0.086-3.472,0.62-6.701,1.48-9.486c2.272,0.844,4.812,1.338,7.496,1.442V23z M23,12.957c-2.46-0.102-4.783-0.555-6.849-1.32
	C17.785,7.482,20.222,4.652,23,4.101V12.957z M43.959,23h-7.996c-0.018-0.575-0.025-1.154-0.063-1.719
	c-0.019-0.256-0.041-0.506-0.063-0.758c-0.059-0.678-0.134-1.343-0.226-1.998c-0.031-0.22-0.058-0.441-0.093-0.658
	c-0.272-1.723-0.657-3.353-1.137-4.873c-0.027-0.082-0.056-0.164-0.082-0.246c1.524-0.73,2.881-1.627,4.063-2.639
	C41.621,13.484,43.711,17.996,43.959,23 M36.918,8.752c-0.97,0.807-2.074,1.528-3.31,2.131c-0.035-0.088-0.063-0.182-0.101-0.269
	c-0.033-0.079-0.063-0.159-0.097-0.237c-0.618-1.436-1.335-2.719-2.128-3.832c-0.036-0.051-0.072-0.102-0.109-0.152
	c-0.396-0.542-0.807-1.045-1.237-1.496C32.534,5.703,34.896,7.033,36.918,8.752 M25,4.101c2.777,0.552,5.215,3.382,6.848,7.536
	c-2.065,0.766-4.389,1.219-6.848,1.32V4.101z M25,14.956c2.684-0.104,5.225-0.599,7.496-1.442c0.859,2.785,1.395,6.015,1.48,9.486
	H25V14.956z M25,25h8.977c-0.086,3.472-0.621,6.701-1.48,9.486c-2.271-0.844-4.813-1.338-7.496-1.441V25z M25,43.899v-8.856
	c2.459,0.102,4.782,0.555,6.848,1.32C30.215,40.518,27.777,43.348,25,43.899 M29.937,43.104c0.431-0.45,0.841-0.954,1.237-1.496
	c0.037-0.051,0.073-0.101,0.109-0.152c0.793-1.113,1.51-2.396,2.128-3.832c0.033-0.077,0.063-0.158,0.097-0.236
	c0.037-0.086,0.065-0.182,0.101-0.27c1.235,0.603,2.34,1.325,3.31,2.131C34.896,40.966,32.534,42.297,29.937,43.104 M38.362,37.892
	c-1.183-1.013-2.539-1.909-4.063-2.639c0.026-0.082,0.055-0.164,0.082-0.247c0.479-1.521,0.864-3.15,1.137-4.872
	c0.035-0.218,0.062-0.438,0.093-0.659c0.092-0.654,0.167-1.32,0.226-1.998c0.022-0.252,0.045-0.502,0.063-0.758
	c0.038-0.563,0.046-1.143,0.063-1.719h7.996C43.711,30.004,41.621,34.516,38.362,37.892"/>
	</symbol>
	<symbol id="magnifier-teal" viewbox="0 0 48 48">
		<path  fill="#009688" d="M45.707,44.294l-10.599-10.6C38.14,30.328,40,25.887,40,21c0-10.493-8.506-19-19-19C10.507,2,2,10.507,2,21
	c0,10.494,8.507,19,19,19c4.887,0,9.328-1.859,12.694-4.892l10.599,10.599C44.474,45.889,44.724,46,45,46c0.553,0,1-0.447,1-1
	C46,44.725,45.889,44.475,45.707,44.294 M21,38.001c-9.389,0-17-7.612-17-17.001S11.611,4,21,4s17,7.611,17,17
	S30.389,38.001,21,38.001"/>
	</symbol>
</svg>

<!-- Services -->
<section id="services">
	<h1>O que fazemos</h1>
	<ul class="services-list">
		<li>
			<div>
				<h2>Criação de sites</h2>
				<img src="img/responsive-web-design.svg" alt="Ilustração de um desktop, um tablet e um telefone celular" />
			</div>
			<div>
				<p>Construção de websites a partir de uma ideia ou tema de sua escolha. Este é ponto de partida para que seu projeto pessoal, portfólio profissional ou empresa tenha uma presença online.</p>
				<!--p>Saiba mais sobre o serviço de <a class="text-link">Criação de sites</a>.</p-->
			</div>
		</li>
		<li>
			<div>
				<h2>Otimização de performance</h2>
				<img src="img/website-optimization.svg" alt="Ilustração de uma página web, um globo e uma engrenagem" />
			</div>
			<div>
				<p>Alteração do código do site com o objetivo de reduzir o tempo de carregamento das páginas. Quanto mais rápida a navegação do usuário, maior a probabilidade de engajamento e conversão.</p>
				<!--p>Conheça melhor o trabalho de <a class="text-link">Otimização de performance</a> das páginas de um site.</p-->
			</div>
		</li>
		<li>
			<div>
				<h2>Gestão de conteúdo</h2>
				<img src="img/content-management.svg" alt="Ilustração de uma página web, com seu conteúdo pintado em diferentes cores" />
			</div>
			<div>
				<p>Modificações no conteúdo e layout do site, para que esteja sempre atualizado com a realidade de seu negócio. Atualmente o website é a interface de relacionamento mais utilizada pelo consumidor.</p>
				<!--p>Veja quais são os serviços de <a class="text-link">Gestão de conteúdo</a> que podemos te oferecer.</p-->
			</div>
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
			<div class="thumb-wrapper">
				<h3 class="thumb-title">Aldien</h3>
				<img src="img/aldien-site.jpg" alt="Captura de tela do site da Aldien" />
				<div class="thumb-caption">
					<div>Aldien</div>
					<div class="link-wrapper"> 
						<a class="site-link" href="http://www.aldien.com.br" target="_blank">
							<svg class="link-icon">
								<use xlink:href="#globe-white" />
							</svg>
							<span class="link-text">site</span>
						</a>
						<a class="site-link">
							<svg class="link-icon">
								<use xlink:href="#magnifier-white" />
							</svg>
							<span class="link-text">+ info</span>
 						</a>
					  </div>
				</div>
				<div class="thumb-links">
					<a class="site-link" href="http://www.aldien.com.br" target="_blank">
						<svg class="link-icon">
							<use xlink:href="#globe-teal" />
						</svg>
						<span class="link-text">site</span>
					</a>
					<a class="site-link">
						<svg class="link-icon">
							<use xlink:href="#magnifier-teal" />
						</svg>
						<span class="link-text">+ info</span>
					</a>
				</div>
			</div>
		</div>
		<div class="portfolio-thumb">
			<div class="thumb-wrapper">
				<h3 class="thumb-title">Peixaria Santa Clara Morumbi</h3>
				<img src="img/peixaria-morumbi-site.jpg" alt="Captura de tela do site da Peixaria Santa Clara Morumbi" />
				<div class="thumb-caption">
					<div>Peixaria Santa Clara Morumbi</div>
					<div class="link-wrapper">
						<a class="site-link" href="http://www.peixariasantaclaramorumbi.com.br" target="_blank">
							<svg class="link-icon">
								<use xlink:href="#globe-white" />
							</svg>
							<span class="link-text">site</span>
						</a>
						<a class="site-link">
							<svg class="link-icon">
								<use xlink:href="#magnifier-white" />
							</svg>
							<span class="link-text">+ info</span>
						</a>
					</div>
				</div>
				<div class="thumb-links">
					<a class="site-link" href="http://www.peixariasantaclaramorumbi.com.br" target="_blank">
						<svg class="link-icon">
							<use xlink:href="#globe-teal" />
						</svg>
						<span class="link-text">site</span>
					</a>
					<a class="site-link">
						<svg class="link-icon">
							<use xlink:href="#magnifier-teal" />
						</svg>
						<span class="link-text">+ info</span>
					</a>
				</div>
			</div>
		</div>
		<div class="portfolio-thumb">
			<div class="thumb-wrapper">
				<h3 class="thumb-title">CervejAqui</h3>
				<img src="img/cervejaqui-site.jpg" alt="Captura de tela do site da CervejAqui" />
				<div class="thumb-caption">
					<div>CervejAqui</div>
					<div class="link-wrapper">
						<a class="site-link" href="http://www.cervejaqui.com.br" target="_blank">
							<svg class="link-icon">
								<use xlink:href="#globe-white" />
							</svg>
							<span class="link-text">site</span>
						</a>
						<a class="site-link">
							<svg class="link-icon">
								<use xlink:href="#magnifier-white" />
							</svg>
							<span class="link-text">+ info</span>
						</a>
					</div>
				</div>
				<div class="thumb-links">
					<a class="site-link" href="http://www.cervejaqui.com.br" target="_blank">
						<svg class="link-icon">
							<use xlink:href="#globe-teal" />
						</svg>
						<span class="link-text">site</span>
					</a>
					<a class="site-link">
						<svg class="link-icon">
							<use xlink:href="#magnifier-teal" />
						</svg>
						<span class="link-text">+ info</span>
					</a>
				</div>
			</div>
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