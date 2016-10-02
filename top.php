<!DOCTYPE html>
<html class="ls-theme-blue">
  <head>
    <title>Doc Manager</title>

    <!-- <meta charset="utf-8"> -->
    <meta name="theme-color" content="#254FA2">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Sistema de Gestão Eletronica de Documentos">
    <link href="css/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
    <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">
    <link rel="stylesheet" type="text/css" href="css/ionicons.css">
     

    <!-- Icone do sistema no navegador -->
    <link rel=icon href=favicon/icon.png sizes="16x16" type="image/png">

    <!-- Estilo local -->
     <link href="css/estilo.css" rel="stylesheet">
    
  </head>
  <body>
    <div class="ls-topbar">

  <!-- Barra de Notificações -->
  <div class="ls-notification-topbar">

    <!-- Links de apoio -->
    <div class="ls-alerts-list">
      <a href="#" class="ls-ico-bell-o" data-counter="8" data-ls-module="topbarCurtain" data-target="#ls-notification-curtain"><span>Notificações</span></a>
     <!-- <a href="#" class="ls-ico-bullhorn" data-ls-module="topbarCurtain" data-target="#ls-help-curtain"><span>Ajuda</span></a> -->
      <a href="#" class="ls-ico-question" data-ls-module="topbarCurtain" data-target="#ls-feedback-curtain"><span>Sugestões</span></a>
    </div>

    <!-- Dropdown com detalhes da conta de usuário -->
    <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
      <a href="#" class="ls-ico-user">
        <!--<img src="perfil/willyan.png" alt="" />-->
        <span class="ls-name">willyanTI</span>
        (willyanmarques)
      </a>

      <nav class="ls-dropdown-nav ls-user-menu">
        <ul>
          <li><a href="#">Meus dados</a></li>
          <li><a href="#">Redefinir senha</a></li>
          <li><a href="#">Sair</a></li>
         </ul>
      </nav>
    </div>
  </div>

  <span class="ls-show-sidebar ls-ico-menu"></span>

  <a href="#"  class="ls-go-next"><span class="ls-text">Voltar para o inicio</span></a>

  <!-- Nome do produto/marca com sidebar -->
    <h1 class="ls-brand-name">
      <a href="index.php" class="ls-ico-folder">
        <small style="color:#fff;">Gestão de Documentos</small>
        Doc Manager
      </a>
    </h1>

  <!-- Nome do produto/marca sem sidebar quando for o pre-painel  -->
</div>


    <aside class="ls-sidebar">

  <div class="ls-sidebar-inner">
      <a href="index.php"  class="ls-go-prev"><span class="ls-text">Voltar para o inicio</span></a>

      <nav class="ls-menu">
        <ul>

        <li>
            <a href="index.php" class="ls-ico-home" title="Página Inicial">Home</a>
           </li>

           <li>
            <a href="usuarios.php" class="ls-ico-users" title="Usuários">Usuários</a>
           </li>

           <li>
            <a href="#" class="ion-briefcase" title="Advogados">Advogados</a>
            <ul>
            <li><a href="advogados.php" class="ls-ico-users">Advogados</a></li>
            <li><a href="#" class="ls-ico-link">Vínculos</a></li>
            </ul>
            </li>

            <li>
            <a href="detentos.php" class="ion-locked" title="Detentos">Detentos</a>
            </li>

          <li>
            <a href="documentos.php" class="ls-ico-docs" title="Documentos">Documentos</a>
          </li>

           <li>
            <a href="instituicoes.php" class="ls-ico-tree" title="Instituições">Instituições</a>
            
          </li>
         
           <li>
            <a href="#" class="ls-ico-stats" title="Configurações">Relatórios</a>
            <ul>
            <li><a href="#">Relatório 01</a></li>
            <li><a href="#">Relatório 02</a></li>
              <li><a href="#">Relatório 03</a></li>
                  </ul>
          </li>
           
           <li>
            <a href="#" class="ls-ico-cog" title="Configurações">Configurações</a>
            <ul>
              <li><a href="#" class="ls-ico-postgres">Banco de dados</a></li>            
              <li><a href="#" class="ls-ico-cloud">Cloud</a></li>
              <li><a href="#" class="ls-ico-envelop">E-mail</a></li>
              </ul>
          </li>
        </ul>
      </nav>

      


  </div>
</aside>