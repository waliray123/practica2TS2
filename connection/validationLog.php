<?php

include_once 'user.php';
include_once 'user_session.php';

$userSession = new UserSession();
$user = new User();
if (isset($_SESSION['user'])) {
    //Se queda donde esta

} else {
    //echo "Login";
    header("Location: ../index.php");
}
?>