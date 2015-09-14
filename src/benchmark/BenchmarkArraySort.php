<?php

namespace AF\Benchmark;

class BenchmarkArraySort extends BenchmarkBase {
    protected function setUp() {
    }

    protected function down() {
    }

    protected function test() {
        $aa = microtime(true);
        $data = $this->data;
        $bb = microtime(true);

        $limit = 1 * MULT;
        for($i=0;$i<$limit;$i++) {
            $b=$data; asort($b);
            $b=$data; ksort($b);
            $b=$data; sort($b);
        }
    }

    function getName() {
        return 'Array Sort';
    }

    protected $data=[
  18849627 => 4594715,
  79549708 => 6886075,
  15104254 => 19364353,
  52939704 => 6073817,
  81053625 => 85048810,
  17073021 => 33445470,
  84675569 => 1148860,
  68597489 => 10758668,
  33849442 => 68328856,
  5794138 => 31172474,
];
}

