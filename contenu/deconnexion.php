<?php

if (isset($_SESSION['pseudo'])) {
    $_SESSION = array();
    session_destroy();
    setcookie('login', '');
    setcookie('pass_hache', '');
    header('Location:'.NDD_PATH);
}else{
    header('Location:'.NDD_PATH);
}

?>
