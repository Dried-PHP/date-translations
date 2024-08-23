<?php

declare(strict_types=1);

namespace Dried\Lang;

return array_replace_recursive(require __DIR__.'/bs.php', [
    'meridiem' => ['пре подне', 'поподне'],
    'weekdays' => ['недјеља', 'понедјељак', 'уторак', 'сриједа', 'четвртак', 'петак', 'субота'],
    'weekdays_short' => ['нед', 'пон', 'уто', 'сри', 'чет', 'пет', 'суб'],
    'weekdays_min' => ['нед', 'пон', 'уто', 'сри', 'чет', 'пет', 'суб'],
    'months' => ['јануар', 'фебруар', 'март', 'април', 'мај', 'јуни', 'јули', 'аугуст', 'септембар', 'октобар', 'новембар', 'децембар'],
    'months_short' => ['јан', 'феб', 'мар', 'апр', 'мај', 'јун', 'јул', 'ауг', 'сеп', 'окт', 'нов', 'дец'],
    'first_day_of_week' => 1,
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'D.M.YYYY.',
        'LL' => 'DD.MM.YYYY.',
        'LLL' => 'DD. MMMM YYYY. HH:mm',
        'LLLL' => 'dddd, DD. MMMM YYYY. HH:mm',
    ],
]);
