<?php

define('MULT', 10);

require __DIR__ . '/../vendor/autoload.php';

$app = new AF\Benchmark\BenchmarkApp();
echo $app->getName() . "\n";
echo "\n";

$app->addTestGroup('GENERAL', [
    new AF\Benchmark\BenchmarkCycles(['skip'=>false]),
    new AF\Benchmark\BenchmarkRand(['skip'=>false]),
    new AF\Benchmark\BenchmarkObjects(['skip'=>false]),
]);

$app->addTestGroup('STRINGS', [
    new AF\Benchmark\BenchmarkStrSimple(['skip'=>false]),
    new AF\Benchmark\BenchmarkStrExImplode(['skip'=>false]),
    new AF\Benchmark\BenchmarkLongStrings(['skip'=>false]),
    new AF\Benchmark\BenchmarkStrHash(['skip'=>false]),
]);

$app->addTestGroup('ARRAYS', [
    new AF\Benchmark\BenchmarkFillArray(['skip'=>false]),
    new AF\Benchmark\BenchmarkArraySortIntegers(['skip'=>false]),
    new AF\Benchmark\BenchmarkArraySortStrings(['skip'=>false]),
]);

$app->run();



