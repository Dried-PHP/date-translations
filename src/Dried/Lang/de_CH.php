<?php

declare(strict_types=1);

namespace Dried\Lang;

/*
 * Authors:
 * - sheriffmarley
 * - Timo
 * - Michael Hohl
 */
return array_replace_recursive(require __DIR__.'/de.php', [
    'weekdays_short' => ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
]);
