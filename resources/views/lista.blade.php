<!DOCTYPE html>
<html>
<head>
	<title>Lista</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style>
		th, td{
			color: #452B30;
		}
	</style>
</head>
<body style="background-color: #452B30 ">
	<nav class="navbar" style="background-color: #74404C">
		<span style="color: #F3ECD8" class="navbar-brand mb-0 h1">Lista de Clientes</span>
	</nav>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 mt-5">
			<div style="background-color: #74404C" class="jumbotron jumbotron-fluid mt-5 rounded">
				<div class="container">
					<table class="table table-borderless">
						<thead style="background-color: #F3ECD8">
							<tr>
								<th scope="col">Nome</th>
								<th scope="col">Endereço</th>
								<th scope="col">CEP</th>
								<th scope="col">Estado</th>
								<th scope="col">Cidade</th>
							</tr>
						</thead>
						<tbody style="background-color: #F3ECD8">
							@foreach ($us as $u)
							<tr>
								<td>{{ $u->nome }}</td>
								<td>{{ $u->endereco }}</td>
								<td>{{ $u->cep }}</td>
								<td>{{ $u->estado }}</td>
								<td>{{ $u->cidade }}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>