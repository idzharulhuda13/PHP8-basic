<?php

//class
class Car
{
    //property
    var $type;
    var $paint;
    var $tire;

    //consturct
    function __construct(string $type, string $paint)
    {
        $this->type = $type;
        $this->paint = $paint;
    }
    
    //function
    // function detailEngine(string $type)
    // {
    //     echo "Type mobil anda saat ini adalah : {$type}";
    // }

    function detailEngine(?string $type)
    {
        echo is_null($type) ? "your car {$this->type}" : "your car {$this->type} and {$type}";
    }

    const Application = "OOP apda PHP";
}
