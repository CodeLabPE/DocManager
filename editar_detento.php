 <fieldset> <!-- Fieldset geral -->

  <fieldset>

<!-- FORMULARIO DE EDICAO -->
<form action="config/editDetento.php" method="POST" class="ls-form ls-form-horizontal row ls-float-none">

<!-- ESSE INPUT CAPTURA O ID DO USUARIO -->
<input name='id' type='hidden' value="<?php echo $dados['id']; ?>" />

  <fieldset> <!-- Fieldset geral -->

  <fieldset>

      <label class="ls-label col-md-12 col-xs-12">
      <b class="ls-label-text">Prontuário</b>
      <input type="text" name="pront" value="<?php echo $dados['prontuario']?>" placeholder="Nome Completo" class="ls-field" required>
    </label>

    <label class="ls-label col-md-12 col-xs-12">
      <b class="ls-label-text">Nome</b>
      <input type="text" name="nome" value="<?php echo $dados['nome']?>" placeholder="Prontuário" class="ls-field" required >
    </label>

    <label class="ls-label col-md-12 col-xs-12">
      <b class="ls-label-text">Nome da Mãe</b>
      <input type="text" name="nome_mae" value="<?php echo $dados['nome_mae']?>" placeholder="Nome Completo" class="ls-field" required>
    </label>

<?php echo $dados['instituicao_id']; ?>

   <label class="ls-label col-md-12 col-xs-12">
      <b class="ls-label-text">Instituição</b>

  <?php  $query=mysql_query("SELECT * FROM instituicao WHERE tipo = 'Centro de Monitoramento' AND status = '1'")or die(mysql_error()); ?>

      <div class="ls-custom-select ">
      <select name="instituicao" class="ls-select ">
      <option value="">Selecione uma instituição</option>
      <!-- Contador -->
      <?php while($opc = mysql_fetch_array($query)) { ?>

<?php  if ($dados['instituicao_id'] == $opc['id']) {

        } ?>
                 <!-- COMPARAR O INSTUICAO_ID COM O OPC[ID] -->
          <option selectd value="<?php echo $opc['id'] ?>"><?php echo $opc['tipo']." - ".$opc['nome'] ?></option>

    <?php } ?>

        </select>
        </div>
    </label>
   
  </fieldset>

  <hr>
<?php echo $dados['instituicao_id']; ?>
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