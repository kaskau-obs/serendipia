<?php
    function lerCarga(){
        $texto = file_get_contents('/proc/loadavg');
        $partes = explode(' ', $texto);
        return [
            '1_min' => (float) $partes[0],
            '5_min' => (float) $partes[1],
            '15_min' => (float) $partes[2],
        ];
    }
    $carga = lerCarga();
    echo "carga (1 min): " . $carga['1_min'] . "<br>";
    echo "carga (5 min): " . $carga['15_min'] . "<br>";
    
 f
?>