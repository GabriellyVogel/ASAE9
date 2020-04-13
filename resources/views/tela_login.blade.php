@extends('template')
@section('conteudo')
<div style="background-color: #74404C;" class="mt-5 rounded">
	<h1 class="ml-3 mr-3" style="color: #F3ECD8;">Login:</h1>
	<form class="ml-5 mr-5" method="post" action="{{route('logar')}}" style="color: #F3ECD8;">
		@csrf
		<div class="row">
			<div class="col">
				<label>Login:</label>
				<input style="border-color: #C7C79E; background-color: #F3ECD8;" class="form-control" type="text" name="login" placeholder="Ex.: ciclano.silva">
			</div>
			<div class="col">
				<label>Senha:</label>
				<input style="border-color: #C7C79E; background-color: #F3ECD8;" class="form-control" type="password" name="senha" placeholder="Ex.: senha123">
			</div>
		</div>
		<div class="row">
			<button class="btn ml-3 mt-1" style="border-color: #C7C79E; background-color: #F3ECD8; color: #74404C;" type="submit">Acessar!</button>
		</div>
	</form>
	<br>
</div>
@endsection