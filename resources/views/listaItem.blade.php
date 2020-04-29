@extends('template')
@section('conteudo')
<div style="background-color: #74404C;" class="jumbotron jumbotron-fluid mt-5 rounded">	
	<h2 class="ml-3 mr-5 mt-0" style="color: #F3ECD8;">Itens da Venda:</h2>
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
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<a class="btn ml-3" style="border-color: #C7C79E; background-color: #F3ECD8; color: #74404C;" href="{{ route('listar')}}">Voltar para a Lista de Clientes!</a>
		<a class="btn ml-3" style="border-color: #C7C79E; background-color: #F3ECD8; color: #74404C;" href="{{ route('itens', ['id' => $venda->id])}}">Cadastrar Novo Item!</a>
	<br><br>
</div>
@endsection