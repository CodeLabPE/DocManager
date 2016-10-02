<?php include('top.php'); ?>

<main class="ls-main ">
      <div class="container-fluid">
        <h1 class="ls-title-intro ion-locked">Novo Detento</h1>

       <form action="config/addDetento.php" method="POST" enctype="multipart/form-data" class="ls-form ls-form-horizontal row ls-float-none">

<!-- VALIDAÇÃO DO PRONTUARIO 
<script type="text/javascript">
function checkNumber(valor) {
  var regra = /^[0-9]+$/;
  if (valor.match(regra)) {
    /*alert("Numero: "+valor);*/
  }else{
    alert("Apenas numeros!");
  }
};    
</script>
<!-- FIM VALIDACAO -->

  <fieldset>

      <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">Prontuário</b>
      <input type="text" onblur="checkNumber(this.value);" name="pront" placeholder="Nome" autocomplete="off" class="ls-field" maxlength="20" required>
    </label>

    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Nome</b>
      <input type="text" name="nome" placeholder="Nome Completo" autocomplete="off" class="ls-field" required >
    </label>

    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Nome da Mãe</b>
      <input type="text" name="nome_mae" placeholder="Nome Completo" autocomplete="off" class="ls-field" required>
    </label>

    <label class="ls-label col-md-3 col-xs-12">
      <b class="ls-label-text">Regime</b>
      <div class="ls-custom-select ">
      <select name="regime" class="ls-select ">
      <option value="1">Selecione uma regime</option>    

          <option value="aberto">Aberto</option>
            <option value="s_aberto">Semi-aberto</option>
              <option value="fechado">Fechado</option>

        </select>
        </div>
    </label>

    <label class="ls-label col-md-3 col-xs-12">
      <b class="ls-label-text">Instituição</b>

      <?php 
require_once('config/conexao.php'); 
$query=mysql_query("SELECT * FROM instituicao WHERE tipo = 'Unidade Prisional' AND status = '1'")or die(mysql_error()); 
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
    <!-- Escolha do sexo -->
    <div class="ls-label col-md-12">
      <p>Selecione o sexo do novo detento(a):</p>
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

  
  <div class="">
  <input class="ls-btn" type="submit" name="enviar" value="Cadastrar">
   <!-- <a href="#" class="ls-btn-primary ls-ico-user">Criar usuário</a> -->
    <a href="detentos.php" class="ls-btn-primary ls-ico-shaft-left">Voltar</a>

  </div>
  </form>

      </div>

<!-- IMPORTANDO JAVASCRIP DO BOTAO DE ADD FOTO PERFIL -->
<script src="js/prefixfree.min.js"></script>
<script src="js/index.js"></script>

    </main>

<?php include('footer.php');?>