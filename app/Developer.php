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
    print_r("Not find like this method");
    }

    public static function __callStatic(string $name, array $arguments)
    {
        // TODO: Implement __callStatic() method.
    print_r("Not find like this static method");
    }
    public function __get(string $name)
    {
        // TODO: Implement __get() method.
    print_r("Not find like this get method");
    }
    public function __set(string $name, $value): void
    {
        // TODO: Implement __set() method.
        print_r("Not find like this set method");
    }
    public function __isset(string $name): bool
    {
        // TODO: Implement __isset() method.
        return true;
    }
    public function __unset(string $name): void
    {
        // TODO: Implement __unset() method.
        print_r(1111111111);
    }
    public function __sleep(): array
    {
        // TODO: Implement __sleep() method.
        return [];
    }*/
}