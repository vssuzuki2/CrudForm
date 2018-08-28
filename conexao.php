<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if($_POST["acao"]=="inserir"){
 inserirPessoa();
}
 function inserirPessoa(){
 $banco = new msqli("localhost", "root", "", "agenda");
 $sql = "INSERT INTO pessoa (nome, nascimento, endereco, telefone)"
         ." VALUES ('{$_POST["nome"]}','{$_POST["nascimento"]}','{$_POST["endereco"]}',' {$_POST["telefone"]}')";

  $banco->query($sql);
  $banco->close();
}
header("Location:index.php");
