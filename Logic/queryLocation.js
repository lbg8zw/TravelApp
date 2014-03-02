$(document).ready(function() {
	
	$('#submitGeo').click(function() {
		$.ajax({
			url: 'geocode.php',
			data: {addressInput: $(document).getElementsByName('addressHere')[0].val(),
				   cityInput: $(document).getElementsByName('cityHere')[0].val(),
			  	   countryInput: $(document).getElementsByName('countryHere')[0].val()},
			success: function(data) {
				$('#hideData').html(data);
			}
		})
	});	
});