<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\Finder\Finder;

$finder = new Finder();
$file = $finder->directories()->in(__DIR__)->depth('==0');

foreach ($finder as $file) {
    echo $file->getContents().PHP_EOL;

    //var_dump($file->getRealPath()).PHP_EOL;//"C:\wamp\www\symfony3\Request\Excercies\Finder\Finder.php"
    //var_dump($file->getRelativePath()).PHP_EOL;
    /*
     * string(62) "C:\wamp\www\symfony3\Request\Excercies\Finder\Folder1\test.txt"
       string(7) "Folder1"
     */
    //var_dump($file->getRelativePathname());
}

/*
 * Pour lister des fichiers ou des dossiers
 * depth ==> niveau de recherche.
 */
//var_dump($files);
