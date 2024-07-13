<?php snippet('header') ?>

<div class="separator separator-1"></div>

<section class="land technical-details">
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

<article class="land">
    <div class="article-content">
        <h2 class="headline-text"><?= $page->title() ?></h2>
        <div class="article-subtitle subheader-text"><?= $page->subheader()->kti() ?></div>
        <div class="article-text main-body-text"><?= $page->landtext()->toBlocks() ?></div>
    </div>
</article>

</div>
</main>
<?php snippet('footer') ?>