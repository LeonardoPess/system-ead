<?php

  namespace models;

  use MySql;

class homeModel{

  public static function hasCursoById($idAluno){
    $sql = Mysql::conectar()->prepare("SELECT * FROM `tb_admin.curso_controle` WHERE `aluno_id` = $idAluno");
    $sql->execute();

    if($sql->rowCount() == 1){
      return true;
    }else{
      return false;
    }

  }

}