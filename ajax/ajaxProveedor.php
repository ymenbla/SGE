<?php


$peticionAjax = true;
require_once "../core/config.php";

if (isset($_POST['op'])) {
  include_once "../controller/controllerProveedor.php";
  $objProveedor = new controllerProveedor();
    $resultado = $objProveedor->ajaxProveedorC();

}else {
    session_start();
    session_destroy();
    echo '<script>window.location.href="'.SERVERURL.'"login</script>';
}
