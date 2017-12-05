<?php
// DELETE COOKIES
    setcookie('username', '', time() - 3600, '/', '.aaronwilsonphoto.com');
    setcookie('first', '', time() - 3600, '/', '.aaronwilsonphoto.com');
    setcookie('last', '', time() - 3600, '/', '.aaronwilsonphoto.com');

   // REDIRECT
    header('Location: index.php');

?>