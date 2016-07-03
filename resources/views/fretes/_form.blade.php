<div class="row">
	
	<div class="col-sm-12">
		<div class="form-group">
			{!! Form::label('descricao', 'Descrição:') !!}
			{!! Form::text('descricao', null, ['class' => 'form-control', $readonly]) !!}
		</div>		
	</div>

</div>

<div class="row">
	
	<div class="col-sm-6">

		<h5 class="modal-header">Origem</h5>

		<div class="form-group">
			{!! Form::label('cliente', 'Cliente:') !!}
			{!! Form::select('cliente', $clientes, null, ['optional' => 'Cliente', 'class' => 'form-control', 'onchange' => 'findCliente()', $readonly]) !!}
		</div>

		<div class="row">
			<div class="col-sm-3">
				<div class="form-group">
					{!! Form::label('cep_cliente', 'CEP:') !!}
					{!! Form::text('cep_cliente', null, ['class' => 'form-control', 'maxlength' => 8, $readonly]) !!}
				</div>
				<script>

					function findCliente() {

						var _id = $("#cliente").val();

						var baseUrl = '{{action('ClientesController@index')}}';

						console.log(baseUrl);

						$.ajax({
							data: _id,
							params: _id,
						    url: baseUrl + '/' + _id,
						    success: function(result, response) {
						    	
						    	console.log(result);
						    	
						    	$("#numero_cliente").val(result.numero);
						    	$("#telefone_cliente").val(result.telefone);
						    	$("#cep_cliente").val(result.endereco.cep);
						        $('#logradouro_cliente').val(result.endereco.logradouro);					
								$('#complemento_cliente').val(result.complemento);							
								$('#uf_cliente').val(result.endereco.uf);								
								$('#cidade_cliente').val(result.endereco.cidade);							
								$('#bairro_cliente').val(result.endereco.bairro);
						    }
						});
					}	

				</script>					
			</div>

			<div class="col-sm-7">
				<div class="form-group">
					{!! Form::label('logradouro_cliente', 'Logradouro:') !!}
					{!! Form::text('logradouro_cliente', null, ['class' => 'form-control', $readonly]) !!}
				</div>					
			</div>

			<div class="col-sm-2">
				<div class="form-group">
					{!! Form::label('numero_cliente', 'Número:') !!}
					{!! Form::text('numero_cliente', null, ['class' => 'form-control', $readonly]) !!}
				</div>					
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					{!! Form::label('complemento_cliente', 'Complemento:') !!}
					{!! Form::text('complemento_cliente', null, ['class' => 'form-control', $readonly]) !!}
				</div>					
			</div>
			
			<div class="col-sm-6">
				<div class="form-group">
					{!! Form::label('bairro_cliente', 'Bairro:') !!}
					{!! Form::text('bairro_cliente', null, ['class' => 'form-control', $readonly]) !!}
				</div>					
			</div>
		</div>

		<div class="row">
			<div class="col-sm-2">
				<div class="form-group">
					{!! Form::label('uf_cliente', 'UF:') !!}
					{!! Form::text('uf_cliente', null, ['class' => 'form-control', $readonly]) !!}
				</div>					
			</div>
			
			<div class="col-sm-6">
				<div class="form-group">
					{!! Form::label('cidade_cliente', 'Cidade:') !!}
					{!! Form::text('cidade_cliente', null, ['class' => 'form-control', $readonly]) !!}
				</div>					
			</div>

			<div class="col-sm-4">
				<div class="form-group">
					{!! Form::label('telefone_cliente', 'Telefone:') !!}
					{!! Form::text('telefone_cliente', null, ['class' => 'form-control', $readonly]) !!}
				</div>					
			</div>
		</div>
	</div>

	<div class="col-sm-6">
		
		<h5 class="modal-header">Destino</h5>

		<div class="row">
			<div class="col-sm-3">
				<div class="form-group">
					{!! Form::label('cep', 'CEP:') !!}
					{!! Form::text('cep', null, ['class' => 'form-control', 'onkeyup' => 'findEndereco()', 'maxlength' => 8, $readonly]) !!}
				</div>

								

				<script type="text/javascript">

					function findEndereco() {

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
							}).done(function() {
								
								if (($('#cidade_cliente').val() != '') && 
								    ($('#bairro_cliente').val() != '') &&
								    ($('#uf_cliente').val() != '')) {

									var baseUrl = 'http://maps.googleapis.com/maps/api/distancematrix/json?';

									var origins = $('#cidade_cliente').val() + ' ' +
												  $('#uf_cliente').val() + ' ' +
												  $('#bairro_cliente').val();

									var destinations = $('#cidade').val() + ' ' +
												  $('#uf').val() + ' ' +
												  $('#bairro').val();

									var url = baseUrl + 'origins=' + origins + '&destinations=' + destinations + '&mode=driving&language=pt-BR&sensor=false';

									console.log(url);

									$.ajax({
										type: 'GET',
										dataType: 'json',
										url: url,
										data: '',
										success: function(result) {

											var taxa = result.rows[0].elements[0].distance.value;

											taxa = taxa / 100000;

											if ($('#peso').val() != '') {

												var valor = $('#peso').val() * 10;

												valor = valor + taxa;

												$('#valor').val(valor.toFixed(2));

											} else {

												$('#valor').val(taxa.toFixed(2));
											}
										}
									});
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
					{!! Form::text('logradouro', null, ['class' => 'form-control', $readonly]) !!}
				</div>					
			</div>

			<div class="col-sm-2">
				<div class="form-group">
					{!! Form::label('numero', 'Número:') !!}
					{!! Form::text('numero', null, ['class' => 'form-control', $readonly]) !!}
				</div>					
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					{!! Form::label('complemento', 'Complemento:') !!}
					{!! Form::text('complemento', null, ['class' => 'form-control', $readonly]) !!}
				</div>					
			</div>
			
			<div class="col-sm-6">
				<div class="form-group">
					{!! Form::label('bairro', 'Bairro:') !!}
					{!! Form::text('bairro', null, ['class' => 'form-control', $readonly]) !!}
				</div>					
			</div>
		</div>

		<div class="row">
			<div class="col-sm-2">
				<div class="form-group">
					{!! Form::label('uf', 'UF:') !!}
					{!! Form::text('uf', null, ['class' => 'form-control', $readonly]) !!}
				</div>					
			</div>
			
			<div class="col-sm-6">
				<div class="form-group">
					{!! Form::label('cidade', 'Cidade:') !!}
					{!! Form::text('cidade', null, ['class' => 'form-control', $readonly]) !!}
				</div>					
			</div>

			<div class="col-sm-4">
				<div class="form-group">
					{!! Form::label('telefone', 'Telefone:') !!}
					{!! Form::text('telefone', null, ['class' => 'form-control', $readonly]) !!}
				</div>					
			</div>
		</div>
	</div>

</div>

<div class="row">

	<h5 class="modal-header">Informações Adicionais</h5>

	<div class="col-sm-3">
		<div class="form-group">
			{!! Form::label('data_saida', 'Data de Saída:') !!}
			{!! Form::date('data_saida', null, ['class' => 'form-control', $readonly]) !!}
		</div>
	</div>

	<div class="col-sm-3">
		<div class="form-group">
			{!! Form::label('data_entrada', 'Data de Entrada:') !!}
			{!! Form::date('data_entrada', null, ['class' => 'form-control', $readonly]) !!}
		</div>
	</div>

	<div class="col-sm-3">
		<div class="form-group">
			{!! Form::label('peso', 'Peso:') !!}
			{!! Form::text('peso', null, ['class' => 'form-control', $readonly]) !!}
		</div>
	</div>
	
	<div class="col-sm-3">
		<div class="form-group">
			{!! Form::label('valor', 'Valor:') !!}
			{!! Form::text('valor', null, ['class' => 'form-control', $readonly]) !!}
		</div>
	</div>
	
</div>

<div class="modal-footer">
	<input type="submit" class="btn btn-primary" label="Salvar"></input>
    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
</div>