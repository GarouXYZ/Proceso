<!--PHP-->
<!--Codigo para Destruir sesion (cerrar sesion)-->
<?php
session_start();
session_unset();
session_destroy();
header("Location: /user_ludikron/apps/views/menuinicio.html");
exit();
?>
