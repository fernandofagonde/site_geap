<?PHP
ini_set('max_execution_time', 60);

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

echo "<strong>Sorteio das casas</strong><br>";
echo "=================<br><br>";
for($i=0;$i<10;$i++){
    echo "-" . $casaOrigem[$i]. "<br>";
}
echo "<br>=================<br><br>";
echo "<br>Realizando Sorteio.<br>";
echo "<br>Sorteio realizado.<br>";
echo "<br>=================<br><br>";
while(count($casaOrigem)>0){
    $origem = rand(0,count($casaOrigem)-1);
    $destino = rand(0,count($casaDestino)-1);
    if($casaOrigem[$origem]<>$casaDestino[$destino]){
        echo '   -> <strong>' . $casaOrigem[$origem] . '</strong> visita <strong>' . $casaDestino[$destino].".</strong><br>";
        array_splice($casaOrigem,$origem,1);
        array_splice($casaDestino,$destino,1);
    }
}

echo '<br>para refazer o sorteio clique <a href="https://alvoradadapaz.org.br/sorteio.php">aqui</a><br><br>';
