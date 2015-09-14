<?php

namespace AF\Benchmark;

class BenchmarkCycles extends BenchmarkBase {
    protected function setUp() {
    }

    protected function down() {
    }

    protected function test() {
        $limit=10000000 * MULT;
        $j=0; for($i=0; $i<$limit; $i++) $j++;
        $j=0; while($j<$limit) { $j++; };
        $j=0; do { $j++; } while($j<$limit) ;
    }

    function getName() {
        return 'Cycles (if, while, do)';
    }
}


