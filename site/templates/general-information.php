<?php snippet('header') ?>

<div class="separator separator-1"></div>

<section class="general-information technical-details">
    <div class="technical-details-content">
        <div class="mobile-separator"></div>
        <?php foreach ($page->sidebartext()->toBlocks() as $block): ?>
        <?php if ($block->type() == 'text'): ?>
        <div class="secondary-text center">
            <?= $block->text()->kt() ?>
        </div>
        <?php else: ?>
        <?= $block ?>
        <?php endif ?>
        <?php endforeach ?>
    </div>
</section>

<div class="separator separator-2"></div>

<article class="general-information-article">
    <div class="article-content">
        <h2 class="headline-text"><?= $page->title() ?></h2>
        <div class="article-text main-body-text">
            <?php foreach ($page->generalinformationtext()->toBlocks() as $block): ?>
            <?php if ($block->type() === 'general-information-heading'): ?>
            <h3 id="<?= $block->id() ?>"><?= $block->text()->value() ?></h3>
            <?php else: ?>
            <?= $block ?>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</article>

<?php snippet('footer') ?>