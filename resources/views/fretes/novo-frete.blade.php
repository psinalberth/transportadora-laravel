@extends('layouts.master')

@section('content')

<div class="row">

	<div class="modal-body">

		<div class="page-header">
			<h2><i class="fa fa-cart-plus pull-left"></i>Novo Frete</h2>
		</div>
		
		{!! Form::open(['method' => 'POST', 'action' => 'FretesController@store']) !!}

			@include('fretes._form', $readonly = ['readonly' => 'false'])

		{!! Form::close()!!}
		
      </div>
</div>

@stop