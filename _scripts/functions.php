<?php
function totalCard($tipo){
    include "config.php";
    $sql = "SELECT * FROM $tipo";
    $query = $mysqli->query($sql);
    $total = $query->num_rows;

    return $total;
}

function validarAluno($cpf){
    include "config.php";
    $sql = "SELECT id FROM cadAluno WHERE cpf = '$cpf'";
    $query = $mysqli->query($sql);
    $total = $query->num_rows;
    
    return $total

}
?>