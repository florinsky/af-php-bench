<?php

namespace AF\Benchmark;

class BenchmarkProgressBar {
    protected $test_count=0;
    protected $total_time=0;
    protected $current_test_num=1;

    function setTestCount($cnt) {
        $this->test_count = $cnt;
    }

    function groupBegin($group_name) {
        $group = $this->formatGroup($group_name);
        echo "$group\n";
    }

    function groupEnd($group_name, $total_time) {
        $time = $this->formatTime($total_time);
        echo "Time: $time\n\n";
    }

    function testCompleted($group_name, $test_name, $time) {
        $group = $this->formatGroup($group_name);
        $time = $this->formatTime($time);
        $number = $this->formatNumber($this->current_test_num, $this->test_count);
        $name = $this->formatName($test_name);
        echo $this->formatText($number, $name, $group, $time);
        $this->current_test_num++;
    }

    function theEnd($time) {
        echo "TOTAL TIME: ".$this->formatTime($time) . "\n\n";
    }

    function formatNumber($current_number, $total_number) {
        $number_padding = 7;
        if ($total_number < 10) $number_padding=0;
        elseif ($total_number < 100) $number_padding=5;
        return str_pad($current_number . '/' . $total_number, $number_padding, ' ', STR_PAD_LEFT);
    }

    function formatGroup($group) {
        return '['.$group.']';
    }

    function formatTime($time) {
        return str_pad(' '.number_format($time,2), 8, '.', STR_PAD_LEFT);
    }

    function formatName($name) {
        return $name;
    }

    function formatText($number, $name, $group, $time) {
        $text = '';
        $space_len = 40;
        $name = "$number $name ";
        $space = str_repeat('.', $space_len-strlen($name)+strlen($time));
        $text .= "$name $space{$time}s\n";
        return $text;
    }

}

