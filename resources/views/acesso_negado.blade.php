@extends('template')
@section('conteudo')
<div style="background-color: #74404C;" class="alert mt-5" role="alert">
	<h1 class="ml-3" style="color: #F3ECD8;">Acesso Negado</h1>
	<p class="lead ml-3" style="color: #F3ECD8;">É necessário estar logado para acessar</h2>
</div>
<a class="btn ml-3" style="border-color: #C7C79E; background-color: #F3ECD8; color: #74404C;" href="{{ route('login')}}">Fazer Login!</a>
<a class="btn ml-3" style="border-color: #C7C79E; background-color: #F3ECD8; color: #74404C;" href="{{ route('usuario_cds')}}">Cadastre-se!</a>
@endsection