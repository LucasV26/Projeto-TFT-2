<div class="container">
    <div class="row">
        <div class="col">
            <h3 class='p-2 m-2 bg-dark text-warning text-center'>Controlar Campeões</h3>
            <p class='m-2 text-center'>
	           <button type="button" class="btn btn-outline-warning" onclick=location.replace('Index.php?opc=C&acao=C')>Cadastrar</button>
	           <button type="button" class="btn btn-outline-warning" onclick=location.replace('Index.php?opc=C&acao=E')>Editar</button>
            </p>
        </div>
        <div class="col">
            <h3 class='p-2 m-2 bg-dark text-warning text-center'>Controlar Itens</h3>
            <p class='m-2 text-center'>
	           <button type="button" class="btn btn-outline-warning" onclick=location.replace('Index.php?opc=C&acao=IT_C')>Cadastrar</button>
	           <button type="button" class="btn btn-outline-warning" onclick=location.replace('Index.php?opc=C&acao=IT_E')>Editar</button>
            </p>
        </div>
    </div>
</div>			
<?php

if ( isset($_GET['acao']) ) {
	$acao = $_GET['acao'];

	if ( $acao == "C" ) {	# CADASTRAR CAMPEÃO
	?>
		<h4 class='p-2 m-2 bg-secondary text-warning text-center'>Cadastrar Campeão</h4>
		<form action='Index.php?opc=C&acao=I' method='post'>

		<div class='row'>
			<div class='col-5'>
				<h6 class='text-center text-light'> Nome: <input type='text' name='nome' size='40' maxlength='40' placeholder='Nome do Campeão' required /> </h6>
			</div>
			<div class='col-5'>
				<h6 class='text-center text-light'> Foto: <input type='text' name='foto' size='40' maxlength='40' placeholder='Exemplo.png' required /> </h6>
			</div>
		</div><br/>
		<div class='row'>
			<div class='col-5'>
				<h6 class='text-center text-light'><textarea name='descrip' rows='10' cols='50' placeholder='Descrição do seu campeão' required></textarea> </h6>
			</div>			
            <div class='col-3'>
				<h6 class='text-center text-light'> Custo: 
                    <select name='custo' required>
                        <option class='text-primary' value='' disabled selected>Selecione...</option>
                        <option class='text-primary' value='1'>1</option> 
                        <option class='text-primary' value='2'>2</option> 
                        <option class='text-primary' value='3'>3</option>
                        <option class='text-primary' value='4'>4</option>
                        <option class='text-primary' value='5'>5</option>
                        <option class='text-primary' value='7'>7</option>
                    </select> 
                </h6><br/>
                <h6 class='text-light'> Estilo:<br/>
                <input type="radio" name="estilo" value="1_1" required onclick="VisivelInvisivel(this.value)"/>Uma Classe e Uma Origem<br/>
                <input type="radio" name="estilo" value="2_1" required onclick="VisivelInvisivel(this.value)"/>Duas Classes e Uma Origem<br/>
                <input type="radio" name="estilo" value="1_2" required onclick="VisivelInvisivel(this.value)"/>Uma Classe e Duas Origem<br/>
                </h6><br/>
                <div class="invisible" id="normal">
                    <h6 class='text-light'> Origem:
                    <select name='origem' required>
                        <option class='text-primary' value='' disabled selected>Selecione...</option>
                        <option class='text-primary' value='1'>Aço</option> 
                        <option class='text-primary' value='2'>Bosque</option> 
                        <option class='text-primary' value='3'>Cristal</option>
                        <option class='text-primary' value='4'>Deserto</option>
                        <option class='text-primary' value='5'>Elétrico</option>
                        <option class='text-primary' value='6'>Glacial</option>
                        <option class='text-primary' value='7'>Inferno</option>
                        <option class='text-primary' value='8'>Luz</option>
                        <option class='text-primary' value='9'>Montanha</option>
                        <option class='text-primary' value='10'>Nuvem</option>
                        <option class='text-primary' value='11'>Oceano</option>
                        <option class='text-primary' value='12'>Sombra</option>
                        <option class='text-primary' value='13'>Veneno</option>
                    </select></h6><br/>
                    <div class="invisible" id="origem2">
                        <h6 class='text-light'> Origem 2:
                        <select name='origem2' required>
                            <option class='text-primary' value='a' selected>Selecione...</option>
                            <option class='text-primary' value='1'>Aço</option> 
                            <option class='text-primary' value='2'>Bosque</option> 
                            <option class='text-primary' value='3'>Cristal</option>
                            <option class='text-primary' value='4'>Deserto</option>
                            <option class='text-primary' value='5'>Elétrico</option>
                            <option class='text-primary' value='6'>Glacial</option>
                            <option class='text-primary' value='7'>Inferno</option>
                            <option class='text-primary' value='8'>Luz</option>
                            <option class='text-primary' value='9'>Montanha</option>
                            <option class='text-primary' value='10'>Nuvem</option>
                            <option class='text-primary' value='11'>Oceano</option>
                            <option class='text-primary' value='12'>Sombra</option>
                            <option class='text-primary' value='13'>Veneno</option>
                        </select></h6><br/>
                    </div>
                    <h6 class='text-light'> Classe: 
                    <select name='classe' required>
                        <option class='text-primary' value='' disabled selected>Selecione...</option>
                        <option class='text-primary' value='1'>Alquimista</option> 
                        <option class='text-primary' value='2'>Assassino</option> 
                        <option class='text-primary' value='3'>Avatar</option>
                        <option class='text-primary' value='4'>Bezerker</option>
                        <option class='text-primary' value='5'>Druida</option>
                        <option class='text-primary' value='6'>Invocador</option>
                        <option class='text-primary' value='7'>Mago</option>
                        <option class='text-primary' value='8'>Mestre das Lâminas</option>
                        <option class='text-primary' value='9'>Místico</option>
                        <option class='text-primary' value='10'>Patrulheiro</option>
                        <option class='text-primary' value='11'>Predador</option>
                        <option class='text-primary' value='12'>Vigia</option>
                    </select></h6><br/>
                    <div class="invisible" id="classe2">
                        <h6 class='text-light'> Classe 2: 
                        <select name='classe2' required>
                            <option class='text-primary' value='a' selected>Selecione...</option>
                            <option class='text-primary' value='1'>Alquimista</option> 
                            <option class='text-primary' value='2'>Assassino</option> 
                            <option class='text-primary' value='3'>Avatar</option>
                            <option class='text-primary' value='4'>Bezerker</option>
                            <option class='text-primary' value='5'>Druida</option>
                            <option class='text-primary' value='6'>Invocador</option>
                            <option class='text-primary' value='7'>Mago</option>
                            <option class='text-primary' value='8'>Mestre das Lâminas</option>
                            <option class='text-primary' value='9'>Místico</option>
                            <option class='text-primary' value='10'>Patrulheiro</option>
                            <option class='text-primary' value='11'>Predador</option>
                            <option class='text-primary' value='12'>Vigia</option>
                        </select></h6> 
                    </div>
                </div>
			</div>
		</div>				
		<h6 class='text-center'> <input class='btn btn-warning text-dark' type='submit' value='Cadastrar' /> </h6>
		</form>
	<?php
	}

	elseif ( $acao == "I" ) {	# INCLUIR	
		$nome = $_POST['nome'];
        $foto = $_POST['foto'];
        $descrip = $_POST['descrip'];
        $custo = $_POST['custo'];
        $origem = $_POST['origem'];
        $origem2 = $_POST['origem2'];
        $classe = $_POST['classe'];
        $classe2 = $_POST['classe2'];
        $estilo = $_POST['estilo'];
        
        $campos = " NOME, FOTO, DESCRIP, CUSTO ";
        $valores = " '$nome', '$foto', '$descrip', '$custo' ";
            
		if ( funInsert('tb_campeao', $campos, $valores) ){
            if($estilo == "1_1"){
                $id = funSelect("tb_campeao", " ID ", " WHERE NOME = '$nome' ");
                $campos_classe = " ID_CAMPEAO, ID_CLASSE ";
                $valores_classe = " '".$id[0]['ID']."', '$classe' ";
                $campos_origem = " ID_CAMPEAO, ID_ORIGEM ";
                $valores_origem = " '".$id[0]['ID']."', '$origem' ";
                if( funInsert('tb_clacam', $campos_classe, $valores_classe) && funInsert('tb_oricam', $campos_origem, $valores_origem)){
                    echo "<p class='p-2 m-2 bg-success text-white'>Campeão cadastrado com sucesso!</p>";
                }else{
                     echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao cadastrar Campeão!</p>";
                }
            }elseif($estilo == "1_2"){
                
                $id = funSelect("tb_campeao", " ID ", " WHERE NOME = '$nome' ");
                $campos_classe = " ID_CAMPEAO, ID_CLASSE ";
                $valores_classe = " '".$id[0]['ID']."', '$classe' ";
                $campos_origem = " ID_CAMPEAO, ID_ORIGEM ";
                $valores_origem = " '".$id[0]['ID']."', '$origem' ";
                $valores_origem2 = " '".$id[0]['ID']."', '$origem2' ";
                if($origem != $origem2){
                    if( funInsert('tb_clacam', $campos_classe, $valores_classe) && funInsert('tb_oricam', $campos_origem, $valores_origem) && funInsert('tb_oricam', $campos_origem, $valores_origem2)){
                        echo "<p class='p-2 m-2 bg-success text-white'>Campeão cadastrado com sucesso!</p>";
                    }else{
                         echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao cadastrar Campeão!</p>";
                    }  
                }else{
                     echo "<p class='p-2 m-2 bg-danger text-white'>Impossível Cadastrar Duas Origens Iguais!</p>";
                }
                
            }else{
                
                $id = funSelect("tb_campeao", " ID ", " WHERE NOME = '$nome' ");
                $campos_classe = " ID_CAMPEAO, ID_CLASSE ";
                $valores_classe = " '".$id[0]['ID']."', '$classe' ";
                $valores_classe2 = " '".$id[0]['ID']."', '$classe2' ";
                $campos_origem = " ID_CAMPEAO, ID_ORIGEM ";
                $valores_origem = " '".$id[0]['ID']."', '$origem' ";
                if($classe != $classe2){
                    if( funInsert('tb_clacam', $campos_classe, $valores_classe) && funInsert('tb_oricam', $campos_origem, $valores_origem) && funInsert('tb_clacam', $campos_classe, $valores_classe2)){
                        echo "<p class='p-2 m-2 bg-success text-white'>Campeão cadastrado com sucesso!</p>";
                    }else{
                         echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao cadastrar Campeão!</p>";
                    }  
                }else{
                     echo "<p class='p-2 m-2 bg-danger text-white'>Impossível Cadastrar Duas Classes Iguais!</p>";
                }
                
            }
            
        }else{
			echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao cadastrar Campeão!</p>";
        }
        
		echo "<p class='m-2'><input class='btn btn-warning text-dark' type='submit' value='Voltar' onclick=location.replace('Index.php?opc=C') /></p>";
	}

	elseif ( $acao == "E" ) {	# EDITAR	
        $argumentos = " WHERE O.ID = OC.ID_ORIGEM and OC.ID_CAMPEAO = C.ID and CL.ID = CLC.ID_CLASSE and CLC.ID_CAMPEAO = C.ID ORDER BY C.NOME ";
        $tabelas = " tb_campeao C, tb_origem O, tb_classe CL, tb_oricam OC, tb_clacam CLC ";
        $campos = " C.ID, C.DESCRIP, C.FOTO as FOTOC, C.NOME as NOMEC, O.FOTO as FOTOO, O.NOME as NOMEO, CL.FOTO as FOTOCL, CL.NOME as NOMECL, C.CUSTO ";
        
        $tabela = funSelect($tabelas, $campos, $argumentos);	
		
		?>
		<h5 class='p-2 m-2 bg-secondary text-warning text-center'>Campeões Cadastrados:</h5>
			<table class='m-2 mx-auto table table-striped table-dark text-warning'>
					<thead class='text-center'>
					<tr>
						<th scope='col' class='border border-primary'>Campeão</th>
			 			<th scope='col' class='border border-primary'>Descrição</th>
			 			<th scope='col' class='border border-primary'>Origem</th>
			 			<th scope='col' class='border border-primary'>Classe</th>
			 			<th scope='col' class='border border-primary'>Custo</th>
			 			<th scope='col' class='border border-primary'>Controles</th>
					</tr>
				</thead>
		<?php			

        for ($i = 0; $i < count($tabela); $i++) {
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
            echo  "<td scope='col' class='border border-primary'>
            <img src='Imagens/".$tabela[$i]['FOTOC']."' width='50px' height='50px' $borda alt='Campeão - ". $tabela[$i]['NOMEC'] ."' title='Campeão - ". $tabela[$i]['NOMEC'] ."'/><br/>". $tabela[$i]['NOMEC'] ."
            </td>
            
            <td scope='col' class='border border-primary'> ".$tabela[$i]['DESCRIP']." </td>
            ";
            
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
            
            <td scope='col' class='border border-primary'>
            <a href='Index.php?opc=C&acao=M&id=". $tabela[$i]['ID'] ."' >
            <img src='Imagens/alterar.png' alt='Alterar' width='40px' height='40px' alt='Editar' title='Editar'/></a><br/><br/>
            
            <a href='Index.php?opc=C&acao=X&id=". $tabela[$i]['ID'] ."' >
            <img src='Imagens/excluir.png' alt='Excluir' width='40px' height='40px' alt='Excluir' title='Excluir'/></a></td>
            </tr>";
        }
		echo "</table>";			
	}

	elseif ( $acao == "M" ) {	# MODIFICAR CAMPEÃO
		$id = $_GET['id'];
        
        $argumentos = " WHERE C.ID = '$id' and O.ID = OC.ID_ORIGEM and OC.ID_CAMPEAO = C.ID and CL.ID = CLC.ID_CLASSE and CLC.ID_CAMPEAO = C.ID ";
        $tabelas = " tb_campeao C, tb_origem O, tb_classe CL, tb_oricam OC, tb_clacam CLC ";
        $campos = " C.ID, C.DESCRIP, C.FOTO as FOTOC, C.NOME as NOMEC, O.NOME as NOMEO, O.ID as IDO, CL.NOME as NOMECL, CL.ID as IDCL, C.CUSTO ";
        
        $tabela = funSelect($tabelas, $campos, $argumentos);
		
		echo "<h4 class='p-2 m-2 bg-secondary text-warning text-center'>Alterar Campeão</h4>
		<form action='Index.php?opc=C&acao=U&id=$id' method='post'>

		<div class='row'>
			<div class='col-5'>
				<h6 class='text-center text-light'> Nome: <input type='text' name='nome' size='40' maxlength='40' value='".$tabela[0]['NOMEC']."' required /> </h6>
			</div>
			<div class='col-5'>
				<h6 class='text-center text-light'> Foto: <input type='text' name='foto' size='40' maxlength='40' value='".$tabela[0]['FOTOC']."' required /> </h6>
			</div>
		</div><br/>
		<div class='row'>
			<div class='col-5'>
				<h6 class='text-center text-light'><textarea name='descrip' rows='10' cols='50' required> ".$tabela[0]['DESCRIP']." </textarea> </h6>
			</div>			
            <div class='col-3'>
				<h6 class='text-center text-light'> Custo: 
                    <select name='custo' required>
                        <option class='text-primary' value='".$tabela[0]['CUSTO']."' selected>".$tabela[0]['CUSTO']."</option>
                        <option class='text-primary' value='1'>1</option> 
                        <option class='text-primary' value='2'>2</option> 
                        <option class='text-primary' value='3'>3</option>
                        <option class='text-primary' value='4'>4</option>
                        <option class='text-primary' value='5'>5</option>
                        <option class='text-primary' value='7'>7</option>
                    </select> 
                </h6><br/>
                <h6 class='text-light'> Estilo:<br/>
                <input type='radio' name='estilo' value='1_1' required onclick='VisivelInvisivel(this.value)' ";
        
                if(count($tabela) == 1){
                    echo"checked";
                    $aux = "normal";
                }
        
                echo"/>Uma Classe e Uma Origem<br/>
                
                <input type='radio' name='estilo' value='2_1' required onclick='VisivelInvisivel(this.value)'";
        
                if(count($tabela) != 1 && $tabela[0]['IDCL'] != $tabela[1]['IDCL']){
                    echo"checked";
                    $aux = "CL2O1";
                }
        
                echo"/>Duas Classes e Uma Origem<br/>
                <input type='radio' name='estilo' value='1_2' required onclick='VisivelInvisivel(this.value)'";
        
                if(count($tabela) != 1 && $tabela[0]['IDO'] != $tabela[1]['IDO']){
                    echo"checked";
                    $aux = "CL1O2";
                }
        
                echo"/>Uma Classe e Duas Origem<br/>
                </h6><br/>
                <input type='hidden' name='antiga_origem' value='".$tabela[0]['IDO']."'/>
                <input type='hidden' name='aux' value='$aux'/>
                <div class='visible' id='normal'>
                    <h6 class='text-light'> Origem:
                    <select name='origem' required>
                        <option class='text-primary' value='".$tabela[0]['IDO']."' selected>".$tabela[0]['NOMEO']."</option>
                        <option class='text-primary' value='1'>Aço</option> 
                        <option class='text-primary' value='2'>Bosque</option> 
                        <option class='text-primary' value='3'>Cristal</option>
                        <option class='text-primary' value='4'>Deserto</option>
                        <option class='text-primary' value='5'>Elétrico</option>
                        <option class='text-primary' value='6'>Glacial</option>
                        <option class='text-primary' value='7'>Inferno</option>
                        <option class='text-primary' value='8'>Luz</option>
                        <option class='text-primary' value='9'>Montanha</option>
                        <option class='text-primary' value='10'>Nuvem</option>
                        <option class='text-primary' value='11'>Oceano</option>
                        <option class='text-primary' value='12'>Sombra</option>
                        <option class='text-primary' value='13'>Veneno</option>
                    </select></h6><br/>";
                    
                    if($aux == "CL1O2"){
                        echo"<input type='hidden' name='antiga_origem2' value='".$tabela[1]['IDO']."'/>";
                    }else{
                        echo"<input type='hidden' name='antiga_origem2' value=' '/>";
                    }
                    
                    echo"<div class='";
        
                        if($aux == "CL1O2"){
                            echo"visible";
                        }else{
                            echo"invisible";
                        }
        
                        echo"' id='origem2'>
                        <h6 class='text-light'> Origem 2:
                        <select name='origem2' required>";
        
                            if($aux == "CL1O2"){
                                echo"<option class='text-primary' value='".$tabela[1]['IDO']."' selected>".$tabela[1]['NOMEO']."</option>";
                            }else{
                                echo"<option class='text-primary' value='a' selected>Selecione...</option>";
                            }
                            
                            
                            echo"<option class='text-primary' value='1'>Aço</option> 
                            <option class='text-primary' value='2'>Bosque</option> 
                            <option class='text-primary' value='3'>Cristal</option>
                            <option class='text-primary' value='4'>Deserto</option>
                            <option class='text-primary' value='5'>Elétrico</option>
                            <option class='text-primary' value='6'>Glacial</option>
                            <option class='text-primary' value='7'>Inferno</option>
                            <option class='text-primary' value='8'>Luz</option>
                            <option class='text-primary' value='9'>Montanha</option>
                            <option class='text-primary' value='10'>Nuvem</option>
                            <option class='text-primary' value='11'>Oceano</option>
                            <option class='text-primary' value='12'>Sombra</option>
                            <option class='text-primary' value='13'>Veneno</option>
                        </select></h6><br/>
                    </div>
                    <input type='hidden' name='antiga_classe' value='".$tabela[0]['IDCL']."'/>
                    <h6 class='text-light'> Classe: 
                    <select name='classe' required>
                        <option class='text-primary' value='".$tabela[0]['IDCL']."' selected>".$tabela[0]['NOMECL']."</option>
                        <option class='text-primary' value='1'>Alquimista</option> 
                        <option class='text-primary' value='2'>Assassino</option> 
                        <option class='text-primary' value='3'>Avatar</option>
                        <option class='text-primary' value='4'>Bezerker</option>
                        <option class='text-primary' value='5'>Druida</option>
                        <option class='text-primary' value='6'>Invocador</option>
                        <option class='text-primary' value='7'>Mago</option>
                        <option class='text-primary' value='8'>Mestre das Lâminas</option>
                        <option class='text-primary' value='9'>Místico</option>
                        <option class='text-primary' value='10'>Patrulheiro</option>
                        <option class='text-primary' value='11'>Predador</option>
                        <option class='text-primary' value='12'>Vigia</option>
                    </select></h6><br/>";
                    
                    if($aux == "CL2O1"){
                        echo"<input type='hidden' name='antiga_classe2' value='".$tabela[1]['IDCL']."'/>";
                    }else{
                        echo"<input type='hidden' name='antiga_classe2' value=' '/>";
                    }
                    
                   echo"<div class='";
        
                    if($aux == "CL2O1"){
                        echo"visible";
                    }else{
                        echo"invisible";
                    }
                        
                    echo"' id='classe2'>
                        <h6 class='text-light'> Classe 2: 
                        <select name='classe2' required>";
                            
                            if($aux == "CL2O1"){
                                echo"<option class='text-primary' value='".$tabela[1]['IDCL']."' selected>".$tabela[1]['NOMECL']."</option>";
                            }else{
                                echo"<option class='text-primary' value='a' selected>Selecione...</option>";
                            }
                            
                            echo"<option class='text-primary' value='1'>Alquimista</option> 
                            <option class='text-primary' value='2'>Assassino</option> 
                            <option class='text-primary' value='3'>Avatar</option>
                            <option class='text-primary' value='4'>Bezerker</option>
                            <option class='text-primary' value='5'>Druida</option>
                            <option class='text-primary' value='6'>Invocador</option>
                            <option class='text-primary' value='7'>Mago</option>
                            <option class='text-primary' value='8'>Mestre das Lâminas</option>
                            <option class='text-primary' value='9'>Místico</option>
                            <option class='text-primary' value='10'>Patrulheiro</option>
                            <option class='text-primary' value='11'>Predador</option>
                            <option class='text-primary' value='12'>Vigia</option>
                        </select></h6> 
                    </div>
                </div> 
			</div>
		</div>					
		<h6 class='text-center'> <input class='btn btn-warning text-dark' type='submit' value='Alterar' /> </h6>
		</form>";				
	}

	elseif ( $acao == "U" ) {	# UPDATE
		$id = $_GET['id'];
        
        $aux = $_POST['aux'];
        $estilo = $_POST['estilo'];
		$nome = $_POST['nome'];
        $foto = $_POST['foto'];
        $descrip = $_POST['descrip'];
        $custo = $_POST['custo'];
        $origem = $_POST['origem'];
        $antiga_origem = $_POST['antiga_origem'];
        $origem2 = $_POST['origem2'];
        $antiga_origem2 = $_POST['antiga_origem2'];
        $classe = $_POST['classe'];
        $antiga_classe = $_POST['antiga_classe'];
        $classe2 = $_POST['classe2'];
        $antiga_classe2 = $_POST['antiga_classe2'];
        
        $campos = " NOME, FOTO, DESCRIP, CUSTO ";
        $valores = " '$nome', '$foto', '$descrip', '$custo' ";
        
        $alteracoes = "  NOME = '$nome',
                         FOTO = '$foto',
                         DESCRIP = '$descrip',
                         CUSTO = '$custo'";
        
        $argumentos = "  WHERE ID = '$id' ";
        
        $alter_origem = " ID_ORIGEM = $origem ";
        $alter_origem2 = " ID_ORIGEM = $origem2 ";
        $alter_classe = " ID_CLASSE = $classe ";
        $alter_classe2 = " ID_CLASSE = $classe2 ";
        
        $campos_classe = " ID_CAMPEAO, ID_CLASSE ";
        $valores_classe = " '$id', '$classe2' ";
        $campos_origem = " ID_CAMPEAO, ID_ORIGEM ";
        $valores_origem = " '$id', '$origem2' ";
        
        $argumentos_classe = " WHERE ID_CAMPEAO = '$id' AND ID_CLASSE = '$antiga_classe' ";
        $argumentos_classe2 = " WHERE ID_CAMPEAO = '$id' AND ID_CLASSE = '$antiga_classe2' ";
        $argumentos_origem = " WHERE ID_CAMPEAO = '$id' AND ID_ORIGEM = '$antiga_origem' ";
        $argumentos_origem2 = " WHERE ID_CAMPEAO = '$id' AND ID_ORIGEM = '$antiga_origem2' ";
        
        $argumentos_origem_classe = " WHERE ID_CAMPEAO = '$id' ";
        
        if($estilo == "1_1"){
            
            if($aux == "normal"){
                
                if (funUpdate('tb_campeao', $alteracoes, $argumentos) && funUpdate('tb_oricam', $alter_origem, $argumentos_origem_classe) && funUpdate('tb_clacam', $alter_classe, $argumentos_origem_classe)){		 
                    echo "<p class='p-2 m-2 bg-success text-white'>Campeão alterado com sucesso!</p>";		
                }else{	 
                    echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao alterar Campeão!</p>";
                }
                
            }elseif($aux == "CL2O1"){
                
                if (funDelete('tb_clacam', $argumentos_classe2) && funUpdate('tb_campeao', $alteracoes, $argumentos) && funUpdate('tb_oricam', $alter_origem, $argumentos_origem_classe) && funUpdate('tb_clacam', $alter_classe, $argumentos_classe)){		 
                    echo "<p class='p-2 m-2 bg-success text-white'>Campeão alterado com sucesso!</p>";		
                }else{	 
                   echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao alterar Campeão!</p>";
                }
                
            }elseif($aux == "CL1O2"){
                
                if (funDelete('tb_oricam', $argumentos_origem2) && funUpdate('tb_campeao', $alteracoes, $argumentos) && funUpdate('tb_oricam', $alter_origem, $argumentos_origem) && funUpdate('tb_clacam', $alter_classe, $argumentos_origem_classe)){		 
                    echo "<p class='p-2 m-2 bg-success text-white'>Campeão alterado com sucesso!</p>";		
                }else{	 
                   echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao alterar Campeão!</p>";
                }
                
            }
            
        }elseif($estilo == "1_2"){
            
            if($origem != $origem2){
                if($aux == "normal"){
                    
                    if (funUpdate('tb_campeao', $alteracoes, $argumentos) && funUpdate('tb_oricam', $alter_origem, $argumentos_origem_classe) && funUpdate('tb_clacam', $alter_classe, $argumentos_origem_classe) && funInsert('tb_oricam', $campos_origem, $valores_origem)){		 
                        echo "<p class='p-2 m-2 bg-success text-white'>Campeão alterado com sucesso!</p>";		
                    }else{	 
                        echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao alterar Campeão!</p>";
                    } 
                    
                }elseif($aux == "CL2O1"){
                   
                    if (funDelete('tb_clacam', $argumentos_classe2) && funUpdate('tb_campeao', $alteracoes, $argumentos) && funUpdate('tb_oricam', $alter_origem, $argumentos_origem_classe) && funUpdate('tb_clacam', $alter_classe, $argumentos_classe) && funInsert('tb_oricam', $campos_origem, $valores_origem)){		 
                        echo "<p class='p-2 m-2 bg-success text-white'>Campeão alterado com sucesso!</p>";		
                    }else{	 
                        echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao alterar Campeão!</p>";
                    }
                    
                }elseif($aux == "CL1O2"){
                    
                    if (funUpdate('tb_campeao', $alteracoes, $argumentos) && funUpdate('tb_oricam', $alter_origem, $argumentos_origem) && funUpdate('tb_oricam', $alter_origem2, $argumentos_origem2) && funUpdate('tb_clacam', $alter_classe, $argumentos_origem_classe)){		 
                        echo "<p class='p-2 m-2 bg-success text-white'>Campeão alterado com sucesso!</p>";		
                    }else{	 
                        echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao alterar Campeão!</p>";
                    }
                    
                } 
            }else{
                echo "<p class='p-2 m-2 bg-danger text-white'>Impossível Cadastrar Duas Origens Iguais!</p>";
            }
            
        }elseif($estilo == "2_1"){
            
            if($classe != $classe2){
                if($aux == "normal"){
                    
                    if (funUpdate('tb_campeao', $alteracoes, $argumentos) && funUpdate('tb_oricam', $alter_origem, $argumentos_origem_classe) && funUpdate('tb_clacam', $alter_classe, $argumentos_origem_classe) && funInsert('tb_clacam', $campos_classe, $valores_classe)){		 
                        echo "<p class='p-2 m-2 bg-success text-white'>Campeão alterado com sucesso!</p>";		
                    }else{	 
                        echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao alterar Campeão!</p>";
                    } 
                    
                }elseif($aux == "CL2O1"){
                   
                    if (funUpdate('tb_campeao', $alteracoes, $argumentos) && funUpdate('tb_oricam', $alter_origem, $argumentos_origem_classe) && funUpdate('tb_clacam', $alter_classe, $argumentos_classe) && funUpdate('tb_clacam', $alter_classe2, $argumentos_classe2)){		 
                        echo "<p class='p-2 m-2 bg-success text-white'>Campeão alterado com sucesso!</p>";		
                    }else{	 
                        echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao alterar Campeão!</p>";
                    }
                    
                }elseif($aux == "CL1O2"){
                    
                    if (funDelete('tb_oricam', $argumentos_origem2) && funUpdate('tb_campeao', $alteracoes, $argumentos) && funUpdate('tb_clacam', $alter_classe, $argumentos_origem_classe) && funUpdate('tb_oricam', $alter_origem, $argumentos_origem) && funInsert('tb_clacam', $campos_classe, $valores_classe)){		 
                        echo "<p class='p-2 m-2 bg-success text-white'>Campeão alterado com sucesso!</p>";		
                    }else{	 
                        echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao alterar Campeão!</p>";
                    }
                    
                } 
            }else{
                echo "<p class='p-2 m-2 bg-danger text-white'>Impossível Cadastrar Duas Classes Iguais!</p>";
            }
            
        }
        
		echo "<p class='m-2'><input class='btn btn-warning text-dark' type='submit' value='Voltar' onclick=location.replace('Index.php?opc=C&acao=E') /></p>";
    }
    
    elseif ( $acao == "X" ) {	# DELETE
		$id = $_GET['id'];
        
        $argumentos = " WHERE ID = '$id' ";
        $argumentos_origem_classe = " WHERE ID_CAMPEAO = '$id' ";
		if (funDelete('tb_clacam', $argumentos_origem_classe) && funDelete('tb_oricam', $argumentos_origem_classe) && funDelete('tb_campeao', $argumentos)){		
			echo "<p class='p-2 m-2 bg-success text-white'>Campeão excluído com sucesso!</p>";
        }else{ 
			echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao excluir Campeão!</p>";
        }
		echo "<p class='m-2'><input class='btn btn-warning text-dark' type='submit' value='Voltar' onclick=location.replace('Index.php?opc=C&acao=E') /></p>";		
	}

elseif ( $acao == "IT_C" ) {	# CADASTRAR ITENS
        
	?>
        <div>
            <h4 class='p-2 m-2 bg-secondary text-warning text-center'>Cadastrar Itens</h4>
            <form action='Index.php?opc=C&acao=IT_I' method='post'>
                <h6 class="text-center text-light"><label> Deseja criar um: </label><br/>
                <input type="radio" name="tipo_item" value="base" required onclick="VisivelInvisivel(this.value)"/> Item Base<br/>
                <input type="radio" name="tipo_item" value="completo" required onclick="VisivelInvisivel(this.value)"/> Item Completo</h6>
                <div class='invisible' id="base">
                    <div class='row'>
                        <div class='col-4'>
                            <h6 class='text-center text-light' > Nome: 
                                <input type="text" name="nome_base" value="Nome do seu Item..." required/> 
                            </h6>
                        </div>
                        <div class='col-4'>
                            <h6 class='text-center text-light'> Foto: 
                                <input type='text' name='foto_base' value="Ex: Item.png" required /> 
                            </h6>
                        </div>
                        <div class='col-4'>
                            <h6 class='text-center text-light'> Descrição: 
                                <textarea name="descrip_base" rows="10" cols="50" required> Descreva a função de seu item... </textarea>
                            </h6>
                        </div>			
                    </div>
                </div>
                <div class='invisible' id="completo">
                    <div class='row'>
                        <div class='col-4'>
                            <h6 class='text-center text-light' > Nome: 
                                <input type="text" name="nome_completo" value="Nome do seu Item..." required/> 
                            </h6>
                        </div>
                        <div class='col-4'>
                            <h6 class='text-center text-light'> Foto: 
                                <input type='text' name='foto_completo' value="Ex: Item.png" required /> 
                            </h6>
                        </div>
                        <div class='col-4'>
                            <h6 class='text-center text-light'> Descrição: 
                                <textarea name="descrip_completo" rows="10" cols="50" required> Descreva a função de seu item... </textarea>
                            </h6>
                        </div>	
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <h6 class="text-center text-light"> Receita:<br/><br/>
                                <label> Item 1: </label>
                                 <select name="ID1" required>
                                      <option value="10" selected> Selecione... </option>
                                      <?php
                                        $tabela = funSelect("tb_itembase", " ID, NOME ", " ");
                                        for($i=0; $i<count($tabela); $i++){
                                           echo" <option value='".$tabela[$i]['ID']."'/> ".$tabela[$i]['NOME']." </option>";
                                        }
                                      ?>
                                </select><br/>                                
                                <label> Item 2: </label>
                                 <select name="ID2" required>
                                      <option value="10" selected> Selecione... </option>
                                      <?php
                                        $tabela = funSelect("tb_itembase", " ID, NOME ", " ");
                                        for($i=0; $i<count($tabela); $i++){
                                           echo" <option value='".$tabela[$i]['ID']."'/> ".$tabela[$i]['NOME']." </option>";
                                        }
                                      ?>
                                </select>
                            </h6>
                            <h5 class="text-center text-danger"> LEMBRE-SE: DOIS ITENS DIFERENTES NÃO PODEM POSSUIR RECEITAS IGUAIS! </h5>
                            <h6 class="text-center text-danger"> CHEQUE AS RECEITAS JÁ EXISTENTES PARA NÃO COMETER ERROS! </h6>
                        </div>
                        <div class="col-5">
                            <h6 class="text-justify text-light">
                                <label> Tipo: </label><br/>
                                <input type="radio" value="1" name="tipo"/>Dano Físico<br/>
                                <input type="radio" value="2" name="tipo"/>Dano Mágico<br/>
                                <input type="radio" value="3" name="tipo"/>Defensivo<br/>
                                <input type="radio" value="4" name="tipo"/>Especial
                            </h6>
                        </div>
                    </div>
                </div><br/><br/>
                <h6 class='text-center'> <input class='btn btn-warning text-dark' type='submit' value='Cadastrar' /> </h6>
            </form>
        </div>
	<?php
	}

	elseif ( $acao == "IT_I" ) {	# INCLUIR ITEM
        $tipo_item = $_POST['tipo_item'];
        if($tipo_item == "base"){
            $nome = $_POST['nome_base'];
            $foto = $_POST['foto_base'];
            $descrip = $_POST['descrip_base'];

            $campos = " NOME, FOTO, DESCRIP ";
            $valores = " '$nome', '$foto', '$descrip' "; 
                    //funInsert($tabela, $campos, $valores)   
            
		    if(funInsert('tb_itembase', $campos, $valores)){
		    	echo "<p class='p-2 m-2 bg-success text-white'>Item Base cadastrado com sucesso!</p>";
            }else{
		    	echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao cadastrar Item Base!</p>";
            }
        }else{
            $nome = $_POST['nome_completo'];
            $foto = $_POST['foto_completo'];
            $descrip = $_POST['descrip_completo'];
            $id1 = $_POST['ID1'];
            $id2 = $_POST['ID2'];
            $tipo = $_POST['tipo'];
            $aux = 0;

            $campos = " ID1, ID2, NOME, FOTO, DESCRIP, TIPO ";
            $valores = " '$id1', '$id2', '$nome', '$foto', '$descrip', '$tipo' ";
            $tabela = funSelect("tb_itemcompleto", " ID1, ID2 ", " ");
            for($i=0; $i<count($tabela); $i++){
                if($id1 == $tabela[$i]['ID2'] && $id2 == $tabela[$i]['ID1']){
                    $aux = 1;
                }
            }
                    //funInsert($tabela, $campos, $valores)   
            
		    if($aux == 0 && funInsert('tb_itemcompleto', $campos, $valores)){
		    	echo "<p class='p-2 m-2 bg-success text-white'>Item Completo cadastrado com sucesso!</p>";
            }else{
		    	echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao cadastrar Item Completo!</p>";
            }
        } 

    
		echo "<p class='m-2'><input class='btn btn-warning text-dark' type='submit' value='Voltar' onclick=location.replace('Index.php?opc=C&acao=IT_C') /></p>";
	}
    
    
	elseif ( $acao == "IT_E" ) {	# EDITAR ITEM
		 	
		$tabela_base = funSelect(" tb_itembase ", " ID, FOTO, NOME, DESCRIP ", " ");
        $tabela_base_completo = funSelect(" tb_itemcompleto ", " ID1, ID2, FOTO, NOME ", " ");
                
        
        $tabelas_completo = " tb_itembase IB1, tb_itembase IB2, tb_itemcompleto IC ";
        $campos_completo = " IC.FOTO as FOTOIC, IC.NOME as NOMEIC, IC.DESCRIP, IC.ID1, IC.ID2,IB1.NOME as NOMEIB1, IB1.FOTO as FOTOIB1, IB2.NOME as NOMEIB2, IB2.FOTO as FOTOIB2 ";
        $argumentos_completo = " WHERE IC.ID1 = IB1.ID and IC.ID2 = IB2.ID ORDER BY NOMEIC ";
                
        $tabela_completo = funSelect($tabelas_completo , $campos_completo, $argumentos_completo);
		?>
		<h3 class='p-2 m-2 bg-secondary text-warning text-center'>Itens Base:</h3>
        <h6 class="p-3 m-3 text-danger text-center"> LEMBRE-SE: APAGUE APENAS ITENS BASE QUE NÃO COMPÕE NENHUM ITEM COMPLETO!! </h6>
			<table class='m-2 w-75 mx-auto table table-striped table-dark text-warning'>
					<thead class='text-center'>
					<tr>
						<th scope='col' class='border border-primary'>Item</th>
			 			<th scope='col' class='border border-primary'>Descrição</th>
			 			<th scope='col' class='border border-primary'>Composição</th>
			 			<th scope='col' class='border border-primary'>Controles</th>
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
                                    if($tabela_base_completo[$j]['ID1'] == $tabela_base[$i]['ID'] || $tabela_base_completo[$j]['ID2'] == $tabela_base[$i]['ID']){
                                                    
                                        echo"<img src='Imagens/". $tabela_base_completo[$j]['FOTO'] ."' width='30px' height='30px' alt='Item Completo - ".$tabela_base_completo[$j]['NOME']."' title='Item Completo - ".$tabela_base_completo[$j]['NOME']."' class='m-2'/>";
                                                
                                    }
                                }
                    echo   "</td>
                            <td scope='col' class='border border-primary'>
                            <a href='Index.php?opc=C&acao=IT_M&id=". $tabela_base[$i]['ID'] ."' >
                            <img src='Imagens/alterar.png' alt='Alterar' title='Alterar' width='40px' height='40px'/></a><br/><br/>
            
                            <a href='Index.php?opc=C&acao=IT_X&id=". $tabela_base[$i]['ID'] ."' >
                            <img src='Imagens/excluir.png' alt='Excluir' title='Excluir' width='40px' height='40px'/></a></td>
				        </tr>";
            }
		echo "</table>";?>
                
		<h3 class='p-2 m-2 bg-secondary text-warning text-center'>Itens Completos:</h3>
			<table class='m-2 w-75 mx-auto table table-striped table-dark text-warning'>
					<thead class='text-center'>
					<tr>
						<th scope='col' class='border border-primary'>Item</th>
			 			<th scope='col' class='border border-primary'>Descrição</th>
			 			<th scope='col' class='border border-primary'>Receita</th>
			 			<th scope='col' class='border border-primary'>Controles</th>
					</tr>
				</thead>
		<?php			

            for($i=0; $i<count($tabela_completo); $i++){
					echo "<tr class='text-center'>
							<td scope='col' class='border border-primary'>
                            <img src='Imagens/". $tabela_completo[$i]['FOTOIC'] ."' width='50px' heigth='50px' alt='Item Completo - ". $tabela_completo[$i]['NOMEIC'] ."' title='Item Completo - ". $tabela_completo[$i]['NOMEIC'] ."'/><br/>". $tabela_completo[$i]['NOMEIC'] ."</td>
							<td scope='col' class='border border-primary'>". $tabela_completo[$i]['DESCRIP'] ."</td>
                            
				            <td scope='col' class='border border-primary'>
                            <img src='Imagens/". $tabela_completo[$i]['FOTOIB1'] ."' width='40px' height='40px' alt='Item Base - ". $tabela_completo[$i]['NOMEIB1'] ."' title='Item Base - ". $tabela_completo[$i]['NOMEIB1'] ."'/>
                            <hr/>
                            <img src='Imagens/". $tabela_completo[$i]['FOTOIB2'] ."' width='40px' height='40px' alt='Item Baseo - ". $tabela_completo[$i]['NOMEIB2'] ."' title='Item Base - ". $tabela_completo[$i]['NOMEIB2'] ."'/></td>
                            
                            <td scope='col' class='border border-primary'>
                            <a href='Index.php?opc=C&acao=IT_M&id1=". $tabela_completo[$i]['ID1'] ."&id2=". $tabela_completo[$i]['ID2'] ."' >
                            <img src='Imagens/alterar.png' alt='Alterar' title='Alterar' width='40px' height='40px'/></a><br/><br/>
            
                            <a href='Index.php?opc=C&acao=IT_X&id1=". $tabela_completo[$i]['ID1'] ."&id2=". $tabela_completo[$i]['ID2'] ."' >
                            <img src='Imagens/excluir.png' alt='Excluir' title='Excluir' width='40px' height='40px'/></a></td>
                            </tr>";
            }
		echo "</table>";
	}

	elseif ( $acao == "IT_M" ) {	# MODIFICAR ITEM
        
		if(isset($_GET['id'])){
            $id = $_GET['id'];
            $tabela = funSelect("tb_itembase", " NOME, FOTO, DESCRIP ", " WHERE ID = $id ");
            
            echo " <h4 class='p-2 m-2 bg-secondary text-warning text-center'>Alterar Item Base</h4> 
                   <form action='Index.php?opc=C&acao=IT_U&id=".$id." ' method='post'>         
                      <div class='row'>
                        <div class='col-4'>
                            <h6 class='text-center text-light' > Nome: 
                                <input type='text' name='nome' value='".$tabela[0]['NOME']."' required/> 
                            </h6>
                        </div>
                        <div class='col-4'>
                            <h6 class='text-center text-light'> Foto: 
                                <input type='text' name='foto' value='".$tabela[0]['FOTO']."' required /> 
                            </h6>
                        </div>
                        <div class='col-4'>
                            <h6 class='text-center text-light'> Descrição: 
                                <textarea name='descrip' rows='10' cols='50' required> ".$tabela[0]['DESCRIP']." </textarea>
                            </h6>
                        </div>			
                    </div>
                    <h6 class='text-center'> <input class='btn btn-warning text-dark' type='submit' value='Alterar' /> </h6>
                  </form>
            ";
        }else{
            $id1 = $_GET['id1'];
            $id2 = $_GET['id2'];
            
            $tabela_completo = funSelect("tb_itemcompleto", " NOME, FOTO, DESCRIP, TIPO ", " WHERE ID1 = $id1 and ID2 = $id2 ");
            
            $tabela_base1 = funSelect("tb_itembase", " NOME, ID ", " WHERE ID = $id1 ");
            
            $tabela_base2 = funSelect("tb_itembase", " NOME, ID ", " WHERE ID = $id2 ");
            
            echo "<h4 class='p-2 m-2 bg-secondary text-warning text-center'>Alterar Item Completo</h4> 
                   <form action='Index.php?opc=C&acao=IT_U&id1=".$id1."&id2=".$id2." ' method='post'>         
                    <div class='row'>
                        <div class='col-4'>
                            <h6 class='text-center text-light' > Nome: 
                                <input type='text' name='nome' value='".$tabela_completo[0]['NOME']."' required/> 
                            </h6>
                        </div>
                        <div class='col-4'>
                            <h6 class='text-center text-light'> Foto: 
                                <input type='text' name='foto' value='".$tabela_completo[0]['FOTO']."' required /> 
                            </h6>
                        </div>
                        <div class='col-4'>
                            <h6 class='text-center text-light'> Descrição: 
                                <textarea name='descrip' rows='10' cols='50' required> ".$tabela_completo[0]['DESCRIP']." </textarea>
                            </h6>
                        </div>	
                    </div>
                    <div class='row'>
                        <div class='col-5'>
                            <h6 class='text-center text-light'> Receita:<br/><br/>
                                <label> Item 1: </label>
                                 <select name='ID1' required>
                                      <option value='".$tabela_base1[0]['ID']."' selected> ".$tabela_base1[0]['NOME']." </option>";
                                        $tabela = funSelect('tb_itembase', ' ID, NOME ', ' ');
                                        for($i=0; $i<count($tabela); $i++){
                                           if($tabela_base1[0]['ID'] != $tabela[$i]['ID'])
                                           echo" <option value='".$tabela[$i]['ID']."'/> ".$tabela[$i]['NOME']." </option>";
                                        }
            
        echo                    "</select><br/>                                
                                <label> Item 2: </label>
                                 <select name='ID2' required>
                                      <option value='".$tabela_base2[0]['ID']."' selected> ".$tabela_base2[0]['NOME']." </option>";
            
                                        $tabela = funSelect("tb_itembase", " ID, NOME ", " ");
                                        for($i=0; $i<count($tabela); $i++){
                                           if($tabela_base2[0]['ID'] != $tabela[$i]['ID'])
                                           echo" <option value='".$tabela[$i]['ID']."'/> ".$tabela[$i]['NOME']." </option>";
                                        }
                                     
       echo                    "</select>
                            </h6>
                            <h5 class='text-center text-danger'> LEMBRE-SE: DOIS ITENS DIFERENTES NÃO PODEM POSSUIR RECEITAS IGUAIS! </h5>
                            <h6 class='text-center text-danger'> CHEQUE AS RECEITAS JÁ EXISTENTES PARA NÃO COMETER ERROS! </h6>
                        </div>
                        <div class='col-5'>
                            <h6 class='text-justify text-light'>
                                <label> Tipo: </label><br/>";
                                for($i=1; $i<5; $i++){
                                    
                                    switch($i){
                                        case 1:
                                            $nome = "Dano Físico";
                                            break;
                                        case 2:
                                            $nome = "Dano Mágico";
                                            break;
                                        case 3:
                                            $nome = "Defensivo";
                                            break;
                                        case 4:
                                            $nome = "Especial";
                                            break;
                                    }
                                    
                                    if($tabela_completo[0]['TIPO'] == $i){
                                        echo"<input type='radio' value='$i' name='tipo' checked/> $nome <br/>";
                                    }else{
                                        echo"<input type='radio' value='$i' name='tipo'/> $nome <br/>";
                                    }
                                }
       echo                "</h6>
                        </div>
                    </div>
                    <h6 class='text-center'> <input class='btn btn-warning text-dark' type='submit' value='Alterar' /> </h6>
                  </form>
            ";
        }				
	}

	elseif ( $acao == "IT_U" ) {	# UPDATE ITEM
        
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $argumento = " WHERE ID = '$id' ";
            $nome = $_POST['nome'];
            $foto = $_POST['foto'];
            $descrip = $_POST['descrip'];
            $alteracoes = " NOME = '$nome',
                            FOTO = '$foto',
                            DESCRIP = '$descrip' ";
            
            //funUpdate($tabela, $alteracoes, $argumentos)
            if(funUpdate('tb_itembase', $alteracoes, $argumento)){	 
                echo "<p class='p-2 m-2 bg-success text-white'>Item Base alterado com sucesso!</p>";		
            }else{
                echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao alterar Item Base!</p>";
            }
        }else{
            $id1 = $_GET['id1'];
            $id2 = $_GET['id2']; 
            $argumentos = " WHERE ID1 = $id1 AND ID2 = $id2 ";
            
            $ID1 = $_POST['ID1'];
            $ID2 = $_POST['ID2'];
            $nome = $_POST['nome'];
            $foto = $_POST['foto'];
            $descrip = $_POST['descrip'];
            $tipo = $_POST['tipo'];
            $alteracoes = " ID1 = '$ID1',
                            ID2 = '$ID2',
                            NOME = '$nome',
                            FOTO = '$foto',
                            DESCRIP = '$descrip',
                            TIPO = '$tipo' ";
            
            //funUpdate($tabela, $alteracoes, $argumentos)
            if(funUpdate('tb_itemcompleto', $alteracoes, $argumentos)){	 
                echo "<p class='p-2 m-2 bg-success text-white'>Item Completo alterado com sucesso!</p>";		
            }else{
                echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao alterar Item Completo!</p>";
            }
        }
        
         echo "<p class='m-2'><input class='btn btn-warning text-dark' type='submit' value='Voltar' onclick=location.replace('Index.php?opc=C&acao=IT_E') /></p>";
        
	}

	elseif ( $acao == "IT_X" ) {	# DELETE ITEM
        
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
            //funDelete($tabela, $argumentos)
            if(funDelete('tb_itembase', " WHERE ID = '$id' ")){
                echo "<p class='p-2 m-2 bg-success text-white'>Item Base excluído com sucesso!</p>";
            }else{
                echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao excluir Item Base!</p>";
            }
        }else{
            $id1 = $_GET['id1'];
            $id2 = $_GET['id2'];
            
            //funDelete($tabela, $argumentos)
            if(funDelete('tb_itemcompleto', " WHERE ID1 = '$id1' AND ID2 = '$id2' ")){
                echo "<p class='p-2 m-2 bg-success text-white'>Item Completo excluído com sucesso!</p>";
            }else{
                echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao excluir Item Completo!</p>";
            }
        }
        
		echo "<p class='m-2'><input class='btn btn-warning text-dark' type='submit' value='Voltar' onclick=location.replace('Index.php?opc=C&acao=IT_E') /></p>";		
	}

	
}