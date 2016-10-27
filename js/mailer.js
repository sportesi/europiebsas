$(document).ready(function () {
    if (true) {
        $("#contactForm #name").val("Sebastian Portesi");
        $("#contactForm #phone").val("1133547942");
        $("#contactForm #mail").val("sebastian@proyectiva.com");
        $("#contactForm #message").val("Tengo un problema con mi pie derecho");
    }

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