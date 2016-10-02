 <fieldset> <!-- Fieldset geral -->

  <fieldset>

<!-- FORMULARIO DE EDICAO -->

<form action="config/editUsuario.php" method="POST" enctype="multipart/form-data" class="ls-form ls-form-horizontal row ls-float-none">

<!-- ESSE INPUT CAPTURA O ID DO USUARIO -->
<input name='id' type='hidden' value="<?php echo $dados['id']; ?>" />

<!-- INPUT PARA DEFINIR O TAMANHO MAXIMO DE UPLOAD -->
 <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>

  <fieldset> <!-- Fieldset geral -->
<fieldset>

<fieldset"> <!-- FILDSET DAS IMAGENS DO PERFIL -->

<!-- FOTO ANTIGA PERFIL -->
 <div class="row ls-label ls-float-left col-md-6">

<label class="col-md-12"> 

<img src="upload/imagem_perfil/<?php echo $dados['arquivo'];?>" width="190" class="ls-box"/>

<input type="file" name="arquivo">
<br>

</label>

</div>
<!-- FIM FOTO ANTIGA PERFIL -->

  <!-- ADICIONAR FOTO DO PERFIL -->
   
<div class="row ls-float-right ls-label col-md-6">


  
<!-- <i class="file-image">
  <input  id="_"  type="file" name="arquivo" onchange="readImage(this)" title="" />
  <i class="reset" onclick="resetImage(this.previousElementSibling)"></i>
  <label for="_" class="image"></label>
</i> -->

</div> 
<!-- FIM ADD FOTO PERTIL -->

</fieldset>

      <label class="ls-label col-md-12 col-xs-12">
      <b class="ls-label-text">Nome</b>
      <input type="text" name="nome" value="<?php echo $dados['nomeUsuario']?>" placeholder="Nome" class="ls-field" maxlength="20" required>
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

  <?php  
  $query=mysql_query("SELECT * FROM instituicao WHERE tipo = 'Centro de Monitoramento' AND status = '1' ORDER BY nome")or die(mysql_error()); ?>

      <div class="ls-custom-select ">
      <select name="instituicao" class="ls-select ">
      <option style="font-weight: bold;" value="<?php echo $dados['instituicao_id']?>"><?php echo $dados['tipo']." - ".$dados['nome']; ?></option>
      <!-- Contador -->
     <?php while($opc = mysql_fetch_array($query)) { ?>

          <option value="<?php echo $opc['id'] ?>"><?php echo $opc['tipo']." - ".$opc['nome'] ?></option>

    <?php } ?>

        </select>
        </div>
    </label>
   
  </fieldset>
  <hr>

  <fieldset>

   <?php 

        $adm = "";
        $adm_inst = "";
        $consulta = "";

      if ($dados['perfil'] == "adm") {

          $adm = "checked";

        } if ($dados['perfil'] == "adm_instituicao") {
          
          $adm_inst = "checked";

        } if ($dados['perfil'] == "consulta") {
          
          $consulta = "checked";

        }

      ?>

    <!-- Escolha do tipo de perfil -->
    <div class="ls-label col-md-12">
      <p>Selecione o perfil do usuário(a):</p>
      <label class="ls-label-text">
        <input type="radio" name="tp_perfil" value="adm" class="ls-field-radio" <?php echo $adm; ?>>
        Administrador
      </label>
      <label class="ls-label-text">
        <input type="radio" name="tp_perfil" value="adm_instituicao" class="ls-field-radio" <?php echo $adm_inst ?>>
       Adm. da Instituição
      </label>
      
      <label class="ls-label-text">
        <input type="radio" name="tp_perfil" value="consulta" class="ls-field-radio" <?php echo $consulta ?>>
        Consulta
      </label>
    </div>
  </fieldset> 

    <hr>

  <fieldset>

 <?php 

        $ativo = "";
        $inativo = "";

      if ($dados['status'] == "1") {

          $ativo = "checked";

        } if ($dados['status'] == "0") {
          
          $inativo = "checked";

        }

      ?>

    <!-- Escolha do status -->
    <div class="ls-label col-md-12">
      <p>Selecione o status:</p>
      <label class="ls-label-text">
      
        <input type="radio" name="status" value="1" class="ls-field-radio" <?php echo $ativo; ?>>
        Ativo
      </label>
      <label class="ls-label-text">
     
        <input type="radio" name="status" value="0" class="ls-field-radio" <?php echo $inativo; ?>>
        Inativo
      </label>
    </div>
  </fieldset>

  </fieldset> <!-- Fieldset geral-->

  </form>

<!-- FIM FORMULARIO DE EDICAO -->
   
   
  </fieldset>

  </fieldset> <!-- Fieldset geral-->