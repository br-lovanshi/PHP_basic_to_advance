<?php
class Student
{
    private $name;
    private $age;
    private $marks;

    public function __construct($name, $age, $marks)
    {
        $this->name = $name;
        $this->age = $age;
        $this->marks = $marks;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getMarks()
    {
        return $this->marks;
    }
}
