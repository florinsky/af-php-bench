<?php

define('MULT', 10);

$bench_suite = new BenchmarkSuite([
    new BenchmarkCycles(['skip'=>false]),
    new BenchmarkRand(['skip'=>false]),
    new BenchmarkFillArray(['skip'=>false]),
    new BenchmarkStrings(['skip'=>false]),
]);

$bench_suite->run();
echo $bench_suite;



