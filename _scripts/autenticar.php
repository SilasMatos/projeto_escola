<?php
include "config.php";
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = "SELECT id FROM login WHERE email = '$email'";
$query = $mysqli->query($sql);
$total = $query->num_rows;

if($total==0){
    echo "<script>alert('Usuário não cadastrado')</script>";
}else{
    $sql = "SELECT id FROM login WHERE email = '$email' and senha = '$senha'";
    $query = $mysqli->query($sql);
    $total = $query->num_rows;

    if($total==0){
        echo "<script>alert('Senha incorreta')</script>";
    }else{
        echo "<script>alert('efetuar login')</script>";

    }

}






?>