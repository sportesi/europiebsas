<!--Script-->
<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mailer.js" type="text/javascript"></script>
<script src="bower_components/bootstrap-sweetalert/dist/sweetalert.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/slider.min.js"></script>
<!--/Script-->

<!--Activar item del menu-->
<script type="text/javascript">
    $(document).ready(function () {
        var path = window.location.pathname.split("/");
        var file = path[path.length - 1] || 'index.php';
        $(".nav").find("a[href='" + file + "']").parent('li').addClass('active');
    });
</script>
<!-- End Activar item del menu-->