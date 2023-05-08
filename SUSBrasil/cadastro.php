<?php
include_once "conexao.php";

try {
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $nsus = $_POST['nsus'];
    $email = $_POST['email'];
    $ncelular = $_POST['ncelular'];
    $datanasc = $_POST['datanasc'];
    $senha = $_POST['senha'];

    $insert = $conectar->prepare('insert into cadastro (cpf,nome,nsus,email,ncelular,datanasc,senha)
    values (:cpf,:nome,:nsus,:email,:ncelular,:datanasc,:senha)');
    $insert->bindParam(':cpf',$cpf);
    $insert->bindParam(':nome',$nome);
    $insert->bindParam(':nsus',$nsus);
    $insert->bindParam(':email',$email);
    $insert->bindParam(':ncelular',$ncelular);
    $insert->bindParam(':datanasc',$datanasc);
    $insert->bindParam(':senha',$senha);
    $insert->execute();
    header('location:index.php');

} catch (\Throwable $th) {
    //throw $th;
}

?>