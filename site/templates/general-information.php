<?php snippet('header') ?>
<div class="separator separator-1"></div>
<main>
<div class="container">

<section class="technical-details">
<?php foreach ($page->sidebartext()->toBlocks() as $block): ?>
    <?php if ($block->type() == 'text'): ?>
        <div class="secondary-text center">
            <?= $block->text()->kt() ?>
        </div>
    <?php else: ?>
        <?= $block ?>
    <?php endif ?>
<?php endforeach ?>
</section>

<div class="separator separator-2"></div>

<article> 
    <h2 class="headline-text"><?= $page->title() ?></h2>
    <div class="article-subtitle subheader-text"><?= $page->subheader()->kti() ?></div>
    <div class="article-text main-body-text"><?= $page->generalinformationtext()->toBlocks() ?></div>
</article> 

</div>
</main>
<?php snippet('footer') ?>