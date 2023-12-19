<?php function getColorName(string $hex): string
{
    $color = Kirby\Cms\Blueprint::find('fields/color')['options'];
    $colorName = array_search(strtoupper($hex), $color);
    return str_replace(' ', '-', strtolower($colorName));
} ?>

<div class="kirby_btn<?= $block->class()->isEmpty() ? "" : " " . $block->class()->esc() ?>"
     <?= $block->content()->get('id')->isEmpty() ? "" : "id=\"{$block->content()->get('id')->esc()}\"" ?>
     align="<?= $block->alignment() ?>"
>
    <a class="kirby_btn__link bg-<?= getColorName($block->bg_color())?> text-<?= getColorName($block->text_color()) ?>"
       href="<?= $block->link()->toUrl() ?>"
       <?= ($block->download()->toBool() && str_contains($block->link(), "file://")) ? "download" : "" ?>
       target="<?= $block->newTab()->toBool() ? "_blank" : "_self" ?>"
    >
        <?= $block->name() ?>
    </a>
</div>
