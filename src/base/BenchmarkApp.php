<?php

namespace AF\Benchmark;

class BenchmarkApp {
    private $name="@app.name@";
    private $version='@app.version@';
    private $description="@app.description@";
    private $suites=[];

    function getName() {
        return $this->name;
    }

    function getVersion() {
        return $this->version;
    }

    function getDescription() {
        return $this->description;
    }

    function addSuite($suite) {
        $this->suites[] = $suite;
    }

    function run() {
        foreach($this->suites as $suite) {
            $suite->run();
            echo $suite;
        }
    }
}

