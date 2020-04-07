@extends('template')
@section('conteudo')
<div style="background-color: #74404C;" class="mt-5 rounded">
	<h1 class="ml-3 mr-3 mt-3" style="color: #F3ECD8;">Cadastro de Vendas</h1>
	<form class="ml-5 mr-5" method="post" action="{{route('venda_add')}}" style="color: #F3ECD8;">
		@csrf
		<div class="form-group">
			<label>Valor:</label>
			<input style="border-color: #C7C79E; background-color: #F3ECD8;" class="form-control" type="text" name="valor" placeholder="Ex.: 500.00">
		</div>
		<div class="form-group">
			<select style="border-color: #C7C79E; background-color: #F3ECD8;" class="custom-select" name="id_cliente">
				<option selected>Cliente:</option>
				@foreach(App\Cliente::all() as $e)
				<option value="{{ $e->id }}">{{ $e->nome }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<input style="border-color: #C7C79E; background-color: #F3ECD8;" class="form-control" type="text" name="descricao" placeholder="Ex.: Descreva sua venda">
		</div>
		<div class="row">
			<button class="btn ml-3 mt-1" style="border-color: #C7C79E; background-color: #F3ECD8; color: #74404C;" type="submit">Enviar!</button>
		</div>
	</form>
	<br>
</div>
@endsection