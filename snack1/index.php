<?php
$partite = [
    [
        "squadraCasa" => "Squadra Nera",
        "squadraOspite" => "Squadra Rossa",
        "puntiSquadraCasa" => 80,
        "puntiSquadraOspite" => 60
    ],
    [
        "squadraCasa" => "Squadra Blu",
        "squadraOspite" => "Squadra Gialla",
        "puntiSquadraCasa" => 70,
        "puntiSquadraOspite" => 55
    ],
    [
        "squadraCasa" => "Squadra Marrone",
        "squadraOspite" => "Squadra Fucsia",
        "puntiSquadraCasa" => 62,
        "puntiSquadraOspite" => 48
    ]
];
for ( $i = 0; $i < count($partite); $i++ ) {
    echo $partite[$i]["squadraCasa"] . " - " . $partite[$i]["squadraOspite"] . " | " . $partite[$i]["puntiSquadraCasa"] . "-" . $partite[$i]["puntiSquadraOspite"] . "<br>";
}
?>