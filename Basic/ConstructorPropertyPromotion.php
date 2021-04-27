<?php

// class Order
// {
//     public string $id;
//     public string $sender;
//     public string $receiver;
//     public int $quantity;
//     public string $item;

//     public function __construct(string $id, string $sender, string $receiver, int $quantity, string $item)
//     {
//         $this->$id = $id;
//         $this->$sender = $sender;
//         $this->$receiver = $receiver;
//         $this->$quantity = $quantity;
//         $this->$item = $item;
//     }

//     public function getOrder()
//     {
//         return "oreder id {$this->id} dengan pengirim bernama {$this->sender} dan penerimanya bernama {$this->receiver}";
//     }
// }

// $detail_oreder = new Order(id: "1", sender: "Huda", receiver: "Zidan", quantity: 2, item: "buku");
// var_dump($detail_oreder);

class Order
{
    public function __construct(Public string $id, Public string $sender,Public string $receiver,Private int $quantity,Private string $item)
    {}

    public function getOrder()
    {
        return "oreder id {$this->id} dengan pengirim bernama {$this->sender} dan penerimanya bernama {$this->receiver}";
    }
}

$detail_oreder = new Order(id: "1", sender: "Huda", receiver: "Zidan", quantity: 2, item: "buku");
var_dump($detail_oreder);