<?php include('top.php');?>


    <main class="ls-main ">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-tree">Nova Instituição</h1>

<!-- <p class="ls-label-info">Os campos marcados com o "*" são de preenchimento obrigatório.</p> -->
<!-- <div class="ls-alert-info"><strong>Atenção:</strong> Os campos marcados com o <strong>*</strong> são de preenchimento obrigatório.</div> -->
       
       <form action="config/addInstituicao.php" method="POST" class="ls-form ls-form-horizontal row ls-float-none">


  <fieldset>

  <label class="ls-label col-md-3 col-xs-12">
      <b class="ls-label-text">Tipo de Instituição</b>
      <div class="ls-custom-select " required>
      <select name="tipo" class="ls-select ">
          <option >Escolha o Tipo</option>
          <option value="Centro de Monitoramento">Centro de Monitoramento</option>
          <option value="Fórum">Fórum</option>
          <option value="Unidade Prisional">Unidade Prisional</option>
        </select>
        </div>
    </label>


    <label class="ls-label col-md-3 col-xs-12">
      <b class="ls-label-text">Nome da Instituição</b> <!-- <p class="ls-label-info">*</p> -->
        <input type="text" name="nome" placeholder="Nome completo" class="ls-field" maxlength="30" required>
            </label>

    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">Sigla</b> 
      <input type="text" name="sigla" placeholder="Sigla da Instituição" class="ls-field" maxlength="5" data-ls-module="charCounter" required>
    </label>

     <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">E-mail</b>
      <input type="email" name="email" placeholder="exemplo@exemplo.com.br" class="ls-field" required>
    </label>
</fieldset>

<fieldset>
    <label class="ls-label col-md-2">
    <b class="ls-label-text">CEP</b>
    <input type="text" name="cep" class="ls-mask-cep" maxlength="8" placeholder="00000-000" data-ls-module="charCounter">
  </label>

  <label class="ls-label col-md-3 col-xs-12">
      <b class="ls-label-text">Endereço</b> 
      <input type="text" name="endereco" placeholder="Endereço da Instituição" class="ls-field" maxlength="45" required>
    </label>

     <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">Bairro</b> 
      <input type="text" name="bairro" placeholder="Bairro da Instituição " class="ls-field" maxlength="20" require>
      </label>

    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">Cidade</b> 
      <input type="text" name="cidade" placeholder="Cidade" class="ls-field" maxlength="20" require>
</label>

      <label class="ls-label col-md-3 col-xs-12">
      <b class="ls-label-text">UF</b>
      <div class="ls-custom-select " required>
      <select name="uf" class="ls-select ">
          <option>Escolha o Estado</option>
  <option value="AC">Acre</option>
  <option value="AL">Alagoas</option>
  <option value="AP">Amapá</option>
  <option value="AM">Amazonas</option>
  <option value="BA">Bahia</option>
  <option value="CE">Ceará</option>
  <option value="DF">Distrito Federal</option>
  <option value="ES">Espirito Santo</option>
  <option value="GO">Goiás</option>
  <option value="MA">Maranhão</option>
  <option value="MT">Mato Grosso</option>
  <option value="MS">Mato Grosso do Sul</option>
  <option value="MG">Minas Gerais</option>
  <option value="PA">Pará</option>
  <option value="PB">Paraiba</option>
  <option value="PR">Paraná</option>
  <option value="PE">Pernambuco</option>
  <option value="PI">Piauí</option>
  <option value="RJ">Rio de Janeiro</option>
  <option value="RN">Rio Grande do Norte</option>
  <option value="RS">Rio Grande do Sul</option>
  <option value="RO">Rondônia</option>
  <option value="RR">Roraima</option>
  <option value="SC">Santa Catarina</option>
  <option value="SP">São Paulo</option>
  <option value="SE">Sergipe</option>
  <option value="TO">Tocantis</option>
        </select>
        </div>
    </label>

    <label class="ls-label col-md-12 col-xs-12">
    <b class="ls-label-text ls-textarea-autoresize">Observações</b>
    <textarea data-ls-module="charCounter" name="obs" maxlength="200" rows="10" class="ls-textarea-horizontal ls-textarea-autoresize"></textarea>
  </label>

<fieldset>
    <!-- Escolha do status -->
    <div class="ls-label col-md-12">
      <p>Selecione o status da nova instituição:</p>
      <label class="ls-label-text">
        <input type="radio" name="status" value="1" class="ls-field-radio" checked>
        Ativa
      </label>
      <label class="ls-label-text">
        <input type="radio" name="status" value="0" class="ls-field-radio">
        Inativa
      </label>
    </div>
  </fieldset>

  </fieldset>

  <fieldset>
    
    <div class="ls-actions-btn">
  <input class="ls-btn" type="submit" name="enviar" value="Cadastrar">
   <!-- <a href="#" class="ls-btn-primary ls-ico-user">Criar usuário</a> -->
    <a href="instituicoes.php" class="ls-btn-primary ls-ico-shaft-left">Voltar</a>

  </div>
  </fieldset>

  </form>

      </div> <!-- DIV Container -->
<!-- <script type="text/javascript"> 

$(document).ready(function(){
  $('.date').mask('00/00/0000');
  $('.time').mask('00:00:00');
  $('.date_time').mask('00/00/0000 00:00:00');
  $('.cep').mask('00000-000');
  $('.phone').mask('0000-0000');
  $('.phone_with_ddd').mask('(00) 0000-0000');
  $('.phone_us').mask('(000) 000-0000');
  $('.mixed').mask('AAA 000-S0S');
  $('.cpf').mask('000.000.000-00', {reverse: true});
  $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
  $('.money').mask('000.000.000.000.000,00', {reverse: true});
  $('.money2').mask("#.##0,00", {reverse: true});
  $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/, optional: true
      }
    }
  });

</script> -->

    </main>

<?php include('footer.php');?>