<?php

$custompdffile = $block->custompdffile()->toFiles()->first();
$custompdfname = $block->custompdfname()->value();

echo '<a target="_blank" href="' . $custompdffile->url() . '" class="custom-button secondary-text center">' . $custompdfname . '</a>';
