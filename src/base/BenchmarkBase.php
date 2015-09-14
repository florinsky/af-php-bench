<?php

namespace AF\Benchmark;

abstract class BenchmarkBase {
    protected $_start_time=0;
    protected $_stop_time=0;
    public $skip=false;

    function __construct($options=[]) {
        if (isset($options['skip']) and $options['skip']==true) {
            $this->skip=true;
        }
    }

    function run() {
        $this->start();
        $this->skip or $this->test();
        $this->stop();
        return $this->_stop_time - $this->_start_time;
    }

    protected function start() {
        $this->_start_time=microtime(true);
    }

    abstract protected function setUp();
    abstract protected function test();
    abstract protected function down();
    abstract function getName();

    protected function stop() {
        $this->_stop_time=microtime(true);
    }
}


