<?php
require('header.php');
?>

<form method="POST" action="recebedor.php">
    <br/>
    <label>
        Nome:
        <input type="text" name="nome" />
    </label>
    <br/><br/>

    <label>
        E-mail:
        <input type="text" name="email" />
    </label>
    <br/><br/>

    <label>
        Idade:
        <input type="text" name="idade" />
    </label>
    <br/><br/>

    <input type="submit" value="Enviar" />
    <input type="reset" value="Limpar" /> <br/><br/>

    <a href="apagar.php">Apagar Cookie</a>
</form>