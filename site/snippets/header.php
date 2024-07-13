<?php

$currentLang = $kirby->language()->code();

$headerProgrammes = ($currentLang === 'is') ? 'Námið' : 'The Programmes';
$headerSchool = ($currentLang === 'is') ? 'Skólinn' : 'The School';
$headerLinks = ($currentLang === 'is') ? 'Hlekkir' : 'Links';

?>

<html>

<head>
    <meta charset="UTF-8">
    <title><?= $site->title()->kti() ?></title>
    <?= css('assets/css/style.css') ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= js('assets/js/script.js') ?>
</head>

<body class="<?= $page->template() ?>">

    <header>

        <div class="header-content">

        <a id="logo" href="<?= $site->url() ?>">
            <h1 class="logo-text"><span>LungA</span><span>School</span></h1>
        </a>

        <div class="mobile-navigation">
            <a id="mobile-logo" href="<?= $site->url() ?>">
                <h1 class="logo-text"><span>LungA</span><span>School</span></h1>
            </a>
            <a href="#" id="mobile-navigation-toggle">
                <img src="lungaschool2023-menubutton.svg" id="mobile-navigation-icon">
            </a>
            <div class="mobile-toggle" style="display: none;">
                <ul class="mobile-navigation-language">
                    <?php foreach($kirby->languages() as $language): ?>
                    <li<?php e($kirby->language() == $language, ' class="navigation-language-current-item"') ?>>
                        <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
                            <?= html($language->name()) ?>
                        </a>
                        </li>
                        <?php endforeach ?>
                </ul>

                <div class="mobile-navigation-menu">
                    <div>
                            <div class="navigation-category-title secondary-text"><?php echo $headerProgrammes; ?></div>
                        <?php snippet('nav-list', ['pagesArray' => ['art', 'land', 'general-information']]) ?>
                    </div>

                    <div>
                        <div class="navigation-category-title secondary-text"><?php echo $headerSchool; ?></div>
                        <?php snippet('nav-list', ['pagesArray' => ['about', 'manifesto', 'contact', 'collaborators']]) ?>
                    </div>

                    <ul class="mobile-navigation-list">

                        <div class="navigation-category-title secondary-text"><?php echo $headerLinks; ?></div>

                        <?php 
                    $links = $site->linkList()->toStructure();
                    foreach ($links as $link): ?>
                        <li class="navigation-item secondary-text-link">
                            <a href="<?= $link->url()->escape() ?>" target="_blank"><?= $link->text()->kti() ?></a>
                        </li>
                        <?php endforeach ?>

                    </ul>
                </div>
            </div>
        </div>

        <ul class="navigation-language">
            <?php foreach($kirby->languages() as $language): ?>
            <li<?php e($kirby->language() == $language, ' class="navigation-language-current-item"') ?>>
                <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
                    <?= html($language->name()) ?>
                </a>
                </li>
                <?php endforeach ?>
        </ul>

        <div class="navigation-menu">
            <div>
                <div class="navigation-category-title secondary-text"><?php echo $headerProgrammes; ?></div>
                <?php snippet('nav-list', ['pagesArray' => ['art', 'land', 'general-information']]) ?>
            </div>

            <div>
                <div class="navigation-category-title secondary-text"><?php echo $headerSchool; ?></div>
                <?php snippet('nav-list', ['pagesArray' => ['about', 'manifesto', 'contact', 'collaborators']]) ?>
            </div>

            <ul class="navigation-list">

                <div class="navigation-category-title secondary-text"><?php echo $headerLinks; ?></div>

                <?php 
                $links = $site->linkList()->toStructure();
                foreach ($links as $link): ?>
                <li class="navigation-item secondary-text-link">
                    <a href="<?= $link->url()->escape() ?>" target="_blank"><?= $link->text()->kti() ?></a>
                </li>
                <?php endforeach ?>

            </ul>
        </div>

        </div>

    </header>