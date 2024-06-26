<?php

class Categories

{
    private string $name;

    //FUNCTION CONSTRUCT
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    //FUNCTION GET
    public function getName(): string
    {
        return $this->name;
    }
}
