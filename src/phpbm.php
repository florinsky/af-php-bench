<?php

define('MULT', 0.1);

require __DIR__ . '/../vendor/autoload.php';

$app = new AF\Benchmark\BenchmarkApp();
echo $app->getName() . "\n";
echo $app->getVersion() . "\n";
echo $app->getDescription() . "\n";
echo "\n";

$app->addSuite(new AF\Benchmark\BenchmarkSuite('CPU', [
    new AF\Benchmark\BenchmarkCycles(['skip'=>false]),
    new AF\Benchmark\BenchmarkRand(['skip'=>false]),
    new AF\Benchmark\BenchmarkFillArray(['skip'=>false]),
    new AF\Benchmark\BenchmarkStrings(['skip'=>false]),
]));

$app->addSuite(new AF\Benchmark\BenchmarkSuite('DISK', [
    new AF\Benchmark\BenchmarkCycles(['skip'=>false]),
    new AF\Benchmark\BenchmarkStrings(['skip'=>false]),
]));

$app->run();



