<?php include('top.php');?>

<main class="ls-main "> 
<!-- Box container geral -->
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-users">Advogados</h1>

<!-- Botoes de acao -->
<fieldset >

<div class="ls-group-btn ls-float-right">

  <button onClick="location.href='novo_advogado.php'" type="button" class="ls-btn-primary ion-plus" style="background-color: green; border-color: green;"> Novo advogado</button>
</div>


</fieldset> <!-- Fim botoes acao -->

 <!-- Filtro de Busca -->
<fieldset>
  
<div class="ls-box-filter">
  <form action="" class="ls-form ls-form-inline ls-float-left">
    <label class="ls-label col-md-8 col-sm-8">
      <b class="ls-label-text">Status</b>
      <div class="ls-custom-select">
        <select name="" class="ls-select">
          <option>Todos</option>
          <option>Ativos</option>
          <option>Desativados</option>
        </select>
      </div>
    </label>
  </form>

  <form  action="" class="ls-form ls-form-inline ls-float-right">
    <label class="ls-label" role="search">
      <b class="ls-label-text ls-hidden-accessible">Nome do advogado</b>
      <input type="text" id="q" name="q" aria-label="Faça sua busca por cliente" placeholder="Nome do usuário" required="" class="ls-field">
    </label>
    <div class="ls-actions-btn">
      <input type="submit" value="Buscar" class="ls-btn" title="Buscar">
    </div>
  </form>
</div>

</fieldset> <!-- Fim Filtro de Busca -->


<!-- Tabela de dados -->
 <fieldset>
  
