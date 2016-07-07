@if(isset($frete))

	<script>

		window.onload = function() {

			$.ajax({
			    url: '{{action('FretesController@show', $frete->id)}}',
			    success: function(result, response) {

			    	$("#cep").val(result.endereco.cep);
			        $('#logradouro').val(result.endereco.logradouro);
					$('#complemento').val(result.endereco.complemento);
					$('#uf').val(result.endereco.uf);
					$('#cidade').val(result.endereco.cidade);
					$('#bairro').val(result.endereco.bairro);
					$('#numero').val(result.numero);
					$('#telefone').val(result.telefone);
								    }
			}).done(function(result) {

				var id_cliente = result.cliente_id;

				$.ajax({
					url: '/transportadora/clientes/' + id_cliente,

					success: function(result) {

						$("#cliente_text").val(result.nome);
						$("#cep_cliente").val(result.endereco.cep);
				        $('#logradouro_cliente').val(result.endereco.logradouro);
						$('#complemento_cliente').val(result.endereco.complemento);
						$('#uf_cliente').val(result.endereco.uf);
						$('#cidade_cliente').val(result.endereco.cidade);
						$('#bairro_cliente').val(result.endereco.bairro);
						$('#numero_cliente').val(result.numero);
						$('#telefone_cliente').val(result.telefone);
					}

				});
			});
		}

	</script>

@endif

<div class="panel-body">

	<div class="panel-body">
		<div class="form-group">
			{!! Form::label('descricao', 'Descrição:') !!}
			{!! Form::text('descricao', null, ['class' => 'form-control', $readonly]) !!}
		</div>		
	</div>
	
	<div class="panel panel-primary">

		<div class="panel-heading">
			<h1 class="panel-title">Origem</h1>
		</div>

		<div class="panel-body">

			<div class="form-group">
				
				@if (isset($frete))
					{!! Form::label('cliente_text', 'Cliente:') !!}
					{!! Form::text('cliente_text', null, ['class' => 'form-control', $readonly]) !!}
				@else
					{!! Form::label('cliente', 'Cliente:') !!}
					{!! Form::select('cliente', $clientes, null, ['class' => 'cliente-select js-states form-control', $readonly]) !!}
				@endif

			</div>

			<div class="row">
				<div class="col-sm-3">
					<div class="form-group">
						{!! Form::label('cep_cliente', 'CEP:') !!}
						{!! Form::text('cep_cliente', null, ['class' => 'form-control', 'maxlength' => 8, $readonly, 'onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57']) !!}
					</div>				
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
						{!! Form::text('numero_cliente', null, ['class' => 'form-control', $readonly, 'onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57']) !!}
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
						{!! Form::text('telefone_cliente', null, ['class' => 'form-control', $readonly, 'onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57']) !!}
					</div>					
				</div>
			</div>
		</div>
		</div>

	<div class="panel panel-primary">
		
		<div class="panel-heading">
			<h2 class="panel-title">Destino</h2>
		</div>
		
		<div class="panel-body">

			<div class="row">
				<div class="col-sm-3">
					<div class="form-group">
						{!! Form::label('cep', 'CEP:') !!}
						{!! Form::text('cep', null, ['class' => 'form-control', 'maxlength' => 8, $readonly, 'onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57']) !!}
					</div>					
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
						{!! Form::text('numero', null, ['class' => 'form-control', $readonly, 'onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57']) !!}
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
				
				<div class="col-sm-10">
					<div class="form-group">
						{!! Form::label('cidade', 'Cidade:') !!}
						{!! Form::text('cidade', null, ['class' => 'form-control', $readonly]) !!}
					</div>					
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-primary">
		
		<div class="panel-heading">
			<h2 class="panel-title">Informações Adicionais</h2>
		</div>

		<div class="panel-body">

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
					{!! Form::label('peso', 'Peso (kg):') !!}
					{!! Form::text('peso', null, ['class' => 'form-control', $readonly, 'onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46']) !!}
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="form-group">
					{!! Form::label('valor', 'Valor:') !!}
					{!! Form::text('valor', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
				</div>
			</div>
		</div>
		
	</div>

	<div class="modal-footer">
		<input type="submit" class="btn btn-primary" label="Salvar"></input>
	    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
	</div>

</div>