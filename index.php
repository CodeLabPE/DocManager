<?php include('top.php');?>


    <main class="ls-main ">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-dashboard">Dashborad</h1>



        <div class="ls-box ls-board-box">
  <header class="ls-info-header">
    <h2 class="ls-title-3">Informações complementares</h2>
    <a href="" class="ls-btn">Mais Informações</a>
  </header>
  <div id="sending-stats" class="row">
    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">Quantidade de Detentos</h6>
        </div>
        <div class="ls-box-body">

        <?php require_once ('config/conexao.php');
   
     // $query = "SELECT * FROM usuario ORDER BY nome";
      $query = "SELECT COUNT(nome) FROM detento;";
      $qtd = mysql_query($query); ?>
          <strong><?php echo mysql_result($qtd, 0); ?></strong>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">Quantidade de Usuários</h6>
        </div>
        <div class="ls-box-body">

         <?php 
   
     // $query = "SELECT * FROM usuario ORDER BY nome";
      $query = "SELECT COUNT(nome) FROM usuario;";
      $qtd = mysql_query($query); ?>
          <strong><?php echo mysql_result($qtd, 0); ?></strong>
       </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">Outras Informações</h6>
        </div>
        <div class="ls-box-body">
          <strong>0</strong>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4 color-default">Outras Informações</h6>
        </div>
        <div class="ls-box-body">
          <strong>0</strong>
        </div>
      </div>
    </div>
  </div>
</div>

       
      </div>
    </main>

<?php include('footer.php');?>