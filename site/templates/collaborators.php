<?php snippet('header') ?>

<div class="separator separator-1"></div>

<article class="collaborators-article"> 
    <div class="article-content">
        <h2 class="headline-text"><?= $page->title() ?></h2>
        <div class="article-subtitle subheader-text"><?= $page->subheader()->kti() ?></div>
        <div class="article-text main-body-text"><?= $page->text()->toBlocks() ?></div>
    </div>
</article> 

<?php snippet('footer') ?>