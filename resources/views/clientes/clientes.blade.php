@extends('layouts.master')

@section('content')
<div class="row">

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
        <h4 class="modal-title" id="myModalLabel" style="color:lightgreen; font-size:1.7em; font-weight: bold">Novo Cliente</h4>
      </div>
      <div class="modal-body">
		
		{!! Form::open() !!}

			<div class="form-group">
				{!! Form::label('nome', 'Nome:') !!}
				{!! Form::text('nome', null, ['class' => 'form-control']) !!}
			</div>
			
			<div class="row">
				<div class="col-sm-3">
					<div class="form-group">
						{!! Form::label('cep', 'CEP:') !!}
						{!! Form::text('cep', null, ['class' => 'form-control', 'onkeyup' => 'foo()']) !!}
					</div>
					<script>

						function foo() {

							if (document.getElementById("cep").value.length == 8)
								alert(document.getElementById('cep'));
						}

					</script>					
				</div>

				<div class="col-sm-7">
					<div class="form-group">
						{!! Form::label('logradouro', 'Logradouro:') !!}
						{!! Form::text('nome', null, ['class' => 'form-control']) !!}
					</div>					
				</div>

				<div class="col-sm-2">
					<div class="form-group">
						{!! Form::label('logradouro', 'Número:') !!}
						{!! Form::text('nome', null, ['class' => 'form-control']) !!}
					</div>					
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						{!! Form::label('cep', 'Complemento:') !!}
						{!! Form::text('cep', null, ['class' => 'form-control']) !!}
					</div>					
				</div>
				
				<div class="col-sm-6">
					<div class="form-group">
						{!! Form::label('logradouro', 'Bairro:') !!}
						{!! Form::text('nome', null, ['class' => 'form-control']) !!}
					</div>					
				</div>
			</div>

			<div class="row">
				<div class="col-sm-2">
					<div class="form-group">
						{!! Form::label('cep', 'UF:') !!}
						{!! Form::text('cep', null, ['class' => 'form-control']) !!}
					</div>					
				</div>
				
				<div class="col-sm-6">
					<div class="form-group">
						{!! Form::label('logradouro', 'Cidade:') !!}
						{!! Form::text('nome', null, ['class' => 'form-control']) !!}
					</div>					
				</div>

				<div class="col-sm-4">
					<div class="form-group">
						{!! Form::label('logradouro', 'Telefone:') !!}
						{!! Form::text('nome', null, ['class' => 'form-control']) !!}
					</div>					
				</div>
			</div>

		{!! Form::close()!!}
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Salvar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
	</div>
</div>
@endsection