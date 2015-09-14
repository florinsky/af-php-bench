<?php

namespace AF\Benchmark;

class BenchmarkStrExImplode extends BenchmarkBase {
    protected function setUp() {
    }

    protected function down() {
    }

    protected function test() {
        $limit = 500*MULT;
        for($j=1; $j<$limit; $j++ ) $a = implode(' ', explode(' ', $this->book));
    }

    function getName() {
        return 'Explode/Implode';
    }

    protected $book=<<<TTT

The Project Gutenberg EBook of The Wonderful Wizard of Oz, by L. Frank Baum

    This eBook is for the use of anyone anywhere at no cost and with
    almost no restrictions whatsoever.  You may copy it, give it away or
    re-use it under the terms of the Project Gutenberg License included
    with this eBook or online at www.gutenberg.net

Project Gutenberg-tm eBooks are often created from several printed
editions, all of which are confirmed as Public Domain in the U.S.
unless a copyright notice is included.  Thus, we do not necessarily
keep eBooks in compliance with any particular paper edition.


Most people start at our Web site which has the main PG search facility:

     http://www.gutenberg.net

This Web site includes information about Project Gutenberg-tm,
including how to make donations to the Project Gutenberg Literary
Archive Foundation, how to help produce our new eBooks, and how to
subscribe to our email newsletter to hear about new eBooks.


TTT;
}

