<?php

declare(strict_types=1);

namespace Dried\Translations\Tools;

$list = implode("\n", array_map(
    static fn (string $file) => "        '" . substr(basename($file), 0, -4) . "' => true,",
    glob(__DIR__ . '/../src/Dried/Lang/*.php'),
));

$file = __DIR__ . '/../src/Dried/Translation/DateTranslations.php';
$contents = file_get_contents($file);

file_put_contents(
    $file,
    preg_replace(
        '/(const SUPPORTED_LOCALES = \[)[\s\S]+\S(\s+];)/',
        "$1\n" . $list . '$2',
        $contents,
    ),
);
