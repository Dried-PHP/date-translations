<?php

declare(strict_types=1);

namespace Dried\Lang;

return array_replace_recursive(require __DIR__.'/mas.php', [
    'first_day_of_week' => 1,
]);