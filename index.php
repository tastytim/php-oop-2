<?php 

include __DIR__ . "/product.php";
include __DIR__ . "/data.php";
include __DIR__ . "/clientPrime.php";
include __DIR__ . "/clients.php";


// CREATO NUOVO CLIENTE
$client = new ClientPrime(1, "Tim" , "Pavlenko" , "Reggio Emilia" , [], [], false , 0);
echo $client->__toString();

// CREATO PRODOTTI
$prodotti = new Product([]);
$prodotti->addNewProducts($listTv);
$prodotti->addNewProducts($listSmartphone);

echo "<br>Prodotti<br>";
echo $prodotti->__toString();


// IL CLIENTE AGGIUNGE NEL CARRELLO I PRODOTTI
$client->addProduct($prodotti->getProductsForId(0));
$client->addProduct($prodotti->getProductsForId(4));

echo "<br>Carello<br>";
echo $client->printCartProducts();


// RIMUOVE IL PRODOTTO 
$client->removeProduct(1);
echo "<br>Carello<br>";
echo $client->printCartProducts();





// AGGINGO PAYPAL E CARTA DI CREDITO
$client->insertPaymentDates("tastytimgm@gmail.com" , 3259249744872439574);
echo "<br>Dati di pagamento<br>";
// echo $client->getPaypal();

echo "CARTA DI CREDITO " . $client->getCreditCard() . "<br>";
echo "PAYPAL " . $client->getPaypal();




// INSERISCO I CLIENTS 
$clientsClass = new Clients();
$clientsClass->addNewClients($clientsClass->getClients() , $clientsData);
$clientsClass->printClients();

















?>