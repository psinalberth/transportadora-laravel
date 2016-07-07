@extends('layouts.master')

@section('content')

@include('layouts.delete-dialog')

<div class="row">

	<div class="row page-header">
		<h1 class="xis">
			<ul>
			<li>
				<a href="{{action('FretesController@create')}}" style="color: inherit">
					<i class="fa fa-shopping-cart pull-left fa-fw"></i>
					<c><i class="fa fa-plus pull-left fa-fw"></i><c>
				</a>
			</li>
			</ul>
			Fretes
		</h1>
	</div>

	<div class="row">
		<div class="table-responsive">
			<table class="table table-bordered" data-toggle="dataTable" data-form="deleteForm">
				<thead>
					<tr>
						<th>Descrição</th>
						<th>Cliente</th>
						<th>Cidade</th>
						<th>Telefone</th>
						<th>#</th>
					</tr>
				</thead>
				<tbody>
					@foreach($fretes as $frete)
					<tr>
						<td>
							<a href="{{action('FretesController@edit', $frete->id)}}">
								{{$frete->descricao}}
							</a>
						</td>
						<td>{{ $frete->cliente->nome }}</td>
						<td>{{ $frete->endereco->cidade }}</td>
						<td>{{ $frete->cliente->telefone }}</td>
						<td>
							<div class="col-sm-4">
		                    <a href="{{action('FretesController@edit', $frete->id)}}" class="btn btn-info btn-xs">
		                    	<i class="fa fa-pencil fa-fw"></i>
		                    </a>
							</div>
                    {!! Form::model($frete, ['method' => 'DELETE', 'action' => ['FretesController@destroy', $frete->id], 'class' =>'form-inline form-delete']) !!}
                    	{!! Form::hidden('id', $frete->id) !!}
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