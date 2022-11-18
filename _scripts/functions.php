<?php
function totalCard($tipo){
    include "config.php";
    $sql = "SELECT * FROM $tipo";
    $query = $mysqli->query($sql);
    $total = $query->num_rows;

    return $total;
}
?>