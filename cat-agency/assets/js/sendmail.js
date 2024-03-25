var deco_agency = {
	sendmail: function (o) {
		var form = jQuery(o);
		var data = form.serialize();
		var name = form.find('#field_name');
		var email = form.find('#field_email');
		var site = form.find('#field_site');
		var mes = form.find('#field_mes');

		jQuery('.error-msg').html('').hide();

		//console.log(data);
		jQuery.ajax({
			type    : "POST",
			url     : "/wp-admin/admin-ajax.php",
			dataType: "json",
			data    : "action=deco_send_mail&" + data,
			success : function (a) {
				console.log(a);

				name.val('');
				email.val('');
				site.val('');
				mes.val('');

				if (a.result == 'success') {
					jQuery('.error-msg').html('Your message has been sent');
					jQuery('.error-msg').css({'color': 'green'}).fadeIn(300);
				} else {
					jQuery('.error-msg').html('Email send error!');
					jQuery('.error-msg').css({'color': 'red'}).fadeIn(300);

				}
			}
		})

	}
}