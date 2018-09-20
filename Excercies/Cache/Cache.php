<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\Cache\Simple\FilesystemCache;

$cache = new FilesystemCache();
$cache->set('num.stats', 1000);
$stats = $cache->setMultiple(['num1' => 5000, 'num2' => 6000]);
echo $cache->get('num.stats');
$fileSystemAdapter = new Symfony\Component\Cache\Adapter\FilesystemAdapter();
$numProduct = $fileSystemAdapter->getItem('file.adpter.name');
$numProduct->set(2000);
$fileSystemAdapter->save($numProduct);

print_r($fileSystemAdapter->getItem('file.adpter.name'));
