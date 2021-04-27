<?php

interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintenance
{
    function isMaintenance(): bool;
}

interface Motor extends HasBrand
{
    function drive(): void;

    function getTire(): int;
}

class Xmax implements Motor, isMaintenance
{
    public function drive(): void
    {
        echo "Drive Xmax" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 2;
    }

    public function getBrand(): string
    {
        return "yamaha";
    }

    public function isMaintenance(): bool
    {
        return false;
    }
}