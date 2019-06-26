<?php
function calendrier($mois, $annee) {
    setlocale(LC_ALL, 'fra','fr_FR.utf8') ;
    $semaine = array('L', 'M', 'M', 'J', 'V', 'S', 'D') ;
    $date = mktime(0,0,0, $mois, 1, $annee) ;
    $nom_mois = mb_convert_case(utf8_encode(strftime("%B %Y", $date)),MB_CASE_TITLE,"UTF-8") ;
    $premier_jour_mois = date('N', $date)-1 ;
    $nombre_jours_mois = date('t', $date) ;
    $colonne_courante = 0 ;

    $html = <<<HTML
            <table id="calendrier">
            <tr><th colspan='7'>$nom_mois
            <tr>
HTML;
    // Première ligne
    foreach ($semaine as $i => $jour) {
        $html .= "<th>$jour" ;
    }
    if ($premier_jour_mois > 0) {
        $html .= "\n<tr>" ;
        while ($colonne_courante<$premier_jour_mois) {
            $html .= "<td>" ;
            $colonne_courante++ ;
        }
    }

    for ($jour_courant=1; $jour_courant <= $nombre_jours_mois; $jour_courant++, $colonne_courante++)
    {
        if ($colonne_courante % 7 == 0) {
            $html .= "\n<tr>" ;
        }
        $class = ($colonne_courante%7==5 || $colonne_courante%7==6) ? " class=\"weekend\"" : "" ;
        $html .= "<td{$class}>$jour_courant" ;
    }

    while ($colonne_courante % 7) {
        $html .= "<td>" ;
        $colonne_courante++ ;
    }
    $html.="</table>" ;

    return $html ;
}