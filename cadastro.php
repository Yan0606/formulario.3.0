<?php
include("conexao.php");

$nome=$_POST['nome'];
$email=$_POST['email'];
$data=$_POST['data'];
$senha=md5($_POST['senha']);
$c_senha=md5($_POST['c_senha']);

$sql="INSERT INTO usuarios(nome, e-mail, data, senha, c_senha) VALUES ('$nome', '$email', $data, $senha, $c_senha)";

if(mysqli_query($conexao, $sql)){
    echo"Usuário Cadastrado com sucesso";
}
else {
    echo "Erro!".mysqli_connect_error($conexao);
}

mysqli_close($conexao);

?>
