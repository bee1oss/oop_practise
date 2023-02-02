<?php

namespace App;

class Developer extends Worker
{
    use HasRest;

    public function work()
    {
        // TODO: Implement work() method.
        print_r("Developing");
    }

    /*public function __toString(): string
    {
        // TODO: Implement __toString() method.

        return $this->getName();

    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        print_r(11111111111111);
    }

    public function __call(string $name, array $arguments)
    {
        // TODO: Implement __call() method.
    }

    public static function __callStatic(string $name, array $arguments)
    {
        // TODO: Implement __callStatic() method.
    }*/
}