<?php
function totalCard($tipo){
    include "config.php";
    $sql = "SELECT * FROM $tipo";
    $query = $mysqli->query($sql);
    $total = $query->num_rows;

    return $total;
}

function validarUsuario($cpf,$tabela){
    include "config.php";
    $sql = "SELECT id FROM $tabela WHERE cpf = '$cpf'";
    $query = $mysqli->query($sql);
    $total = $query->num_rows;

    return $total;

}

function cadDisciplina($nome){
    include "config.php";
    $sql = "SELECT id FROM caddisciplina WHERE nome_disciplina = '$nome'";
    $query = $mysqli->query($sql);
    $total = $query->num_rows;

    return $total;

}
?>