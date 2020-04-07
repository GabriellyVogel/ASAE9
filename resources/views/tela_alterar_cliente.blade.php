@extends('template')
@section('conteudo')
<div style="background-color: #74404C;" class="mt-5 rounded">
	<h1 class="ml-3" style="color: #F3ECD8;">Alteração de Clientes</h1>
	<form class="ml-5 mr-5" method="post" action="{{route('cliente_upd', ['id' => $u->id])}}" style="color: #F3ECD8;">
		@csrf
		<div class="form-group">
			<label>Nome:</label>
			<input style="border-color: #C7C79E; background-color: #F3ECD8;" class="form-control" type="text" name="nome" value="{{ $u->nome }}">
		</div>
				<div class="row">
			<div class="col">
				<label>Endereço:</label>
				<input style="border-color: #C7C79E; background-color: #F3ECD8;" class="form-control" type="text" name="endereco" value="{{ $u->endereco }}">
			</div>
			<div class="col">
				<label>CEP:</label>
				<input style="border-color: #C7C79E; background-color: #F3ECD8;" class="form-control" type="text" name="cep" value="{{ $u->cep }}">
			</div>
		</div>
		<div class="form-group">
			<label>Estado:</label>
			<select style="border-color: #C7C79E; background-color: #F3ECD8;" id="inputState" class="form-control" name="estado" value="{{ $u->estado }}">
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
			<input style="border-color: #C7C79E; background-color: #F3ECD8;" class="form-control" type="text" name="cidade" value="{{ $u->cidade }}">
		</div>
		<div class="row">
			<button class="btn ml-3 md-5" style="border-color: #C7C79E; background-color: #F3ECD8; color: #74404C;" type="submit">Salvar!</button>
		</div>
	</form>
	<br>
</div>

@endsection