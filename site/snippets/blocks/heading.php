<?php /** @var \Kirby\Cms\Block $block */ ?>
<<?= $level = $block->level()->or('h2') ?> id="<?= $block->customid() ?>" ><?= $block->text() ?></<?= $level ?>>