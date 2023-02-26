$(document).ready(function() {
	$('#registration-form').submit(function(e) {
		e.preventDefault();
		$.ajax({
			url: 'register.php',
			method: 'POST',
			data: $(this).serialize(),
			dataType: 'json',
			beforeSend: function(e) {
				$('#response').html('');
				$('#response').hide();
			},
			success: function(response) {
				if (response?.message === "success") {

					$('#success-message').show();
					$('#registration-form').hide();
				} else {
				
					$('#response').show();
					$('#response').html(response.data);
				}
			}
		});
    });
});