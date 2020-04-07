@extends('template')
@section('conteudo')
<div style="background-color: #74404C;" class="jumbotron jumbotron-fluid mt-5 rounded">
	<h1 class="ml-3 mr-3" style="color: #F3ECD8;">Lista de Vendas</h1>
	<div class="container">
		<table class="table table-borderless rounded">
			<thead style="background-color: #F3ECD8;">
				<tr style="color: #74404C;">
					<th scope="col">Nome</th>
					<th scope="col">Valor</th>
					<th scope="col">Descrição</th>
				</tr>
			</thead>
			<tbody style="background-color: #F3ECD8;">
				@foreach ($vs as $v)
				@foreach(App\Cliente::all() as $e) 
				@if($e->id == $v->id_cliente)
				<tr style="color: #74404C;">
					<td value="{{ $e->id }}">{{ $e->nome }}</td>
					<td value="{{ $v->id_cliente }}">{{ $v->valor }}</td>
					<td >{{ $v->descricao }}</td>
				</tr>
				@endif
				@endforeach
				@endforeach
			</tbody>
		</table>
	</div>
	<a class="btn ml-3" style="border-color: #C7C79E; background-color: #F3ECD8; color: #74404C;" href="{{ route('venda_cds')}}">Cadastrar Nova Venda!</a>
</div>
@endsection