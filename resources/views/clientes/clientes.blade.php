@extends('layouts.master')

@section('content')

<div class="row">

	<div class="row page-header">
		<h2>Clientes</h2>
	</div>

	<div class="row">

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Bairro</th>
					<th>Cidade</th>
					<th>Telefone</th>
				</tr>
			</thead>
			<tbody>
				@foreach($clientes as $cliente)
				<tr>
					<td>
						<a href="{{URL::route('transportadora.clientes.edit', $cliente->id)}}">
							{{$cliente->nome}}
						</a>
					</td>
					<td>{{ $cliente->endereco->bairro }}</td>
					<td>{{ $cliente->endereco->cidade }}</td>
					<td>{{ $cliente->telefone }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="row modal-footer">
		<a href="{{URL::route('transportadora.clientes.create')}}" class="btn btn-primary">Novo</a>
	</div>
	
</div>
@stop