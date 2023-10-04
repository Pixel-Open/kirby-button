<style>
    #_<?= $block->id() ?> {
        padding: 1rem;
        border-radius: 30px;
        min-width: 150px;
        border: 5px solid;
        background-color: transparent;
        border-color: <?= $block->{"bg-color"}() ?>;
        font-weight: bold;
        font-family: "Raleway", sans-serif;
        color: <?= $block->{"bg-color"}() ?>;
        text-align: center;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    #_<?= $block->id() ?>:hover {
        background-color: <?= $block->{"bg-color"}() ?>;
        color: white;
    }

    .button-container {
        margin: 4px;
    }
</style>

<div class="k-block-type-link-button <?= $block->class() ?>" id="<?= $block->id() ?>">
    <div class="button-container" align="<?= $block->alignment() ?>">
        <a  class="button-link"
            id="_<?= $block->id() ?>"
            href="<?= $block->link()
    ->toUrl() ?>"
            <?= ($block->download()->toBool() && str_contains($block->link(), "file://")) ? "download" : "" ?>
            target="<?= $block->newTab()
                ->toBool() ? "_blank" : "_self" ?>"
        >
                <?= $block->name() ?>
        </a>
    </div>
</div>