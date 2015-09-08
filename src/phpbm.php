<?php

define('MULT', 1);
echo "@git-version@\n";
echo "@git-commit@\n";

require __DIR__ . '/../vendor/autoload.php';

/*spl_autoload_register(function ($class) {
    $name=$class.'.php';
    $path='../src/base/' . $name;
    if(file_exists($path)) {
        require($path);
    }
    $path='../src/benchmark/' . $name;
    if(file_exists($path)) {
        require($path);
    }
});*/


$bench_suite = new BenchmarkSuite([
    new BenchmarkCycles(['skip'=>false]),
    new BenchmarkRand(['skip'=>false]),
    new BenchmarkFillArray(['skip'=>false]),
    new BenchmarkStrings(['skip'=>false]),
]);

$bench_suite->run();
echo $bench_suite;



