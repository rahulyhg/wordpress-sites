<?php
defined('N2LIBRARY') or die();

N2Loader::import('libraries.renderable.layers.item.itemsFactory', 'smartslider');

$dir = dirname(__FILE__) . DIRECTORY_SEPARATOR;
foreach (N2Filesystem::folders($dir) AS $folder) {
    $file = $dir . $folder . DIRECTORY_SEPARATOR . $folder . '.php';
    if (N2Filesystem::fileexists($file)) {
        require_once($file);
    }
}
