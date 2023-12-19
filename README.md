# Kirby Button plugin

![GitHub release (with filter)](https://img.shields.io/github/v/release/Pixel-Open/kirby-button?style=for-the-badge)

[![Dependency](https://img.shields.io/badge/kirby-4.x-cca000.svg?style=for-the-badge)](https://getkirby.com/)

A plugin for [Kirby CMS](http://getkirby.com) to add a button block to redirect to a page, a website or a downloadable file.

This plugin take a lot of inspiration on this plugin: https://github.com/pReya/kirby-link-button-block but add new features from Kirby 4.

## Commercial Usage

This plugin is free

## Installation

### Download

[Download the files](hhttps://github.com/Pixel-Open/kirby-button/releases) and place them inside `site/plugins/kirby-button`.

### Composer

```
composer require pixelopen/kirby-button
```

### Git Submodule

You can add the plugin as a Git submodule.

    $ cd your/project/root
    $ git submodule add https://github.com/Pixel-Open/kirby-button.git site/plugins/kirby-button
    $ git submodule update --init --recursive
    $ git commit -am "Add Kirby button plugin"

Run these commands to update the plugin:

    $ cd your/project/root
    $ git submodule foreach git checkout master
    $ git submodule foreach git pull
    $ git commit -am "Update submodules"
    $ git submodule update --init --recursive

## Options

You need to add the fieldsets `kirby-button` where you want to use the block.
Or you can add it on your whole website with the following line in your `/site/config/config.php`:

```php
return [
    'blocks' => [
        'fieldsets' => [
            'custom' => [
                'label' => 'Custom blocks',
                'type' => 'group',
                'fieldsets' => [
                    'kirby-button',
                    // Other global custom blocks
                ]
            ],
          'kirby' => [
                'label' => 'Kirby blocks',
                'type' => 'group',
                'fieldsets' => [
                    'heading',
                    'text',
                    'list',
                    'quote',
                    'image',
                    'video',
                    'code',
                    'markdown'
                ]
            ]
        ]
    ]
];
```

The button work with color field from Kirby 4, you must create a new fields with your custom colors at `/site/blueprints/fields/color.yml`:

```yml
type: color
mode: options
options:
  color1: "#color1"
  color2: "#color2"
  color3: "#color3"
  color4: "#color4"
  color5: "#color5"
```
