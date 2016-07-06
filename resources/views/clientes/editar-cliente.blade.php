@extends('layouts.master')

@section('content')

<div class="row">
	<div class="modal-body">

		<div class="page-header">
			<h2><i class="fa fa-pencil pull-left"></i>Editar Cliente</h2>
		</div>

		{!! Form::model($cliente, ['method' => 'PATCH', 'action' => ['ClientesController@update', $cliente->id]]) !!}

			@include('clientes._form')

		{!! Form::close()!!}
      </div>
</div>

@stop