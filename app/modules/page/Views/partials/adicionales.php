<?php 
function resaltarTexto($cadena) {
    // Expresión regular para encontrar texto entre corchetes
    $pattern = '/\[([^\]]+)\]/';
    // Reemplazar con un span y clase "resaltado"
    $replacement = '<span class="resaltado">$1</span>';
    // Realizar el reemplazo
    $resultado = preg_replace($pattern, $replacement, $cadena);
    return $resultado;
}

?>