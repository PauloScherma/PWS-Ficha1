<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $protocolo = "https://";
        $dominio = "www.ipleiria.pt";
        $caminho = "/estudar/cursos/tesp/";
        $url = $protocolo.$dominio.$caminho;

        $num1 = 10;
        $num2 = 5;
        $num3 = $num1 + $num2;
        $num4 = $num1 * $num2;
        $num5 = $num1 - $num2;
        $num6 = $num1 / $num2;

        echo '<h1>Está tudo no php</h1>';
        echo '<p>Primeira aula</p>';
        echo '<p>PHP</p>';
        echo '<a href="'.$protocolo.$dominio.$caminho.'">Link</a>';
        echo "<br><br>";
        echo '<div>$num1('.$num1.')+$num2('.$num2.')='.($num1+$num2).'</div>';
        echo '<div>$num1('.$num1.')*$num2('.$num2.')='.($num1*$num2).'</div>';
        echo '<div>$num1('.$num1.')-$num2('.$num2.')='.$num5.'</div>';
        echo '<div>$num1('.$num1.')/$num2('.$num2.')='.$num6.'</div>';
    ?>
    <!--
    <h1>Primeira aula</h1>
    <p>PHP</p>
    <div>
        <p>$num1(<?= $num1?>) + $num2(<?= $num2?>) = <?= $num1+$num2 ?></p>
        <p>$num1(<?= $num1?>) * $num2(<?= $num2?>) = <?= $num1*$num2 ?></p>
        <p>$num1(<?= $num1?>) - $num2(<?= $num2?>) = <?= $num1-$num2 ?></p>
        <p>$num1(<?= $num1?>) / $num2(<?= $num2?>) = <?= $num1/$num2 ?></p>
    </div>
    <div>
        <p>$num1(<?php echo $num1?>) + $num2(<?php echo $num2?>) = <?php echo $num1+$num2 ?></p>
        <p>$num1(<?php echo $num1?>) * $num2(<?php echo $num2?>) = <?php echo $num1*$num2 ?></p>
        <p>$num1(<?php echo $num1?>) - $num2(<?php echo $num2?>) = <?php echo $num1-$num2 ?></p>
        <p>$num1(<?php echo $num1?>) / $num2(<?php echo $num2?>) = <?php echo $num1/$num2 ?></p>
    </div>
    <br>
    <a href="<?php echo $url; ?>">IPLeiria</a>
    <br>
    <a href="<?= $url; ?>">IPLeiria</a>
    -->

</body>
</html>
