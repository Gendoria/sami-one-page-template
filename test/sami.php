<?php

use Sami\Sami;
use Symfony\Component\Finder\Finder;
use Sami\Parser\Filter\TrueFilter;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->in(__DIR__.'/source')
;

$sami = new Sami($iterator, [
    'theme' => 'gendoria-one-page',
    'template_dirs' => [__DIR__.'/..'],
    'build_dir' => __DIR__.'/build',
    'cache_dir' => __DIR__.'/cache',
    'filter' => function() {
        return new TrueFilter();
    },
    'insert_todos' => true,
]);

return $sami;