<?php
if (!empty($_POST["ds_email"]) && !empty($_POST["ds_senha"])) {

    header("Location: logincheck.php");
} else {
    // O formulário não foi enviado corretamente
    echo "Formulário incompleto";
}

?>