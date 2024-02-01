<?php if (!empty($pagesArray)): ?>
    <ul class="navigation-list">
        <?php foreach ($pagesArray as $slug): 
            $page = page($slug);
            if ($page): ?>
                <li class="navigation-item secondary-text-link">
                    <a href="<?= $page->url() ?>"><?= $page->title()->html() ?></a>
                </li>
            <?php endif;
        endforeach ?>
    </ul>
<?php endif ?>