<?php

declare(strict_types=1);

namespace Dried\Lang;

return array_replace_recursive(require __DIR__.'/ses.php', [
    'meridiem' => ['Subbaahi', 'Zaarikay b'],
]);
