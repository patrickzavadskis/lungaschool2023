<?php

$customlinkid = $block->customlinkid()->value();
$customlinkaddress = $block->customlinkaddress()->value();

echo '<a href="#' . $customlinkid . '" class="custom-link">' . $customlinkaddress . '</a>';
