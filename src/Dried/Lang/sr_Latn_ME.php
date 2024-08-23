<?php

declare(strict_types=1);

namespace Dried\Lang;

use DateTimeInterface;

/*
 * Authors:
 * - Glavić
 * - Milos Sakovic
 */
return array_replace_recursive(require __DIR__.'/sr.php', [
    'month' => ':count mjesec|:count mjeseca|:count mjeseci',
    'week' => ':count nedjelja|:count nedjelje|:count nedjelja',
    'second' => ':count sekund|:count sekunde|:count sekundi',
    'ago' => 'prije :time',
    'from_now' => 'za :time',
    'after' => ':time nakon',
    'before' => ':time prije',
    'week_from_now' => ':count nedjelju|:count nedjelje|:count nedjelja',
    'week_ago' => ':count nedjelju|:count nedjelje|:count nedjelja',
    'second_ago' => ':count sekund|:count sekunde|:count sekundi',
    'diff_tomorrow' => 'sjutra',
    'calendar' => [
        'nextDay' => '[sjutra u] LT',
        'nextWeek' => static fn (DateTimeInterface $date) => match ((int) $date->format('w')) {
            0 => '[u nedjelju u] LT',
            3 => '[u srijedu u] LT',
            6 => '[u subotu u] LT',
            default => '[u] dddd [u] LT',
        },
        'lastWeek' => static fn (DateTimeInterface $date) => match ((int) $date->format('w')) {
            0, 1 => '[prošle nedjelje u] LT',
            2 => '[prošlog utorka u] LT',
            3 => '[prošle srijede u] LT',
            4 => '[prošlog četvrtka u] LT',
            5 => '[prošlog petka u] LT',
            default => '[prošle subote u] LT',
        },
    ],
    'weekdays' => ['nedjelja', 'ponedjeljak', 'utorak', 'srijeda', 'četvrtak', 'petak', 'subota'],
    'weekdays_short' => ['ned.', 'pon.', 'uto.', 'sri.', 'čet.', 'pet.', 'sub.'],
    'plural' => 'sr',
]);
