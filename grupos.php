<?PHP

$grupo[] = array('nome' => 'Grupo Luiz Sérgio',                     'dia' => 'Segunda-feira', 'horario' => '20:00', 'link' => 'https://meet.jit.si/GEAPgrupoluizsergio',);
$grupo[] = array('nome' => 'Grupo Maria de Magdala',                'dia' => 'Segunda-feira', 'horario' => '20:00', 'link' => 'https://meet.jit.si/GEAPgrupomariademagdala');
$grupo[] = array('nome' => 'Grupo Peixotinho',                      'dia' => 'Terça-feira',   'horario' => '20:00', 'link' => 'https://meet.jit.si/GEAPgrupopeixotinho');
$grupo[] = array('nome' => 'Grupo André Luiz',                      'dia' => 'Quarta-feira',  'horario' => '18:00', 'link' => 'https://meet.jit.si/GEAPgrupoandreluiz');
$grupo[] = array('nome' => 'Grupo Amélia Rodrigues',                'dia' => 'Quinta-feira',  'horario' => '20:00', 'link' => 'https://meet.jit.si/GEAPgrupoameliarodrigues');
$grupo[] = array('nome' => 'Grupo João Batista',                    'dia' => 'Quinta-feira',  'horario' => '20:00', 'link' => 'https://meet.jit.si/GEAPgrupojoaobatista');
$grupo[] = array('nome' => 'Grupo de Preces para Mediúnicas',       'dia' => 'Sexta-feira',   'horario' => '22:00', 'link' => 'https://meet.jit.si/GEAPgrupodeprecesparamediunicas');
$grupo[] = array('nome' => 'Grupo Joanna de Ângelis',               'dia' => 'Sábado',        'horario' => '14:00', 'link' => 'https://meet.jit.si/GEAPgrupojoannadeangelis');
$grupo[] = array('nome' => 'Grupo Chico Xavier',                    'dia' => 'Sábado',        'horario' => '14:15', 'link' => 'https://meet.jit.si/GEAPgrupochicoxavier');
$grupo[] = array('nome' => 'Grupo Scheilla',                        'dia' => 'Sábado',        'horario' => '15:30', 'link' => 'https://meet.jit.si/GEAPgruposcheilla');
$grupo[] = array('nome' => 'Grupo de Estudo do Livro dos Espíritos', 'dia' => 'Sábado',       'horario' => '15:30', 'link' => 'https://meet.jit.si/GEAPgrupodeestudodolivrodosespiritos');
$grupo[] = array('nome' => 'Grupo de Estudo da Mediunidade',        'dia' => 'Sábado',        'horario' => '15:30', 'link' => 'https://meet.jit.si/GEAPgrupodeestudodamediunidade');

$msg = 'Olá!
A reunião online do nosso grupo de estudos do GEAP vai começar.

Para quem quer utilizar o android, instalar o seguinte aplicativo:
https://play.google.com/store/apps/details?id=org.jitsi.meet&hl=en

Para quem usa Iphone, instalar esse aqui:
https://apps.apple.com/us/app/jitsi-meet/id1165103905

Depois de instalado, basta clicar neste link, que o aplicativo já vai abrir certinho:
$url

Quem for utilizar o seu computador, basta clicar no link, sem instalar nenhuma ferramenta.';


?>

<!-- Team Section -->
<div id="grupos" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2 style="color:#660099;">Instalação do aplicativo</h2>
            
        
            <p>Caso você deseje utilizar o seu telefone celular para os encontros, é necessário instalar um aplicativo que permite essa interação, clique na imagem abaixo conforme o seu sistema operacional. </p>
            <p>
                <a href="https://itunes.apple.com/us/app/jitsi-meet/id1165103905" rel="noopener" target="_blank">
                    <img src="img/appstore.svg">
                </a>
                <a href="https://play.google.com/store/apps/details?id=org.jitsi.meet" rel="noopener" target="_blank">
                    <img src="img/googleplay.png">
                </a>
            </p>
        </div>
        <?PHP
        foreach ($grupo as $g) {
            $nomeCurto = str_replace(' ', '', $g["nome"]);
            echo '<div id="row">';
            echo '<div class="col-md-4 col-sm-4 team">
                    <div class="caption">
                        <div class="thumbnail">
                            <p><strong>' . $g["nome"] . '</strong></p>
                            <p>' . $g["dia"] . ' - ' . $g["horario"] . '</p>                                                
                            <p>Clique <a href="' . $g["link"] . '" target="_BLANK"> AQUI</a> para abrir a vídeoconferência ou no ícone ao lado para copiar.
                                <span class="badge badge-primary">
                                    <a class="btnGrupos" data-clipboard-text="' . str_replace('$url', $g["link"], $msg) . '">
                                        <i class="fas fa-share-alt"> </i>
                                    </a>
                                </span>                  
                            </p>                                   
                        </div>
                    </div>
                  </div>';
            echo '</div>';
        }
        ?>


    </div>
</div>
</div>