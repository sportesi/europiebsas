$(document).ready(function () {
    $("#contactForm").on('submit', function (event) {
        event.preventDefault();
        swal({
            title: '',
            text: 'Aguarde un instante',
            imageUrl: 'img/preloader.gif',
            showConfirmButton: false,
        });
        $.post('mailer.php', $('#contactForm').serialize(), function () {
//            $('#contactForm')[0].reset();
            swal({
                title: '',
                text: 'Su mensaje ha sido enviado.\nGracias por contactarse con nosotros.',
                type: 'success'
            });
        }).fail(function () {
            swal({
                title: '',
                text: 'Ha surgido un error, por favor intente mas tarde',
                type: 'warning'
            });
        });
    });
});