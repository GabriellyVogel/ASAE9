@extends('template')
@section('conteudo')
<div style="background-color: #74404C;" class="jumbotron jumbotron-fluid mt-5 rounded">
	<h1 class="ml-3" style="color: #F3ECD8;">Lista de Clientes</h1>
	<div class="container">
		<table class="table table-borderless table-striped rounded">
			<thead style="background-color: #F3ECD8;">
				<tr style="color: #74404C;">
					<th scope="col">Nome</th>
					<th scope="col">Endereço</th>
					<th scope="col">CEP</th>
					<th scope="col">Estado</th>
					<th scope="col">Cidade</th>
					<th scope="col">Opções</th>
				</tr>
			</thead>
			<tbody style="background-color: #F3ECD8;">
				@foreach ($us as $u)
				<tr style="color: #74404C;">
					<td>{{ $u->nome }}</td>
					<td>{{ $u->endereco }}</td>
					<td>{{ $u->cep }}</td>
					<td>{{ $u->estado }}</td>
					<td>{{ $u->cidade }}</td>
					<td>
						<a class="btn" style="border-color: #C7C79E; background-color: #74404C; color: #F3ECD8;" href="{{ route('cliente_alt', ['id' => $u->id ])}}">Alterar</a>
						<a class="btn" style="border-color: #C7C79E; background-color: #74404C; color: #F3ECD8;" onclick="exclui({{ $u->id }})">Excluir</a>
						<a class="btn" style="border-color: #C7C79E; background-color: #74404C; color: #F3ECD8;" href="{{ route('listarv', ['id' => $u->id ])}}">Vendas</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<a class="btn ml-3" style="border-color: #C7C79E; background-color: #F3ECD8; color: #74404C;" href="{{ route('cliente_cds')}}">Cadastrar Novo!</a>
	<a class="btn ml-3" style="border-color: #C7C79E; background-color: #F3ECD8; color: #74404C;" href="{{ route('venda_cds')}}">Cadastrar Nova Venda!</a>
</div>
<script>
	function exclui(id){
		if (confirm('Deseja excluir o cliente de id: ' + id + '?')){
			location.href = '/cliente/excluir/' + id;
		}
	}
</script>
@endsection