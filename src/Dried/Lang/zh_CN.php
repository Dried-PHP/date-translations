<?php

declare(strict_types=1);

namespace Dried\Lang;

/*
 * Authors:
 * - monkeycon
 * - François B
 * - Jason Katz-Brown
 * - Serhan Apaydın
 * - Matt Johnson
 * - JD Isaacks
 * - Zeno Zeng
 * - Chris Hemp
 * - shankesgk2
 */
return array_merge(require __DIR__.'/zh.php', [
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'YYYY/MM/DD',
        'LL' => 'YYYY年M月D日',
        'LLL' => 'YYYY年M月D日Ah点mm分',
        'LLLL' => 'YYYY年M月D日ddddAh点mm分',
    ],
]);
