@extends('layouts.master')

@section('content')

<div class="row">

	<div class="modal-body">

		<div class="page-header">
			<h2><i class="fa fa-cart-plus pull-left"></i>Novo Frete</h2>
		</div>
		
		{!! Form::open(['method' => 'POST', 'action' => 'FretesController@store']) !!}
			
			<div class="row">
				
				<div class="col-sm-9">
					<div class="form-group">
						{!! Form::label('descricao', 'Descrição:') !!}
						{!! Form::text('descricao', null, ['class' => 'form-control']) !!}
					</div>		
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						{!! Form::label('peso', 'Peso:') !!}
						{!! Form::text('peso', null, ['class' => 'form-control']) !!}
					</div>
				</div>

			</div>

			<div class="form-group">
				{!! Form::label('cliente', 'Cliente:') !!}
				{!! Form::select('cliente', $clientes, null, ['optional' => 'Cliente', 'class' => 'form-control', 'onchange' => 'lol()']) !!}
			</div>
			
			<div class="row">
				<div class="col-sm-3">
					<div class="form-group">
						{!! Form::label('cep', 'CEP:') !!}
						{!! Form::text('cep', null, ['class' => 'form-control', 'onkeyup' => 'foo()', 'maxlength' => 8]) !!}
					</div>
					<script>

						function lol() {

							var _id = $("#cliente").val();

							var baseUrl = '{{action('ClientesController@index')}}';

							console.log(baseUrl);

							$.ajax({
								data: _id,
								params: _id,
							    url: baseUrl + '/' + _id,
							    success: function(result, response) {
							    	
							    	$("#numero").val(result.numero);
							    	$("#telefone").val(result.telefone);
							    	$("#cep").val(result.endereco.cep);
							        $('#logradouro').val(result.endereco.logradouro);							
									$('#complemento').val(result.complemento);								
									$('#uf').val(result.endereco.uf);								
									$('#cidade').val(result.endereco.cidade);								
									$('#bairro').val(result.endereco.bairro);
							    }
							});
						}	

						function foo() {

							if ($('#cep').val().length == 8) {

								$.ajax({
									type: 'GET',
									dataType: 'json',
									url: 'https://viacep.com.br/ws/' + $('#cep').val() + '/json/',
									data: '',
									success: function(result, success) {
										
										$('#logradouro').val(result.logradouro);								
										$('#complemento').val(result.complemento);								
										$('#uf').val(result.uf);								
										$('#cidade').val(result.localidade);								
										$('#bairro').val(result.bairro);								
									}
								})
							} else {
								
								$('#logradouro').val('');								
								$('#complemento').val('');								
								$('#uf').val('');								
								$('#cidade').val('');								
								$('#bairro').val('');	
							}
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

			<div class="row">

				<div class="col-sm-4">
					<div class="form-group">
						{!! Form::label('data_saida', 'Data de Saída:') !!}
						{!! Form::date('data_saida', null, ['class' => 'form-control']) !!}
					</div>
				</div>

				<div class="col-sm-4">
					<div class="form-group">
						{!! Form::label('data_entrada', 'Data de Entrada:') !!}
						{!! Form::date('data_entrada', null, ['class' => 'form-control']) !!}
					</div>
				</div>
				
				<div class="col-sm-4">
					<div class="form-group">
						{!! Form::label('valor', 'Valor:') !!}
						{!! Form::text('valor', null, ['class' => 'form-control']) !!}
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