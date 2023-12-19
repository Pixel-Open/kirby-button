<?php

Kirby::plugin('pixelopen/kirby-button', [
    'snippets' => [
        'blocks/button' => __DIR__ . '/snippets/blocks/button.php',
    ],
    'blueprints' => [
        'blocks/button' => __DIR__ . '/blueprints/blocks/button.yml',
    ],
    'translations' => [
        'de' => require __DIR__ . '/translations/en.php',
        'en' => require __DIR__ . '/translations/en.php',
        'fr' => require __DIR__ . '/translations/fr.php',
    ],
]);
