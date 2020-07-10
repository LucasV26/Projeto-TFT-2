<!DOCTYPE html>
<html>
  <head>
     <meta charset='utf-8' />
     <title>TFT-Builder</title>
     <link rel='icon' href='Imagens/favicon.png' />
     <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' />
	 <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' ></script>
	 <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' ></script>
	 <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' ></script>
     <meta name='viewport' content='width=device-width, initial-scale=1' />
     <meta name="author" content="Lucas Vinicius Sousa Silva"/>
	 <meta name="description" content="Projeto Linguagem de Programação, Curso de Análise e Desenvolvimento de Sistemas"/>
     <meta name="keywords" content="Projeto, PHP, TFT"/>
     <meta name="generator" content="Brackets"/> 
      
     <script>
         function VisivelInvisivel(opc) {
             if (opc == "base") {
                 base.className = "visible border border-warning p-5";
                 completo.className = "invisible";
             }
             if (opc == "completo"){
                 completo.className = "visible border border-warning p-5";
                 base.className = "invisible";
             }
             if (opc == "1_1"){
                 normal.className = "visible";
                 origem2.className = "invisible";
                 classe2.className = "invisible";
             }
             if (opc == "1_2"){
                 normal.className = "visible";
                 origem2.className = "visible";
                 classe2.className = "invisible";
             }
             if (opc == "2_1"){
                 normal.className = "visible";
                 origem2.className = "invisible";
                 classe2.className = "visible";
             }
         }      
     </script>
  </head>
<body class="bg-dark">
  	<div class='container-fluid m-2 mx-auto'>
        <ul class="nav nav-tabs fixed-top bg-secondary row justify-content-around">
          <li class="nav-item">
            <h5><a class="nav-link text-warning" href='Index.php?opc=H'>Home</a></h5>
          </li>          
          <li class="nav-item">
            <h5><a class="nav-link text-warning" href='Index.php?opc=B'>Builder</a></h5>
          </li>
          <li class="nav-item">
            <h5><a class="nav-link text-warning" href='Index.php?opc=C'>Controle</a></h5>
          </li>
          <li class="nav-item">
            <h5><a class="nav-link text-warning" href='Index.php?opc=D'>Database</a></h5>
          </li>
        </ul>
        <br/>
        <br/>
        <br/>
		<?php 	 
			include "DB.php";
			
			if ( isset($_GET['opc'])) {
				$opc = $_GET['opc'];
			} 
			else {
				$opc = "H";				# SE NÃO FOI INFORMADA A OPÇÃO DO MENU, CARREGA A OPÇÃO "HOME"
			}

		  	if ( $opc == "H" ) { 		# HOME
		  		?>
                <img src="imagens/logo.png" class='img-fluid mx-auto d-block' width="70%" title="LogoTFT" alt="LogoTFT"/> 
                <br/>
                <div class="bg-secondary">
                    <hr/><br/>
                    <div class="row m-5">
                        <div class="col">
                            <iframe class="border border-primary" width="560" height="315" src="https://www.youtube.com/embed/XjmxHPcwCvA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col text-light">
                            <caption><h4 style="text-decoration: underline;" class="text-warning">A nova atualização de Teamfight Tactics está no ar!!</h4>
                                <ul>
                                    <li> Novos Personagens!</li>
                                    <li> Novos Sinergias!</li>
                                    <li> Itens Rebalanceados!</li>
                                </ul>
                                Navegue pela Database para conhecer todos os novos Personagens e Itens! Ou vá diretamente para o Builder para visualizar a melhor composição que conseguir imaginar! Ou tome o Controle e crie suas próprias regras<br/><br/>
                                <spam class="text-dark" style="font-size: 15px;">APRENDA! TESTE! DESCUBRA! E VÁ DIRETO PARA O CAMPO DE BATALHA!</spam>
                            </caption>
                        </div>
                    </div>
                <br/><hr/>
                </div>
		  		<div class="container">
		  			<div class="row">
		    			<div class="col">
                            <div class="card bg-dark text-white">
                              <img src="Imagens/Builder.jpg" class="card-img rounded border border-light" alt="Builder">
                              <div class="card-img-overlay">
                                <h5 class="card-title text-primary">TFT-BUILDER</h5>
                                <br/>
                                <p class="card-text">No TFT-Builder você terá ao seu dispor uma lista com todos os campeões do jogo para adicioná-los à sua própria equipe, de até 9 integrantes! Teste composições diferentes! Experimente novas interações! Descubra qual é o melhor time para você!</p>
                                <br/><br/>
                                <p class="card-text text-warning">Clique no botão abaixo ou no link do topo da página para experimentar o BUILDER!</p>
                                <a href="Index.php?opc=B" class="btn btn-primary text-white">Builder</a>
                              </div>
                            </div>
						</div>		    			
                        <div class="col">
                            <div class="card bg-dark text-white">
                              <img src="Imagens/Database.jpg" class="card-img rounded border border-light" alt="Database" height="360px">
                              <div class="card-img-overlay">
                                <h5 class="card-title text-primary">TFT-DATABASE</h5>
                                <p class="card-text">Entre na Database do TFT para receber todas as informações necessárias sobre os personagens presentes no jogo. Gere relatórios sobre os Campeões, descobrindo suas classes, origens e seus custos, sobre as Origens e Classes, segregando todos os campeões da composição que você mais gosta, ou ainda relatórios de Itens, descobrindo quais os melhores itens para personagens que causam dano físico, mágico ou os que focam mais na defesa!</p>
                                <p class="card-text text-warning">Clique no botão abaixo ou no link do topo da página para explorar a DATABASE!</p>
                                <a href="Index.php?opc=D" class="btn btn-primary text-white">Database</a>
                              </div>
                            </div>
						</div>
					</div>
                    <br/><br/>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <div class="card bg-dark text-white">
                              <img src="Imagens/Controle.jpg" class="card-img rounded border border-light" alt="Controle" height="360px">
                              <div class="card-img-overlay">
                                <h5 class="card-title text-primary">TFT-CONTROLE</h5>
                                <p class="card-text">No controle você pode afetar diretamente a Database! Insira novos personagens com a aparência, descrição, classes e origens que desejar! Edite personagens já existentes, trocando seus nomes ou até suas classes e origens! Exclua personagens que você julgue não serem mais necessários para a sua Database! Use a área de Controle com sabedoria!</p>
                                <p class="card-text text-warning">Clique no botão abaixo ou no link do topo da página para tomar conta do CONTROLE!</p>
                                <a href="Index.php?opc=C" class="btn btn-primary text-white">Controle</a>
                              </div>
                            </div>
						</div>
                    </div>
				</div>
		  		<?php
			}

			elseif ( $opc == "C" ) {	# CONTROLAR
			     include "Controlar.php";			 		
			}
			
			elseif ( $opc == "D" ) {	# GERENCIAR
				 include "Database.php";		
			}
        
            elseif( $opc == "B" ) {     # Builder
                include "Builder.php";
            }
		?>	
		<br />
		</div>
        <div class="bg-secondary pb-2">
            <hr/>
            <h6 class='text-warning text-center' style="font-size: 17px;">Desenvolvido por Lucas Vinicius Sousa Silva - IFSP Campus Guarulhos</h6>
        </div>
	</body>
</html>