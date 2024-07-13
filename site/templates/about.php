<?php

$currentLang = $kirby->language()->code();

$aboutOrganization = ($currentLang === 'is') ? 'Skipulag og skjöl' : 'Organization and documentation';
$aboutFinancial = ($currentLang === 'is') ? 'Ársreikningar' : 'Financial statements';

?>

<?php snippet('header') ?>

<div class="separator separator-1"></div>

<section class="about technical-details">
    <div class="technical-details-content">
        <div class="organization-and-documentation">
            <p><?php echo $aboutOrganization; ?></p>
            <?php
            // Example for organization and documentation
            $items = $page->organizationanddocumentation()->toStructure();
            foreach ($items as $item):
                // Assuming only one file is selected, fetch the first one
                $file = $item->organizationanddocumentationurl()->toFiles()->first();
                if($file): // Check if the file exists
            ?>
            <a href="<?= $file->url() ?>" target="_blank"><?= $item->organizationanddocumentationtext()->kirbytextinline() ?></a>
            <?php
                endif;
            endforeach;
            ?>
        </div>
        <div class="financial-statements">
            <p><?php echo $aboutFinancial; ?></p>
            <?php
            // Example for organization and documentation
            $items = $page->financialstatements()->toStructure();
            foreach ($items as $item):
                // Assuming only one file is selected, fetch the first one
                $file = $item->financialstatementsurl()->toFiles()->first();
                if($file): // Check if the file exists
            ?>
            <a href="<?= $file->url() ?>" target="_blank"><?= $item->financialstatementstext()->kirbytextinline() ?></a>
            <?php
                endif;
            endforeach;
            ?>
        </div>
    </div>
</section>

<div class="separator separator-2"></div>

<article class="about">
    <div class="article-content">
        <h2 class="headline-text"><?= $page->title() ?></h2>
        <div class="article-text main-body-text"><?= $page->text()->toBlocks() ?></div>
    </div>
</article>

<?php snippet('footer') ?>