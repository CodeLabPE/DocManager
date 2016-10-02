<?php include('top.php'); ?>

<main class="ls-main ">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-user">Novo Usuário</h1>

       <form action="config/addUsuario.php" method="POST" enctype="multipart/form-data" class="ls-form ls-form-horizontal row ls-float-none">

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

      <label class="ls-label col-md-3 col-xs-12">
      <b class="ls-label-text">Nome</b>
      <input type="text" name="nome" placeholder="Nome" autocomplete="off" class="ls-field" maxlength="20" required>
    </label>

    <label class="ls-label col-md-3 col-xs-12">
      <b class="ls-label-text">Sobrenome</b>
      <input type="text" name="sobrenome" placeholder="Sobrenome" autocomplete="off" class="ls-field" required >
    </label>

    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">E-mail</b>
      <input type="email" name="email" placeholder="exemplo@exemplo.com.br" autocomplete="off" class="ls-field" required>
    </label>

    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Instituição</b>

      <?php 
require_once('config/conexao.php'); 
$query=mysql_query("SELECT * FROM instituicao WHERE tipo = 'Centro de Monitoramento' AND status = '1'")or die(mysql_error()); 
?> 

      <div class="ls-custom-select ">
      <select name="instituicao" class="ls-select ">
      <option value="1">Selecione uma instituição</option>
      <!-- Contador -->
      <?php while($dados = mysql_fetch_array($query)) { ?>

          <option value="<?php echo $dados['id'] ?>"><?php echo $dados['tipo']." - ".$dados['nome'] ?></option>
    <?php } ?>
        </select>
        </div>
    </label>


      <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">CPF</b>
      <input type="text" name="cpf" placeholder="000.000.000-00" id="cpf" autocomplete="off" required>
    </label>
    
   <label class="ls-label col-md-3 col-xs-12">
      <b class="ls-label-text">Senha</b>
      <div class="ls-prefix-group">
        <input name="senha" placeholder="**********" type="password" maxlength="10" autocomplete="off" id="password_field" data-ls-module="charCounter" required>
      </div>
    </label>
    
  </fieldset>

  <hr>

  <fieldset>
    <!-- Escolha do sexo -->
    <div class="ls-label col-md-12">
      <p>Selecione o sexo do novo usuário(a):</p>
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
    <!-- Escolha do tipo de perfil -->
    <div class="ls-label col-md-12">
      <p>Selecione o perfil do usuário(a):</p>
      <label class="ls-label-text">
        <input type="radio" name="tp_perfil" value="adm" class="ls-field-radio">
        Adminstrador
      </label>
      <label class="ls-label-text">
        <input type="radio" name="tp_perfil" value="adm_instituicao" class="ls-field-radio" checked >
       Adm. da Instituição
      </label>
      
      <label class="ls-label-text">
        <input type="radio" name="tp_perfil" value="consulta" class="ls-field-radio">
        Consulta
      </label>
    </div>
  </fieldset> 

    <hr>

  <fieldset>

  </fieldset>

  <fieldset>
    <!-- Escolha do status -->
    <div class="ls-label col-md-12">
      <p>Selecione o status do novo usuário(a):</p>
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
<!-- FIM IMPORTANDO JAVASCRIP DO BOTAO DE ADD FOTO PERFIL -->

<script src='https://code.jquery.com/jquery-1.12.0.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js'></script>
<script>
jQuery(function($) {
  $("#cep").mask("00000-000");
  $("#cpf").mask("000.000.000-00");
});
</script>

    </main>

<?php include('footer.php');?>