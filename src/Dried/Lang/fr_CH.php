<?php

declare(strict_types=1);

namespace Dried\Lang;

/*
 * Authors:
 * - Dieter Sting
 * - François B
 * - Gaspard Bucher
 * - Maxime VALY
 * - JD Isaacks
 */
return array_replace_recursive(require __DIR__.'/fr.php', [
    'formats' => [
        'L' => 'DD.MM.YYYY',
    ],
]);
