@extends('layouts.master')

@section('content')

<div class="row">
	
	<div class="row page-header">
		<h1 class="xis">
			<ul>
			<li>
				<a href="{{action('ClientesController@create')}}" style="color: inherit">
					<i class="fa fa-user pull-left fa-fw"></i>
					<c><i class="fa fa-user-plus pull-left fa-fw"></i><c>
				</a>
			</li>
			</ul>
			Clientes
		</h1>
	</div>

	<div class="row">
		<div class="table-responsive">
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
	</div>

	<div class="row modal-footer">
		<!-- <a href="{{URL::route('transportadora.clientes.create')}}" class="btn btn-circle btn-primary btn-lg"><i class="fa fa-user-plus"></i></a> -->
	</div>
	
</div>
@stop