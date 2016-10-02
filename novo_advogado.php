<?php include('top.php'); ?>

<main class="ls-main ">
      <div class="container-fluid">
        <h1 class="ls-title-intro ion-briefcase">Novo Advogado</h1>

       <form action="config/addAdvogado.php" method="POST" enctype="multipart/form-data" class="ls-form ls-form-horizontal row ls-float-none">

  <fieldset>

  <!-- ADICIONAR FOTO DO PERFIL -->
   
<div class="ls-label col-md-1" style="margin-right: 7%;">
  
<i class="file-image">
  <input  id="_"  type="file" name="arquivo" onchange="readImage(this)" title="" />
  <i class="reset" onclick="resetImage(this.previousElementSibling)"></i>
  <label for="_" class="image"></label>
</i>

</div>
<!-- FIM ADD FOTO PERTIL -->

<label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">OAB</b>
      <input type="text" name="oab" placeholder="OAB" class="ls-field" maxlength="10"  required>
    </label>

      <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Nome</b>
      <input type="text" name="nome" placeholder="Nome" class="ls-field" maxlength="20" required="">
    </label>

    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Sobrenome</b>
      <input type="text" name="sobrenome" placeholder="Sobrenome" class="ls-field" required >
    </label>

    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">E-mail</b>
      <input type="email" name="email" placeholder="exemplo@exemplo.com.br" class="ls-field" required>
    </label>

    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">CPF</b>
      <input type="text" name="cpf" placeholder="000.000.000-00" class="ls-mask-cpf" autocomplete="off" maxlength="14" required>
    </label>
   
   <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">Senha</b>
      <div class="ls-prefix-group">
        <input name="senha" placeholder="**********" type="password" maxlength="10" id="password_field" data-ls-module="charCounter" required>
      </div>
    </label>
    
  </fieldset>

  <hr>

  <fieldset>
    <!-- Escolha do sexo -->
    <div class="ls-label col-md-12">
      <p>Selecione o sexo do novo advogado(a):</p>
      <label class="ls-label-text">
        <input type="radio" name="sexo" value="1" class="ls-field-radio" checked>
        Masculino
      </label>
      <label class="ls-label-text">
        <input type="radio" name="sexo" value="2" class="ls-field-radio">
        Feminino
      </label>
    </div>
  </fieldset>

    <hr>

  <fieldset>
    <!-- Escolha do status -->
    <div class="ls-label col-md-12">
      <p>Selecione o status do novo advogado(a):</p>
      <label class="ls-label-text">
        <input type="radio" name="status" value="1" class="ls-field-radio" checked>
        Ativo
      </label>
      <label class="ls-label-text">
        <input type="radio" name="status" value="0" class="ls-field-radio">
        Inativo
      </label>
    </div>
  </fieldset>

  <div class="ls-actions-btn">
  <input class="ls-btn" type="submit" name="enviar" value="Cadastrar">
   <!-- <a href="#" class="ls-btn-primary ls-ico-user">Criar usuário</a> -->
    <a href="usuarios.php" class="ls-btn-primary ls-ico-shaft-left">Voltar</a>

  </div>
  </form>

      </div>

<!-- IMPORTANDO JAVASCRIP DO BOTAO DE ADD FOTO PERFIL -->
<script src="js/prefixfree.min.js"></script>
<script src="js/index.js"></script>

    </main>

<?php include('footer.php');?>