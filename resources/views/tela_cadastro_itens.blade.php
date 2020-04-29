@extends('template')
@section('conteudo')
<div style="background-color: #74404C;" class="mt-5 rounded">
	<h1 class="ml-3 mr-3 mt-3" style="color: #F3ECD8;">Cadastro de Itens da Vendas #{{ $venda->id }}</h1>
	<form class="ml-5 mr-5" method="post" action="{{ route('itens_add', ['id' => $venda->id]) }}" style="color: #F3ECD8;">
		@csrf
		<div class="form-group">
			<select style="border-color: #C7C79E; background-color: #F3ECD8;" class="custom-select" name="id_produto">
				<option selected>Produto:</option>
				@foreach($ps as $p)
				<option value="{{ $p->id }}">{{ $p->nome }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<input style="border-color: #C7C79E; background-color: #F3ECD8;" class="form-control" type="number" min="0" step="0.01" name="quantidade" placeholder="Ex.: 1">
		</div>
		<div class="row">
			<button class="btn ml-3 mt-1" style="border-color: #C7C79E; background-color: #F3ECD8; color: #74404C;" type="submit">Enviar!</button>
		</div>
	</form>
	<h2 class="ml-3 mr-5 mt-0" style="color: #F3ECD8;">Itens adicionados:</h2>
	<div class="container">
		<table class="ml-2 mr-2 table table-borderless table-striped rounded">
			<thead style="background-color: #F3ECD8;">
				<tr style="color: #74404C;">
					<th scope="col">ID Item</th>
					<th scope="col">Nome</th>
					<th scope="col">Quantidade</th>
					<th scope="col">Valor Unitário</th>
					<th scope="col">Subtotal</th>
					<th scope="col">Data</th>
					<th scope="col">Opções</th>
				</tr>
			</thead>
			<tbody style="background-color: #F3ECD8;">
				@foreach ($venda->produtos as $p)
				<tr style="color: #74404C;">
					<td>{{ $p->pivot->id }}</td>
					<td>{{ $p->nome }}</td>
					<td>{{ $p->pivot->quantidade }}</td>
					<td>{{ $p->preco }}</td>
					<td>{{ $p->pivot->subtotal }}</td>
					<td>{{ $p->pivot->created_at }}</td>
					<td>
						<a class="btn" style="border-color: #C7C79E; background-color: #74404C; color: #F3ECD8;" onclick="exclui({{ $p->pivot->id }})">Remover</a>
					</td>
				</tr>
				@endforeach
				<tr style="color: #74404C;">
					<td></td>
					<td></td>
					<td></td>
					<td><b>Total:</b></td>
					<td><b>{{ $venda->valor }}<b></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
	<a class="btn ml-3" style="border-color: #C7C79E; background-color: #F3ECD8; color: #74404C;" href="{{ route('listar')}}">Fechar Venda</a>
	<br><br>
</div>
<script>
	function exclui(id){
		if (confirm('Deseja excluir o item de id: ' + id + '?')){
			location.href = '/venda/{{ $venda->id }}/itens/remover/' + id;
		}
	}
</script>
@endsection