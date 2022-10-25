<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Mais Um</title>
</head>
<body>
<?php
$globalvar = 15;

function contaMaisUm() {
global $globalvar;

$globalvar++;

echo "Globalbar é $globalvar";
}
contaMaisUm();
?>

</body>
</html>