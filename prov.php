<?php
$num1 =$_POST["num1"];
$operacao = $_POST["operacao"];

switch($operacao){
    case "0":
        echo "Não forma equipe!";
        break;
    case "1":
        echo "Não forma equipe!";
        break;
    case "2":
    case "3":
    case "4":
        echo "Equipe formada com sucesso, seu líder é $num1 !";
        break;
    default:
        echo "Operação inválida!";
        break;

}
?>