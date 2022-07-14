<?php

require_once "classes/Product.php";
require_once "classes/Food.php";
require_once "classes/Health.php";
require_once "classes/User.php";
require_once "classes/Cart.php";

$foodProducts = [];
$healthProducts = [];

$foodProduct01 = new Food(
                        "Wolf of Wilderness",
                        "Le crocchette proteiche Wolf of Wilderness offrono al tuo cane una nutrizione ispirata all'alimentazione del lupo nel suo habitat naturale. Si contraddistinguono, infatti, per la loro elevata percentuale di carne fresca, non contengono cereali e al loro posto sono arricchite con frutti di bosco, radici ed erbette aromatiche, ricchi di minerali e micronutrienti, per offrire al tuo cane un menù bilanciato e idoneo alla specie.",
                        12,
                        1000,
                        "Ricche di carne fresca e senza cereali poiché ispirate all'alimentazione del lupo."
                    );

$foodProduct02 = new Food(
                        "Purizon Crocchette senza cereali per cani",
                        "Alto apporto proteico e zero cereali, ideali per la crescita, ad un prezzo competitivo.",
                        9,
                        450,
                        "Con l'80% di carne, pesce e componenti di origine animale e il 20% di frutta e verdura."
                    );

$foodProduct03 = new Food(
                        "Almo Nature HFC",
                        "Alimento umido naturale per cani conservato nel suo brodo di cottura, per un gusto veramente ricco e per il mantenimento di tutti i suoi preziosi nutrienti, senza additivi, digeribili. Cruelty free.",
                        7,
                        280,
                        "I nostri alimenti naturali utilizzano solo carne o pesce in origine idonei al consumo umano che ora sono diventati alimento per gatti per sola scelta commerciale."
                    );

$foodProduct04 = new Food(
                        "Royal Canin Energy Snack per cani",
                        "Snack per cani adulti che svolgono un'intensa attività fisica, ideali come ausilio nell'educazione e come ricompensa, con acidi grassi che forniscono tutta l'energia necessaria durante l'esercizio.",
                        2,
                        50,
                        "Royal Canin Energy è un alimento complementare ad alto contenuto energetico, perfetto come alternativa ai tradizionali snack e ricompense per cani."
                    );

$foodProducts[] = $foodProduct01;
$foodProducts[] = $foodProduct02;
$foodProducts[] = $foodProduct03;
$foodProducts[] = $foodProduct04;

var_dump("Array dei prodotti Food");
var_dump($foodProducts);

var_dump("--------------------------------------------------------");


$healthProduct01 = new Health(
    "Seresto Collare per cani fino a 8 kg",
    "Collare antiparassitario per cani di taglia piccola fino a 8 kg di peso corporeo, contro pulci e zecche, rilascia principi attivi.",
    25
);

$healthProduct02 = new Health(
    "Advantix Spot-on per cani oltre 4 kg fino a 10 kg",
    "Advantix antiparassitario contro pulci, zecche, zanzare e pappataci. Per cani oltre 4 kg fino a 10 kg.",
    31
);

var_dump("Array dei prodotti Health");
$healthProducts[] = $healthProduct01;
$healthProducts[] = $healthProduct02;

var_dump($healthProducts);

var_dump("--------------------------------------------------------");

$user01 = new User("Mario Rossi", 2, 2023, true);
$user02 = new User("Giuseppe Verdi Rossi", 5, 2025, false);
$user03 = new User("Luigi Bianchi", 4, 2021, true);

var_dump("Esempi di utenze");

var_dump("Utente registrato e con carta valida");
var_dump($user01);
var_dump("Utente non registrato e con carta valida");
var_dump($user02);
var_dump("Utente registrato e con carta non valida");
var_dump($user03);


var_dump("--------------------------------------------------------");


var_dump("Esempio di carrello di utente registrato con aggiunta di 2 prodotti");
$cart01 = new Cart($user01);
$cart01->addProduct($foodProduct03);
$cart01->addProduct($healthProduct01);
var_dump($cart01);

var_dump("Esempio di carrello di utente non registrato con aggiunta di 3 prodotti");
$cart02 = new Cart($user02);
$cart02->addProduct($foodProduct02);
$cart02->addProduct($foodProduct01);
$cart02->addProduct($healthProduct02);
var_dump($cart02);

var_dump("Esempio di carrello di utente registrato con aggiunta di 1 prodotto");
$cart03 = new Cart($user03);
$cart03->addProduct($foodProduct04);
var_dump($cart03);


var_dump("--------------------------------------------------------");

var_dump("Esempio di prezzo carrello scontato o non scontato");
var_dump("Totale carrello di utente registrato e con carta valida");
var_dump($cart01->getTotal());
var_dump("Totale carrello di utente non registrato e con carta valida");
var_dump($cart02->getTotal());
var_dump("Totale carrello di utente registrato e con carta non valida");
var_dump($cart03->getTotal());


?>