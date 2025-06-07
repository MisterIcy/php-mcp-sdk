<?php

declare(strict_types=1);

use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude('vendor')
    ->name('*.php');

return (new PhpCsFixer\Config())
    ->setParallelConfig(
        ParallelConfigFactory::detect()
    )
    ->setRules([
        '@PSR12' => true,
    ])
    ->setFinder($finder);