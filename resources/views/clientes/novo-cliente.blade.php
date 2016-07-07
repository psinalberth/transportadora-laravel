@extends('layouts.master')

@section('content')

<div class="row">

	<div class="panel panel-primary">

		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12">
					<i class="fa fa-user fa-fw pull-left fa-2x"></i>
					<h2 class="panel-title" style="font-size:1.7em">Novo Cliente</h2>
				</div>
			</div>
		</div>

		{!! Form::open(['method' => 'POST', 'action' => 'ClientesController@store']) !!}

			@include('clientes._form')

		{!! Form::close()!!}

      </div>
</div>

@stop