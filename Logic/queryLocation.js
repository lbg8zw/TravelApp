$(document).ready(function() {
	
	$('#submitGeo').click(function() {
		$.ajax({
			url: 'geocode.php',
			data: {addressInput: $(document).getElementsByName('addressHere')[0].val(),
				   cityInput: $(document).getElementsByName('cityHere')[0].val(),
			  	   zipInput: $(document).getElementsByName('zipCodeHere')[0].val()},
			success: function(data) {
				$('#hideData').html(data);
			}
		})
	});	
});