<?php

define('MULT', 0.1);

require __DIR__ . '/../vendor/autoload.php';

$app = new AF\Benchmark\BenchmarkApp();
echo $app->getName() . "\n";
echo $app->getVersion() . "\n";
echo $app->getDescription() . "\n";
echo "\n";

$app->addTestGroup('GENERAL', [
    new AF\Benchmark\BenchmarkCycles(['skip'=>false]),
    new AF\Benchmark\BenchmarkRand(['skip'=>false]),
]);

$app->addTestGroup('STRINGS', [
    new AF\Benchmark\BenchmarkStrSimple(['skip'=>false]),
    new AF\Benchmark\BenchmarkStrExImplode(['skip'=>false]),
    new AF\Benchmark\BenchmarkLongStrings(['skip'=>false]),
    new AF\Benchmark\BenchmarkStrHash(['skip'=>false]),
]);

$app->addTestGroup('ARRAYS', [
    new AF\Benchmark\BenchmarkFillArray(['skip'=>false]),
]);

$app->run();



