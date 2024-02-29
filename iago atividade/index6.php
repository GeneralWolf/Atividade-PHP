<?php
    $notas = array(5, 6, 6,  9, 1, 5, 8, 9, 2, 8, 7);
    $total = count($notas);
    $sum = array_sum($notas);
    $media = $sum / $total;
    echo "A média é: " . $media;
?>