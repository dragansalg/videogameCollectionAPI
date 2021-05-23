<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");

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

$json = json_encode($productsCollection, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

echo $json;