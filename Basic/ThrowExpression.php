<?php

// function paymentCheckout(?string $card)
// {
//     if($card == null)
//     {
//         throw new Exception("Silahkan masukan kartu yang anda gunakan, sebelum melaukan checkout pemabyaran.");
//     }

//     echo "Your card : $card" . PHP_EOL;
// }

function paymentCheckout(?string $card)
{
    echo $checkout = $card != null ? 'Your card : '.$card : throw new Exception("Error Processing Request");
}

return paymentCheckout('1233455');