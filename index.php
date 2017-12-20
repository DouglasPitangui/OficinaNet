<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Gerenciamento de Oficina	</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="estilo/bootstrap.min.css" rel="stylesheet">
    <link href="estilo/estilo.css" rel="stylesheet">
    <script src="script/jquery-1.11.1.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid main-container">
		<div class="col-md-2 sidebar">
				<div class="row">
				<!-- uncomment code for absolute positioning tweek see top comment in css -->
					<div class="absolute-wrapper"> </div>
				<!-- Menu -->
					<div class="side-menu">
						<nav class="navbar navbar-default" role="navigation">
						<!-- Main Menu -->
						<div class="side-menu-container" >
							<ul class="nav navbar-nav" >
								<li><a href="index.php?page=0"  style="background-color: #2f2e2e; color: #f7f3f3;"><span class=""></span> Inicio</a></li>
								<!-- Dropdown-->
								<li><a href="index.php?page=1"><span class=""></span>Cadastro de Cliente</a></li>
								<li><a href="index.php?page=6"><span class=""></span>Menu 2</a>
								<li><a href="index.php?page=2"><span class=""></span>Menu 3</a>
								<li class="panel panel-default" id="dropdown">
									<a data-toggle="collapse" href="#dropdown-lvl1">
										<span class=""></span> Relatórios <span class="caret"></span>
									</a>
								<!-- Dropdown level 1 -->
								<div id="dropdown-lvl1" class="panel-collapse collapse">
									<div class="panel-body">
										<ul class="nav navbar-nav">
											<li><a href="index.php?page=3"> Relatorio 1</a></li>
											<li><a href="index.php?page=4"> Relatorio 2</a></li>
											<li><a href="index.php?page=5"> Relatorio 3</a></li>
										</ul>
									</div>
								</div>
								</li>
								</li>
							</ul>
							</div><!-- /.navbar-collapse -->
						</nav>

					</div>
				</div>  		
			</div>
		<div class="col-md-10 content">
			<div class="panel panel-default">
				<div class="panel-heading" style="background-color: #2f2e2e; color: #f7f3f3;">
					<?php
						if(isset($_GET['page'])) {
						$redireciona = $_GET['page'];
						} else {
						$redireciona = '';
						}

						if($redireciona == 0 || $redireciona == ""){
							echo "Inicio";
						}elseif ($redireciona == 1) {
							echo "Cadastro de Clientes";
						}elseif ($redireciona == 2) {
							echo "Teste 2";
						}elseif ($redireciona == 3) {
							echo "Teste 3";
						}elseif ($redireciona == 4) {
							echo "Teste 4";
						}elseif ($redireciona == 5) {
							echo "Teste 5";
						}elseif ($redireciona == 6) {
							echo "Teste 6";
						}
					?>
				</div>
				<div class="panel-body">
					<?php
						if($redireciona == 0 || $redireciona == ""){							
							include("pages/default.php");
						}elseif ($redireciona == 1) {
							include("pages/CadCliente.php");
						}elseif ($redireciona == 2);
					?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
