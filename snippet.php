<?php
$resource = (isset($resource)) ? $resource : '1';
$tv = (isset($tv)) ? $tv : '';
$page = $modx->getObject('modResource', $resource);
return $page->getTVValue($tv);
