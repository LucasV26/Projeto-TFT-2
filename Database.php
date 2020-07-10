<h3 class='p-2 m-2 bg-dark text-warning text-center'>Explorar Database de Campeões, Itens, Classes e Origens</h3>
<p class='m-2'>
	<button type="button" class="btn btn-outline-warning" onclick=location.replace('Index.php?opc=D&acao=B')>Buscar Campeões</button>
	<button type="button" class="btn btn-outline-warning" onclick=location.replace('Index.php?opc=D&acao=R')>Gerar Relatórios</button>
</p> 			
<?php

if ( isset($_GET['acao'])) {
	$acao = $_GET['acao'];

	if ( $acao == "B" )	{	# BUSCAR CAMPEÕES
		?>
		<h4 class='p-2 m-2 bg-secondary text-warning text-center'>Buscar Campeões</h4>
		<form action='Index.php?opc=D&acao=L' method='post' class="text-center text-light border border-warning">
			<br/><h6> Nome: 
					<input type='text' name='nome' size='40' maxlength='40' />
			</h6><br/>
			<h6>Origem:</h6> 
                <select name='origem'>
                    <option class='text-primary' value='' disabled selected>Selecione...</option>
                    <option class='text-primary' value='Aço'>Aço</option> 
                    <option class='text-primary' value='Bosque'>Bosque</option> 
                    <option class='text-primary' value='Cristal'>Cristal</option>
                    <option class='text-primary' value='Deserto'>Deserto</option>
                    <option class='text-primary' value='Elétrico'>Elétrico</option>
                    <option class='text-primary' value='Glacial'>Glacial</option>
                    <option class='text-primary' value='Inferno'>Inferno</option>
                    <option class='text-primary' value='Luz'>Luz</option>
                    <option class='text-primary' value='Montanha'>Montanha</option>
                    <option class='text-primary' value='Nuvem'>Nuvem</option>
                    <option class='text-primary' value='Oceano'>Oceano</option>
                    <option class='text-primary' value='Sombra'>Sombra</option>
                    <option class='text-primary' value='Veneno'>Veneno</option>
                </select>
            <p></p><h6>Classe:</h6> 
                <select name='classe'>
                    <option class='text-primary' value='' disabled selected>Selecione...</option>
                    <option class='text-primary' value='Alquimista'>Alquimista</option> 
                    <option class='text-primary' value='Assassino'>Assassino</option> 
                    <option class='text-primary' value='Avatar'>Avatar</option>
                    <option class='text-primary' value='Bezerker'>Bezerker</option>
                    <option class='text-primary' value='Druida'>Druida</option>
                    <option class='text-primary' value='Invocador'>Invocador</option>
                    <option class='text-primary' value='Mago'>Mago</option>
                    <option class='text-primary' value='Mestre das Lâminas'>Mestre das Lâminas</option>
                    <option class='text-primary' value='Místico'>Místico</option>
                    <option class='text-primary' value='Patrulheiro'>Patrulheiro</option>
                    <option class='text-primary' value='Predador'>Predador</option>
                    <option class='text-primary' value='Vigia'>Vigia</option>
                </select>
            <p></p><h6>Custo:</h6> 
                <select name='custo'>
                   <option class='text-primary' value='' disabled selected>Selecione...</option>
                   <option class='text-primary' value='1'>1</option> 
                   <option class='text-primary' value='2'>2</option> 
                   <option class='text-primary' value='3'>3</option>
                   <option class='text-primary' value='4'>4</option>
                   <option class='text-primary' value='5'>5</option>
                   <option class='text-primary' value='7'>7</option>
                </select><br/><br/>

			<h6 class='text-center'> 
                <input class='btn btn-warning text-dark' type='submit' value='Buscar' /> 
				<input class='btn btn-warning text-dark' type='reset' value='Limpar' />
            </h6>
		</form>
		<?php
	}

	elseif ( $acao == "L" )	{	# LISTAR 
        $argumentos = " WHERE O.ID = OC.ID_ORIGEM and OC.ID_CAMPEAO = C.ID and CL.ID = CLC.ID_CLASSE and CLC.ID_CAMPEAO = C.ID ";

        if ( $_POST['nome'] != '' ) {
            $nome = $_POST['nome'];
            $argumentos = $argumentos . " AND C.NOME LIKE '%$nome%' ";
        }
        if ( isset($_POST['origem']) ) {
            $origem = $_POST['origem'];
            $argumentos = $argumentos . " AND O.NOME = '$origem' ";
        }
        if ( isset($_POST['classe']) ) {
            $classe = $_POST['classe'];
            $argumentos = $argumentos . " AND CL.NOME = '$classe' "; 
        }
        if ( isset($_POST['custo']) ) {
            $custo = $_POST['custo'];
            $argumentos = $argumentos . " AND C.CUSTO = '$custo' ";
        }
        $argumentos = $argumentos . " ORDER BY C.NOME ";
        $tabelas = " tb_campeao C, tb_origem O, tb_classe CL, tb_oricam OC, tb_clacam CLC ";
        $campos = " C.ID, C.FOTO as FOTOC, C.NOME as NOMEC, C.DESCRIP, O.FOTO as FOTOO, O.NOME as NOMEO, CL.FOTO as FOTOCL, CL.NOME as NOMECL, C.CUSTO ";

        $tabela = funSelect($tabelas, $campos, $argumentos);
	
		?>
		<h4 class='p-2 m-2 bg-secondary text-warning text-center'>Campeões Localizados</h4>
		
		<table class='m-2 mx-auto table table-striped table-dark text-light'>
			<thead class='text-center'>
				<tr>
					<th scope='col' class='border border-primary text-warning'>Campeão</th>
					<th scope='col' class='border border-primary text-warning'>Descrição</th>
		 			<th scope='col' class='border border-primary text-warning'>Origem</th>
		 			<th scope='col' class='border border-primary text-warning'>Classe</th>
			 		<th scope='col' class='border border-primary text-warning'>Custo</th>
				</tr>
			</thead>
		<?php			
            for ($i=0; $i<count($tabela);$i++) {
                switch($tabela[$i]['CUSTO']){
                    case 1:
                        $borda = " style='border: 2px solid gray' ";
                        break;
                    case 2:
                        $borda = " style='border: 2px solid green' ";
                        break;
                    case 3:
                        $borda = " style='border: 2px solid blue' ";
                        break;
                    case 4:
                        $borda = " style='border: 2px solid purple' ";
                        break;
                    case 5:
                        $borda = " style='border: 2px solid yellow' ";
                        break;
                    case 7:
                        $borda = " style='border: 2px solid; border-color: purple blue green yellow;' ";
                        break;
                }
				echo "<tr class='text-center'>
                
						<td scope='col' class='border border-primary'>
                        <img src='Imagens/".$tabela[$i]['FOTOC']."' width='50px' height='50px' $borda alt='Campeão - ". $tabela[$i]['NOMEC'] ."' title='Campeão - ". $tabela[$i]['NOMEC'] ."'/><br/>". $tabela[$i]['NOMEC'] .
                        "</td>
                        
                        <td scope='col' class='border border-primary'> ".$tabela[$i]['DESCRIP']." </td>";
                
                                if($i != count($tabela) - 1){
                                    
                                    if($tabela[$i]['ID'] == $tabela[$i+1]['ID']){
                                        
                                        if($tabela[$i]['NOMEO'] != $tabela[$i+1]['NOMEO']){
                                            
                                            echo "<td scope='col' class='border border-primary'>
                                            <img src='Imagens/".$tabela[$i]['FOTOO']."' width='40px' height='40px' alt='Origem - ". $tabela[$i]['NOMEO'] ."' title='Origem - ". $tabela[$i]['NOMEO'] ."'/>
                                            <img src='Imagens/".$tabela[$i+1]['FOTOO']."' width='40px' height='40px' alt='Origem - ". $tabela[$i+1]['NOMEO'] ."' title='Origem - ". $tabela[$i+1]['NOMEO'] ."'/><br/>
                                            ". $tabela[$i]['NOMEO'] ." | ". $tabela[$i+1]['NOMEO'] ."
                                            </td>
                                            
                                            <td scope='col' class='border border-primary'>
                                            <img src='Imagens/".$tabela[$i]['FOTOCL']."' width='40px' height='40px' alt='Classe - ". $tabela[$i]['NOMECL'] ."' title='Classe - ". $tabela[$i]['NOMECL'] ."'/><br/>". $tabela[$i]['NOMECL'] ."
                                            </td>";
                                            $i++;
                                            
                                        }else{
                                            echo "<td scope='col' class='border border-primary'>
                                            <img src='Imagens/".$tabela[$i]['FOTOO']."' width='40px' height='40px' alt='Origem - ". $tabela[$i]['NOMEO'] ."' title='Origem - ". $tabela[$i]['NOMEO'] ."'/><br/>". $tabela[$i]['NOMEO'] ."
                                            </td>
                                            
                                            <td scope='col' class='border border-primary'>
                                            <img src='Imagens/".$tabela[$i]['FOTOCL']."' width='40px' height='40px' alt='Classe - ". $tabela[$i]['NOMECL'] ."' title='Classe - ". $tabela[$i]['NOMECL'] ."'/>
                                            <img src='Imagens/".$tabela[$i+1]['FOTOCL']."' width='40px' height='40px' alt='Classe - ". $tabela[$i+1]['NOMECL'] ."' title='Classe - ". $tabela[$i+1]['NOMECL'] ."'/><br/>
                                            ". $tabela[$i]['NOMECL'] ." | ". $tabela[$i+1]['NOMECL'] ."
                                            </td>";
                                            $i++;
                                        }
                                        
                                    }else{    

                                        echo "<td scope='col' class='border border-primary'>
                                        <img src='Imagens/".$tabela[$i]['FOTOO']."' width='40px' height='40px' alt='Origem - ". $tabela[$i]['NOMEO'] ."' title='Origem - ". $tabela[$i]['NOMEO'] ."'/><br/>". $tabela[$i]['NOMEO'] ."
                                        </td>
                                        
                                        <td scope='col' class='border border-primary'>
                                        <img src='Imagens/".$tabela[$i]['FOTOCL']."' width='40px' height='40px' alt='Classe - ". $tabela[$i]['NOMECL'] ."' title='Classe - ". $tabela[$i]['NOMECL'] ."'/><br/>". $tabela[$i]['NOMECL'] ."
                                        </td>";
                                    }
                                    
                                }else{
                                        echo "<td scope='col' class='border border-primary'>
                                        <img src='Imagens/".$tabela[$i]['FOTOO']."' width='40px' height='40px' alt='Origem - ". $tabela[$i]['NOMEO'] ."' title='Origem - ". $tabela[$i]['NOMEO'] ."'/><br/>". $tabela[$i]['NOMEO'] ."
                                        </td>
                                        
                                        <td scope='col' class='border border-primary'>
                                        <img src='Imagens/".$tabela[$i]['FOTOCL']."' width='40px' height='40px' alt='Classe - ". $tabela[$i]['NOMECL'] ."' title='Classe - ". $tabela[$i]['NOMECL'] ."'/><br/>". $tabela[$i]['NOMECL'] ."
                                        </td>";
                                }
                                
                                echo "<td scope='col' style='font-size: 20px;' class='border border-primary'><img src='Imagens/custo.png' width='40px' height='40px' alt='Moedas' title='Moedas'/>". $tabela[$i]['CUSTO'] ."</td>
				        </tr>";
            }
        ?>   
		</table>
		<p class='m-2'><input class='btn btn-warning text-dark' type='submit' value='Voltar' onclick=location.replace('Index.php?opc=D&acao=B') /></p>

		<?php
	}

	elseif ( $acao == "R" )	{	# GERAR RELATORIOS
		?>
		<h4 class='p-2 bg-secondary text-warning text-center'>Gerar Relatórios</h4><br/><br/>
            <div class="row text-dark">
                <div class="col">
                    <div class="card border-info bg-dark" style="max-width: 18rem;">
                      <div class="card-header bg-info">Relatório de Custo:</div>
                      <div class="card-body text-info">
                        <form action='Index.php?opc=D&acao=R&rel=REL_Custo' method='post'>
                            <h6 class='text-light'> Custo: 
                                <select name='custo' required>
                                    <option class='text-primary' value='' disabled selected>Selecione...</option>
                                    <option class='text-primary' value='1'>1</option> 
                                    <option class='text-primary' value='2'>2</option> 
                                    <option class='text-primary' value='3'>3</option>
                                    <option class='text-primary' value='4'>4</option>
                                    <option class='text-primary' value='5'>5</option>
                                    <option class='text-primary' value='7'>7</option>
                                </select> </h6>	<br/>
                            <input class='btn btn-info text-dark' type='submit' value='Gerar'/>
					    </form>
                      </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-danger bg-dark" style="max-width: 18rem;">
                      <div class="card-header bg-danger">Relatório de Origens:</div>
                      <div class="card-body text-danger">
                        <form action='Index.php?opc=D&acao=R&rel=REL_Origem' method='post'>
                            <h6 class='text-light'> Origem: 
                                <select name='origem' required>
                                    <option class='text-primary' value='' disabled selected>Selecione...</option>
                                    <option class='text-primary' value='Aço'>Aço</option> 
                                    <option class='text-primary' value='Bosque'>Bosque</option> 
                                    <option class='text-primary' value='Cristal'>Cristal</option>
                                    <option class='text-primary' value='Deserto'>Deserto</option>
                                    <option class='text-primary' value='Elétrico'>Elétrico</option>
                                    <option class='text-primary' value='Glacial'>Glacial</option>
                                    <option class='text-primary' value='Inferno'>Inferno</option>
                                    <option class='text-primary' value='Luz'>Luz</option>
                                    <option class='text-primary' value='Montanha'>Montanha</option>
                                    <option class='text-primary' value='Nuvem'>Nuvem</option>
                                    <option class='text-primary' value='Oceano'>Oceano</option>
                                    <option class='text-primary' value='Sombra'>Sombra</option>
                                    <option class='text-primary' value='Veneno'>Veneno</option>
                                </select>
                            </h6><br/>
                            <input class='btn btn-danger text-dark' type='submit' value='Gerar' /> 
					   </form>
                      </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-success bg-dark" style="max-width: 18rem;">
                      <div class="card-header bg-success">Relatório de Classes:</div>
                      <div class="card-body text-success">
                        <form action='Index.php?opc=D&acao=R&rel=REL_Classe' method='post'>
                            <h6 class='text-light'> Classe: 
                                <select name='classe' required>
                                    <option class='text-primary' value='' disabled selected>Selecione...</option>
                                    <option class='text-primary' value='Alquimista'>Alquimista</option> 
                                    <option class='text-primary' value='Assassino'>Assassino</option> 
                                    <option class='text-primary' value='Avatar'>Avatar</option>
                                    <option class='text-primary' value='Bezerker'>Bezerker</option>
                                    <option class='text-primary' value='Druida'>Druida</option>
                                    <option class='text-primary' value='Invocador'>Invocador</option>
                                    <option class='text-primary' value='Mago'>Mago</option>
                                    <option class='text-primary' value='Mestre das Lâminas'>Mestre das Lâminas</option>
                                    <option class='text-primary' value='Místico'>Místico</option>
                                    <option class='text-primary' value='Patrulheiro'>Patrulheiro</option>
                                    <option class='text-primary' value='Predador'>Predador</option>
                                    <option class='text-primary' value='Vigia'>Vigia</option>
                                </select>
                            </h6><br/>
                            <input class='btn btn-success text-dark' type='submit' value='Gerar' /> 
					   </form>
                      </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-warning bg-dark" style="max-width: 18rem;">
                      <div class="card-header bg-warning">Relatório de Itens:</div>
                      <div class="card-body text-light border border-light m-3">
                        <form action='Index.php?opc=D&acao=R&rel=REL_Itens' method='post'>
					        <h6> Tipo do Item Completo: <br/><br/>
                                <input type="radio" name="item" value="1"/> Dano Físico<br/>
                                <input type="radio" name="item" value="2"/> Dano Mágico<br/>
                                <input type="radio" name="item" value="3"/> Defensivo<br/>
                                <input type="radio" name="item" value="4"/> Especial
                            </h6><br/>	
					        <input class='btn btn-warning text-dark' type='submit' value='Gerar' />
					   </form>
                      </div>
                      <div class="card-body">
                          <form action='Index.php?opc=D&acao=R&rel=REL_Itens_Base' method='post'>
                             <input class='btn btn-warning text-dark' type='submit' value='Itens Base' />
                          </form>  
                      </div>
                    </div>
                </div>
            </div>
		<?php

		if ( isset($_GET['rel'])) {		# EXIBE O RELATORIO
			if ( $_GET['rel'] ==  'REL_Custo' || $_GET['rel'] ==  'REL_Origem'  || $_GET['rel'] ==  'REL_Classe') {
				if ( $_GET['rel'] == 'REL_Custo' ) {
					$custo = $_POST['custo'];
                    
	                $argumentos = " WHERE O.ID = OC.ID_ORIGEM and OC.ID_CAMPEAO = C.ID and CL.ID = CLC.ID_CLASSE and CLC.ID_CAMPEAO = C.ID and C.CUSTO = '$custo' ORDER BY NOMEC ";
                    
	                $titulo = "Relatório dos Campeões de Custo - $custo";
                    
				}elseif ( $_GET['rel'] == 'REL_Origem' ) {
					$origem = $_POST['origem'];
                    
	                $argumentos = " WHERE O.ID = OC.ID_ORIGEM and OC.ID_CAMPEAO = C.ID and CL.ID = CLC.ID_CLASSE and CLC.ID_CAMPEAO = C.ID and O.NOME = '$origem' ORDER BY NOMEC ";
                    
	                $titulo = "Relatório dos Campeões $origem";
                    
				}elseif( $_GET['rel'] == 'REL_Classe' ){
					$classe = $_POST['classe'];
                    
	                $argumentos = " WHERE O.ID = OC.ID_ORIGEM and OC.ID_CAMPEAO = C.ID and CL.ID = CLC.ID_CLASSE and CLC.ID_CAMPEAO = C.ID and CL.NOME = '$classe' ORDER BY NOMEC ";
                    
	                $titulo = "Relatório dos Campeões $classe";
                    
                }
                $tabelas = " tb_campeao C, tb_origem O, tb_classe CL, tb_oricam OC, tb_clacam CLC ";
                $campos = " C.ID, C.FOTO as FOTOC, C.NOME as NOMEC, C.DESCRIP as DESCRIPC, O.FOTO as FOTOO, O.NOME as NOMEO, O.DESCRIP as DESCRIPO, O.MARCA_DESCRIP as MARCA_DO, CL.FOTO as FOTOCL, CL.NOME as NOMECL, CL.DESCRIP as DESCRIPCL, CL.MARCA_DESCRIP as MARCA_DCL, C.CUSTO ";
                
				$tabela = funSelect($tabelas, $campos, $argumentos);		
			
			?>
			<!-- Modal -->
			<div class='modal fade' id='ModalCampeoes' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
				  <div class='modal-dialog modal-xl' role='document'>
				    <div class='modal-content'>
				      <div class='modal-header'>
				        <h4 class='p-2 m-2 bg-secondary text-warning text-center'> <?php echo $titulo ; ?> </h4>
				        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
				          <span aria-hidden='true'>&times;</span>
				        </button>
				      </div>
				      <div class='modal-body bg-dark'>
				      	
				      	<table class='m-2 w-75 mx-auto table table-striped table-dark text-warning'>
							<thead class='text-center'>
								<tr>
		  							<th scope='col' class='border border-primary'>Detalhar</th>
		  							<th scope='col' class='border border-primary'>Campeão</th>
						 			<th scope='col' class='border border-primary'>Origem</th>
						 			<th scope='col' class='border border-primary'>Classe</th>
						 			<th scope='col' class='border border-primary'>Custo</th>
								</tr>
							</thead>
						<?php
                            $aux = 0;
                            $aux_CL = 0;
                            $aux_O = 0;
                            $aux_CL2 = 0;
                            $aux_O2 = 0;
                            for ($i = 0; $i < count($tabela);$i++) {
                                
                                $aux = 0;
                                $aux_O = 0;
                                $aux_CL = 0;
                                $aux_CL2 = 0;
                                $aux_O2 = 0;
                                
                                if($tabela[$i]['MARCA_DO'] != NULL){
                                    $aux_O = 1;
                                }
                                
                                if($tabela[$i]['MARCA_DCL'] != NULL){
                                    $aux_CL = 1;
                                }
            
                                switch($tabela[$i]['CUSTO']){
                                    case 1:
                                        $borda = " style='border: 2px solid gray' ";
                                        break;
                                    case 2:
                                        $borda = " style='border: 2px solid green' ";
                                        break;
                                    case 3:
                                        $borda = " style='border: 2px solid blue' ";
                                        break;
                                    case 4:
                                        $borda = " style='border: 2px solid purple' ";
                                        break;
                                    case 5:
                                        $borda = " style='border: 2px solid yellow' ";
                                        break;
                                    case 7:
                                        $borda = " style='border: 2px solid; border-color: purple blue green yellow;' ";
                                        break;
                                }
								echo "<tr class='text-center'>
                                
                                        <td scope='col' class='border border-primary'>
                                        <a data-toggle='collapse' href='#detalhar$i' aria-expanded='false' aria-controls='detalhar$i'>
                                        <img src='Imagens/lupa.png' width='40px' height'40px' alt='Detalhar' title='Detalhar'/>
                                        </a>
                                        </td>
                                        
										<td scope='col' class='border border-primary'>
                                        <img src='Imagens/".$tabela[$i]['FOTOC']."' width='50px' height='50px' $borda alt='Campeão - ". $tabela[$i]['NOMEC'] ."' title='Campeão - ". $tabela[$i]['NOMEC'] ."'/><br/>". $tabela[$i]['NOMEC'] .
                                        "</td>";
                                
                                //Laço para cuidar de campeões com 2 Origens/Classes
                                if($i != count($tabela) - 1){
                                    
                                    if($tabela[$i]['ID'] == $tabela[$i+1]['ID']){
                                        
                                        if($tabela[$i]['NOMEO'] != $tabela[$i+1]['NOMEO']){
                                            
                                            echo "<td scope='col' class='border border-primary'>
                                            <img src='Imagens/".$tabela[$i]['FOTOO']."' width='40px' height='40px' alt='Origem - ". $tabela[$i]['NOMEO'] ."' title='Origem - ". $tabela[$i]['NOMEO'] ."'/>
                                            <img src='Imagens/".$tabela[$i+1]['FOTOO']."' width='40px' height='40px' alt='Origem - ". $tabela[$i+1]['NOMEO'] ."' title='Origem - ". $tabela[$i+1]['NOMEO'] ."'/><br/>
                                            ". $tabela[$i]['NOMEO'] ." | ". $tabela[$i+1]['NOMEO'] ."
                                            </td>
                                            
                                            <td scope='col' class='border border-primary'>
                                            <img src='Imagens/".$tabela[$i]['FOTOCL']."' width='40px' height='40px' alt='Classe - ". $tabela[$i]['NOMECL'] ."' title='Classe - ". $tabela[$i]['NOMECL'] ."'/><br/>". $tabela[$i]['NOMECL'] ."
                                            </td>";
                                            $aux = 1;
                                            $aux_O2 = 1;
                                            $i++;
                                            
                                        }else{
                                            echo "<td scope='col' class='border border-primary'>
                                            <img src='Imagens/".$tabela[$i]['FOTOO']."' width='40px' height='40px' alt='Origem - ". $tabela[$i]['NOMEO'] ."' title='Origem - ". $tabela[$i]['NOMEO'] ."'/><br/>". $tabela[$i]['NOMEO'] ."
                                            </td>
                                            
                                            <td scope='col' class='border border-primary'>
                                            <img src='Imagens/".$tabela[$i]['FOTOCL']."' width='40px' height='40px' alt='Classe - ". $tabela[$i]['NOMECL'] ."' title='Classe - ". $tabela[$i]['NOMECL'] ."'/>
                                            <img src='Imagens/".$tabela[$i+1]['FOTOCL']."' width='40px' height='40px' alt='Classe - ". $tabela[$i+1]['NOMECL'] ."' title='Classe - ". $tabela[$i+1]['NOMECL'] ."'/><br/>
                                            ". $tabela[$i]['NOMECL'] ." | ". $tabela[$i+1]['NOMECL'] ."
                                            </td>";
                                            $aux = 2;
                                            $aux_CL2 = 1;
                                            $i++;
                                        }
                                        
                                    }else{    

                                        echo "<td scope='col' class='border border-primary'>
                                        <img src='Imagens/".$tabela[$i]['FOTOO']."' width='40px' height='40px' alt='Origem - ". $tabela[$i]['NOMEO'] ."' title='Origem - ". $tabela[$i]['NOMEO'] ."'/><br/>". $tabela[$i]['NOMEO'] ."
                                        </td>
                                        
                                        <td scope='col' class='border border-primary'>
                                        <img src='Imagens/".$tabela[$i]['FOTOCL']."' width='40px' height='40px' alt='Classe - ". $tabela[$i]['NOMECL'] ."' title='Classe - ". $tabela[$i]['NOMECL'] ."'/><br/>". $tabela[$i]['NOMECL'] ."
                                        </td>";
                                    }
                                    
                                }else{
                                        echo "<td scope='col' class='border border-primary'>
                                        <img src='Imagens/".$tabela[$i]['FOTOO']."' width='40px' height='40px' alt='Origem - ". $tabela[$i]['NOMEO'] ."' title='Origem - ". $tabela[$i]['NOMEO'] ."'/><br/>". $tabela[$i]['NOMEO'] ."
                                        </td>
                                        
                                        <td scope='col' class='border border-primary'>
                                        <img src='Imagens/".$tabela[$i]['FOTOCL']."' width='40px' height='40px' alt='Classe - ". $tabela[$i]['NOMECL'] ."' title='Classe - ". $tabela[$i]['NOMECL'] ."'/><br/>". $tabela[$i]['NOMECL'] ."
                                        </td>";
                                }
                                
                                echo "<td scope='col' style='font-size: 20px;' class='border border-primary'><img src='Imagens/custo.png' width='40px' height='40px' alt='Moedas' title='Moedas'/>". $tabela[$i]['CUSTO'] ."</td>";
                                
                                //Laço para geração das linhas de Definição do campeão, classe(s) e origem(s)
                                if($aux == 1){
                                    $aux = $i - 1;
                                    if($aux_O == 0 && $aux_CL == 0){
                                        echo "<tr class='text-center collapse' id='detalhar$aux'>
                                                <td scope='col'></td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPC'] ."</td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i-1]['DESCRIPO'] ."<br/><br/><hr style='border-color: #FFFFFF'/><br/>". $tabela[$i]['DESCRIPO'] ."</td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPCL'] ."</td>
                                            </tr>";
                                    }elseif($aux_O == 1 && $aux_CL == 1){
                                        echo "<tr class='text-center collapse' id='detalhar$aux'>
                                                <td scope='col'></td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPC'] ."</td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i-1]['DESCRIPO'] ."<br/><br/>";
                                                if($aux_O2 == 1){
                                                    echo"".$tabela[$i]['MARCA_DO']."<br/><br/>";
                                                }
                                                echo"<hr style='border-color: #FFFFFF'/><br/>". $tabela[$i]['DESCRIPO'] ."<br/><br/>".$tabela[$i]['MARCA_DO']."</td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPCL'] ."<br/><br/>".$tabela[$i]['MARCA_DCL']."</td>
                                            </tr>";
                                    }else{
                                        if($aux_O == 1){
                                            echo "<tr class='text-center collapse' id='detalhar$aux'>
                                                <td scope='col'></td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPC'] ."</td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i-1]['DESCRIPO'] ."<br/><br/>";
                                                if($aux_O2 == 1){
                                                    echo"".$tabela[$i]['MARCA_DO']."<br/><br/>";
                                                }
                                                echo"<hr style='border-color: #FFFFFF'/><br/>". $tabela[$i]['DESCRIPO'] ."<br/><br/>". $tabela[$i]['MARCA_DO'] ."</td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPCL'] ."</td>
                                            </tr>";
                                        }else{
                                            echo "<tr class='text-center collapse' id='detalhar$aux'>
                                                <td scope='col'></td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPC'] ."</td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i-1]['DESCRIPO'] ."<br/><br/><hr style='border-color: #FFFFFF'/><br/>". $tabela[$i]['DESCRIPO'] ."</td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPCL'] ."<br/><br/>". $tabela[$i]['MARCA_DCL'] ."</td>
                                            </tr>";
                                        }
                                    }
                                    
                                }elseif($aux == 2){
                                    $aux = $i - 1;
                                    
                                    if($aux_O == 0 && $aux_CL == 0){
                                        echo "<tr class='text-center collapse' id='detalhar$aux'>
                                                <td scope='col'></td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPC'] ."</td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPO'] ."</td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i-1]['DESCRIPCL'] ."<br/><br/><hr style='border-color: #FFFFFF'/><br/>". $tabela[$i]['DESCRIPCL'] ."</td>
                                            </tr>";
                                    }elseif($aux_O == 1 && $aux_CL == 1){
                                        echo "<tr class='text-center collapse' id='detalhar$aux'>
                                                <td scope='col'></td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPC'] ."</td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPO'] ."<br/><br/>".$tabela[$i]['MARCA_DO']."</td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i-1]['DESCRIPCL'] ."<br/><br/>";
                                                if($aux_CL2 == 1){
                                                    echo"".$tabela[$i]['MARCA_DCL']."<br/><br/>";
                                                }
                                                echo"<hr style='border-color: #FFFFFF'/><br/>". $tabela[$i]['DESCRIPCL'] ."<br/><br/>".$tabela[$i]['MARCA_DCL']."</td>
                                            </tr>";
                                    }else{
                                        if($aux_O == 1){
                                            echo "<tr class='text-center collapse' id='detalhar$aux'>
                                                <td scope='col'></td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPC'] ."</td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPO'] ."<br/><br/>". $tabela[$i]['MARCA_DO'] ."</td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i-1]['DESCRIPCL'] ."<br/><br/><hr style='border-color: #FFFFFF'/><br/>". $tabela[$i]['DESCRIPCL'] ."</td>
                                            </tr>";
                                        }else{
                                            echo "<tr class='text-center collapse' id='detalhar$aux'>
                                                <td scope='col'></td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPC'] ."</td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPO'] ."</td>
                                                <td scope='col' class='border border-primary'>". $tabela[$i-1]['DESCRIPCL'] ."<br/><br/>";
                                                if($aux_CL2 == 1){
                                                    echo"".$tabela[$i]['MARCA_DCL']."<br/><br/>";
                                                }
                                                echo"<hr style='border-color: #FFFFFF'/><br/>". $tabela[$i]['DESCRIPCL'] ."<br/><br/>". $tabela[$i]['MARCA_DCL'] ."</td>
                                            </tr>";
                                        }
                                    }
                                }else{
                                
                                    if($aux_O == 0 && $aux_CL == 0){
                                            echo "<tr class='text-center collapse' id='detalhar$i'>
                                                    <td scope='col'></td>
                                                    <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPC'] ."</td>
                                                    <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPO'] ."</td>
                                                    <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPCL'] ."</td>
                                                </tr>";
                                    }elseif($aux_O == 1 && $aux_CL == 1){
                                        echo "<tr class='text-center collapse' id='detalhar$i'>
                                                    <td scope='col'></td>
                                                    <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPC'] ."</td>
                                                    <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPO'] ."<br/><br/>".$tabela[$i]['MARCA_DO']."</td>
                                                    <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPCL'] ."<br/><br/>".$tabela[$i]['MARCA_DCL']."</td>
                                                    </tr>";
                                    }else{
                                            if($aux_O == 1){
                                                echo "<tr class='text-center collapse' id='detalhar$i'>
                                                    <td scope='col'></td>
                                                    <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPC'] ."</td>
                                                    <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPO'] ."<br/><br/>". $tabela[$i]['MARCA_DO'] ."</td>
                                                    <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPCL'] ."</td>
                                                </tr>";
                                            }else{
                                                echo "<tr class='text-center collapse' id='detalhar$i'>
                                                    <td scope='col'></td>
                                                    <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPC'] ."</td>
                                                    <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPO'] ."</td>
                                                    <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIPCL'] ."<br/><br/>". $tabela[$i]['MARCA_DCL'] ."</td>
                                                </tr>";
                                            }
                                        }
                                }
                            }
							?>
						</table>
				      </div>
				      <div class='modal-footer'>
				        <button type='button' class='btn btn-warning text-dark' data-dismiss='modal'>Fechar</button>
				      </div>
				    </div>
				  </div>
				</div>

				<script>
					$('#ModalCampeoes').modal();
				</script>
			
			<?php
            }
            
            elseif ( $_GET['rel'] == 'REL_Itens' ) {
				$tipo = $_POST['item'];
                if($tipo == 1){
                    $titulo = " Relatório dos Itens Completos de Dano Físico ";
                }elseif($tipo == 2){
                    $titulo = " Relatório dos Itens Completos de Dano Mágico ";
                }elseif($tipo == 3){
                    $titulo = " Relatório dos Itens Completos Defensivos ";
                }else{
                    $titulo = " Relatório dos Itens Completos Especiais ";
                }
                
                $argumentos = " WHERE IC.ID1 = IB1.ID and IC.ID2 = IB2.ID and IC.TIPO = '$tipo' ";
                $tabelas = " tb_itembase IB1, tb_itembase IB2, tb_itemcompleto IC ";
                $campos = " IC.FOTO as FOTOIC, IC.NOME as NOMEIC, IC.DESCRIP, IB1.NOME as NOMEIB1, IB1.FOTO as FOTOIB1, IB2.NOME as NOMEIB2, IB2.FOTO as FOTOIB2 ";
                
                $tabela = funSelect($tabelas, $campos, $argumentos);
                
                ?>

                <!-- Modal -->
			<div class='modal fade' id='ModalItens' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
				  <div class='modal-dialog modal-xl' role='document'>
				    <div class='modal-content'>
				      <div class='modal-header'>
				        <h4 class='p-2 m-2 bg-secondary text-warning text-center'> <?php echo $titulo ; ?> </h4>
				        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
				          <span aria-hidden='true'>&times;</span>
				        </button>
				      </div>
				      <div class='modal-body bg-dark'>
				            
				            <table class='m-2 w-75 mx-auto table table-striped table-dark text-warning'>
				                <thead class='text-center'>
				                    <tr class="border">
				                        <th scope='col' class='border border-primary'>Item</th>
				                        <th scope='col' class='border border-primary'>Descrição</th>
				                        <th scope='col' class='border border-primary'>Receita</th>
				                    </tr>
				                </thead>
				            <?php
				                for($i=0; $i<count($tabela); $i++){
				                    echo "<tr class='text-center'>
				                            <td scope='col' class='border border-primary'>
                                            <img src='Imagens/". $tabela[$i]['FOTOIC'] ."' width='40px' height='40px' alt='Item Completo - ".$tabela[$i]['NOMEIC']."' title='Item Completo - ".$tabela[$i]['NOMEIC']."'/>
                                            </td>
                                            
				                            <td scope='col' class='border border-primary'>". $tabela[$i]['DESCRIP'] ."</td>
                                            
				                            <td scope='col' class='border border-primary'>
                                            <img src='Imagens/". $tabela[$i]['FOTOIB1'] ."' width='30px' height='30px' alt='Item Base - ".$tabela[$i]['NOMEIB1']."' title='Item Base - ".$tabela[$i]['NOMEIB1']."'/>
                                            <img src='Imagens/". $tabela[$i]['FOTOIB2'] ."' width='30px' height='30px' alt='Item Base - ".$tabela[$i]['NOMEIB2']."' title='Item Base - ".$tabela[$i]['NOMEIB2']."'/>
                                            </td>
				                        </tr>";
                                }
				                ?>
				            </table>   
            		</div>
				      <div class='modal-footer'>
				        <button type='button' class='btn btn-warning text-white' data-dismiss='modal'>Close</button>
				      </div>
				    </div>
				  </div>
				</div>

				<script>
					$('#ModalItens').modal();
				</script>  
                <?php
			}
            elseif($_GET['rel'] == 'REL_Itens_Base'){
                $titulo = "Relatório Geral de Itens Base";
                
                $tabela_base = funSelect(" tb_itembase ", " ID, FOTO, NOME, DESCRIP ", " ");
                $tabela_completo = funSelect(" tb_itemcompleto ", " ID1, ID2, FOTO, NOME ", " ");
                
                ?>

                <!-- Modal -->
			<div class='modal fade' id='ModalItensBase' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
				  <div class='modal-dialog modal-xl' role='document'>
				    <div class='modal-content'>
				      <div class='modal-header'>
				        <h4 class='p-2 m-2 bg-secondary text-warning text-center'> <?php echo $titulo ; ?> </h4>
				        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
				          <span aria-hidden='true'>&times;</span>
				        </button>
				      </div>
				      <div class='modal-body bg-dark'>
				            
				            <table class='m-2 w-75 mx-auto table table-striped table-dark text-warning'>
				                <thead class='text-center'>
				                    <tr class="border">
				                        <th scope='col' class='border border-primary'>Item</th>
				                        <th scope='col' class='border border-primary'>Descrição</th>
				                        <th scope='col' class='border border-primary'>Compõe</th>
				                    </tr>
				                </thead>
				            <?php
				                for($i=0; $i<count($tabela_base); $i++){
				                    echo "<tr class='text-center'>
				                            <td scope='col' class='border border-primary'>
                                            <img src='Imagens/". $tabela_base[$i]['FOTO'] ."' width='40px' height='40px' alt='Item Base - ".$tabela_base[$i]['NOME']."' title='Item Base - ".$tabela_base[$i]['NOME']."'/><br/>".$tabela_base[$i]['NOME']."
                                            </td>
                                            
				                            <td scope='col' class='border border-primary'>". $tabela_base[$i]['DESCRIP'] ."</td>
                                            
				                            <td scope='col' class='border border-primary'>";
                                            for($j=0; $j<count($tabela_completo); $j++){
                                                if($tabela_completo[$j]['ID1'] == $tabela_base[$i]['ID'] || $tabela_completo[$j]['ID2'] == $tabela_base[$i]['ID']){
                                                    
                                                    echo"<img src='Imagens/". $tabela_completo[$j]['FOTO'] ."' width='30px' height='30px' alt='Item Completo - ".$tabela_completo[$j]['NOME']."' title='Item Completo - ".$tabela_completo[$j]['NOME']."' class='m-2'/>";
                                                
                                                }
                                            }
                                    echo    "</td>
				                        </tr>";
                                }
				                ?>
				            </table>   
            		</div>
				      <div class='modal-footer'>
				        <button type='button' class='btn btn-warning text-white' data-dismiss='modal'>Close</button>
				      </div>
				    </div>
				  </div>
				</div>

				<script>
					$('#ModalItensBase').modal();
				</script>  
                <?php
            }
		}
	}
}