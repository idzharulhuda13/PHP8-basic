<?php

class Category
{
    private string $name;
    private bool $available;

    public function getName(): string
    {
        return $this->name;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }

    public function setName(string $name): void
    {
        if(trim($name) != "")
        {
            $this->name = $name;
        }
    }

    public function setAvailable($available): void
    {
        $this->available = $available;
    }
}