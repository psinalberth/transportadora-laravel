@extends('layouts.master')

@section('content')

<div class="panel panel-primary">

		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-12">
					<i class="fa fa-shopping-cart pull-left fa-2x"></i><h2 class="panel-title" style="font-size:1.7em">Novo Frete</h2>
				</div>
			</div>
		</div>

		{!! Form::open(['method' => 'POST', 'action' => 'FretesController@store']) !!}

			@include('fretes._form', $readonly = ['readonly' => 'false'])

		{!! Form::close()!!}

      </div>
</div>

@stop