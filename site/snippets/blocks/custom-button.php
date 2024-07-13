<?php if ($block->custombuttonlink()->isNotEmpty() && $block->custombuttonname()->isNotEmpty()): ?>
    <a href="<?= $block->custombuttonlink() ?>" class="custom-button secondary-text-link">
        <?= $block->custombuttonname() ?>
    </a>
<?php endif; ?>