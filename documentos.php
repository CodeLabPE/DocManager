<?php include('top.php');?>

<main class="ls-main ">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-docs">Novo Documento</h1>

       <!-- <h5 class="ls-title-4">Selecione de acordo com o perfil do documento.</h5><br> -->

       <div class="ls-group-btn ls-float-right">

  <div class="container-fluid" style="margin-right:-15px;"> <button type="button" data-ls-module="modal" data-target="#form_tipoDocumento" class="ls-btn-primary ion-plus" style="background-color: green; border-color: green;"> Tipo de documento</button> </div>

   <!-- Modal edicao de usuario -->

<div class="ls-modal" id="form_tipoDocumento">
  <div class="ls-modal-box">
    <div class="ls-modal-header">
      <button data-dismiss="modal">&times;</button>
      <h4 class="ls-modal-title">Novo Tipo de Documento</h4>
    </div>
    <div class="ls-modal-body">
      <!-- Conteudo do modal -->
<form>
<!-- o conteudo do modal esta em outro arquivo que esta sendo requisitado abaixo -->
<?php include('form_tipoDocumento.php');?>
</form>
      <!-- Fim conteudo do modal -->
    </div>
  </div>
</div>

<!-- Fim modal edicao de usuario -->

  </div>

     <ul class="ls-tabs-nav">
  <li class="ls-active"><a data-ls-module="tabs" href="#track">Detendo</a></li>
  <li><a data-ls-module="tabs" href="#laps">Instituição</a></li>
</ul>
<!-- DOCUMENTO DO DETENTO -->
<div class="ls-tabs-container">
  <div id="track" class="ls-tab-content ls-active">
    
<?php include("form_detento.php"); ?>

  </div>

<!-- DOCUMENTO DA UNIDADE -->
  <div id="laps" class="ls-tab-content">
    

<?php include("form_instituicao.php"); ?>

  </div>
</div>

      </div> <!-- Fim Container fluid -->

    </main>



<?php include('footer.php');?>