<?php snippet('header') ?>

<div class="separator separator-1"></div>
    
<section class="technical-details">
    <div class="technical-details-content">
        <div class="mobile-separator"></div>
        <?php foreach ($page->sidebartext()->toBlocks() as $block): ?>
        <?php if ($block->type() == 'text'): ?>
        <div class="secondary-text">
            <?= $block->text()->kt() ?>
        </div>
        <?php else: ?>
        <?= $block ?>
        <?php endif ?>
        <?php endforeach ?>
    </div>
</section>

<div class="separator separator-2"></div>

<article class="art">
    <div class="article-content">
        <h2 class="headline-text"><?= $page->title() ?></h2>
        <div class="article-subtitle subheader-text"><?= $page->subheader()->kti() ?></div>
        <div class="article-text main-body-text"><?= $page->arttext()->toBlocks() ?></div>
    </div>
</article>

<?php snippet('footer') ?>