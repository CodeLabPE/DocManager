 <fieldset> <!-- Fieldset geral -->

  <fieldset>

<!-- FORMULARIO DE EDICAO -->

<form action="actions/addUsuario.php" method="POST" enctype="multipart/form-data" class="ls-form ls-form-horizontal row ls-float-none">

<!-- ESSE INPUT CAPTURA O ID DO USUARIO -->
<input name='id' type='hidden' value="<?php echo $dados['id']; ?>" />

<!-- INPUT PARA DEFINIR O TAMANHO MAXIMO DE UPLOAD -->
 <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>

  <fieldset> <!-- Fieldset geral -->

  <fieldset>

  <!-- ADICIONAR FOTO DO PERFIL -->
   
<div class="ls-label col-md-1" style="margin-right: 7%;">
  
<i class="file-image">
  <input  id="_"  type="file" name="arquivo" onchange="readImage(this)" title="" />
  <i class="reset" onclick="resetImage(this.previousElementSibling)"></i>
  <label for="_" class="image"></label>
</i>

</div> 

 <div class="ls-label col-md-12">

<!-- EXIBIR IMAGEM ALTIGA DO PERFIL AQUI -->


</div>
<!-- FIM ADD FOTO PERTIL -->

      <label class="ls-label col-md-12 col-xs-12">
      <b class="ls-label-text">Nome</b>
      <input type="text" name="nome" value="<?php echo $dados['nome']?>" placeholder="Nome" class="ls-field" maxlength="20" required>
    </label>

    <label class="ls-label col-md-12 col-xs-12">
      <b class="ls-label-text">Sobrenome</b>
      <input type="text" name="sobrenome" value="<?php echo $dados['sobrenome']?>" placeholder="Sobrenome" class="ls-field" required >
    </label>

    <label class="ls-label col-md-12 col-xs-12">
      <b class="ls-label-text">E-mail</b>
      <input type="text" name="email" value="<?php echo $dados['email']?>" placeholder="exemplo@exemplo.com.br" class="ls-field" required>
    </label>

   <label class="ls-label col-md-12 col-xs-12">
      <b class="ls-label-text">Instituição</b>

  <?php  $query=mysql_query("SELECT * FROM instituicao WHERE tipo = 'Centro de Monitoramento' AND status = '1'")or die(mysql_error()); 
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
   
  </fieldset>

  <hr>

  <fieldset>

    <!-- Escolha do tipo de perfil -->
    <div class="ls-label col-md-12">
      <p>Selecione o perfil do usuário:</p>
      <label class="ls-label-text">
        <input type="radio" name="tp_perfil" value="adm" class="ls-field-radio" <?php ?>>
        Administrador
      </label>
      <label class="ls-label-text">
        <input type="radio" name="tp_perfil" value="adm_instituicao" class="ls-field-radio" <?php ?>>
       Adm. da Instituição
      </label>
      
      <label class="ls-label-text">
        <input type="radio" name="tp_perfil" value="consulta" class="ls-field-radio" <?php ?>>
        Consulta
      </label>
    </div>
  </fieldset> 

    <hr>

  <fieldset>

 <?php $consulta = "SELECT * FROM usuario";

        $result = mysql_query($consulta);
        $status = mysql_fetch_array($result);

      $ativo = $status['status'] == "1";  
      $inativo = $status['status'] == "0";

      if ($status['status'] == "1") {

          $ativo = "1";

        } if ($status['status'] == "0") {
          
          $inativo = "0";

        }

    /*  while($perfil = mysql_fetch_array($result)) {

        if ($perfil['status'] == "1") {

          $checked_on = "checked";
          echo $checked_on;

        } elseif ($perfil['status'] == "0") {

           $checked_off = "checked";
          echo $checked_off;

        } 

      }*/
      ?>

    <!-- Escolha do status -->
    <div class="ls-label col-md-12">
      <p>Selecione o status:</p>
      <label class="ls-label-text">

      <?php if($ativo == "1") { echo '<input type="radio" name="status" value="1" class="ls-field-radio" checked>'; } else { echo '<input type="radio" name="status" value="1" class="ls-field-radio">'; } ?>
        <!--<input type="radio" name="status" value="1" class="ls-field-radio"> -->
        Ativo
      </label>
      <label class="ls-label-text">

       <?php if($inativo == "0") { echo '<input type="radio" name="status" value="0" class="ls-field-radio" checked>'; } else { echo '<input type="radio" name="status" value="0" class="ls-field-radio">'; } ?>
        <!-- <input type="radio" name="status" value="0" class="ls-field-radio"> -->
        Inativo
      </label>
    </div>
  </fieldset>

  </fieldset> <!-- Fieldset geral-->

  </form>

<!-- FIM FORMULARIO DE EDICAO -->
   
   
  </fieldset>

  </fieldset> <!-- Fieldset geral-->