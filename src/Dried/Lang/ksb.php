<?php

declare(strict_types=1);

namespace Dried\Lang;

return array_replace_recursive(require __DIR__.'/en.php', [
    'meridiem' => ['makeo', 'nyiaghuo'],
    'weekdays' => ['Jumaapii', 'Jumaatatu', 'Jumaane', 'Jumaatano', 'Alhamisi', 'Ijumaa', 'Jumaamosi'],
    'weekdays_short' => ['Jpi', 'Jtt', 'Jmn', 'Jtn', 'Alh', 'Iju', 'Jmo'],
    'weekdays_min' => ['Jpi', 'Jtt', 'Jmn', 'Jtn', 'Alh', 'Iju', 'Jmo'],
    'months' => ['Januali', 'Febluali', 'Machi', 'Aplili', 'Mei', 'Juni', 'Julai', 'Agosti', 'Septemba', 'Oktoba', 'Novemba', 'Desemba'],
    'months_short' => ['Jan', 'Feb', 'Mac', 'Apr', 'Mei', 'Jun', 'Jul', 'Ago', 'Sep', 'Okt', 'Nov', 'Des'],
    'first_day_of_week' => 1,
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd, D MMMM YYYY HH:mm',
    ],
]);