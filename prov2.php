<?php
$num1 = $_POST ['num1'];
$operacao = $_POST ['operacao'];

if ($operacao == 'Reais'){
    $calc = $num1 / 4.90;
    echo "A quantidade de moedas foi $num1 e a conversão é $calc !";
}
else{
    $calc = $num1 * 4.90;
    echo "A quantidade de moedas foi $num1 e a conversão é $calc !";
}
?>