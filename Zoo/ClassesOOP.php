<?php

/**
 * 3.2
 * Write PHP classes for Zoo entities (using Abstract Classes, Classes, Objects, Interfaces and
Inheritance):
Animal, Fish, Insect, Cougar, Cat, Lion, Antilopa, Elephant, Shark, Dog, Wolf, Trout (It Can be
Abstract Class, Class or Interface). Entities should be different between each other. You shouldn't
copy-paste and use DRY principle.
 * Class Animal
 */
class Animal
{
    public $name;
    public $typeAnimal;
    public $habitat;
    public $cannibals;
    public $herbivorous;
    public $pet;
    public $height;
    public $weight;
    public $flock;

    public function getName()
    {
        return $this->name;
    }

    public function getTypeAnimal()
    {
        return $this->typeAnimal;
    }

    public function getHabitat()
    {
        return $this->habitat;
    }

    public function getCannibals()
    {
        return $this->cannibals;
    }

    public function getHerbivorous()
    {
        return $this->herbivorous;
    }

    public function getPet()
    {
        return $this->pet;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getFlock()
    {
        return $this->flock;
    }
}

class Fish extends Animal
{
    public function __construct($name, $typeAnimal, $habitat)
    {
        $this->name = $name;
        $this->typeAnimal = $typeAnimal;
        $this->habitat = $habitat;
    }

    public function getHabitat()
    {
        return $this->habitat;
    }
}
class Shark extends Fish
{
    public $name;
    public $cannibals;

    public function getCannibals()
    {
        return $this->cannibals;
    }
}
class Trout extends Fish
{
    public $name;
    public $herbivorous;

    public function getName()
    {
        return $this->name;
    }

    public function getHerbivorous()
    {
        return $this->herbivorous;
    }
}
class Cougar extends Animal
{
    public $name;
    public $typeAnimal;
    public $habitat;

    public function getName()
    {
        return $this->name;
    }

    public function getTypeAnimal()
    {
        return $this->typeAnimal;
    }

    public function getHabitat()
    {
        return $this->habitat;
    }

}
class Cat extends Animal
{
    public $name;
    public $pet;

    public function getName()
    {
        return $this->name;
    }

    public function getPet()
    {
        return $this->pet;
    }
}
class Lion extends Animal
{
    public $name;
    public $typeAnimal;
    public $habitat;
    public $cannibals;

    public function getName()
    {
        return $this->name;
    }

    public function getTypeAnimal()
    {
        return $this->typeAnimal;
    }

    public function getHabitat()
    {
        return $this->habitat;
    }

    public function getCannibals()
    {
        return $this->cannibals;
    }
}
class Antilopa extends Animal
{
    public $name;
    public $herbivorous;

    public function getName()
    {
        return $this->name;
    }

    public function getHerbivorous()
    {
        return $this->herbivorous;
    }
}

class Elephant extends Animal
{
    public $name;
    public $herbivorous;
    public $height;
    public $weight;

    public function getName()
    {
        return $this->name;
    }

    public function getHerbivorous()
    {
        return $this->herbivorous;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}

class Dog extends Animal
{
    public $name;
    public $typeAnimal;
    public $pet;

    public function getName()
    {
        return $this->name;
    }

    public function getPet()
    {
        return $this->pet;
    }

    public function getTypeAnimal()
    {
        return $this->typeAnimal;
    }
}
class Wolf extends Animal
{
    public $name;
    public $typeAnimal;
    public $flock;

    public function getName()
    {
        return $this->name;
    }

    public function getFlock()
    {
        return $this->flock;
    }

    public function getTypeAnimal()
    {
        return $this->typeAnimal;
    }
}