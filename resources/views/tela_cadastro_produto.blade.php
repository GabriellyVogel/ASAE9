@extends('template')
@section('conteudo')
<div style="background-color: #74404C;" class="mt-5 rounded">
	<h1 class="ml-3 mr-3" style="color: #F3ECD8;">Cadastro de Tipo de Produtos</h1>
	<form class="ml-5 mr-5" method="post" action="{{route('produto_add')}}" style="color: #F3ECD8;">
		@csrf
		<div class="form-group">
			<label>Nome:</label>
			<input style="border-color: #C7C79E; background-color: #F3ECD8;" class="form-control" type="text" name="nome" placeholder="Ex.: Tevelisão">
		</div>
		<div class="form-group">
			<label>Valor:</label>
			<input style="border-color: #C7C79E; background-color: #F3ECD8;" class="form-control" type="number" step="0.01" name="preco" placeholder="Ex.: 500,00">
		</div>
		<div class="form-group">
			<label>Unidade:</label>
			<input style="border-color: #C7C79E; background-color: #F3ECD8;" class="form-control" type="text" name="unidade" placeholder="Ex.: Unidade">
		</div>
		<div class="form-group">
			<label>Tipo:</label>
			<select style="border-color: #C7C79E; background-color: #F3ECD8;" class="custom-select" name="id_tipo">
				<option selected>Tipo:</option>
				@foreach($tp as $t)
				<option value="{{ $t->id }}">{{ $t->nome }}</option>
				@endforeach
			</select>
		</div>
		<div class="row">
			<button class="btn ml-3 mt-1" style="border-color: #C7C79E; background-color: #F3ECD8; color: #74404C;" type="submit">Enviar!</button>
		</div>
	</form>
	<br>
</div>
@endsection