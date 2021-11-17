<?php
// Inicializar la sesión.
// Si está usando session_name("algo"), ¡no lo olvide ahora!
session_start();

// Destruir todas las variables de sesión.
$_SESSION = array();

// Si se desea destruir la sesión completamente, borre también la cookie de sesión.
// Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
// setcookie("unm","",time()-3600);
// setcookie("pwd","",time()-3600);
session_unset();

// Finalmente, destruir la sesión.
session_destroy();
echo '<script type="text/javascript">alert("SESSION ENDED!");window.location.href="index";</script>';
// header('location:index.php');
