<?php

declare(strict_types=1);

namespace Dried\Lang;

/*
 * Authors:
 * - Roy
 * - Stephan
 * - François B
 * - Tim Fish
 * - Kevin Huang
 * - Jacob Middag
 * - JD Isaacks
 * - Propaganistas
 */
return array_replace_recursive(require __DIR__.'/nl.php', [
    'formats' => [
        'L' => 'DD/MM/YYYY',
    ],
]);
