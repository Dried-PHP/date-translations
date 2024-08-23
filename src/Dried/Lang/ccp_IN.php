<?php

declare(strict_types=1);

namespace Dried\Lang;

return array_replace_recursive(require __DIR__.'/ccp.php', [
    'weekend' => [0, 0],
]);
