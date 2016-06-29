@extends('layouts.master')

@section('content')
<div class="row">
	

	<div class="row">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Cidade</th>
					<th>Telefone</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					@foreach($clientes as $cliente)
						<td><a href="#"  data-toggle="modal" data-target="#modal-dialog">{{ $cliente->nome }}</a></td>
						<td>{{ $cliente->endereco->cidade }}</td>
						<td>{{ $cliente->telefone }}</td>
					@endforeach
				</tr>
			</tbody>
		</table>
	</div>

	<div class="row">
		<h3>AAAS</h3>
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-dialog">
  Launch demo modal
</button>

@yield('form')

<!-- Modal -->
<div class="modal fade" id="modal-dialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        	<span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel" style="color:lightgreen; font-size:1.7em; font-weight: bold">
        	{{$cliente->id != null ? 'Editar Cliente' : 'Novo Cliente'}}
        </h4>
      </div>
      <div class="modal-body">
		
		{!! Form::model($cliente) !!}

			<div class="form-group">
				{!! Form::label('nome', 'Nome:') !!}
				{!! Form::text('nome', null, ['class' => 'form-control']) !!}
			</div>
			
			<div class="row">
				<div class="col-sm-3">
					<div class="form-group">
						{!! Form::label('cep', 'CEP:') !!}
						{!! Form::text('endereco[cep]', null, ['class' => 'form-control', 'onkeyup' => 'foo()', 'maxlength' => 8]) !!}
					</div>
					<script>

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

			<div class="modal-footer">
		    	<input type="submit" class="btn btn-primary" label="Salvar"></input>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
		    </div>

		{!! Form::close()!!}
      </div>
    </div>
  </div>
</div>
	</div>
</div>
@endsection