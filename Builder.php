<h3 class='p-2 m-2 bg-secondary text-warning text-center'>Team Builder</h3><br/><br/>

<?php 
//Protocolos para Inserir/Remover Campeões da Build ou Limpar a Build
    $aux = funSelect("tb_build", " COUNT(ID_CAMPEAO) AS QTD ", " ");
    if(isset($_GET['acao'])){
        if($_GET['acao'] == 'I'){
            if($aux[0]['QTD'] < 9){ 
                
                $id = $_GET['id'];
                $campo = " ID_CAMPEAO ";
                $valor = " '$id' ";
                funInsert("tb_build", $campo, $valor);
                unset($_GET['id']);
                
            }
            
        }elseif($_GET['acao'] == 'R'){
            
                $id = $_GET['id'];
                $argumento = " WHERE ID_CAMPEAO = '$id' ";
                funDelete("tb_build", $argumento);
                unset($_GET['id']);
            
        }elseif($_GET['acao'] == 'D'){
            
            funDelete("tb_build", " ");
            
        }
    }
?>

<div class="row m-3">
    <div class="col-3"><!-- DIV de listagem dos Campeões, segregados por custo -->
        <h4 class="text-secondary"> Escolha seus campeões: </h4><hr style='border-color: #FFFFFF'/>
            <?php 
                $campos = " C.ID, C.FOTO, C.NOME as NOMEC, O.NOME as NOMEO, CL.NOME as NOMECL, C.CUSTO ";
                for($i=1; $i<8; $i++){
                    switch($i){
                        case 1:
                            $borda = " style='border: 2px solid gray; ";
                            break;
                        case 2:
                            $borda = " style='border: 2px solid green; ";
                            break;
                        case 3:
                            $borda = " style='border: 2px solid blue; ";
                            break;
                        case 4:
                            $borda = " style='border: 2px solid purple; ";
                            break;
                        case 5:
                            $borda = " style='border: 2px solid yellow; ";
                            break;
                        case 7:
                            $borda = " style='border: 2px solid; border-color: purple blue green yellow; ";
                            break;
                    }
                    if($i != 6){
                        $IouR = "I";
                        $estilo = $borda . " filter: contrast(100%);' ";
                        $argumentos = " WHERE O.ID = OC.ID_ORIGEM and OC.ID_CAMPEAO = C.ID and CL.ID = CLC.ID_CLASSE and CLC.ID_CAMPEAO = C.ID AND CUSTO = $i ORDER BY NOMEC ";
                        $tabela = funSelect(" tb_campeao C, tb_origem O, tb_classe CL, tb_oricam OC, tb_clacam CLC ", $campos, $argumentos);
                        $equipe = funSelect("tb_build", " ID_CAMPEAO ", " ");
                        
                        echo " <div class='row border border-light m-3 p-3 bg-secondary'>
                        
                        <h5> Custo $i: </h5><hr/>";
                        
                        for($j=0; $j<count($tabela); $j++){
                            for($k=0; $k<count($equipe); $k++){
                                if($tabela[$j]['ID'] == $equipe[$k]['ID_CAMPEAO']){
                                    $IouR = "R";
                                    $estilo = $borda . " filter: contrast(40%);' ";
                                    break;
                                }else{
                                    $estilo = $borda . " filter: contrast(100%);' ";
                                    $IouR = "I";
                                }
                            }
                            if($j != count($tabela) - 1){
                                if($tabela[$j]['ID'] == $tabela[$j+1]['ID']){
                                    if($tabela[$j]['NOMEO'] != $tabela[$j+1]['NOMEO']){
                                        echo" <div class='col-3 p-2'> <a href='Index.php?opc=B&acao=$IouR&id=".$tabela[$j]['ID']."' data-toggle='tooltip' data-placement='top' title='Campeão:(".$tabela[$j]['NOMEC'].") Classe:(".$tabela[$j]['NOMECL'].") Origem:(".$tabela[$j]['NOMEO']." | ".$tabela[$j+1]['NOMEO'].") Custo:(".$tabela[$j]['CUSTO'].")'> <img src='Imagens/".$tabela[$j]['FOTO']."' width='40px' heigth='40px' $estilo/> </a> </div> ";
                                    }else{
                                        echo" <div class='col-3 p-2'> <a href='Index.php?opc=B&acao=$IouR&id=".$tabela[$j]['ID']."' data-toggle='tooltip' data-placement='top' title='Campeão:(".$tabela[$j]['NOMEC'].") Classe:(".$tabela[$j]['NOMECL']." | ".$tabela[$j+1]['NOMECL'].") Origem:(".$tabela[$j]['NOMEO'].") Custo:(".$tabela[$j]['CUSTO'].")'> <img src='Imagens/".$tabela[$j]['FOTO']."' width='40px' heigth='40px' $estilo/> </a> </div> ";
                                    }
                                    $j++;
                                }else{
                                    
                                    echo" <div class='col-3 p-2'> <a href='Index.php?opc=B&acao=$IouR&id=".$tabela[$j]['ID']."' data-toggle='tooltip' data-placement='top' title='Campeão:(".$tabela[$j]['NOMEC'].") Classe:(".$tabela[$j]['NOMECL'].") Origem:(".$tabela[$j]['NOMEO'].") Custo:(".$tabela[$j]['CUSTO'].")'> <img src='Imagens/".$tabela[$j]['FOTO']."' width='40px' heigth='40px' $estilo/> </a> </div> ";
                                    
                                }
                            }else{
                                    echo" <div class='col-3 p-2'> <a href='Index.php?opc=B&acao=$IouR&id=".$tabela[$j]['ID']."' data-toggle='tooltip' data-placement='top' title='Campeão:(".$tabela[$j]['NOMEC'].") Classe:(".$tabela[$j]['NOMECL'].") Origem:(".$tabela[$j]['NOMEO'].") Custo:(".$tabela[$j]['CUSTO'].")'> <img src='Imagens/".$tabela[$j]['FOTO']."' width='40px' heigth='40px' $estilo/> </a> </div> ";
                            }
                        }
                        echo " </div> ";
                    }
                }
            ?>
    </div>
    <div class="col"><!-- DIV da construção da Build -->
        <?php
        $qtd = funSelect("tb_build", " COUNT(ID_CAMPEAO) AS QTD ", " ");
        echo "<h1 class='text-center text-secondary'> 
        Sua Equipe - (".$qtd[0]['QTD']."/9) 
        <a class='btn btn-outline-primary' href='Index.php?opc=B&acao=D'> Limpar Time </a>
        </h1>";  
            
        ?>
        <div class="border border-primary p-5 m-5"><!-- DIV de exibição dos campeões que estão na Build -->
            <?php 
            
                $tabelas = " tb_build B, tb_campeao C, tb_classe CL, tb_origem O, tb_clacam CLC, tb_oricam OC ";
                $campos = " C.FOTO as FOTOC, C.NOME as NOMEC, C.ID as IDC, O.ID as IDO, O.FOTO as FOTOO, O.NOME as NOMEO, CL.ID as IDCL, CL.FOTO as FOTOCL, CL.NOME as NOMECL ";
                $argumentos = " WHERE B.ID_CAMPEAO = C.ID AND C.ID = CLC.ID_CAMPEAO AND CLC.ID_CLASSE = CL.ID AND C.ID = OC.ID_CAMPEAO AND OC.ID_ORIGEM = O.ID ORDER BY NOMEC ";
                $time = funSelect($tabelas, $campos, $argumentos);
            
                if($qtd[0]['QTD'] == 0){
                    echo "<h3 class='text-center text-secondary'> SUA EQUIPE ESTÁ VAZIA!! </h3>";
                }else{
    
                    echo"<div class='row text-light'> ";
                        for($i=0; $i<count($time); $i++){
                            
                            if($i != count($time) - 1){
                                
                                if($time[$i]['IDC'] == $time[$i+1]['IDC']){
                                    if($time[$i]['FOTOO'] != $time[$i+1]['FOTOO']){
                                        
                                        echo" <div class='col-3 text-center'>
                                        
                                        <img src='Imagens/".$time[$i]['FOTOCL']."' witdh='20px' height='20px' class='rounded-circle bg-secondary' alt='Classe - ".$time[$i]['NOMECL']."' title='Classe - ".$time[$i]['NOMECL']."'/> 
                                        
                                        <img src='Imagens/".$time[$i]['FOTOO']."' witdh='20px' height='20px' class='rounded-circle bg-secondary' alt='Origem - ".$time[$i]['NOMEO']."' title='Origem - ".$time[$i]['NOMEO']."'/> 
                                        
                                        <img src='Imagens/".$time[$i+1]['FOTOO']."' witdh='20px' height='20px' class='rounded-circle bg-secondary' alt='Origem - ".$time[$i+1]['NOMEO']."' title='Origem - ".$time[$i+1]['NOMEO']."'/> <br/> 
                                        
                                        <a href='Index.php?opc=B&acao=R&id=".$time[$i]['IDC']."'><img src='Imagens/".$time[$i]['FOTOC']."' witdh='40px' height='40px' alt='Campeão - ".$time[$i]['NOMEC']."' title='Campeão - ".$time[$i]['NOMEC']."'/></a> <br/> ".$time[$i]['NOMEC']." 
                                        
                                        </div> "; 
                                        $i++;
                                        
                                    }else{
                                        
                                        echo" <div class='col-3 text-center'> 
                                        <img src='Imagens/".$time[$i]['FOTOCL']."' witdh='20px' height='20px' class='rounded-circle bg-secondary' alt='Classe - ".$time[$i]['NOMECL']."' title='Classe - ".$time[$i]['NOMECL']."'/> 
                                        
                                        <img src='Imagens/".$time[$i+1]['FOTOCL']."' witdh='20px' height='20px' class='rounded-circle bg-secondary' alt='Classe - ".$time[$i+1]['NOMECL']."' title='Classe - ".$time[$i+1]['NOMECL']."'/> 
                                        
                                        <img src='Imagens/".$time[$i]['FOTOO']."' witdh='20px' height='20px' class='rounded-circle bg-secondary' alt='Origem - ".$time[$i]['NOMEO']."' title='Origem - ".$time[$i]['NOMEO']."'/> <br/>
                                        
                                        <a href='Index.php?opc=B&acao=R&id=".$time[$i]['IDC']."'><img src='Imagens/".$time[$i]['FOTOC']."' witdh='40px' height='40px' alt='Campeão - ".$time[$i]['NOMEC']."' title='Campeão - ".$time[$i]['NOMEC']."'/></a> <br/> ".$time[$i]['NOMEC']."
                                        </div> ";
                                        $i++;
                                    
                                    }
                                }else{
                                    
                                    echo" <div class='col-3 text-center'> 
                                    <img src='Imagens/".$time[$i]['FOTOCL']."' witdh='20px' height='20px' class='rounded-circle bg-secondary' alt='Classe - ".$time[$i]['NOMECL']."' title='Classe - ".$time[$i]['NOMECL']."'/> 
                                    
                                    <img src='Imagens/".$time[$i]['FOTOO']."' witdh='20px' height='20px' class='rounded-circle bg-secondary' alt='Origem - ".$time[$i]['NOMEO']."' title='Origem - ".$time[$i]['NOMEO']."'/> <br/> 
                                    
                                    <a href='Index.php?opc=B&acao=R&id=".$time[$i]['IDC']."'><img src='Imagens/".$time[$i]['FOTOC']."' witdh='40px' height='40px' alt='Campeão - ".$time[$i]['NOMEC']."' title='Campeão - ".$time[$i]['NOMEC']."'/></a> <br/> ".$time[$i]['NOMEC']." 
                                    </div> ";
                                
                                }
                                
                            }else{
                
                             echo" <div class='col-3 text-center'> 
                             <img src='Imagens/".$time[$i]['FOTOCL']."' witdh='20px' height='20px' class='rounded-circle bg-secondary' alt='Classe - ".$time[$i]['NOMECL']."' title='Classe - ".$time[$i]['NOMECL']."'/> 
                             
                             <img src='Imagens/".$time[$i]['FOTOO']."' witdh='20px' height='20px' class='rounded-circle bg-secondary' alt='Origem - ".$time[$i]['NOMEO']."' title='Origem - ".$time[$i]['NOMEO']."'/> <br/> 
                             
                             <a href='Index.php?opc=B&acao=R&id=".$time[$i]['IDC']."'><img src='Imagens/".$time[$i]['FOTOC']."' witdh='40px' height='40px' alt='Campeão - ".$time[$i]['NOMEC']."' title='Campeão - ".$time[$i]['NOMEC']."'/></a> <br/> ".$time[$i]['NOMEC']." </div> ";   
                            
                            }
                        }
                    echo " </div> ";
                    
                }
            ?>
        </div>
        <div class="row text-secondary"><!-- DIV de exibição das classes/origens compostas na Build -->
            <div class="col border border-primary m-5"><!-- DIV de exibição das classes compostas na Build -->
                <h4 class="text-center"> Classes </h4>
                <hr style='border-color: #FFFFFF'/>
                <?php 
                $classe = funSelect("tb_classe", " * ", " ORDER BY FOTO "); 
                
                $tabelas = " tb_build B, tb_campeao C, tb_classe CL, tb_clacam CLC ";
                $campos = " CL.ID, count(B.ID_CAMPEAO) as QTD ";
                $argumentos = " WHERE B.ID_CAMPEAO = C.ID AND C.ID = CLC.ID_CAMPEAO AND CLC.ID_CLASSE = CL.ID GROUP BY CL.ID ";
                $time_classe = funSelect($tabelas, $campos, $argumentos);
                $bg1 = " ";
                $bg2 = " ";
                $bg3 = " ";
                $filtro = " style='filter: contrast(10%);' ";
                $cont = 0;
                ?>
                <div class="row">
                    <?php
                        for($i=0; $i<count($classe); $i++){
                            $cont = 0;
                            $bg1 = " ";
                            $bg2 = " ";
                            $bg3 = " ";
                            $filtro = " style='filter: contrast(10%);' ";
                            
                            for($k=0; $k<count($time_classe); $k++){
                                if($time_classe[$k]['ID'] == $classe[$i]['ID']){
                                    $cont = $time_classe[$k]['QTD'];
                                    $filtro = " ";
                                }
                            }
                            
                            echo"<div class='col-2 m-3 text-light' $filtro><spam class='text-danger'> $cont </spam><br/><img src='Imagens/".$classe[$i]['FOTO']."' width='40px' height='40px' class='border border-warning' alt='Classe - ".$classe[$i]['NOME']."' data-toggle='tooltip' data-placement='top' 
                            ";
                            if($classe[$i]['MARCA_DESCRIP'] == NULL){
                                echo"title='".$classe[$i]['DESCRIP']."'";
                            }else{
                                echo"title='".$classe[$i]['MARCA_DESCRIP']."'";
                            }
                            echo"/>";
                            
                            switch($classe[$i]['MARCA']){
                                case 1:
                                    
                                    for($k=0; $k<count($time_classe); $k++){
                                        if($time_classe[$k]['ID'] == $classe[$i]['ID']){
                                    
                                            if($cont >= $classe[$i]['QTD_MK1']){
                                                $bg1 = "style='background-color: #FFC412; color: black;'";
                                                break;
                                            }
                                            
                                        }  
                                    }
                                    
                                    echo" <p><spam $bg1> ".$classe[$i]['QTD_MK1']." </spam></p> </div>";
                                    break;
                                case 2:
                                    
                                    for($k=0; $k<count($time_classe); $k++){
                                        if($time_classe[$k]['ID'] == $classe[$i]['ID']){
                                    
                                            if($cont >= $classe[$i]['QTD_MK1'] && $cont < $classe[$i]['QTD_MK2']){
                                                $bg1 = "style='background-color: #C2D1C8; color: black;'";
                                                break;
                                            }
                                            
                                            if($cont == $classe[$i]['QTD_MK2']){
                                                $bg1 = "style='background-color: #FFC412; color: black;''";
                                                $bg2 = "style='background-color: #FFC412; color: black;'";
                                                break;
                                            }
                                            
                                        }  
                                    }
                                    
                                    echo" <p><spam $bg1> ".$classe[$i]['QTD_MK1']." </spam><spam $bg2> ".$classe[$i]['QTD_MK2']."  </spam></p> </div>";
                                    break;
                                case 3:
                                    
                                    for($k=0; $k<count($time_classe); $k++){
                                        if($time_classe[$k]['ID'] == $classe[$i]['ID']){
                                    
                                            if($cont >= $classe[$i]['QTD_MK1'] && $cont < $classe[$i]['QTD_MK2']){
                                                $bg1 = "style='background-color: #FF9142; color: black;'";
                                                break;
                                            }
                                            
                                            if($cont >= $classe[$i]['QTD_MK2'] && $cont < $classe[$i]['QTD_MK3']){
                                                $bg1 = "style='background-color: #C2D1C8; color: black;'";
                                                $bg2 = "style='background-color: #C2D1C8; color: black;'";
                                                break;
                                            }
                                            
                                            if($cont >= $classe[$i]['QTD_MK3']){
                                                $bg1 = "style='background-color: #FFC412; color: black;'";
                                                $bg2 = "style='background-color: #FFC412; color: black;'";
                                                $bg3 = "style='background-color: #FFC412; color: black;'";
                                                break;
                                            } 
                                            
                                        }  
                                    }
                                    
                                    echo" <p><spam $bg1> ".$classe[$i]['QTD_MK1']." </spam><spam $bg2> ".$classe[$i]['QTD_MK2']." </spam><spam $bg3> ".$classe[$i]['QTD_MK3']." </spam></p> </div>";
                                    break;
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="col border border-primary m-5"><!-- DIV de exibição das origens compostas na Build -->
                <h4 class="text-center"> Origens </h4>
                <hr style='border-color: #FFFFFF'/>
                <?php 
                $origem = funSelect("tb_origem", " * ", " ORDER BY FOTO "); 
                
                $tabelas = " tb_build B, tb_campeao C, tb_origem O, tb_oricam OC ";
                $campos = " O.ID, count(B.ID_CAMPEAO) as QTD ";
                $argumentos = " WHERE B.ID_CAMPEAO = C.ID AND C.ID = OC.ID_CAMPEAO AND OC.ID_ORIGEM = O.ID GROUP BY O.ID ";
                $time_origem = funSelect($tabelas, $campos, $argumentos);
                ?>
                <div class="row">
                    <?php
                        for($i=0; $i<count($origem); $i++){
                            $cont = 0;
                            $bg1 = " ";
                            $bg2 = " ";
                            $bg3 = " ";
                            $filtro = " style='filter: contrast(10%);' ";
                            
                            for($k=0; $k<count($time_origem); $k++){
                                if($time_origem[$k]['ID'] == $origem[$i]['ID']){
                                    $cont = $time_origem[$k]['QTD'];
                                    $filtro = "  ";
                                    for($j=0; $j<count($time); $j++){
                                        if($time[$j]['IDCL'] == 3 && $time[$j]['IDO'] == $time_origem[$k]['ID']){
                                            $cont++;  
                                        }
                                    }
                                }
                            }
                            
                            echo"<div class='col-2 m-3 text-light' $filtro><spam class='text-danger'> $cont </spam><br/> <img src='Imagens/".$origem[$i]['FOTO']."' width='40px' height='40px' class='border border-warning' alt='Origem - ".$origem[$i]['NOME']."' data-toggle='tooltip' data-placement='top'
                            ";
                            if($origem[$i]['MARCA_DESCRIP'] == NULL){
                                echo"title='".$origem[$i]['DESCRIP']."'";
                            }else{
                                echo"title='".$origem[$i]['MARCA_DESCRIP']."'";
                            }
                            echo"/>";
                            
                            switch($origem[$i]['MARCA']){
                                case 1:
                                    
                                    for($k=0; $k<count($time_origem); $k++){
                                        if($time_origem[$k]['ID'] == $origem[$i]['ID']){
                                    
                                            if($cont >= $origem[$i]['QTD_MK1']){
                                                $bg1 = "style='background-color: #FFC412; color: black;'";
                                                break;
                                            }
                                            
                                        }  
                                    }
                                    
                                    echo" <p><spam $bg1> ".$origem[$i]['QTD_MK1']." </spam></p> </div>";
                                    break;
                                case 2:
                                    
                                    for($k=0; $k<count($time_origem); $k++){
                                        if($time_origem[$k]['ID'] == $origem[$i]['ID']){
                                    
                                            if($cont >= $origem[$i]['QTD_MK1'] && $cont < $origem[$i]['QTD_MK2']){
                                                $bg1 = "style='background-color: #C2D1C8; color: black;'";
                                                break;
                                            }
                                            
                                            if($cont == $origem[$i]['QTD_MK2']){
                                                $bg1 = "style='background-color: #FFC412; color: black;''";
                                                $bg2 = "style='background-color: #FFC412; color: black;'";
                                                break;
                                            }
                                            
                                        }  
                                    }
                                    
                                    echo" <p><spam $bg1> ".$origem[$i]['QTD_MK1']." </spam><spam $bg2> ".$origem[$i]['QTD_MK2']."  </spam></p> </div>";
                                    break;
                                case 3:
                                    
                                    for($k=0; $k<count($time_origem); $k++){
                                        if($time_origem[$k]['ID'] == $origem[$i]['ID']){
                                    
                                            if($cont >= $origem[$i]['QTD_MK1'] && $cont < $origem[$i]['QTD_MK2']){
                                                $bg1 = "style='background-color: #FF9142; color: black;'";
                                                break;
                                            }
                                            
                                            if($cont >= $origem[$i]['QTD_MK2'] && $cont < $origem[$i]['QTD_MK3']){
                                                $bg1 = "style='background-color: #C2D1C8; color: black;'";
                                                $bg2 = "style='background-color: #C2D1C8; color: black;'";
                                                break;
                                            }
                                            
                                            if($cont >= $origem[$i]['QTD_MK3']){
                                                $bg1 = "style='background-color: #FFC412; color: black;'";
                                                $bg2 = "style='background-color: #FFC412; color: black;'";
                                                $bg3 = "style='background-color: #FFC412; color: black;'";
                                                break;
                                            } 
                                            
                                        }  
                                    }
                                    
                                    echo" <p><spam $bg1> ".$origem[$i]['QTD_MK1']." </spam><spam $bg2> ".$origem[$i]['QTD_MK2']." </spam><spam $bg3> ".$origem[$i]['QTD_MK3']." </spam></p> </div>";
                                    break;
                            }
                            
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>