<html>
<head>
	<title>Muma móveis</title>

	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/freewall.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bubbles.css">
	<link rel="stylesheet" type="text/css" href="css/muma.css">

	<style type="text/css">
		h2{
			cursor: pointer;
		}
	</style>
	

</head>
<body>
	<header class="header-container">
		
		<nav class="navbar navbar-default header-top">
			<div class="container-fluid">
				<div class="row" id="bloco">			
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>                        
					    </button>
						<!-- <a class="navbar-brand" href="https://www.muma.com.br/">muma.</a> -->
					</div>
					<div class="collapse navbar-collapse" id="menu">
						<ul class="nav navbar-nav list-responsive">
							<li class="nav-item">
								<a href="https://www.muma.com.br/muma-b2b">
									<i class="fa fa-building" aria-hidden="true"></i>
									Vendas corporativa
										
								</a>
								
							</li>

							<li class="nav-item">							
								<a href="https://www.muma.com.br/contacts"><i class="fa fa-envelope" aria-hidden="true"></i>
								Fale conosco
								</a>
							</li>

							<li class="nav-item" id="item-dropdown">
								<a class="dropdown-toogle" data-toogle="dropdown" role="button">
									<i class="fa fa-user"></i>
									Minha conta <span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Minha conta</a></li>
									<li><a href="#">Lista de desejos</a></li>
									<li><a href="#">Meu carrinho</a></li>
									<li><a href="#">Fechar pedido</a></li>
									<li><a href="#">Entrar</a></li>
									
								</ul>
							</li>
						</ul>
						<ul class="navbar navbar-nav navbar-right social">
							<li><a href="https://www.facebook.com/mumacombr"><i class="fa fa-facebook header-social"></i></a></li>
							<li><a href="https://www.instagram.com/muma.com.br/"><i class="fa fa-instagram header-social"></i></a></li>
							<li><a href="https://br.pinterest.com/mumacombr/"><i class="fa fa-pinterest header-social"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	
		<div id="header" class="navbar">
			<div class="container">
				<div class="header-wrapper">
					<div class="header-logo">
						<a href="https://www.muma.com.br/" title="MUMA. Móveis e decoração com design assinado" class="logo">
							<!-- <strong class="no-display">MUMA. Móveis e decoração com design assinado</strong> -->
							<img data-src-tmp="https://www.muma.com.br/skin/frontend/base/default/images/muma-alt.png" src="https://www.muma.com.br/skin/frontend/base/default/images/muma.png" alt="MUMA. Móveis e decoração com design assinado">
						</a>

					</div>

					<nav class="collapse-navbar" id="menu2">
						<ul class="nav navbar-nav navhead">
							<li role="presentation"><a href="#" role="menuitem">Ambientes</a></li>
							<li role="presentation"><a href="#" role="menuitem">Móveis</a></li>
							<li role="presentation"><a href="#" role="menuitem">Decoração</a></li>
							<li role="presentation"><a href="#" role="menuitem">Estilo</a></li>
							<li role="presentation"><a href="#" role="menuitem">Designers</a></li>
							<li role="presentation"><a href="#" role="menuitem" class="danger">OFF!</a></li>
						</ul>
					</nav>
					<form class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" name="pesquisa" placeholder="Busque Aqui!" class="form-control">
						</div>
						<button class="btn btn-warning" type="submit"><i class="fa fa-search"></i></button>
						
					</form>

				</div>
				
			</div>
			
		</div>

	</header>
	<!-- Slidehsow -->
	<div class="show">
		<div class="container container-fluid">
			
		</div>
	</div>
	<!-- Slideshow -->


	<div class="principal">
		<div class="container">	
			
				<button type="button" id="quartos" class="bolhaG" class="btn btn-info btn-lg" ><a href="#">Quartos</a></button>
				<button type="button" id="sala-estar" class="bolhaG" class="btn btn-info btn-lg" ><a href="#">Sala de Estar</a></button>	
				<button type="button" id="escritorio" class="bolhaG" class="btn btn-info btn-lg" ><a href="#">Escritórios</a></button>	
				<button type="button" id="mesa-centro" class="bolhaP" class="btn btn-info btn-lg" ><a href="#">Mesas de centro</a></button>
				<button type="button" id="cadeira" class="bolhaP" class="btn btn-info btn-lg" ><a href="#">Cadeiras</a></button>
				<button type="button" id="escrivaninha" class="bolhaP" class="btn btn-info btn-lg"><a href="#">Escrivaninhas</a></button>
				<button type="button" id="comoda" class="bolhaP" class="btn btn-info btn-lg"><a href="#">Cômodas</a></button>
				<button type="button" id="estante" class="bolhaP" class="btn btn-info btn-lg"><a href="#">Estantes</a></button>
			
		</div>
		
	</div>
	<div id="body" style="padding-bottom: 30%;">		
			<div id="container">
			   <select class="form-control selectpicker">
			   	<option label="Filtar por:">Filtrar por:</option>
			   	<option label="opcao1"> opção 1</option>
			   	<option label="opcao2"> opção 2</option>
			   	<option label="opcao3"> opção 3</option>
			   </select>
			   <ul class="produtos" >
			   		<div class="col-md-4">
						<div class="row">
							<div class="col-lg-12 col-md-offset-1">			
								<div class="thumbnail attraction">
									<img src="img/cama-casal-01.jpg" class="img-responsive">
									<div class="caption text-center">
										<h3 style="color: #c7c72c;">Valor<br>
										<small></small>
										</h3>

										<h4 class="text-center more">
											<a href="#"><span class="fa fa-shopping-market"></span></a>
										</h4> 
									</div>
								</div>
							</div>
						</div>
	
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-lg-12 col-md-offset-1">			
								<div class="thumbnail attraction">
									<img src="img/cama-casal-02.jpg" class="img-responsive">
									<div class="caption text-center">
										<h3 style="color: #c7c72c;">Valor<br>
										<small></small>
										</h3>

										<h4 class="text-center more">
											<a href="#"><i class="fa fa-shopping-market"></i></a>
										</h4> 
									</div>
								</div>
							</div>
						</div>
	
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-lg-12 col-md-offset-1">			
								<div class="thumbnail attraction">
									<img src="img/cama-casal-01.jpg" class="img-responsive">
									<div class="caption text-center">
										<h3 style="color: #c7c72c;">Valor<br>
										<small></small>
										</h3>

										<h4 class="text-center more">
											<a href="#"><span class="fa fa-shopping-market"></span></a>
										</h4> 
									</div>
								</div>
							</div>
						</div>
	
					</div>
			   </ul>
			</div>
	</div>



	<footer class="footer-container">
		<div class="arw_sebian_block_footer">
			<div class="widget widget-static-block">
				<div class="arw_sebian_block_footer_top">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="footer-sub-logo text-center"> 
									<a href="https://www.muma.com.br/">
										<img src="https://www.muma.com.br/media/wysiwyg/muma.png" alt="Muma">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div 
					class="widget widget-static-block"><div 
					class="arw_sebian_block_footer_bottom"><div 
					class="container"><div 
					class="row"><div 
					class="arw-col col-xs-12 col-sm-6 col-md-4 col-lg-4"><div 
					class="widget widget-static-block"><div 
					class="block block-custom-link"><div 
					class="block-title"><span>Minha Conta</span></div>
					<div 
					class="block-content"><ul><li><a href="https://www.muma.com.br/customer/account/">Entrar</a></li><li><a href="https://www.muma.com.br/sales/order/history/">Meus Pedidos</a></li><li><a href="https://www.muma.com.br/wishlist/">Lista de Desejos</a></li></ul></div>
					<div 
					class="block-title"><span>Siga a gente</span></div>
					<div 
					class="block-content"> <a href="https://www.instagram.com/muma.com.br/" target="_blank" style="opacity: 1;"> <i class="fa fa-instagram" style="border-radius: 100%; border: 1px solid #272727; width: 27px; height: 27px; text-align: center; padding-top: 5px; margin-right: 8px; font-size: 15px;"></i> </a><a href="https://www.facebook.com/mumacombr" target="_blank" style="opacity: 1;"> <i class="fa fa-facebook" style="border-radius: 100%; border: 1px solid #272727; width: 27px; height: 27px; text-align: center; padding-top: 5px; margin-right: 8px; font-size: 15px;"></i> </a><a href="https://br.pinterest.com/mumacombr/" target="_blank" style="opacity: 1;"> <i class="fa fa-pinterest-p" aria-hidden="true" style="border-radius: 100%; border: 1px solid #272727; width: 27px; height: 27px; text-align: center; padding-top: 5px; margin-right: 8px; font-size: 15px;"></i> </a></div>
				</div>
				</div>
				</div>
					<div 
					class="arw-col col-xs-12 col-sm-6 col-md-4 col-lg-4"><div 
					class="widget widget-static-block"><div 
					class="block block-custom-link"><div 
					class="block-title"><span>Informações</span></div>
					<div 
					class="block-content"><ul><li><a href="https://www.muma.com.br/designers/">Designers</a></li><li><a href="https://www.muma.com.br/loja-de-moveis-recife-showroom-muma/">Nosso Showroom</a></li><li><a href="https://www.muma.com.br/muma-b2b/">Vendas Corporativas</a></li><li><a href="https://www.muma.com.br/vagas/">Trabalhe Conosco</a></li><li><a href="https://www.muma.com.br/faq/">Dúvidas Frequentes</a></li><li><a href="https://www.muma.com.br/politica-de-privacidade/">Políticas de Privacidade</a></li><li><a href="https://www.muma.com.br/sejaumfornecedor/">Seja um Fornecedor</a></li><li><a href="https://www.muma.com.br/souarquiteto/">Sou Arquiteto</a></li><li><a href="https://www.muma.com.br/contacts/">Fale Conosco</a></li></ul></div>
				</div>
				</div>
				</div>
					<div 
					class="arw-col col-xs-12 col-sm-6 col-md-4 col-lg-4"><div 
					class="widget widget-static-block"><div 
					class="block block-custom-link"><div 
					class="block-title"><span>Pague Com</span></div>
					<div 
					class="block-content"> <img src="https://www.muma.com.br/media/wysiwyg/formas_pagamento_1.png" alt="Formas de Pagamentos"></div>
					<div 
					class="block-title"><span>Segurança</span></div>
					<div 
					class="block-content"><div 
					id="sslblindado" style="width: 122px; height: 81px;"><a rel="canonical" href="https://www.siteblindado.com/consumidor/selo-ssl/?hostname=www.muma.com.br" onclick="javascript:window.open(this.href);return false;" title=""><img src="https://s3-sa-east-1.amazonaws.com/selo.siteblindado.com/seals_ssl/www.muma.com.br/ssl.png" oncontextmenu="alert(&quot;Cópia&nbsp;Proibida&nbsp;por&nbsp;Lei&nbsp;-&nbsp;Site&nbsp;Blindado®&nbsp;é&nbsp;marca&nbsp;registrada&nbsp;de&nbsp;Site&nbsp;Blindado&nbsp;S.A.&quot;);return" false;"="" style="border-style: none"></a></div>
					 <script type="text/javascript" src="//selo.siteblindado.com/sslblindado.js"></script> </div>
					</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
					<div 
					class="footer-copyright"><div 
					class="container"><div 
					class="row"><div 
					class="col-md-offset-2 col-lg-offset-2 col-xs-12 col-sm-12 col-md-8 col-lg-8"><div 
					class="wrapper-copyright"> <address>MUMA.COM.BR | RUA AMÉLIA - 470 - RECIFE/PE - CEP: 52011-050 | CNPJ 17.688.095/0001-80</address></div>
				</div>
				</div>
				</div>
				</div>
	</footer>

</body>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#item-dropdown a").mouseover(function(){
				$(".dropdown-menu").show();
			});

			$("#item-dropdown a").mouseout(function(){
				$(".dropdown-menu").hide();
			});
		});
	</script>
</html>