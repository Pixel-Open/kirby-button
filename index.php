<?php

Kirby::plugin('pixelopen/kirby-button', [
    'snippets' => [
        'blocks/kirby-button' => __DIR__ . '/snippets/blocks/kirby-button.php',
    ],
    'blueprints' => [
        'blocks/kirby-button' => __DIR__ . '/blueprints/blocks/kirby-button.yml',
    ],
    'translations' => [
        'de' => require __DIR__ . '/translations/en.php',
        'en' => require __DIR__ . '/translations/en.php',
        'fr' => require __DIR__ . '/translations/fr.php',
    ],
]);
