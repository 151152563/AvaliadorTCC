<?php
session_start();

include_once '../includes/header.php';
require_once '../sessao.php';


?>
<!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <title>TCC</title>
    </head>

<style> 
    header{
      background-image: url("../imagens/ela.jpg");
      background-position: center;
      height: 600px;
      background-repeat: no-repeat ;
      
      }
      .brand-logo{
      margin-top: 20px;
      position: center;
      background-position: top right; 
      margin-left: 20px;
      }
      .titulo{ 
          margin-top: 80px;
          
      }
      .imp{
         margin-top: 30px;
      }
      .imp h3{
         font-size: 2em;
         font-weight: 800;
         margin: 20px;
         color:#444
      }
      .imp span{
          font-size: 1.1em;
          text-align: justify;
          padding: 10px;
      }
      .menu{
          background: transparent; 
          box-shadow: none;
      }
      .desktop{
              margin-top: 20px;
              margin-right: 20px;
              
          }
          .desktop li a:hover{
              border-bottom: 2px solid#f5f5f5;
          }
     



</style>

    <body>
    <header> 
      <nav class="menu">
        <div class="nav-wrapper">
          <a class="brand-logo"><img src="../imagens/aleluia.png"></a>
          <ul class="right hide-on-med-and-down desktop">
            <li><a href="../redacao.php">Redação</a></li>
            <li><a href="../tema/index.php">Temas</a></li>
            <li><a href="../outros.php">Outros</a></li>
            <li><a href="../adm/index.php">ADM</a></li>
            <li><a href="../logoff.php">Sair</a></li> 
          </ul>
        </div>
      </nav>
    </header>
    
    <section class="col s12 m12 imp">
      <div class="row">
        <h3>Importância do Enem</h3>
        <div class="col s12 m6">
          <span>
            A redação do Enem serve para avaliar capacidades do aluno que não ficam óbvias em questões de múltipla escolha, como a maturidade para defender ideias em uma estrutura consistente.<br>
          </span>
          <span>
Portanto, quem encara a redação como a parte mais difícil de qualquer processo seletivo precisa se preparar ao máximo. É preciso se manter informado, debater com outras pessoas e tentar escrever sobre assuntos recentes.
</span>

        
      </div>
      </div>
    </section>

    </body>
  </html>