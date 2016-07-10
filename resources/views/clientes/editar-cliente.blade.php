@extends('layouts.master')

@section('content')

<div class="row">

	<div class="panel panel-primary">

		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12">
					<i class="fa fa-pencil pull-left fa-2x"></i><h2 class="panel-title" style="font-size:1.7em">Editar Cliente</h2>
				</div>
			</div>
		</div>

		{!! Form::model($cliente, ['method' => 'PATCH', 'action' => ['ClientesController@update', $cliente->id], 'id' => 'clientes-form']) !!}

			@include('clientes._form')

		{!! Form::close()!!}
      </div>
</div>

@stop