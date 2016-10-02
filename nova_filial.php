<?php include('top.php');?>

<main class="ls-main ">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-tree">Nova Filial</h1>

       <form action="" class="ls-form ls-form-horizontal row ls-float-none">

  <fieldset>

  <fieldset>

    <label class="ls-label col-md-3">
    <b class="ls-label-text">CNPJ</b>
    <input type="text" id="cnpj" name="cnpj" class="ls-mask-cnpj" placeholder="00.000.000/0000-00" >
  </label>

    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Razão Social</b>
      <input type="text" name="razao" placeholder="Razão Social" class="ls-field" required >
    </label>

    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Nome Fantasia</b>
      <input type="text" name="fantasia" placeholder="Nome Fantasia" class="ls-field" required>
    </label>

  </fieldset>

  <hr>

   <fieldset>
    <!-- Dados do Responsavel -->
   <div class="ls-label col-md-12">
    <p>Dados do responsável:</p>
    </div>
   <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Nome do Responsável</b>
      <input type="text" name="resp" placeholder="Nome completo" class="ls-field" required>
    </label>

    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">E-mail do Reponsável</b>
      <input type="text" name="email_resp" placeholder="E-mail Corporativo" class="ls-field" required>
    </label>

    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">Ramal</b>
      <input type="text" name="ramal" placeholder="Ramal" class="ls-field" required maxlength="3">
    </label>

    
  </fieldset>

    <hr>

  <fieldset>
    <!-- Status da filial -->
    <div class="ls-label col-md-12">
      <p>Selecione o status desta filial:</p>
      <label class="ls-label-text">
        <input type="radio" name="ativo" class="ls-field-radio">
        Ativa
      </label>
      <label class="ls-label-text">
        <input type="radio" name="inativo" class="ls-field-radio">
        Inativa
      </label>
    </div>
  </fieldset>

  <div class="ls-actions-btn">
    <a href="#" class="ls-btn-primary ls-ico-tree">Criar filial</a>
    <button class="ls-btn-danger">Cancelar</button>
  </div>


  </fieldset>

  </form>

      </div> <!-- Fim Container fluid -->

    </main>



<?php include('footer.php');?>