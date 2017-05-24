<!DOCTYPE html>

<html lang="pt">
	
	<head>
		
		<!-- FILE SETTINGS AND INFO -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $pageTitle; ?></title>
		<meta name="author" content="Marcelo Vieira Pinto">
		<meta name="description" content="<?php echo $metaDescription; ?>">
		<meta name="keywords" content="<?php echo $metaKeywords; ?>">
		<meta name="robots" content="index,follow">

		<!-- CSS LINKS -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
		<!--link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/slick.css">
		<link rel="stylesheet" href="css/slick-theme.css">
		<link rel="stylesheet" href="css/base-styles.css"-->
		<link rel="stylesheet" type="text/css" href="css/styles.min.css">

	</head>

	<body>

		<!-- Google Analytics tag -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-50034609-2', 'auto');
		  ga('send', 'pageview');

		</script>

		<!-- Header SVGs -->
		<svg xmlns="http://www.w3.org/2000/svg" class="svg-defs" title="header svgs">
			<symbol id="at-sign-grey" viewbox="0 0 24 23.99">
				<path fill="#263238" d="M22.461,17.891c-0.518,0.703-1.132,1.372-1.828,1.99c-0.695,0.617-1.475,1.162-2.317,1.62
			c-0.839,0.457-1.744,0.818-2.689,1.075c-0.94,0.255-1.941,0.385-2.973,0.385c-1.553,0-3.046-0.239-4.439-0.707
			c-1.388-0.468-2.626-1.173-3.678-2.097c-1.05-0.92-1.895-2.082-2.51-3.451s-0.928-2.981-0.928-4.792
			c0-1.508,0.295-2.934,0.876-4.238c0.583-1.306,1.4-2.464,2.43-3.44c1.031-0.978,2.264-1.76,3.666-2.323
			c1.402-0.564,2.944-0.85,4.583-0.85c1.458,0,2.836,0.221,4.094,0.657C18,2.157,19.095,2.774,19.998,3.557
			c0.901,0.781,1.619,1.735,2.132,2.834c0.512,1.098,0.771,2.319,0.771,3.631c0,1.162-0.214,2.261-0.637,3.264
			c-0.425,1.007-0.964,1.889-1.6,2.619c-0.634,0.729-1.339,1.312-2.094,1.732c-0.744,0.416-1.463,0.626-2.135,0.626
			c-0.409,0-0.713-0.078-0.903-0.232c-0.189-0.152-0.3-0.354-0.339-0.619c-0.041-0.285-0.009-0.631,0.1-1.025
			c0.11-0.41,0.269-0.856,0.473-1.33l3.932-9.675H18.53l-0.724,1.887c-0.345-0.726-0.909-1.312-1.683-1.746
			c-0.898-0.504-1.928-0.76-3.059-0.76c-1.247,0-2.403,0.312-3.44,0.925c-1.026,0.609-1.914,1.4-2.638,2.352
			c-0.72,0.947-1.285,1.992-1.68,3.104c-0.396,1.115-0.596,2.208-0.596,3.248c0,0.678,0.126,1.325,0.376,1.923
			c0.25,0.598,0.593,1.124,1.022,1.563c0.43,0.442,0.95,0.799,1.543,1.057c1.305,0.569,2.89,0.484,4.461-0.026
			c0.731-0.236,1.396-0.68,1.983-1.32c0.029,0.435,0.206,0.806,0.528,1.112c0.438,0.415,1.023,0.627,1.74,0.627
			c0.856,0,1.751-0.25,2.659-0.742c0.9-0.488,1.729-1.162,2.465-2.003c0.732-0.838,1.34-1.828,1.806-2.942
			C23.763,12.521,24,11.305,24,10.022c0-1.525-0.302-2.926-0.897-4.165c-0.594-1.239-1.416-2.304-2.442-3.167
			c-1.024-0.861-2.239-1.532-3.608-1.995C15.685,0.234,14.204,0,12.653,0c-1.714,0-3.358,0.301-4.888,0.895s-2.888,1.43-4.037,2.487
			C2.579,4.438,1.661,5.706,0.999,7.148C0.336,8.593,0,10.197,0,11.914C0,14,0.371,15.829,1.104,17.352
			c0.732,1.521,1.705,2.789,2.891,3.771c1.184,0.979,2.55,1.711,4.06,2.173c1.502,0.461,3.05,0.694,4.599,0.694
			c1.067,0,2.143-0.14,3.198-0.413c1.053-0.274,2.068-0.671,3.019-1.177c0.951-0.506,1.844-1.129,2.654-1.854
			c0.813-0.728,1.508-1.543,2.066-2.425l0.199-0.315h-1.268L22.461,17.891z M13.75,16.365c-0.408,0.492-0.837,0.884-1.276,1.165
			c-0.437,0.279-0.895,0.473-1.36,0.575c-1.084,0.239-2.108,0.213-2.956-0.136c-0.478-0.196-0.895-0.471-1.239-0.819
			c-0.347-0.348-0.621-0.76-0.816-1.224c-0.195-0.461-0.294-0.978-0.294-1.535c0-0.885,0.176-1.839,0.522-2.834
			c0.347-0.997,0.84-1.934,1.467-2.784C8.42,7.93,9.184,7.217,10.064,6.657c0.868-0.552,1.832-0.832,2.865-0.832
			c0.421,0,0.863,0.048,1.316,0.142c0.448,0.094,0.88,0.251,1.286,0.468c0.399,0.216,0.756,0.501,1.06,0.851
			c0.286,0.331,0.508,0.752,0.66,1.257l-2.414,5.934C14.524,15.238,14.158,15.873,13.75,16.365"/>
			</symbol>
			<symbol id="pencil-grey" viewbox="0 0 24 24">
				<path fill="#263238" d="M0,4.363c0,1.205,0.488,2.296,1.278,3.086l14.727,14.727L24,24l-1.823-7.994L7.449,1.277
			C6.66,0.488,5.569,0,4.364,0C1.954,0,0,1.954,0,4.363 M21.158,16.909l0.892,3.817h-1.323v1.323l-3.817-0.893v-4.249L21.158,16.909
			L21.158,16.909z M20.447,15.818h-4.083c-0.302,0-0.546,0.244-0.546,0.545v4.084L4.072,8.699L8.7,4.07L20.447,15.818z M6.678,2.05
			l1.251,1.251L3.3,7.93L2.05,6.678c0,0-0.959-0.89-0.959-2.314c0-1.807,1.465-3.271,3.273-3.271C5.267,1.091,6.085,1.457,6.678,2.05"
			/>
			</symbol>
			<symbol id="phone-grey" viewbox="0 0 24 24">
				<path fill="#263238" d="M23.999,19.082h-0.008c0-0.451-0.183-0.859-0.479-1.156c-0.087-0.088-0.185-0.16-0.289-0.227l-4.619-3.592
			c-0.297-0.297-0.705-0.479-1.155-0.479c-0.37,0-0.71,0.128-0.98,0.336l-1.288,1.298l-0.004-0.003
			c-0.199,0.224-0.486,0.366-0.81,0.366c-0.369,0-0.693-0.184-0.894-0.464c-0.007,0.011-0.017,0.021-0.021,0.03
			c-1.782-1.293-3.362-2.851-4.654-4.634c0.013-0.008,0.024-0.018,0.037-0.026C8.55,10.332,8.363,10.003,8.363,9.63
			c0-0.334,0.152-0.63,0.387-0.831L8.747,8.797l1.282-1.272c0.208-0.272,0.335-0.609,0.335-0.979c0-0.452-0.184-0.861-0.479-1.157
			L6.292,0.77C6.227,0.666,6.153,0.567,6.066,0.479C5.77,0.183,5.361,0,4.909,0C2.727,0,0,2.564,0,5.727
			c0,0.876,0.203,1.704,0.554,2.446L0.536,8.192c3.282,6.537,8.737,11.99,15.272,15.272l0.019-0.019
			C16.568,23.798,17.396,24,18.271,24C21.436,24,24,21.271,24,19.091C24,19.088,23.999,19.086,23.999,19.082 M18.271,22.909
			c-0.685,0-1.351-0.151-1.979-0.449c-0.062-0.026-0.12-0.05-0.183-0.065C9.91,19.232,4.772,14.094,1.608,7.895
			C1.59,7.831,1.568,7.768,1.539,7.707c-0.299-0.63-0.45-1.296-0.45-1.979c0-2.646,2.317-4.636,3.818-4.636
			c0.196,0,0.326,0.101,0.386,0.16c0.013,0.014,0.038,0.043,0.074,0.101c0.02,0.031,0.041,0.061,0.063,0.089L9.022,6.06
			C9.05,6.096,9.08,6.129,9.112,6.162c0.06,0.06,0.16,0.19,0.16,0.386c0,0.097-0.027,0.188-0.079,0.271L7.978,8.023
			C7.973,8.029,7.967,8.034,7.961,8.04C7.521,8.455,7.27,9.029,7.27,9.631c0,0.563,0.219,1.1,0.599,1.503
			c0.014,0.021,0.028,0.042,0.043,0.063c1.341,1.853,2.988,3.495,4.896,4.879c0.016,0.011,0.029,0.021,0.045,0.029
			c0.402,0.388,0.942,0.608,1.512,0.608c0.568,0,1.117-0.229,1.525-0.628c0.021-0.02,0.041-0.037,0.062-0.059l1.222-1.23
			c0.086-0.053,0.178-0.08,0.273-0.08c0.195,0,0.326,0.102,0.386,0.16c0.03,0.031,0.065,0.063,0.101,0.09l4.618,3.594
			c0.03,0.021,0.062,0.043,0.093,0.063c0.06,0.036,0.084,0.061,0.1,0.072c0.061,0.061,0.158,0.188,0.158,0.386
			c0,0.037,0.002,0.073,0.007,0.11C22.82,20.693,20.859,22.909,18.271,22.909"/>
			</symbol>
			<symbol id="close" viewbox="0 0 24 24">
				<path fill="#263238" d="M12.943,12L23.805,1.138C23.926,1.018,24,0.851,24,0.667C24,0.299,23.702,0,23.333,0
			c-0.184,0-0.35,0.075-0.471,0.196L12,11.058L1.138,0.196C1.018,0.075,0.851,0,0.667,0C0.298,0,0,0.299,0,0.667
			c0,0.185,0.074,0.351,0.195,0.472L11.057,12L0.195,22.862C0.074,22.983,0,23.149,0,23.333C0,23.702,0.298,24,0.667,24
			c0.185,0,0.351-0.074,0.472-0.195L12,12.943l10.862,10.862C22.983,23.926,23.149,24,23.333,24C23.702,24,24,23.702,24,23.333
			c0-0.184-0.074-0.35-0.195-0.471L12.943,12z"/>
			</symbol>
			<symbol id="home" viewbox="0 0 24 24">
				<path fill="#FCFCFC" d="M23.84,11.615l-4.203-4.204V1.636c0-0.301-0.245-0.545-0.546-0.545h-3.272c-0.301,0-0.546,0.245-0.546,0.545
			v1.411L12.386,0.16C12.287,0.061,12.15,0,12,0s-0.287,0.061-0.386,0.16L0.16,11.615C0.061,11.713,0,11.85,0,12
			c0,0.302,0.245,0.545,0.545,0.545c0.15,0,0.287-0.061,0.386-0.16l2.342-2.341v13.41C3.273,23.756,3.517,24,3.818,24h16.363
			c0.301,0,0.546-0.244,0.546-0.546v-13.41l2.342,2.341c0.099,0.1,0.235,0.16,0.385,0.16C23.756,12.545,24,12.302,24,12
			C24,11.85,23.939,11.713,23.84,11.615 M16.363,2.182h2.183V6.32l-2.183-2.182V2.182z M8.727,22.909H4.364v-1.091h4.363V22.909z
			 M14.182,22.909H9.818v-8.728h4.363V22.909z M19.637,22.909h-4.364v-1.091h4.364V22.909z M19.637,20.728h-4.364v-7.091
			c0-0.302-0.244-0.546-0.545-0.546H9.273c-0.301,0-0.546,0.244-0.546,0.546v7.091H4.364V8.953L12,1.317l7.637,7.636V20.728z
			 M12.545,19.637c0.301,0,0.545-0.244,0.545-0.546c0-0.301-0.245-0.545-0.545-0.545S12,18.79,12,19.091
			C12,19.393,12.245,19.637,12.545,19.637"/>
			</symbol>
			<symbol id="menu" viewbox="0 0 24 19.635">
				<path fill="#FCFCFC" d="M21.818,7.637H2.182C0.977,7.637,0,8.612,0,9.818C0,11.022,0.977,12,2.182,12h19.637
			C23.023,12,24,11.022,24,9.818C24,8.612,23.023,7.637,21.818,7.637 M21.818,10.909H2.182c-0.602,0-1.091-0.488-1.091-1.09
			c0-0.603,0.489-1.092,1.091-1.092h19.637c0.602,0,1.091,0.489,1.091,1.092C22.909,10.42,22.42,10.909,21.818,10.909 M2.182,4.363
			h19.637C23.023,4.363,24,3.386,24,2.181S23.023,0,21.818,0H2.182C0.977,0,0,0.976,0,2.181S0.977,4.363,2.182,4.363 M2.182,1.091
			h19.637c0.602,0,1.091,0.488,1.091,1.09c0,0.603-0.489,1.091-1.091,1.091H2.182c-0.602,0-1.091-0.488-1.091-1.091
			C1.091,1.579,1.58,1.091,2.182,1.091 M21.818,15.272H2.182C0.977,15.272,0,16.249,0,17.454s0.977,2.182,2.182,2.182h19.637
			c1.205,0,2.182-0.977,2.182-2.182S23.023,15.272,21.818,15.272 M21.818,18.544H2.182c-0.602,0-1.091-0.489-1.091-1.091
			s0.489-1.091,1.091-1.091h19.637c0.602,0,1.091,0.489,1.091,1.091S22.42,18.544,21.818,18.544"/>
			</symbol>
		</svg>
		
		<!-- MAIN WRAPPER : BEGIN -->
		<div class="main-wrapper">

			<!-- HEADER : BEGIN -->
			<header>
				<!-- Top bar -->
				<div class="top-bar">
					<div class="top-bar-content clearfix content-width">
						<!-- Open and Close buttons for #main-nav are appended below this comment -->
						<div id="home-link">
							<a>
								<div>home</div>
								<svg class="icon">
									<use xlink:href="#home"/>
								</svg>
							</a>
						</div>
						<!-- Nav menu for big screens -->
						<div id="top-nav">
							<div class="nav-link">
								<a>sobre</a>
							</div>
							<div class="nav-link">
								<a>serviços</a>
							</div>
							<div class="nav-link">
								<a>portfólio</a>
							</div>
						</div>
						<div id="headers">
							<h1>Tucano Tecnologia</h1>
						</div>
					</div>
				</div>

				<!-- Displays specific intro for each page -->
				<!-- Homepage intro -->
				<?php
					if ($pageName=="home") {
						echo '<!-- Background image and captions -->
						<div class="header-background cover-image">
							<div class="header-caption content-width">
								<h1 class="h1-shadow">Websites responsivos</h1>
								<h2 class="h2-shadow">Criação de sites para pessoas e empresas</h2>
								<button id="headcap-button" class="button-link">
									<a id="to-services">Saiba mais</a>
								</button>
							</div>
						</div>';
					}
				?>

				<!-- Nav menu for small screens -->
				<nav id="main-nav">
					<ul class="content-width">
						<li>
							<a>sobre</a>
						</li>
						<li>
							<a>serviços</a>
						</li>
						<li>
							<a>portfólio</a>
						</li>
						<!-- Contact info -->
						<li class="last">
							<a class="nav-title">contato</a>
							<div class="nav-contact-uls">
								<ul class="email contact-info">
									<li class="contact-icon">
										<svg class="icon">
											<use xlink:href="#at-sign-grey"/>
										</svg>
									</li>
									<li class="contact-text">
										<a href="mailto:marcelos.mail@gmail.com" target="_blank">marcelos.mail@gmail.com</a>
									</li>
								</ul>
								<ul class="telephone contact-info">
									<li class="contact-icon">
										<svg class="icon">
											<use xlink:href="#phone-grey"/>
										</svg>
									</li>
									<li class="contact-text">
										<a href="tel:011993439129">+55 11993439129</a>
									</li>
								</ul>
								<ul class="form contact-info">
									<li class="contact-icon">
										<svg class="icon">
											<use xlink:href="#pencil-grey"/>
										</svg>
									</li>
									<li class="contact-text">
										<a>Deixe uma mensagem</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</nav>
			</header>
			<!-- HEADER : END -->

			<!-- SECTIONS : BEGIN -->
			<div class="sections-wrapper content-width">