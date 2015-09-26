<?php

namespace AF\Benchmark;

class BenchmarkApp {
    private $name="@app.name@";
    private $version='@app.version@';
    private $description="@app.description@";
    private $groups=[];

    function getName() {
        return $this->name;
    }

    function getVersion() {
        return $this->version;
    }

    function getDescription() {
        return $this->description;
    }

    function addTestGroup($name, $tests) {
        $this->groups[] = new BenchmarkTestGroup($name, $tests);
    }

    function run() {
        $time = 0;
        $pb = new BenchmarkProgressBar();
        $pb->setTestCount($this->getTestCount());
        foreach($this->groups as $g) {
            $time += $g->run($pb);
        }
        $pb->theEnd($time);
    }

    function getTestCount() {
        $cnt = 0;
        foreach($this->groups as $g) {
            $cnt += $g->getTestCount();
        }
        return $cnt;
    }

}

