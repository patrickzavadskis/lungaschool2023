<html>

<head>
    <meta charset="UTF-8">
    <title><?= $site->title()->kti() ?></title>
    <?= css('assets/css/style.css') ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <header>

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

        <a id="logo" href="<?= $site->url() ?>">
            <h1 class="logo-text"><span>LungA</span><span>School</span></h1>
        </a>

            <ul class="navigation-language">
                <li class="navigation-language-item">IS</li>
                <li class="navigation-language-current-item">EN</li>
            </ul>


        <div class="navigation-menu">
            <div>
                <div class="navigation-category-title secondary-text">The Programmes</div>
                <?php snippet('nav-list', ['pagesArray' => ['art', 'land', 'general-information']]) ?>
            </div>

            <div>
                <div class="navigation-category-title secondary-text">The School</div>
                <?php snippet('nav-list', ['pagesArray' => ['about', 'manifesto', 'contact', 'collaborators']]) ?>
            </div>

            <ul class="navigation-list">

                <div class="navigation-category-title secondary-text">Links</div>

                <?php 
                $links = $site->linkList()->toStructure();
                foreach ($links as $link): ?>
                    <li class="navigation-item secondary-text-link">
                        <a href="<?= $link->url()->escape() ?>" target="_blank"><?= $link->text()->kti() ?></a>
                    </li>
                <?php endforeach ?>

                </div>

        </nav>
        
    </header>