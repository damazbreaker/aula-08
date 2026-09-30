<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Boas-vindas</title>
</head>
<body>

    <h1>Bem-vindo, <?php echo $_SESSION["nome"]; ?>!</h1>

</body>
</html>