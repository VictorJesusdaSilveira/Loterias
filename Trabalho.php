<?php

$surpresinhas = [];
$dezenas ;
$jogo = 1;

  

echo("Bem vindo à lotérica TDS!" . "\n");
echo("Temos os jogos: Mega-Sena, Quina, Lotomania e Lotofácil" . "\n");
    
do {
    $jogo = Readline("Selecione um jogo: ");
    if ($jogo != "Mega-Sena" and $jogo != "Quina" and $jogo != "Lotomania" and $jogo != "Lotofácil") {
        echo("Jogo inválido, informe-o novamente." . "\n");
    }
} while ($jogo != "Mega-Sena" and $jogo != "Quina" and $jogo != "Lotomania" and $jogo != "Lotofácil");   


    
//Quina

function Quina(){

}
   




   

//Lotomania


do {
    $apostas = readline("Você pode fazer 50 apostas. ");
    if ($apostas != 50 ) {
        echo("Número inválido, informe-o novamente." . "\n");
    }
} while ($apostas < 15 or $apostas > 20);

//dezenas

for ($i=1; $i <$apostas + 1; $i++) { 
    $dezenas [$i] = readline("Informe quantas dezenas você planeja jogar $i\º numero sorteado");
    if ($dezenas [$i] < 1 or $dezenas[$i] > 80) {
                
    }
}

//surpresinhas

for ($i=1; $i<$apostas + 1; $i++) { 
    $surpresinhas [$i] = random_int(1 , 80);
    print_r($surpresinhas);
}


//Lotofácil

    function LotoFacil($surpresinhas, $dezenas, ){
        do {
            $dezenas = readline("Informe quantas apostas gostaria de fazer? ");
            if ($dezenas < 15 or $dezenas > 20) {
                print"Número inválido, informe-o novamente." . "\n";
            }
        } while ($dezenas < 15 or $dezenas > 20);
        
        $apostas = readline("Informe quantas apostas você gostaria de fazer.");
        if ($apostas > 10) {
            print"O número de apostas é maior do que o máximo";
        }
        
            
       
        }
            
        
    
        
    
        for ($i=1; $i<$apostas + 1; $i++) { 
            $surpresinhas [$i] = random_int(1 , 80);
            print_r($surpresinhas);
        }
    
    



?>