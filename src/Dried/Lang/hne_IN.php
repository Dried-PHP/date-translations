<?php

declare(strict_types=1);

namespace Dried\Lang;

/*
 * Authors:
 * - Red Hat, Pune    bug-glibc-locales@gnu.org
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'D/M/YY',
    ],
    'months' => ['जनवरी', 'फरवरी', 'मार्च', 'अपरेल', 'मई', 'जून', 'जुलाई', 'अगस्त', 'सितमबर', 'अकटूबर', 'नवमबर', 'दिसमबर'],
    'months_short' => ['जन', 'फर', 'मार्च', 'अप', 'मई', 'जून', 'जुला', 'अग', 'सित', 'अकटू', 'नव', 'दिस'],
    'weekdays' => ['इतवार', 'सोमवार', 'मंगलवार', 'बुधवार', 'बिरसपत', 'सुकरवार', 'सनिवार'],
    'weekdays_short' => ['इत', 'सोम', 'मंग', 'बुध', 'बिर', 'सुक', 'सनि'],
    'weekdays_min' => ['इत', 'सोम', 'मंग', 'बुध', 'बिर', 'सुक', 'सनि'],
    'first_day_of_week' => 0,
    'day_of_first_week_of_year' => 1,
    'meridiem' => ['बिहिनियाँ', 'मंझनियाँ'],
]);
