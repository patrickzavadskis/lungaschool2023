<?php snippet('header') ?>
<div class="separator separator-1"></div>
<main>
<div class="container">

<article class="collaborators-article"> 
    <h2 class="headline-text"><?= $page->title() ?></h2>
    <div class="article-subtitle subheader-text"><?= $page->subheader()->kti() ?></div>
    <div class="article-text main-body-text"><?= $page->text()->toBlocks() ?></div>
</article> 

</div>
</main>
<?php snippet('footer') ?>