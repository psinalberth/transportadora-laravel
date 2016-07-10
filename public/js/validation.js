$(document).ready(function() {

	$('#clientes-form').validate({

		errorPlacement: function(error, element) {
			return true;
		},

		rules: {
			
			nome: {
				required: true
			},

			cep: {
				required: true
			},

			logradouro: {
				required: true
			},

			numero: {
				required: true
			},

			uf: {
				required: true
			},

			cidade: {
				required: true
			},

			bairro: {
				required: true
			},

			telefone: {
				required: true
			}
		}
	});
	$('#clientes-form input').on('keyup blur change', function() {

		if ($('#clientes-form').valid()) {
			$('input.btn.btn-primary').prop('disabled', false);
		} else {
			$('input.btn.btn-primary').prop('disabled', 'disabled');
		}
	});

	/// Fretes

	$('#fretes-form').validate({

		errorPlacement: function(error, element) {
			return true;
		},

		rules: {
			
			descricao: {
				required: true
			},

			cep: {
				required: true
			},

			logradouro: {
				required: true
			},

			numero: {
				required: true
			},

			uf: {
				required: true
			},

			cidade: {
				required: true
			},

			bairro: {
				required: true
			},

			peso: {
				required: true
			},

			valor: {
				required: true
			},

			data_saida: {
				required: true
			},

			data_entrada: {
				required: true
			}
		}
	});
	$('#fretes-form input').on('keyup blur change', function() {

		if ($('#fretes-form').valid()) {
			$('input.btn.btn-primary').prop('disabled', false);
		} else {
			$('input.btn.btn-primary').prop('disabled', 'disabled');
		}
	});
});