<table class="ls-table ls-table-striped ls-bg-header">
  <thead>
    <tr>
      <th class="hidden-xs">#</th>
      <th class="ls-data-ascending"><a href="#">OAB</a></th>
      <th class="hidden-xs">Nome</th>
      <th class="hidden-xs ls-data-descending"><a href="#">Email</a></th>
      <th class="hidden-xs">Status</th>
      <th class="hidden-xs">Data do Cadastro</th>
      <th>Ações</th>
      </tr>
  </thead> 


  <tbody>
    
   <?php

      require_once ('config/conexao.php');
   
      $query = "SELECT * FROM advogado ORDER BY nome";
      $resultado = mysql_query($query);
   
      while ($dados = mysql_fetch_array($resultado)) { ?>

    <tr>
     <td class="hidden-xs"> <input type="checkbox" name="selecao"></td>
     <td class="hidden-xs"><?php echo $dados['oab']; ?></td>
      <td><a href="" title=""><?php echo $dados['nome'].' '.$dados['sobrenome']; ?></a></td>
      <td class="hidden-xs"><?php echo $dados['email']; ?></td>
      <td class="hidden-xs" ><?php if($dados['status'] == '1') {echo "ATIVO";} else { echo "INATIVO"; }?> </td>
      <!--<td class="hidden-xs" >
        
 <div data-ls-module="switchButton" class="ls-switch-btn ls-float-right">
    <input type="checkbox" id="status">
    <label class="ls-switch-label" for="teste" name="label-teste" ls-switch-off="Desativado" ls-switch-on="Ativado"><span></span></label>
  </div>


      </td> -->
      <td class="hidden-xs"><?php echo $dados['dataCadastro']; ?></td>
      <td>

    <div class="row">
    <!-- BOTAO EDITAR USUARIO -->
     <a href="#" class="ls-tooltip-top ls-btn" aria-label="Editar" data-ls-module="modal" data-target="#editar_usuario_<?php echo $dados['id'];?>"><span class="ls-ico-pencil"></span></a>

     <a href="#" class="ls-tooltip-top ls-btn" aria-label="Excluir" data-ls-module="modal" data-target="#excluir_usuario"><span class="ls-ico-remove"></span></a>

     <a href="#" class="ls-tooltip-left ls-btn" aria-label="Trocar senha" data-ls-module="modal" data-target="#nova_senha"><span class="ls-ico-spinner"></span></a>
     </div>
      </td>
      
    </tr>


<!-- Modal edicao de usuario -->

<div class="ls-modal" id="editar_usuario_<?php echo $dados['id'];?>">
  <div class="ls-modal-box">
    <div class="ls-modal-header">
      <button data-dismiss="modal">&times;</button>
      <h4 class="ls-modal-title">Edição de Usuário</h4>
    </div>
    <div class="ls-modal-body">
      <!-- Conteudo do modal -->
<form>
<!-- o conteudo do modal esta em outro arquivo que esta sendo requisitado abaixo -->
<?php include('editar_usuario.php');?>
</form>
      <!-- Fim conteudo do modal -->
    </div>
    <div class="ls-modal-footer">
      <button class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</button>
      <button type="submit" class="ls-btn-primary">Salvar alterações</button>
    </div>
  </div>
</div>

<!-- Fim modal edicao de usuario -->

    

 


<!-- Aqui ficam as janelas modal chamadas pelos botoes de acao -->

   <!-- Modal Redefinicao de Senha -->
<div class="ls-modal" id="nova_senha">
  <div class="ls-modal-box">
    <div class="ls-modal-header">
      <button data-dismiss="modal">&times;</button>
      <h4 class="ls-modal-title">Redefinição de senha</h4>
    </div>
    <div class="ls-modal-body">
      <!-- Conteudo do modal -->

  <form action="" class="ls-form row">
  <fieldset>
    <label class="ls-label col-md-6 col-xs-12">
      <b class="ls-label-text">Nova Senha</b>
      <div class="ls-prefix-group">
        <input type="password" maxlength="10" id="password_field" name="password" value="" >
          <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#">
          </a>
      </div>
    </label>
  </fieldset>
</form>

<!-- Fim conteudo do modal -->
    </div>
    <div class="ls-modal-footer">
      <button class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</button>
      <button type="submit" class="ls-btn-primary ">Salvar</button>
    </div>
  </div>
</div> <!-- Fim modal Redefinicao de senha -->   



<!-- Modal excluir usuario -->

<div class="ls-modal" id="excluir_usuario">
  <div class="ls-modal-box">
    <div class="ls-modal-header">
      <button data-dismiss="modal">&times;</button>
      <h4 class="ls-modal-title">Excluir usuário</h4>
    </div>
    <div class="ls-modal-body">
      <!-- Conteudo do modal -->

<label class="ls-label">

<form action="config/excluirAdvogado.php" method="post">

 <p>Deseja realmente excluir o advogado?</p> 

 <h3><?php echo $dados['nome']." ".$dados['sobrenome'] ?></h3>

</label>

      <!-- Fim conteudo do modal -->
    </div>


    <div id="barra" class="ls-modal-footer">
    
      <button class="ls-btn ls-float-right" data-dismiss="modal"  value="Cancelar" formaction="advogados.php">Cancelar</button>
      <input type="hidden" name="foto" value="<?php echo $dados['arquivo']?>">
      <button type="submit" class="ls-btn-primary" name="var" value="<?php echo $dados['id']?>" formaction="config/excluirAdvogado.php">Excluir</button>
    
    </div>

</form>

  </div>
</div>

<!-- Fim modal excluir usuario -->

<?php } ?>


 </tbody>
</table>


 </fieldset>  <!-- Fim tabela dados -->
  </div> <!-- Fim box Container Fluid -->


<!-- script excluir advogados-->

<script type="text/javascript">
  
var form = document.querySelector('form');
var inputDiv = document.getElementById('barra');
var urls = {
    <?php echo $dados['id']?>: 'config/excluirAdvogado.php',
    Cancelar: 'advogados.php'
};
function verificarDestino(e){
    e.preventDefault();
    console.log(e.target);
    var tipo = e.target.value;
    var url = urls[tipo];
    form.action = url;
    alert(url);
    form.submit();
}
inputDiv.addEventListener('click', verificarDestino);

</script>

<!-- script excluir advogados-->

    </main>

<?php include('footer.php');?>