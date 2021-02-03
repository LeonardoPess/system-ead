<?php

  namespace controllers;

use MySql;
use Painel;
use \views\mainView;

  class aulaController
  {
    public function index($arg){
      //validation
      if(isset($_SESSION['login_aluno']) == false){
        Painel::redirect(INCLUDE_PATH);
        die('Não está logado!');
      }else if(\models\homeModel::hasCursoById($_SESSION['id_aluno']) == false){
        Painel::redirect(INCLUDE_PATH);
        die('Não tem o curso!');
      }
      $idAula = $arg[2];
      $aula = MySql::conectar()->prepare("SELECT * FROM `tb_admin.aulas` WHERE ID = ?");
      $aula->execute([$idAula]);
      if($aula->rowCount() == 0){
        \Painel::alertJS("A aula não existe!");
        \Painel::redirect(INCLUDE_PATH);
      }
        $aula = $aula->fetch();
        mainView::render('aula_single.php',$aula);
    }
  }