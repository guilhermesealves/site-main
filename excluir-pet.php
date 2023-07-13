<?php

$id = $_GET["id"];

include "conexao.php";

$sql_excluir_pet = "delete from pet where id = $id";

$pet_excluido = mysqli_query($conexao, $sql_excluir_pet);

mysqli_close($conexao);

header("location:ver-pet.php?msg=excluido")



?>