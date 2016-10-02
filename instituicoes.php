<?php include('top.php');?>

<main class="ls-main "> 
<!-- Box container geral -->
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-tree">Instituições</h1>

<!-- Botoes de acao -->
<fieldset >

<div class="ls-group-btn ls-float-right">

  <button onClick="location.href='nova_instituicao.php'" type="button" class="ls-btn-primary ion-plus" style="background-color: green; border-color: green;"> Nova Instituição</button>

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
      <b class="ls-label-text ls-hidden-accessible">Nome ou Sigla</b>
      <input type="text" id="q" name="q" aria-label="" placeholder="Nome ou Sigla" required="" class="ls-field">
    </label>
    <div class="ls-actions-btn">
      <input type="submit" value="Buscar" class="ls-btn" title="Buscar">
    </div>
  </form>
</div>

</fieldset> <!-- Fim Filtro de Busca -->


<!-- Tabela de dados -->
 <fieldset>
  
<table class="ls-table ls-table-striped ls-sm-space ls-bg-header">
  <thead>
    <tr>
      <th class="hidden-xs">#</th>
      <th>Nome</th>
      <th class="hidden-xs">Endereço</th>
      <th class="hidden-xs">Bairro</th>
      <th class="hidden-xs">Cidade</th>
      <th class="hidden-xs">UF</th>
      <th>Status</th>
      <th>Ações</th>
      </tr>
  </thead> 


  <tbody>
    
   <?php

      require_once ('config/conexao.php');
   
      $query = "SELECT * FROM instituicao ORDER BY tipo";
      $resultado = mysql_query($query);
   
      while ($dados = mysql_fetch_array($resultado)) { ?>

    <tr>
     <td class="hidden-xs"> <input type="checkbox" name="selecao"></td>
      <td><a class="ls-tooltip-top" aria-label="<?php echo $dados['tipo']; ?>"><?php echo $dados['nome']; ?></a></td>
      <td class="hidden-xs"><?php echo $dados['endereco']; ?></td>
      <td class="hidden-xs"><?php echo $dados['bairro']; ?></td>
      <td class="hidden-xs"><?php echo $dados['cidade'] ?> </td>
      <td class="hidden-xs"><?php echo $dados['uf']; ?></td>
      <td class="hidden-xs" ><?php if($dados['status'] == '1') {echo "ATIVA";} else { echo "INATIVA"; }?> </td>

    <td>
    <div class="row">
    <!-- BOTAO EDITAR INSTITUICAO -->
     <a href="#" class="ls-tooltip-top ls-btn" aria-label="Editar" data-ls-module="modal" data-target="#editar_instituicao_<?php echo $dados['id'];?>"><span class="ls-ico-pencil"></span></a>

     <a href="#" class="ls-tooltip-top ls-btn" aria-label="Excluir" data-ls-module="modal" data-target="#excluir_usuario"><span class="ls-ico-remove"></span></a>

     <a href="#" class="ls-tooltip-left ls-btn" aria-label="Trocar senha" data-ls-module="modal" data-target="#nova_senha"><span class="ls-ico-spinner"></span></a>
     </div>
      </td>
      
    </tr>


<!-- Modal edicao de instituicao -->

<div class="ls-modal" id="editar_instituicao_<?php echo $dados['id'];?>">
  <div class="ls-modal-box">
    <div class="ls-modal-header">
      <button data-dismiss="modal">&times;</button>
      <h4 class="ls-modal-title">Edição de Instituição</h4>
    </div>
    <div class="ls-modal-body">
      <!-- Conteudo do modal -->
<form>
<!-- o conteudo do modal esta em outro arquivo que esta sendo requisitado abaixo -->
<?php include('editar_instituicao.php');?>
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

    <?php } ?>

  </tbody>
</table>


 </fieldset>  <!-- Fim tabela dados -->

 </div> <!-- Fim box Container Fluid -->


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
 <p>Deseja realmente excluir o usuário?</p> 

 <h3>Willyan Marques</h3>

</label>

      <!-- Fim conteudo do modal -->
    </div>
    <div class="ls-modal-footer">
      <button class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</button>
      <button type="submit" class="ls-btn-primary">Excluir</button>
    </div>
  </div>
</div>

<!-- Fim modal excluir usuario -->

    </main>

<?php include('footer.php');?>