<?php

declare(strict_types=1);

namespace Dried\Lang;

return array_replace_recursive(require __DIR__.'/es.php', [
    'first_day_of_week' => 0,
    'formats' => [
        'LT' => 'h:mm a',
        'LTS' => 'h:mm:ss a',
        'L' => 'D/M/yy',
        'LL' => 'D MMM YYYY',
        'LLL' => 'D [de] MMMM [de] YYYY h:mm a',
        'LLLL' => 'dddd, D [de] MMMM [de] YYYY h:mm a',
    ],
]);
