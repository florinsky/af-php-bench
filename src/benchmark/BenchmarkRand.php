<?php

namespace AF\Benchmark;

class BenchmarkRand extends BenchmarkBase {
    protected function test() {
        $limit=1000000 * MULT;
        for($i=0; $i<$limit; $i++) {
            $a=rand(1,1000000000);
        }
    }

    function getName() {
        return 'Generate Random Numbers';
    }
}

