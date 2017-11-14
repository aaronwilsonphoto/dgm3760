<?php
// DELETE COOKIES
    setcookie('username', '', time()-3600);
    setcookie('first', '', time()-3600);
    setcookie('last', '', time()-3600);

   // REDIRECT
    header('Location: index.php');



?>