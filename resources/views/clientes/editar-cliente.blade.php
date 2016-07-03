@extends('layouts.master')

@section('content')

<div class="row">
	<div class="modal-body">

		<div class="page-header">
			<h2><i class="fa fa-pencil pull-left"></i>Editar Cliente</h2>
		</div>
		
		{!! Form::model($cliente, ['method' => 'PATCH', 'action' => ['ClientesController@update', $cliente->id]]) !!}

			<div class="form-group">
				{!! Form::label('nome', 'Nome:') !!}
				{!! Form::text('nome', null, ['class' => 'form-control']) !!}
			</div>
			
			<div class="row">
				<div class="col-sm-3">
					<div class="form-group">
						{!! Form::label('cep', 'CEP:') !!}
						{!! Form::text('cep', null, ['class' => 'form-control', 'maxlength' => 8]) !!}
					</div>
					<script>

						window.onload = function() {

							$.ajax({
							    url: '{{action('ClientesController@show', $cliente->id)}}', 
							    success: function(result, response) {
							    	
							    	$("#cep").val(result.endereco.cep);
							        $('#logradouro').val(result.endereco.logradouro);						
									$('#complemento').val(result.complemento);								
									$('#uf').val(result.endereco.uf);								
									$('#cidade').val(result.endereco.cidade);								
									$('#bairro').val(result.endereco.bairro);								
							    }
							});
						}

					</script>					
				</div>

				<div class="col-sm-7">
					<div class="form-group">
						{!! Form::label('logradouro', 'Logradouro:') !!}
						{!! Form::text('logradouro', null, ['class' => 'form-control']) !!}
					</div>					
				</div>

				<div class="col-sm-2">
					<div class="form-group">
						{!! Form::label('numero', 'Número:') !!}
						{!! Form::text('numero', null, ['class' => 'form-control']) !!}
					</div>					
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						{!! Form::label('complemento', 'Complemento:') !!}
						{!! Form::text('complemento', null, ['class' => 'form-control']) !!}
					</div>					
				</div>
				
				<div class="col-sm-6">
					<div class="form-group">
						{!! Form::label('bairro', 'Bairro:') !!}
						{!! Form::text('bairro', null, ['class' => 'form-control']) !!}
					</div>					
				</div>
			</div>

			<div class="row">
				<div class="col-sm-2">
					<div class="form-group">
						{!! Form::label('uf', 'UF:') !!}
						{!! Form::text('uf', null, ['class' => 'form-control']) !!}
					</div>					
				</div>
				
				<div class="col-sm-6">
					<div class="form-group">
						{!! Form::label('cidade', 'Cidade:') !!}
						{!! Form::text('cidade', null, ['class' => 'form-control']) !!}
					</div>					
				</div>

				<div class="col-sm-4">
					<div class="form-group">
						{!! Form::label('telefone', 'Telefone:') !!}
						{!! Form::text('telefone', null, ['class' => 'form-control']) !!}
					</div>					
				</div>
			</div>

			<div class="modal-footer">
		    	<input type="submit" class="btn btn-primary" label="Salvar"></input>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
		    </div>

		{!! Form::close()!!}
      </div>
</div>

@stop