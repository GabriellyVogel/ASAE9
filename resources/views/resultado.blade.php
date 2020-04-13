@extends('template')
@section('conteudo')
<div style="background-color: #74404C;" class="alert mt-5" role="alert">
	<h1 class="ml-3" style="color: #F3ECD8;">{{ $mensagem }}</h1>
</div>
<a class="btn ml-3" style="border-color: #C7C79E; background-color: #F3ECD8; color: #74404C;" href="{{ route('cliente_cds')}}">Cadastrar Novo!</a>
<a class="btn ml-3" style="border-color: #C7C79E; background-color: #F3ECD8; color: #74404C;" href="{{ route('listar')}}">Listar Clientes!</a>
@endsection