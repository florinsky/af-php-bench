<?php

namespace AF\Benchmark;

class BenchmarkStrSimple extends BenchmarkBase {
    protected function test() {
        $limit = 200000*MULT;
        $string = '1234567890 \'qwer\'tyuio\'p asd\'fghjk\'l zx\'cvbnm\' QAZ \'WSX E\'DC RFV TGB YHN UJM IK';
        for($j=1; $j<$limit; $j++ ) $a = strlen($string);
        for($j=1; $j<$limit; $j++ ) $a = addslashes($string);
        for($j=1; $j<$limit; $j++ ) $a = str_repeat($string, 1000);
        for($j=1; $j<$limit; $j++ ) $a = str_replace(['q','w','e','r'], [1,2,3,4], $string);
        for($j=1; $j<$limit; $j++ ) $a = strtoupper(strtolower($string));
        for($j=1; $j<$limit; $j++ ) $a = trim($string);
    }

    function getName() {
        return 'Simple Strings Functions';
    }
}

