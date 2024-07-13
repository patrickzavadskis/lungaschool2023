<?php snippet('header') ?>

<div class="separator separator-1"></div>

<?php if ($page->isHomePage()): ?>
<div class="landing-illustration">
    <img class="landing-illustration-img" src="lungaschool2023-illustration.svg">
</div>
<div class="popups">
    <?php 
            $popups = $site->popupList()->toStructure();
            foreach ($popups as $popup): ?>
    <div class="popup">
        <div class="popup-close" onclick="closePopUp(this)">×</div>
        <a class="popup-link" href="<?= $popup->popupurl()->url() ?>"
            target="_blank"><?= $popup->popupname()->text()->kti() ?></a>
        <div class="popup-description"><?= $popup->popupdescription()->text()->kti() ?></div>
    </div>
    <?php endforeach ?>
</div>
<div class="home"></div>
<?php else: ?>

<?php if ($page->sidebarText()->isNotEmpty()): ?>
<section class="technical-details">
    <div class="technical-details-content">
        <div class="mobile-separator"></div>
        <p class="secondary-text"><?= $page->sidebarText()->kti() ?></p>
    </div>
</section>
<div class="separator separator-2"></div>
<article>
    <h2 class="headline-text"><?= $page->title() ?></h2>
    <?php if ($page->subtitle()->isNotEmpty()): ?>
    <div class="article-subtitle subheader-text"><?= $page->subtitle()->kti() ?></div>
    <?php else: ?>
    <?php endif ?>
    <?php if ($page->text()->isNotEmpty()): ?>
    <div class="article-text main-body-text"><?= $page->text()->kti() ?></div>
    <?php else: ?>
    <?php endif ?>
</article>
<?php else: ?>
<?php endif ?>
<?php endif ?>

<?php snippet('footer') ?>