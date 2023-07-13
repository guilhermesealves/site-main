<?php

$id = $_POST["id"];
$nome = $_POST['nome'];
$foto = $_POST["foto"];
$descricao = $_POST["descricao"];

include "conexao.php";

$sql_editar_pet = "uptade pet set Nome = '$nome', Foto = '$foto', Descricao = '$descricao' where ID = '$id'";

$um_pet =  mysqli_query($conexao, $sql_editar_pet);

mysqli_close($conexao);

header("location:ver-pet.php?msg=sucesso"); 





?>