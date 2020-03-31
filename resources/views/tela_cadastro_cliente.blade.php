<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style>
		label{
			color: #F3ECD8;
		}
	</style>
</head>
<body style="background-color: #452B30 ">
	<nav class="navbar" style="background-color: #74404C">
  		<span style="color: #F3ECD8" class="navbar-brand h1">Cadastro de Clientes</span>
	</nav>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 mt-5" style="background-color: #74404C">
			<form class="mt-5" method="post" action="{{route('cliente_add')}}">
				@csrf
				<div class="form-group">
					<label>Nome:</label>
					<input style="border-color: #C7C79E;" class="form-control" type="text" name="nome" placeholder="Ex.: Fulano da Silva Sauro">
				</div>
				<div class="row">
					<div class="col">
						<label>Endereço:</label>
						<input style="border-color: #C7C79E;" class="form-control" type="text" name="endereco" placeholder="Ex.: Rua dos Bobos, Nº 0">
					</div>
					<div class="col">
						<label>CEP:</label>
						<input style="border-color: #C7C79E;" class="form-control" type="text" name="cep" placeholder="Ex.: 123456-789">
					</div>
					</div>
					<div class="form-group">
						<label>Estado:</label>
						<select style="border-color: #C7C79E;" id="inputState" class="form-control" name="estado">
							<option selected>Selecione o Estado:</option>
							<option>Acre</option>
							<option>Alagoas</option>
							<option>Amapá</option>
							<option>Amazonas</option>
							<option>Bahia</option>
							<option>Ceará</option>
							<option>Distrito Federal*</option>
							<option>Espírito Santo</option>
							<option>Goiás</option>
							<option>Maranhão</option>
							<option>Mato Grosso</option>
							<option>Mato Grosso do Sul</option>
							<option>Minas Gerais</option>
							<option>Pará</option>
							<option>Paraná</option>
							<option>Pernambuco</option>
							<option>Piauí</option>
							<option>Rio de Janeiro</option>
							<option>Rio Grande do Norte</option>
							<option>Rio Grande do Sul</option>
							<option>Rondônia</option>
							<option>Roraima</option>
							<option>Santa Catarina</option>
							<option>São Paulo</option>
							<option>Sergipe</option>
							<option>Tocantins</option>
						</select>
						</div>
					<div class="form-group">
						<label>Cidade:</label>
						<input style="border-color: #C7C79E;" class="form-control" type="text" name="cidade" placeholder="Ex.: Hunter City">
					</div>
					<div class="row">
						<button class="btn btn-light ml-3 md-5" style="border-color: #C7C79E;" type="submit">Enviar!</button>
					</div>
				</form>
				<br>
			</div>
			<div class="col-md-2"></div>
		</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>