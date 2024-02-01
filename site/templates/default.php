<?php snippet('header') ?>

<div class="separator separator-1"></div>

<main>
    <?php if ($page->isHomePage()): ?>
        <div class="landing-illustration">
            <img src="assets/images/lungaschool2023_illustration.svg">
        </div>
    <?php else: ?>
        <div class="container">
            <?php if ($page->sidebarText()->isNotEmpty()): ?>
                <section class="technical-details">
                    <p class="secondary-text"><?= $page->sidebarText()->kti() ?></p>
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
                <article class="width-100">
                    <div>
                        <h2><?= $page->title() ?></h2>
                        <div class="article-subtitle"><?= $page->subtitle()->kti() ?></div>
                        <div class="article-text"><?= $page->text()->kti() ?></div>
                    </div>
                </article>
            <?php endif ?>
        <?php endif ?>
    </div>
    
</main>

<?php snippet('footer') ?>