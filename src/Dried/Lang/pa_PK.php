<?php

declare(strict_types=1);

namespace Dried\Lang;

/*
 * Authors:
 * - bug-glibc-locales@gnu.org
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD/MM/YYYY',
    ],
    'months' => ['جنوري', 'فروري', 'مارچ', 'اپريل', 'مٓی', 'جون', 'جولاي', 'اگست', 'ستمبر', 'اكتوبر', 'نومبر', 'دسمبر'],
    'months_short' => ['جنوري', 'فروري', 'مارچ', 'اپريل', 'مٓی', 'جون', 'جولاي', 'اگست', 'ستمبر', 'اكتوبر', 'نومبر', 'دسمبر'],
    'weekdays' => ['اتوار', 'پير', 'منگل', 'بدھ', 'جمعرات', 'جمعه', 'هفته'],
    'weekdays_short' => ['اتوار', 'پير', 'منگل', 'بدھ', 'جمعرات', 'جمعه', 'هفته'],
    'weekdays_min' => ['اتوار', 'پير', 'منگل', 'بدھ', 'جمعرات', 'جمعه', 'هفته'],
    'first_day_of_week' => 0,
    'day_of_first_week_of_year' => 1,
    'meridiem' => ['ص', 'ش'],
]);
