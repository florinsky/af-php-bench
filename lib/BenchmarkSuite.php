<?php

class BenchmarkSuite {
    protected $_tests=[];
    protected $_result=[];

    function __construct(array $tests) {
        $this->_tests=$tests;
    }

    function run() {
        $this->_result=[];
        $index=1;
        $test_number = count($this->_tests);
        foreach($this->_tests as $test) {
            $percent = round(($index-1) * 100 / $test_number);
            echo "$percent% ... ";
            $skipped=$test->skip ? '[skipped] ' : '';
            $test_name = '#'.$index.' '.$skipped.$test->getName();
            $this->_result[$test_name] = $test->run();
            $index++;
        }
        echo "100%";
        echo "\n";
    }

    function __toString() {
        $text = '';
        $labels = array_keys($this->_result);
        $longest = array_reduce($labels, function ($len, $item) {
            if(strlen($item)>$len) return strlen($item);
            else return $len;
        }, 0 );
        $space_len = $longest+10;
        foreach($this->_result as $name=>$time) {
            $time = str_pad(' '.number_format($time,2), 8, '.', STR_PAD_LEFT);
            $space = str_repeat('.', $space_len-strlen($name)+strlen($time));
            $text .= "$name: $space{$time}s\n";
        }
        return $text;
    }
}

