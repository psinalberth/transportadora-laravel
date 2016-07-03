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
			{!! Form::select('cliente', $clientes, null, ['optional' => 'Cliente', 'class' => 'form-control', $readonly]) !!}
		</div>

		<div class="row">
			<div class="col-sm-3">
				<div class="form-group">
					{!! Form::label('cep_cliente', 'CEP:') !!}
					{!! Form::text('cep_cliente', null, ['class' => 'form-control', 'maxlength' => 8, $readonly]) !!}
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
					{!! Form::text('cep', null, ['class' => 'form-control', 'maxlength' => 8, $readonly]) !!}
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