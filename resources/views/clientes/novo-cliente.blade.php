@extends('layouts.master')

@section('content')

<div class="row">

	<div class="modal-body">

		<div class="page-header">
			<h2><i class="fa fa-user-plus pull-left"></i>Novo Cliente</h2>
		</div>

		{!! Form::open(['method' => 'POST', 'action' => 'ClientesController@store']) !!}

			@include('clientes._form')

		{!! Form::close()!!}
      </div>
</div>

@stop