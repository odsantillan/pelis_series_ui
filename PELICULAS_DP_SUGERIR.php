<?php
$pspell_link = pspell_new("en");

if (!pspell_check($pspell_link, "testt")) {
    $sugerencias = pspell_suggest($pspell_link, "testt");

    foreach ($sugerencias as $sugerencia) {
        echo "Ortografía posible: $sugerencia<br />";
    }
}
?>
