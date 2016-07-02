@extends('layouts.master')

@section('content')

<div class="row">

	<div class="row page-header">
		<h1 class="xis">
			<ul>
			<li>
				<a href="{{action('FretesController@create')}}" style="color: inherit">
					<i class="fa fa-shopping-cart pull-left fa-fw"></i>
					<c><i class="fa fa-cart-plus pull-left fa-fw"></i><c>
				</a>
			</li>
			</ul>
			Fretes
		</h1>
	</div>

	<div class="row">
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Descrição</th>
						<th>Cliente</th>
						<th>Cidade</th>
						<th>Telefone</th>
					</tr>
				</thead>
				<tbody>
					@foreach($fretes as $frete)
					<tr>
						<td>
							<a href="{{URL::route('transportadora.fretes.edit', $frete->id)}}">
								{{$frete->descricao}}
							</a>
						</td>
						<td>{{ $frete->cliente->nome }}</td>
						<td>{{ $frete->endereco->cidade }}</td>
						<td>{{ $frete->cliente->telefone }}</td>
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