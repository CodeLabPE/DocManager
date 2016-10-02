<form action="" class="ls-form ls-form-horizontal row ls-float-none">

  <fieldset>

  <fieldset>

<label class="ls-label col-md-3 col-xs-12">
      <b class="ls-label-text">Prontuário</b>
      <input type="text" name="razao" placeholder="Prontuário" class="ls-field" required >
    </label>

    <label class="ls-label col-md-7 col-xs-12">
      <b class="ls-label-text">Nome do detento</b>
      <input type="text" name="razao" placeholder="Nome completo" class="ls-field" required >
    </label>


  <label class="ls-label col-md-2 col-xs-12">
    <b class="ls-label-text">Data</b>
    <input type="text" name="dataDoc" class="datepicker"  placeholder="dd/mm/aaaa">
  </label>

  <!--<label class="ls-label col-md-3 col-xs-12">
      <b class="ls-label-text">Origem</b>
      <input type="text" name="origem" placeholder="Unidade de origem" class="ls-field" required >
    </label> -->

    <label class="ls-label col-md-3 col-xs-12">
      <b class="ls-label-text">Origem</b>

      <?php 
require_once('config/conexao.php'); 
$query=mysql_query("SELECT * FROM instituicao WHERE tipo = 'Unidade Prisional' AND status = '1'")or die(mysql_error()); 
?> 

      <div class="ls-custom-select ">
      <select name="instituicao" class="ls-select ">
      <option value="">Selecione uma instituição</option>
      <!-- Contador -->
      <?php while($dados = mysql_fetch_array($query)) { ?>

          <option value="<?php echo $dados['id'] ?>"><?php echo $dados['tipo']." - ".$dados['nome'] ?></option>
    <?php } ?>
        </select>
        </div>
    </label>


    <label class="ls-label col-md-3 col-xs-12">
      <b class="ls-label-text">Tipo do documento</b>

      <?php 
//require_once('config/conexao.php'); 
$query=mysql_query("SELECT * FROM tipo_documento ORDER BY descricao")or die(mysql_error()); 
?> 

      <div class="ls-custom-select ">
      <select name="instituicao" class="ls-select ">
      <option value="">Selecione uma instituição</option>
      <!-- Contador -->
      <?php while($dados = mysql_fetch_array($query)) { ?>

          <option value="<?php echo $dados['id'] ?>"><?php echo $dados['descricao']; ?></option>
    <?php } ?>
        </select>
        </div>
    </label>

    <label class="ls-label col-md-3 col-xs-12">
      <b class="ls-label-text">Destinatário</b>
      <input type="text" name="destino" placeholder="Unidade de destino" class="ls-field" required >
    </label>

  <label class="ls-label col-md-3 col-xs-12">
      <b class="ls-label-text">Assunto</b>
      <input type="text" name="assunto" placeholder="Assunto do documento" class="ls-field" required >
    </label>


<label class="ls-label col-md-12 col-xs-12">
    <b class="ls-label-text ls-textarea-autoresize">Observações</b>
    <textarea data-ls-module="charCounter" maxlength="200" rows="10" class="ls-textarea-horizontal ls-textarea-autoresize"></textarea>
  </label>

  </fieldset>

  <fieldset>
    <!-- Status da filial -->
    <div class="ls-label col-md-12">
      <p>Selecione o documento: (JPG, PNG, PDF)</p>
      <label class="ls-label-text">
        <input type="file" name="arquivo" class="">
        </label>
         </div>
  </fieldset>

   <div class="">
  <input class="ls-btn" type="submit" name="enviar" value="Cadastrar documento">
   <!-- <a href="#" class="ls-btn-primary ls-ico-user">Criar usuário</a> -->
    <a href="novo_documento.php" class="ls-btn-primary ls-ico-shaft-left">Voltar</a>

  </div>


  </fieldset>

  </form>