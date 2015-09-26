<?php

namespace AF\Benchmark;

class BenchmarkObjects extends BenchmarkBase {
    protected function setUp() {
    }

    protected function down() {
    }

    protected function test() {
        $limit=3000000 * MULT;
        for($i=0; $i<$limit; $i++) {
            $a = new A();
        }
    }

    function getName() {
        return 'Objects';
    }
}

class A {
    private $v1;
    private $v2;
    private $v3;
    private $v4;
    private $v5;

    function foo1() {return 'a';}
    function foo2() {return 'a';}
    function foo3() {return 'a';}
    function foo4() {return 'a';}
    function foo5() {return 'a';}
    function foo6() {return 'a';}

}



