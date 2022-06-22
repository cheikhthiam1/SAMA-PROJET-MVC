<?php

if (isset($_REQUEST['controller'] )) {
        if ($_REQUEST['controller'] == "userController") {
            require_once(ROUTE_DIR.'controller/userController.php');
        } elseif ($_REQUEST['controller'] == "securityController") {
            require_once(ROUTE_DIR.'controller/securityController.php');
        }elseif ($_REQUEST['controller'] == "adminController") {
            require_once(ROUTE_DIR.'controller/adminController.php');
        }
} else {
    require_once(ROUTE_DIR.'vue/security/connexion.html.php');
} 


?>
