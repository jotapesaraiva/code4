<?php
function dataPtBrParaMysql($dataPtBr) {
    $partes = explode("/", $dataPtBr);
    return "{$partes[2]}-{$partes[1]}-{$partes[0]}";
}

function dataMysqlParaPtBr($dataMysql) {
    $data = new DateTime($dataMysql);
    return $data->format("d/m/Y");
}

function dataEmPortugues($nmes){
    switch ($nmes) {
        case '1':  $mes = "Janeiro";  break;
        case '2':  $mes = "Fevereiro";  break;
        case '3':  $mes = "Março";  break;
        case '4':  $mes = "Abril";  break;
        case '5':  $mes = "Maio";  break;
        case '6':  $mes = "Junho";  break;
        case '7':  $mes = "Julho";  break;
        case '8':  $mes = "Agosto";  break;
        case '9':  $mes = "Setembro";  break;
        case '10':  $mes = "Outubro";  break;
        case '11':  $mes = "Novembro";  break;
        case '12':  $mes = "Dezembro";  break;
        default:  $mes = "Indefinido";  break;
    }
    return $mes;
}

function datePtBr($data){
    setlocale(LC_TIME, 'portuguese');
    //date_default_timezone_set('America/Belem');
    $date = date('d-m-Y',$data);
    // echo strftime("%A, %d de %B de %Y", strtotime($date));
    return strftime("%d/%b/%Y", strtotime($date));
}


/**
 * More simplified date stuff
 * by Bob Sawyer / Pixels and Code
 *
 * @access    public
 * @param    string
 * @param    integer
 * @return    integer
 */
    if ( ! function_exists('setDate'))
    {
        function setDate($datestr = '',$format = 'long')
        {
            if ($datestr == '')
                return '--';

            $time = strtotime($datestr);
            switch ($format) {
                case 'short': $fmt = 'd/m/Y - g:iA'; break;
                case 'long': $fmt = 'F j,Y - g:iA'; break;
                case 'notime': $fmt = 'd/m/Y'; break;
                case 'teste': $fmt = 'Y-m-d'; break;
                // case 'outro': $fmt =
            }
            $newdate = date($fmt,$time);
            return $newdate;
        }
    }


?>