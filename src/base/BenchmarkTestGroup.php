<?php

namespace AF\Benchmark;

class BenchmarkTestGroup {
    protected $name;
    protected $tests=[];

    function __construct($name, $tests) {
        $this->name=$name;
        $this->tests=$tests;
    }

    function getName() {
        return $this->name;
    }

    function run($progress_bar) {
        $total_time = 0;
        $progress_bar->groupBegin($this->name);
        foreach($this->tests as $t) {
            $test_time = $t->run();
            $total_time += $test_time;
            $progress_bar->testCompleted($this->name, $t->getName(), $test_time);
        }
        $progress_bar->groupEnd($this->name, $total_time);
    }

    function getTestCount() {
        return count($this->tests);
    }
}
