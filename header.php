<h1>Cabeçalho</h1>
<?php
    //mostrar informações do cookie
    if(isset($_COOKIE['nome'])) {
        $nome = $_COOKIE['nome'];
        echo '<h2>'.$nome.'</h2>';
    }
?>
<hr/>
<br />