jQuery(document).ready(function($) {
	$("#contactForm").on('submit', function(event){
		event.preventDefault();
		swal({
			title: '',
			text: 'Aguarde un instante por favor',
			imageUrl: 'img/preloader.gif',
			imageSize: '120x120',
			showConfirmButton: false,
		});
		$.post('mailer.php', $('#contactForm').serialize(), function(data){
			swal({
				title: 'Mensaje enviado',
				text: 'Muchas gracias por contactarse con nosotros',
				type: 'success',
				showConfirmButton: true,
			});
		});
		return false;
	})
});