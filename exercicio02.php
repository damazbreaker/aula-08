<?php
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];

    if ($cidade == "Curitiba") {
        echo "Boas-vindas, curitibano";
    } else {
        echo "Boas-vindas!";
    }
?>