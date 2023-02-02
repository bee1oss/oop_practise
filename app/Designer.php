<?php

namespace App;

class Designer extends Worker
{
    use HasRest;

    public function work()
    {
        // TODO: Implement work() method.
        print_r("Designing");
    }
}