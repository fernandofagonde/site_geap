<?PHP
$casaOrigem[]='Adolfo Bezerra de Menezes';
$casaOrigem[]='Allan Kardec';
$casaOrigem[]='Alvorada da Paz';
$casaOrigem[]='Amor e Caridade';
$casaOrigem[]='Amor e Paz';
$casaOrigem[]='Chico Xavier da Hulha Negra';
$casaOrigem[]='Léon Denis';
$casaOrigem[]='Fonte de Luz';
$casaOrigem[]='O Bom Samaritano';
$casaOrigem[]='Vicente de Paulo';

$casaDestino[]='Adolfo Bezerra de Menezes';
$casaDestino[]='Allan Kardec';
$casaDestino[]='Alvorada da Paz';
$casaDestino[]='Amor e Caridade';
$casaDestino[]='Amor e Paz';
$casaDestino[]='Chico Xavier da Hulha Negra';
$casaDestino[]='Léon Denis';
$casaDestino[]='Fonte de Luz';
$casaDestino[]='O Bom Samaritano';
$casaDestino[]='Vicente de Paulo';
echo "Sorteio das casas\n";
echo "=================\n\n";
for($i=0;$i<10;$i++){
    echo "-" . $casaOrigem[$i]. "\n";
}
echo "\n=================\n\n";
while(count($casaOrigem)>0){
    $origem = rand(0,count($casaOrigem)-1);
    $destino = rand(0,count($casaDestino)-1);
    if($casaOrigem[$origem]<>$casaDestino[$destino]){
        echo '   -> ' . $casaOrigem[$origem] . ' visita ' . $casaDestino[$destino].".\n";
        array_splice($casaOrigem,$origem,1);
        array_splice($casaDestino,$destino,1);
    }
}
