<?php

// Steg 1 - Ange lämpliga HTTP headers
// Läs mer här: https://stackoverflow.com/questions/10636611/how-does-access-control-allow-origin-header-work
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");

// Steg 2 - Skapa arrayer

$productsCollection = array();

$haloCE = array(
    "id" => 1,
    "title" => "Halo: Combat Evolved",
    "description" => "Description",
    "image" => "Image",
    "price" => "Price"
);

array_push($productsCollection, $haloCE);

$halo2 = array(
    "id" => 2,
    "title" => "Title",
    "description" => "Description",
    "image" => "Image",
    "price" => "Price"
);

array_push($productsCollection, $halo2);

$halo3 = array(
    "id" => 3,
    "title" => "Title",
    "description" => "Description",
    "image" => "Image",
    "price" => "Price"
);

array_push($productsCollection, $halo3);

$haloODST = array(
    "id" => 4,
    "title" => "Title",
    "description" => "Description",
    "image" => "Image",
    "price" => "Price"
);

array_push($productsCollection, $haloODST);

$haloReach = array(
    "id" => 5,
    "title" => "Title",
    "description" => "Description",
    "image" => "Image",
    "price" => "Price"
);

array_push($productsCollection, $haloReach);

$halowars = array(
    "id" => 6,
    "title" => "Title",
    "description" => "Description",
    "image" => "Image",
    "price" => "Price"
);

array_push($productsCollection, $halowars);

$halo4 = array(
    "id" => 7,
    "title" => "Title",
    "description" => "Description",
    "image" => "Image",
    "price" => "Price"
);

array_push($productsCollection, $halo4);

$halo5 = array(
    "id" => 8,
    "title" => "Title",
    "description" => "Description",
    "image" => "Image",
    "price" => "Price"
);

array_push($productsCollection, $halo5);

$halowars2 = array(
    "id" => 9,
    "title" => "Title",
    "description" => "Description",
    "image" => "Image",
    "price" => "Price"
);

array_push($productsCollection, $halowars2);

$haloMCC = array(
    "id" => 10,
    "title" => "Title",
    "description" => "Description",
    "image" => "Image",
    "price" => "Price"
);

array_push($productsCollection, $haloMCC);

$massEffect = array(
    "id" => 11,
    "title" => "Title",
    "description" => "Description",
    "image" => "Image",
    "price" => "Price"
);

array_push($productsCollection, $massEffect);

$massEffect2 = array(
    "id" => 12,
    "title" => "Title",
    "description" => "Description",
    "image" => "Image",
    "price" => "Price"
);

array_push($productsCollection, $massEffect2);

$massEffect3 = array(
    "id" => 13,
    "title" => "Title",
    "description" => "Description",
    "image" => "Image",
    "price" => "Price"
);

array_push($productsCollection, $massEffect3);

$massEffectLE = array(
    "id" => 14,
    "title" => "Title",
    "description" => "Description",
    "image" => "Image",
    "price" => "Price"
);

array_push($productsCollection, $massEffectLE);

$playerunknownsBattlegrounds = array(
    "id" => 15,
    "title" => "Title",
    "description" => "Description",
    "image" => "Image",
    "price" => "Price"
);

array_push($productsCollection, $playerunknownsBattlegrounds);

$rainbowsix = array(
    "id" => 16,
    "title" => "Title",
    "description" => "Description",
    "image" => "Image",
    "price" => "Price"
);

array_push($productsCollection, $rainbowsix);

$rainbowsixVegas = array(
    "id" => 17,
    "title" => "Title",
    "description" => "Description",
    "image" => "Image",
    "price" => "Price"
);

array_push($productsCollection, $rainbowsixVegas);

$rainbowsixVegas2 = array(
    "id" => 18,
    "title" => "Title",
    "description" => "Description",
    "image" => "Image",
    "price" => "Price"
);

array_push($productsCollection, $rainbowsixVegas2);

$rainbowsixSiege = array(
    "id" => 19,
    "title" => "Title",
    "description" => "Description",
    "image" => "Image",
    "price" => "Price"
);

array_push($productsCollection, $rainbowsixSiege);

$splintercell = array(
    "id" => 20,
    "title" => "Title",
    "description" => "Description",
    "image" => "Image",
    "price" => "Price"
);

array_push($productsCollection, $splintercell);





/*
$ = ["Kalle", "Mahmud", "Björn", "Jimmy", "Adam", "Bertil", "Cesar", "David", "Emil", "Dan"];
$ = ["Åsa", "Sara", "Maria", "Lotta", "Amanda", "Sigrun", "Annika", "Yasmin", "Ulla", "Astrid"];
$ = ["Öberg", "Al Hakim", "Ericson", "Björk", "Berglund", "Lundqvist", "Söderberg", "Hedlund", "Lundin", "Nyström"];

// Steg 3 - Skapa 10 namn och spara dessa i en ny array
$names = array();

for ($i = 0; $i < 10; $i++) {
    $gender = rand(0, 1);
    $firstName = $gender ? $firstNamesFemale[rand(0, 9)] : $firstNamesMale[rand(0, 9)];
    $lastName = $lastNames[rand(0, 9)];
    $name = array(
        "firstname" => $firstName,
        "lastname" => $lastName,
        "gender" => $gender ? "female" : "male",
        "age" => rand(1, 99),
        "email" => email($firstName, $lastName)
    );
    array_push($names, $name);
}

function email($firstName, $lastName)
{
    $firstName = mb_strtolower($firstName);
    $lastName = mb_strtolower($lastName);

    $search  = array('å', 'ä', 'ö', 'é', '-', ' ');
    $replace = array('a', 'a', 'o', 'e', '',  '');
    $firstName = str_replace($search, $replace, $firstName);
    $lastName = str_replace($search, $replace, $lastName);

    $firstName = mb_substr($firstName, 0, 2);
    $lastName = mb_substr($lastName, 0, 3);

    $email = "$firstName$lastName@example.com";

    return $email;
}
// print_r($names); die();
*/
// Steg 4 – Konvertera PHP-arrayen ($names) till JSON
$json = json_encode($productsCollection, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// json_encode — Returns the JSON representation of a value // http://php.net/manual/en/function.json-encode.php

// Steg 5 – Skicka JSON till klienten
echo $json;

// OBS Viktigt!
// Ingen extra data får skickas till klienten,
// t.ex. HTML-kod