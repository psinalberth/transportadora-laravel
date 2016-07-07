@extends('layouts.master')

@section('content')

@include('layouts.delete-dialog')

<div class="row">
	
	<div class="row page-header">
		<h1 class="xis">
			<ul>
			<li>
				<a href="{{action('ClientesController@create')}}" style="color: inherit">
					<i class="fa fa-user pull-left fa-fw"></i>
					<c><i class="fa fa-plus pull-left fa-fw"></i><c>
				</a>
			</li>
			</ul>
			Clientes
		</h1>
	</div>

	<div class="row">
		<div class="table-responsive">
			<table class="table table-bordered" data-toggle="dataTable" data-form="deleteForm">
				<thead>
					<tr class="success">
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
							<a href="{{action('ClientesController@edit', $cliente->id)}}">
								{{$cliente->nome}}
							</a>
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
@stop