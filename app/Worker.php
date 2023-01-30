<?php
namespace App;
abstract class Worker
{
    private string $name;
    private int $age;
    private array $hours;
    private int $experience;

    /**
     * @param string $name
     * @param int $age
     * @param array $hours
     * @param int $experience
     */
    public function __construct(string $name, int $age, array $hours, int $experience)
    {
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
        $this->experience = $experience;
    }


    abstract public function work();

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return array
     */
    public function getHours(): array
    {
        return $this->hours;
    }

    /**
     * @param array $hours
     */
    public function setHours(array $hours): void
    {
        $this->hours = $hours;
    }

    /**
     * @return int
     */
    public function getExperience(): int
    {
        return $this->experience;
    }

    /**
     * @param int $experience
     */
    public function setExperience(int $experience): void
    {
        $this->experience = $experience;
    }




}