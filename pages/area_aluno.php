<div class="box container">

  <h3 class="welcome">Olá, <?= $_SESSION['nome_aluno']; ?></h3>

  <?php if(\models\homeModel::hasCursoById($_SESSION['id_aluno'])){ ?>

    <?php
      $modulos = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.modulos`");
      $modulos->execute();
      $modulos = $modulos->fetchAll();
      foreach($modulos as $key => $value){
    ?>

      <p class="nome-modulo"><i class="fa fa-eye"></i> <?= $value['nome'] ?></p>

    <?php
    $aulas = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.aulas` WHERE `modulo_id` = $value[id]");
    $aulas->execute();
    $aulas = $aulas->fetchAll();
    foreach($aulas as $key => $aula){
      echo '<p class="nome-aula"><a href="'.INCLUDE_PATH.'aula/'.$aula['id'].'"><i class="fa fa-play"></i>'.$aula['nome'].'</a></p>';
    }
    ?>
      
    <?php } ?>

  <?php }else{ ?>

    <h3>Conhaça o curso no video abaixo</h3>
    <div class="apresentacao">
      <iframe width="1349" height="488" src="https://www.youtube.com/embed/t6ALSUjx5uo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div><!--apresentacao-->

    <a href="<?= INCLUDE_PATH ?>?addCurso">Comprar o curso!</a>

  <?php } ?>

</div><!--box container-->