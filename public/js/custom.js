$('document').ready(function() {

	$('#cep').keyup(function() {
		
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


					var distanceService = new google.maps.DistanceMatrixService();
				    	distanceService.getDistanceMatrix({
				        origins: [origins],
				        destinations: [destinations],
				        travelMode: google.maps.TravelMode.DRIVING,
				        unitSystem: google.maps.UnitSystem.METRIC,
				        durationInTraffic: true,
				        avoidHighways: false,
				        avoidTolls: false
				    },
				    function (result, status) {
				       
				        if (status !== google.maps.DistanceMatrixStatus.OK) {
				            console.log('Error:', status);

				        } else {
				            
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
	});

	$('#peso').keyup(function() {
		
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


				var distanceService = new google.maps.DistanceMatrixService();
			    	distanceService.getDistanceMatrix({
			        origins: [origins],
			        destinations: [destinations],
			        travelMode: google.maps.TravelMode.DRIVING,
			        unitSystem: google.maps.UnitSystem.METRIC,
			        durationInTraffic: true,
			        avoidHighways: false,
			        avoidTolls: false
			    },
			    function (result, status) {
			       
			        if (status !== google.maps.DistanceMatrixStatus.OK) {
			            console.log('Error:', status);

			        } else {
			            
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
		}
	});

	$("#cliente").change(function() {

		var _id = $("#cliente").val();
		var baseUrl = '/transportadora/clientes';

		$.ajax({
			data: '',
			params: _id,
		    url: baseUrl + '/' + _id,
		    success: function(result, response) {
		    	
		    	$("#numero_cliente").val(result.numero);
		    	$("#telefone_client").val(result.telefone);
		    	$("#cep_cliente").val(result.endereco.cep);
		        $('#logradouro_cliente').val(result.endereco.logradouro);					
				$('#complemento_cliente').val(result.complemento);							
				$('#uf_cliente').val(result.endereco.uf);								
				$('#cidade_cliente').val(result.endereco.cidade);							
				$('#bairro_cliente').val(result.endereco.bairro);
		    }
		});
	});

	var url = window.location;

	$('ul.nav a[href="'+ url +'"]').parent().addClass('active');
	$('ul.nav a').filter(function() {
    	return this.href == url;
	}).parent().addClass('active');

});