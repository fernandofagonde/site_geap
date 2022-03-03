<?PHP
ini_set('max_execution_time', 60);
global $msg;

$casaOrigem[]='Adolfo Bezerra de Menezes';
$casaOrigem[]='Allan Kardec';
//$casaOrigem[]='Alvorada da Paz';
$casaOrigem[]='Amor e Caridade';
$casaOrigem[]='Amor e Paz';
$casaOrigem[]='Chico Xavier da Hulha Negra';
$casaOrigem[]='Léon Denis';
$casaOrigem[]='Fonte de Luz';
$casaOrigem[]='O Bom Samaritano';
$casaOrigem[]='Vicente de Paulo';

$casaDestino[]='Adolfo Bezerra de Menezes';
$casaDestino[]='Allan Kardec';
//$casaDestino[]='Alvorada da Paz';
$casaDestino[]='Amor e Caridade';
$casaDestino[]='Amor e Paz';
$casaDestino[]='Chico Xavier da Hulha Negra';
$casaDestino[]='Léon Denis';
$casaDestino[]='Fonte de Luz';
$casaDestino[]='O Bom Samaritano';
$casaDestino[]='Vicente de Paulo';

texto( "<strong>Casas participando do sorteio</strong><br>");
texto( "=================<br><br>");
for($i=0;$i<10;$i++){
    texto( "-" . $casaOrigem[$i]. "<br>");
}
texto( "<br>=================<br><br>");
texto( "<br>Sorteio realizado.<br>");
texto( "<br>=================<br><br>");
while(count($casaOrigem)>0){
    $origem = rand(0,count($casaOrigem)-1);
    $destino = rand(0,count($casaDestino)-1);
    if($casaOrigem[$origem]<>$casaDestino[$destino]){
        texto( '   -> <strong>' . $casaOrigem[$origem] . '</strong> visita <strong>' . $casaDestino[$destino].".</strong><br>");
        array_splice($casaOrigem,$origem,1);
        array_splice($casaDestino,$destino,1);
    }
}

	//Variável arquivo armazena o nome e extensão do arquivo.
	$arquivo = "sorteio.txt";
	
	//Variável $fp armazena a conexão com o arquivo e o tipo de ação.
	$fp = fopen($arquivo, "w+");

	//Escreve no arquivo aberto.
	fwrite($fp, $msg);
	
	//Fecha o arquivo.
	fclose($fp);

    function texto($txt){
        global $msg;
        echo $txt; 
        $msg .= str_replace('<br>',"\n",$txt);
        $msg  = str_replace('<strong>',"",$msg);
        $msg  = str_replace('</strong>',"",$msg);
    }

    echo "Faça do download do arquivo do sorteio clicando <a href=\"sorteio.txt\"> Aqui</a>";    