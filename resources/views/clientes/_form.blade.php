@if(isset($cliente))

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

@endif

<div class="panel-body">

	<div class="form-group">
		{!! Form::label('nome', 'Nome:') !!}
		{!! Form::text('nome', null, ['class' => 'form-control']) !!}
	</div>

	<div class="row">
		<div class="col-sm-3">
			<div class="form-group">
				{!! Form::label('cep', 'CEP:') !!}
				{!! Form::text('cep', null, ['class' => 'form-control', 'maxlength' => 8, 'onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57']) !!}
			</div>
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
				{!! Form::text('numero', null, ['class' => 'form-control', 'onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57']) !!}
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
				{!! Form::text('telefone', null, ['class' => 'form-control', 'onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57']) !!}
			</div>
		</div>
	</div>

	<div class="modal-footer">
		<input type="submit" class="btn btn-primary" value="Salvar" disabled="disabled"></input>
		<a href="{{action('ClientesController@index')}}" class="btn btn-default">Cancelar</a>
	</div>

</div>