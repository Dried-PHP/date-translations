<?php

declare(strict_types=1);

namespace Dried\Lang;

/*
 * Authors:
 * - Cassiano Montanari
 * - Eduardo Dalla Vecchia
 * - David Rodrigues
 * - Matt Pope
 * - François B
 * - Prodis
 * - Marlon Maxwel
 * - JD Isaacks
 * - Raphael Amorim
 * - Rafael Raupp
 * - felipeleite1
 * - swalker
 * - Lucas Macedo
 * - Paulo Freitas
 * - Sebastian Thierer
 */
return array_replace_recursive(require __DIR__.'/pt.php', [
    'period_recurrences' => 'uma|:count vez',
    'period_interval' => 'toda :interval',
    'formats' => [
        'LLL' => 'D [de] MMMM [de] YYYY [às] HH:mm',
        'LLLL' => 'dddd, D [de] MMMM [de] YYYY [às] HH:mm',
    ],
    'first_day_of_week' => 0,
    'day_of_first_week_of_year' => 1,
]);
