<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema - Programação Web</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
</head>
<body style="background-color: #452B30 ">
	<div class="container-fluid">
		<div class="row">
			<nav class="navbar navbar-expand-lg w-100" style="background-color: #74404C; color: #F3ECD8">
				<a class="navbar-brand">Controle de Clientes</a>
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>
			    </button>
			  	<div class="collapse navbar-collapse" id="navbarNavDropdown">
			    	<ul class="navbar-nav">
			        	<li class="nav-item dropdown">
			           		<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clientes</a>
			        		<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #74404C">
			          			<a class="dropdown-item" href="{{ route('listar')}}" style="color: #F3ECD8">Listar</a>
			          			<a class="dropdown-item" href="{{ route('cliente_cds')}}" style="color: #F3ECD8">Cadastrar</a>
			        		</div>
			      		</li>
			      		<li class="nav-item dropdown">
			           		<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuários</a>
			        		<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #74404C">
			          			<a class="dropdown-item" href="{{ route('usuario_cds')}}"style="color: #F3ECD8">Cadastrar</a>
			          			<a class="dropdown-item" href="{{ route('login')}}" style="color: #F3ECD8">Login</a>
			          			<a class="dropdown-item" href="{{ route('logout')}}" style="color: #F3ECD8">Logout</a>
			        		</div>
			      		</li>
			      		<li class="nav-item dropdown">
			           		<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vendas</a>
			        		<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #74404C">
			          			<a class="dropdown-item" href="{{ route('venda_cds')}}" style="color: #F3ECD8">Cadastrar</a>
			        		</div>
			      		</li>
			    	</ul>
			  	</div>
			</nav>
		</div>
		<div class="row">
			<div class="col md-2"></div>
			<div class="com md-8">
				@yield('conteudo')
			</div>
			<div class="col md-2"></div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>