<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indice</title>
</head>
<body>
<?php
$capitulo1 = "Capítulo 1";
$capitulo2 = "Capítulo 2";
$capitulo3 = "Capítulo 3";
$titulo = "Indice";
$versao = "Pre ultra alpha beta 0.000.001"
?>

<h1><?= $titulo ?></h1><?= $versao ?>
<ul>
    <li><a href="capitulos/capitulo1.php?title=Capítulo%201&&version=0.0.1"><?= $capitulo1 ?></a></li>
    <li><a href="capitulos/capitulo2.php?title=Capítulo%202&&version=0.0.1"><?= $capitulo2 ?></a></li>
    <li><a href="capitulos/capitulo3.php?title=Capítulo%203&&version=0.0.1"><?= $capitulo3 ?></a></li>
</ul>
</body>
</html>
