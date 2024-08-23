<?php

declare(strict_types=1);

namespace Dried\Lang;

return array_replace_recursive(require __DIR__.'/sr_Latn_BA.php', [
    'weekdays' => ['nedelja', 'ponedeljak', 'utorak', 'sreda', 'četvrtak', 'petak', 'subota'],
    'plural' => 'sr',
]);
