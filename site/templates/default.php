<html>

<head>
    <meta charset="UTF-8">
    <title><?= $site->title()->kti() ?></title>
    <?= css('assets/css/style.css') ?>
</head>

<body>
    <div class="flex-container">
        <div class="grid-overlay">
            <div class="grid-column"></div>
            <div class="grid-column"></div>
            <div class="grid-column">
                <div class="strip-20px"></div>
            </div>
            <div class="grid-column"></div>
            <div class="grid-column"></div>
            <div class="grid-column"></div>
            <div class="grid-column"></div>
            <div class="grid-column"></div>
            <div class="grid-column"></div>
        </div>
    </div>
    </div>
    <nav class="navigation">
        <ul class="navigation-language">
            <li class="navigation-language-item">IS</li>
            <li class="navigation-language-current-item">EN</li>
        </ul>
        <div>
            <div class="navigation-category-title">The Programmes</div>
            <?php snippet('nav-list', ['pagesArray' => ['art', 'land', 'general-information']]) ?>
        </div>
        <div>
            <div class="navigation-category-title">The School</div>
            <?php snippet('nav-list', ['pagesArray' => ['about', 'manifesto', 'contact', 'collaborators']]) ?>
        </div>
        <ul class="navigation-list">
        <div class="navigation-category-title">Links</div>
        <?php 
        $links = $site->linkList()->toStructure();
        foreach ($links as $link): ?>
            <li class="navigation-item">
                <a href="<?= $link->url()->escape() ?>" target="_blank"><?= $link->text()->kti() ?></a>
            </li>
        <?php endforeach ?>
        </ul>
    </nav>
    <div class="separator"></div>
    <div class="content">
        <a class="no-hover" href="<?= $site->url() ?>">
            <h1 class="landing-title"><span>LungA</span><span>School</span></h1>
        </a>
        <?php if ($page->isHomePage()): ?>
            <div class="landing-illustration">
                <img src="assets/images/lungaschool2023_illustration.svg">
            </div>
        <?php else: ?>
            <div class="container">
                <?php if ($page->sidebarText()->isNotEmpty()): ?>
                    <section class="technical-details">
                        <p><?= $page->sidebarText()->kti() ?></p>
                    </section>
                    <article class="width-55vw">
                        <div>
                            <h2><?= $page->title() ?></h2>
                            <?php if ($page->subtitle()->isNotEmpty()): ?>
                                <div class="article-subtitle"><?= $page->subtitle()->kti() ?></div>
                            <?php else: ?>
                            <?php endif ?>
                            <?php if ($page->text()->isNotEmpty()): ?>
                                <div class="article-text"><?= $page->text()->kti() ?></div>
                            <?php else: ?>
                            <?php endif ?>
                        </div>
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
        
    </div>
</body>

</html>