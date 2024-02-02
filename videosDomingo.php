<?PHP
$link['08/11/2020'] = array('titulo' => 'Encontros de Domingo - Rendamos Graças','dia' => '08/11/2020', 'url'=>'ClxOvXxrLhU');
$link['22/11/2020'] = array('titulo' => 'Encontros de Domingo - Contribuir','dia' => '22/11/2020', 'url'=>'5fXCDLkRgGc');
$link['06/12/2020'] = array('titulo' => 'Encontros de Domingo - Nutrição Espiritual','dia' => '06/12/2020', 'url'=>'oJMJb60NlOk');
$link['20/12/2020'] = array('titulo' => 'Encontros de Domingo - Intentar e agir','dia' => '20/12/2020', 'url'=>'Sm56Rt34Ly0');

$link['17/01/2021'] = array('titulo' => 'Encontros de Domingo - Contribuir','dia' => '17/01/2021', 'url'=>'SXyxAISdSx8');
$link['31/01/2021'] = array('titulo' => 'Encontros de Domingo - O Bem é Incansável','dia' => '31/01/2021', 'url'=>'jpgXKlZrHqs');

$link['14/02/2021'] = array('titulo' => 'Encontros de Domingo - Entendimento','dia' => '14/02/2021', 'url'=>'ihKfHhqrPDM');

?>
<!-- About Section -->
<div id="palestrasDomingo" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2>Encontros de domingo</h2>
            <hr>
            <p>Aos domingos, a cada 15 dias, temos um encontro marcado com a Doutrina Espírita através da nossa série de lives "Encontros de Domingo.".</p>            
            <h3>Sempre as 16:00 horas. </h3>
        </div>

        <div class="row">            
        <div class="col-md-6"> <img src="img/fundoEncontrosDomingo.png" class="img-responsive"> </div>
            <div class="col-md-6">
                <div class="about-text">                    
                    <?PHP
                        if (in_array(date('w'), [0])){
                            $indice =  date('d/m/Y');    
                        } else {
                            $indice =  date('d/m/Y', strtotime("next Sunday"));
                        }

                        $url = $link[$indice]['url'];
                        $dia = $link[$indice]['dia'];
                        
                        echo '<iframe width="100%" height="325" src="https://www.youtube.com/embed/' . $url . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>                        
                        <p>Nosso próximo encontro será dia ' . $dia . '. </p>';
                        
                    ?>
                    <p>Caso desejar, os episódios anteriores estão disponíveis clicando <a href="https://www.youtube.com/watch?v=ClxOvXxrLhU&list=PL12_XkJcy9CZZSEp4MQt6dQVPrwRPgY9-" target="_BLANK">aqui.</a></p>
                </div>
            </div>            
        </div>                
    </div>
</div>
