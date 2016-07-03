@extends('layouts.master')

@section('content')

<div class="row">

	<div class="modal-body">

		<div class="page-header">
			<h2><i class="fa fa-cart-plus pull-left"></i>Editar Frete</h2>
		</div>
		
		{!! Form::model($frete) !!}

			@include('fretes._form', $readonly = ['readonly' => 'readonly'])

		{!! Form::close()!!}
		
      </div>
</div>

@stop