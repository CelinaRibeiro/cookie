<?php
setcookie('nome', '', time() - 3600); //limpar cookie

header('Location: index.php');
exit;