<?php


#Attribute
class Cart{

}

class Checkout{
    #NotEmpty
    public ?string $item;
}

function validate(object $object)
{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    foreach($properties as $property){
        validateNotEmpty($property, $object);

    }
}

function validateNotEmpty(ReflectionProperty $property, object $object)
{
    $attributes = $property->getAttribute(NotEmpty::class);
    if(count($attributes) > 0){
        if(!$property->isInitialized($object))
            throw new Exception("Property $property->name is null");
        if($property->getValue($object) == null)
            throw new Exception("Property $property->name is null");
    }
}

$request = new Checkout();
$request->item = "1";
validate($request);

