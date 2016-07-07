@extends('layouts.master')

@section('content')

@include('layouts.delete-dialog')

<div class="row">

	<div class="panel panel-primary">

		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12">
					<div class="xis">
						<li>
							<a href="{{action('ClientesController@create')}}" style="color: inherit">
								<i class="fa fa-user pull-left fa-2x"></i>
								<c><i class="fa fa-plus pull-left fa-2x"></i></c>
							</a>
						</li>
					</div>
					<h2 class="panel-title" style="font-size:1.7em">Clientes</h2>
				</div>
			</div>
		</div>

		<div class="panel-body">
			<div class="table">
				<table class="table table-bordered" data-toggle="dataTable" data-form="deleteForm">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Bairro</th>
							<th>Cidade</th>
							<th>Telefone</th>
							<th>#</th>
						</tr>
					</thead>
					<tbody>
						@foreach($clientes as $cliente)
						<tr>
							<td>
								<a href="{{action('ClientesController@edit', $cliente->id)}}">{{$cliente->nome}}</a>
							</td>
							<td>{{ $cliente->endereco->bairro }}</td>
							<td>{{ $cliente->endereco->cidade }}</td>
							<td>{{ $cliente->telefone }}</td>
							<td>
								<div class="col-sm-4">
			                    <a href="{{action('ClientesController@edit', $cliente->id) }}" class="btn btn-info btn-xs">
			                    	<i class="fa fa-pencil fa-fw"></i>
			                    </a>
								</div>
				                {!! Form::model($cliente, ['method' => 'DELETE', 'action' => ['ClientesController@destroy', $cliente->id], 'class' =>'form-inline form-delete']) !!}
				                	{!! Form::hidden('id', $cliente->id) !!}
				                	<button type="submit" class="btn btn-xs btn-danger" name="delete_modal">
				                		<i class="fa fa-trash-o fa-fw"></i>
				                	</button>
				                {!! Form::close() !!}
				            </td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

	</div>

</div>

@stop