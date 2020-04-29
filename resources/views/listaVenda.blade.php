@extends('template')
@section('conteudo')
<div style="background-color: #74404C;" class="jumbotron jumbotron-fluid mt-5 rounded">
	<h1 class="ml-3 mr-3" style="color: #F3ECD8;">Lista de Vendas do Cliente: {{ $cs->nome }}</h1>
	<div class="container">
		<table class="table table-borderless table-striped rounded">
			<thead style="background-color: #F3ECD8;">
				<tr style="color: #74404C;">
					<th scope="col">#Venda</th>
					<th scope="col">Valor</th>
					<th scope="col">Descrição</th>
					<th scope="col">Opções</th>
				</tr>
			</thead>
			<tbody style="background-color: #F3ECD8;">
				@foreach ($cs->vendas as $v)
				<tr style="color: #74404C;">
					<td>{{ $v->id }}</td>
					<td>{{ $v->valor }}</td>
					<td>{{ $v->descricao }}</td>
					<td>
						<a class="btn" style="border-color: #C7C79E; background-color: #74404C; color: #F3ECD8;" href="{{ route('listai', ['id' => $v->id])}}">Itens</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<a class="btn ml-3" style="border-color: #C7C79E; background-color: #F3ECD8; color: #74404C;" href="{{ route('listar')}}">Voltar para a Lista de Clientes!</a>
	<a class="btn ml-3" style="border-color: #C7C79E; background-color: #F3ECD8; color: #74404C;" href="{{ route('venda_cds')}}">Cadastrar Nova Venda!</a>
</div>
@endsection